<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mockery\Matcher\Not;
use Stripe\Customer;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class StripeController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $user = auth()->user();
        $productItems = [];
        $totalprice = 0;

        //generating an order number
        $lastOrderNo = Order::orderby("id",'desc')->first()->order_no;
        $lastincrement =substr($lastOrderNo, -3);
        $nowOrderNum = 'TXT'.date('Ymd').str_pad($lastincrement + 1, 3, 0, STR_PAD_LEFT);

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

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [$productItems],
            'mode'        => 'payment',
            'customer_email' => $user->email,
            'success_url' => route('success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url'  => route('checkout', [], true),
        ]);


        $order = new Order();
        $order->user_id = $user->id;
        $order->status = "unpaid";
        $order->total_price = $totalprice;
        $order->session_id = $session->id;
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


        return redirect()->away($session->url);
    }

    public function sendOrderConfirmationMail($order)
    {
        Mail::to($order->user->email)->send(new OrderMail($order));
    }

    public function success(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $sessionId = $request->get('session_id');
        $session = \Stripe\Checkout\Session::retrieve($sessionId);
        if (!$session) {
            throw new NotFoundHttpException;
        }

        $order = Order::where('session_id', $session->id)->where('status', 'unpaid')->first();
        if (!$order) {
            return redirect()->route('menu')->with('success', 'please check your dashboard to view your order');
        }
        $order->status = 'pending';
        $order->save();

        $orderItem = OrderItem::all()->where('order_id', $order->id);

        $this->sendOrderConfirmationMail($order);

        return view('checkout-success', compact('order', 'orderItem'))->with('success', 'Your payment has been successful');
    }
}
