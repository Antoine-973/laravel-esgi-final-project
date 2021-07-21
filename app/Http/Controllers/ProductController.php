<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Comment;
use App\Models\Payment;
use Cocur\Slugify\Slugify;

class ProductController extends Controller
{

    public function index()
    {

    }

    public function listProducts()
    {
        $products = Product::all();
        return view('listProducts', ['products'=>$products]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $comments = Comment::where('product_id', $product->id)->orderBy('created_at', 'desc')->get();
        return view('showProduct', ['product' => $product, 'comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('user.create', ['categories'=>$categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Product::find($id)->category->all();
        return view('user.edit', ['categories'=>$categories, 'product' => $product]);
    }

    public function store(Request $request)
    {
        $slugify = new Slugify();
        
        $product = new Product();
        $product->title = $request->input('title');
        $product->subtitle = $request->input('subtitle');
        $product->slug = $slugify->slugify($product->title);
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->category_id;
        $product->user_id = Auth::user()->id;
        
        $image = $request->file('image');
        $imageFullName = $request->file('image')->getClientOriginalName();
        $imageName = pathinfo($imageFullName, PATHINFO_FILENAME);
        $extension = $image->getClientOriginalExtension();
        $file = time().'_'.$imageName.'.'.$extension;
        $image->storeAs('public/products/'.Auth::user()->id,$file);
        $product->image = $file;
        
        $product->save();
        return redirect()->route('dashboard');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slugify = new Slugify();
        $product = Product::find($id);

        $product->title = $request->input('title');
        $product->subtitle = $request->input('subtitle');
        $product->slug = $slugify->slugify($product->title);
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->category_id;
        $product->user_id = Auth::user()->id;
        
        if($request->file('image')) {
            $image = $request->file('image');
            $imageFullName = $request->file('image')->getClientOriginalName();
            $imageName = pathinfo($imageFullName, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $file = time().'_'.$imageName.'.'.$extension;
            $image->storeAs('public/products/'.Auth::user()->id,$file);
            $product->image = $file;
        }
        
        $product->save();
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('dashboard');
    }
}
