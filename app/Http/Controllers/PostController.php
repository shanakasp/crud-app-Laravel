<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request) {
        $incommingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $incomingFields['user_id'] = auth()->id();

        $post = Post::create($incommingFields);

        return response()->json([
            'message' => 'Post created successfully',
            'post' => $post
        ]);

    }
}
