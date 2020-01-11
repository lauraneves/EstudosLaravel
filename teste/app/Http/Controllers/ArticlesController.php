<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function show ($id)  //shows a single one 
    {
        $article = Article::find($id);

        return view('articles.show', ['article'=>$article]);
    }

    public function index ()    //shows a list
    {
        $article = Article::latest()->get();

        return view('articles.index', ['articles'=> $article]);
    }
    
    public function create ()   //shows a view to create a new one
    {
        return view('articles.create');
    } 

    public function store ()    //persist the new one
    {
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);


        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles');
    }

    public function edit ($id)     //shows a view to edit an existing one
    {   
        $article = Article::find($id);

        return view('articles.edit', compact('article'));     // ['article' => $article] is the same for: compact('article')
    }

    public function update ($id)   //persist the edit
    {
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);


        $article = Article::find($id);
        
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles/' . $article->id);
    }

    public function destroy ()  //delete 
    {

    }
}
