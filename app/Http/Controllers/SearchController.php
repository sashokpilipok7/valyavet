<?php

namespace App\Http\Controllers;
use \App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search (Request $request) {
        $validated = $request->validate([
            'q' => 'required|min:3'
        ]);
        $posts = Post::where('title', 'like', '%'.$validated['q'].'%')->get();
        return view('search', compact('posts'));
    }
}
