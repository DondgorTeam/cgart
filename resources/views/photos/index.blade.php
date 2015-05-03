@extends('app')

@section('content')
    <h1>Фото зураг</h1>
    {{--@foreach($articles as $article)--}}
        <article>


            {{--<h2><a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a></h2>--}}
            {{--<p class="bg">{{ $article->created_at }}</p>--}}
            {{--<div class="body">{{ $article->content }}</div>--}}
        </article>
    {{--@endforeach--}}
    <table class="table">
        <tbody>
            @foreach($photos as $photo)
                <tr>
                    <td>{{ $photo->id }}</td>
                    <td>$photo->imageName</td>
                    <td>{!! Html::image($photo->thumbnailName, $photo->title) !!}</td>
                    <td>{{ $photo->title }}</td>
                    <td>
                        {{--<a href="{{ route('photos.edit', $photo->id) }}" class="btn btn-primary btn-xs"> Resize </a>--}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop