<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/home', function (){
    return view('home');
});

route::get('/Tampilan', function (){
    return view('Tampilan');
});

route::get('/posts', function (){
    return view('posts');
});

Route::post('/create-post', [PostsController::class, 'createPost']);
