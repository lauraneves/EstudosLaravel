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

    } 

    public function store ()    //persist the new one
    {

    }

    public function edit ()     //shows a view to edit an existing one
    {

    }

    public function update ()   //persist the edit
    {

    }

    public function destroy ()  //delete 
    {

    }
}
