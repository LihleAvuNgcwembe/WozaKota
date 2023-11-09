<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{

    public function sendOrderConfirmationMail($order)
    {
        Mail::to($order->user->email)->send(new OrderMail($order));
    }

    public function payUponCollection(Request $request)
    {
        $user = auth()->user();
        $productItems = [];
        $totalprice = 0;

        //generating an order number
        $lastOrderNo = Order::orderby("id", 'desc')->first()->order_no;
        $lastincrement = substr($lastOrderNo, -3);
        $nowOrderNum = 'TXT' . date('Ymd') . str_pad($lastincrement + 1, 3, 0, STR_PAD_LEFT);

        foreach (session('cart') as $id => $details) {

            $product_name = $details['product_name'];
            $total = ceil($details['price']);
            $quantity = $details['quantity'];


            $two0 = "00";
            $unit_amount = "$total$two0";

            $productItems[] = [
                'price_data' => [
                    'product_data' => [
                        'name' => $product_name,
                    ],
                    'currency'     => 'ZAR',
                    'unit_amount'  => $unit_amount,
                ],
                'quantity' => $quantity
            ];

            $totalprice += $details['price'] * $details['quantity'];
        }

        $order = new Order();
        $order->user_id = $user->id;
        $order->status = "unpaid";
        $order->total_price = $totalprice;
        $order->session_id = Str::random(20);
        $order->order_no = $nowOrderNum;
        $order->save();

        foreach (session('cart') as $id => $details) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $id;
            $orderItem->quantity = $details['quantity'];
            $orderItem->unit_price = $details['price'];
            $orderItem->save();
        }

     // $this->sendOrderConfirmationMail($order);

        return view('checkout-unpaid', compact('order'));
    }
}
