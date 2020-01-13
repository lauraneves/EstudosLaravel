@extends('layout');

@section('content')
    <div id='wrapper'>
        <div id="page" class="container">
            @forelse ($articles as $article)
                <div class="content" >
                    <h3>
                        <a href="{{ $article->path() }}">     <!-- href="/articles/{{ $article->id }}" -->
                            {{$article->title}} 
                        </a>
                    </h3>
                    <p>{{$article->excerpt}}</p>
                </div>    
                @empty
                    <p>No relevant articles yet.</p>
            @endforelse
        </div>
    </div>
@endsection