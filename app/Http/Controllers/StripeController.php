<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        //$user         = auth()->user();
        $productItems = [];
 
        foreach (session('cart') as $id => $details) {
 
            $product_name = $details['product_name'];
            $total = $details['price'];
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
        }    
 
        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [$productItems],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);
 
        return redirect()->away($session->url); 
    }

    
 
    public function success()
    {
        return "Thank you for you order. You have just completed your payment. ";
    }

}
