<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $comment = new Comment();
        $comment->title = $request->title;
        $comment->description = $request->description;
        $comment->product_id = $request->description;
        $comment->product_id = $request->id;
        $comment->user_id = Auth::user()->id;

        $comment->save();
        return redirect()->route('showProduct', [$request->id]);
    }

}
