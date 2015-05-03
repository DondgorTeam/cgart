@extends('app')

@section('content')

    <h1>Засварлах: {{ $article->title }}</h1>

    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
        @include('articles.form', ['submitButtonText' => 'Нийтлэлд өөрчлөлт оруулах'])
    {!! Form::close() !!}

    {{--{!! Form::model($article, ['method'=>'DELETE', 'action' => ['ArticlesController@destroy', $article->id]]) !!}--}}
        {{--<div class="form-group">--}}
            {{--{!! Form::submit('Устгах', ['class'=>'btn btn-danger ']) !!}--}}
        {{--</div>--}}
    {{--{!! Form::close() !!}--}}
    {!! delete_form(['ArticlesController@destroy', $article->id]) !!}

    @include('errors.list')


@stop