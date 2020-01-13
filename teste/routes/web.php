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

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/about', function () {
    $articles = App\Article::latest()->get();
    //  take(3)->latest()->get(); to see the 3 most recent articles
    
    return view('about', [
        'articles' => $articles
    ]);
});

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::get('/articles/create', 'ArticlesController@create');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');


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