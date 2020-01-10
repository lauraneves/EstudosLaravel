<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function show ($id) 
    {
        $article = Article::find($id);

        return view('articles.show', ['article'=>$article]);
    }

    public function index ()
    {
        $article = Article::latest()->get();

        return view('articles.index', ['articles'=> $article]);
    }
}
