@extends('app')

@section('content')
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->created_at }}</p>
    <article>
        {{ $article->content }}
    </article>

    @unless($article->tags->isEmpty())
        <h5>Ангилал:</h5>
        <ul>
            @foreach($article->tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>
    @endunless
@stop