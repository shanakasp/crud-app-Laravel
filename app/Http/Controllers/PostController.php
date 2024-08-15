<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $incomingFields['user_id'] = auth()->id();

        $post = Post::create($incomingFields);

        return response()->json([
            'message' => 'Post created successfully',
            'post' => $post
        ]);

    }
}
