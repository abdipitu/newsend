<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'caption' => 'required',
            'author' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'caption' => $request->caption,
            'author' => $request->author
        ]);

        return redirect()->route('index');
    }
}
