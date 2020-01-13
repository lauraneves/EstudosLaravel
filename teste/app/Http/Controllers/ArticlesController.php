<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;

class ArticlesController extends Controller
{
    public function index ()    //shows a list
    {
        if (request('tag'))
        {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }

        return view('articles.index', ['articles'=> $articles]);
    }
    
    public function show (Article $article)  //shows a single one 
    {
        // $article = Article::findOrFail($id);     To use this line you need to modify the parameter to "($id)"

        return view('articles.show', ['article'=>$article]);
    }

    public function create ()   //shows a view to create a new one
    {
        return view('articles.create', [
            'tags' => Tag::all()
        ]);
    } 

    public function store ()    //persist the new one
    {
        $this->validateArticle();
        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 1; //auth()->id();
        $article->save();

        $article->tags()->attach(request('tags'));
      
        return redirect(route('articles.index'));
    }

    public function edit (Article $article)     //shows a view to edit an existing one
    {   
        return view('articles.edit', compact('article'));     // ['article' => $article] is the same for: compact('article')
    }

    public function update (Article $article)   //persist the edit
    {
        $article->update($this->validateArticle());

        return redirect($article->path());
    }

    public function destroy ()  //delete 
    {

    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
