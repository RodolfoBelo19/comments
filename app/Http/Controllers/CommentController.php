<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Events\CommentEvent;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        return view('comments');
    }
    public function fetchComments()
    {
        $comments = Comment::all();
        return response()->json($comments);
    }
    public function store(Request $request)
    {
        $comment = Comment::create($request->all());
        // event(new CommentEvent($comment));
        return $comment;
    }
}
