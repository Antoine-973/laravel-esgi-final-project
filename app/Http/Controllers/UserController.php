<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Cocur\Slugify\Slugify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slugify = new Slugify();
        
        $product = new Product();
        $product->title = $request->input('title');
        $product->subtitle = $request->input('subtitle');
        $product->slug = $slugify->slugify($product->title);
        $product->description = $request->input('description');
        $product->category_id = $request->category_id;
        $product->user_id = Auth::user()->id;
        
        //$image = $request->file('image');
        //$imageFullName = $request->file('image')->getClientOriginalName();
        //$imageName = pathinfo($imageFullName, PATHINFO_FILENAME);
        //$extension = $image->getClientOriginalExtension();
        //$file = time().'_'.$imageName.'.'.$extension;
        //$image->storeAs('public/products/'.Auth::user()->id,$file);
        //$product->image = $file;
        $product->image = 0;
        
        $product->save();
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
