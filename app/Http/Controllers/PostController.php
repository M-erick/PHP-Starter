<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();


        return redirect()->route('posts.index');
    }

}
