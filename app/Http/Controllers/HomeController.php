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

    public function showType($id)
    {
        $category = Category::find($id);
        $productByType = Product::where('category_id', $id)->orderBy('created_at')->get();
        return view('showType', ['productByType' => $productByType, 'category' => $category]);
    }
}
