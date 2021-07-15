<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        \Stripe\Stripe::setApiKey('sk_test_51JDXPIE3tpO6aovc99Aoo26jisDwF8tFgdcDrdm1SPq7uj2hWDJq8bZEfpVEnrB6HFOYsFxNHX8PUOSyr7qFIZdx00M3sOdasx');		
		$amount = 100;
		$amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'INR',
			'description' => 'Payment From Pokebay',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;
        return view('user.payment',compact('intent'));
    }

    public function afterPayment()
    {
        $cart = \Cart::session(Auth::user()->id);
        foreach($cart->getContent() as $cartProduct) {
            $cart->remove($cartProduct->id);
        }
        return view('user.success');
    }
}
