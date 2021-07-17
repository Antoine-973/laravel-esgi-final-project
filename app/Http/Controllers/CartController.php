<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;

class CartController extends Controller
{
    public function index()
    {
        return view('user.cart');
    }

    public function store($id)
    {
        $product = Product::find($id);

        $add = \Cart::session(Auth::user()->id)->add([
            'id'=> $product->id,
            'name'=> $product->title,
            'price'=> $product->price,
            'quantity'=> 1,
            'associatedModel'=> $product
        ]);

        return redirect()->route('cart');
    }

    public function destroy($id)
    {
        \Cart::session(Auth::user()->id)->remove($id);
        return redirect()->route('cart');
    }

    public function empty()
    {
        $cart = \Cart::session(Auth::user()->id);
        foreach($cart->getContent() as $cartProduct) {
            $cart->remove($cartProduct->id);
        }
        return redirect()->route('cart');
    }

}
