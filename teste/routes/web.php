<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/about', function () {
    return view('about');
});


/* 
Route::get('/posts/{post}', function ($post) {
    $posts=[
        'my-first-post' => 'Hi, this is my first post ever!',
        'my-second-post' => 'Hello, this is my second blog post.'
    ];
    if(!array_key_exists($post, $posts)) {
        abort(404, 'Sory, that post do not exist yet.');
    }
    return view('post', [
        'post' => $posts[$post]
    ]);
});
*/
Route::get('/posts/{post}', 'PostsController@show');