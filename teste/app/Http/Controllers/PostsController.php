<?php

namespace App\Http\Controllers;
use App\Post;

class PostsController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();        
        
        return view('post', [
            'post' => $post
        ]);
    }
}
            
            
/*     
       FIRST WAY TO MAKE

    $posts = [
        'my-first-post' => 'Hi, this is my first post ever!',
        'my-second-post' => 'Hello, this is my second blog post.'
    ];

    if (!array_key_exists($post, $posts)) {
        abort(404, 'Sory, that post do not exist yet.');
    }


        SECOND WAY

    $post = \DB::table('posts')->where('slug', $slug)->first();

    if (!$post) {
        abort(404);
    } 

*/