<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Managers\PaymentManager;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function __construct(PaymentManager $paymentManager)
    {
        $this->paymentManager = $paymentManager;
    }
    public function index()
    {
        \Stripe\Stripe::setApiKey('sk_test_51JDXPIE3tpO6aovc99Aoo26jisDwF8tFgdcDrdm1SPq7uj2hWDJq8bZEfpVEnrB6HFOYsFxNHX8PUOSyr7qFIZdx00M3sOdasx');
        $cart = \Cart::session(Auth::user()->id);
        $subtotal = $cart->getSubtotal();
        $taxe = $cart->getTotal() / 7;
        $roundedTaxe = round($taxe, 2);
        $total = $cart->getTotal() + $roundedTaxe;
        try{
            $payment_intent = \Stripe\PaymentIntent::create([
                'description' => 'Stripe Test Payment',
                'amount' => $total * 100,
                'currency' => 'EUR',
                'description' => 'Paiement via Pokebay',
                'payment_method_types' => ['card'],
            ]);
            $intent = $payment_intent->client_secret;

            foreach(\Cart::getContent() as $item) {
                $itemPrice = $item->model->price;
                $seller_part = $this->paymentManager->getSellerPart($itemPrice);
                $pokebay_part = $this->paymentManager->getPokebayPart($itemPrice);
                Payment::create([
                    'product_id'=> $item->model->id,
                    'amount'=> $total,
                    'seller_part'=> $seller_part,
                    'pokebay_part'=>$pokebay_part,
                    'email'=>Auth::user()->email,
                ]);
            }
            return view('user.payment',compact('intent'), ['subtotal'=>$subtotal, 'roundedTaxe'=>$roundedTaxe, 'total'=>$total]);
        } catch(\Stripe\Exception\CardErrorException $error) {
            throw $error;
        }
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
