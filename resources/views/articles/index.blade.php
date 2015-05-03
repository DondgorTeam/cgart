@extends('app')

@section('content')
    <h1>Мэдээ</h1>
    {{--@foreach(array_chunk($articles->all(), 3) as $row)--}}
        {{--<div class="row">--}}
            @foreach($articles as $article)
                {{--<div class="col-md-8">--}}
                    <article>
                        <h3><a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a></h3>
                        <span>Бичсэн: {!! $article->user->name !!}</span><br>
                        <span class="bg">Хугацаа: {{ $article->created_at }}</span><br>
                        <div class="body">{{ $article->content }}</div>
                    </article>
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                {{--</div>--}}
            @endforeach
        {{--</div>--}}
    {{--@endforeach--}}
    <div>
    {{--{!! str_replace('/?', '?', $articles->render()) !!}--}}
    </div>
@stop