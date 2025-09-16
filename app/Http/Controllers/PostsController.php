<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function createPost(Request $request) {
        $incomingField = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]); //memastikan semua kolom terisi

        $incomingField['title'] = strip_tags($incomingField['title']); 
        $incomingField['body'] = strip_tags($incomingField['body']);
        //agar data tidak diambil
        Post::create($incomingField); //untuk post data
        return redirect('/posts');

    }
}
