<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Comment;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('welcome', ['categories'=>$categories]);
    }

    public function listProducts()
    {
        $products = Product::all();
        $users = User::all();
        return view('listProducts', ['products'=>$products, 'users'=>$users]);
    }

    public function showProduct($id)
    {
        $product = Product::find($id);
        $comments = Comment::where('product_id', $id)->orderBy('created_at')->get();
        return view('showProduct', ['product' => $product, 'comments' => $comments]);
    }
}
