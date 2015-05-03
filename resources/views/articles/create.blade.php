@extends('app')

@section('content')
    <h1>Шинээр нийтлэл оруулах</h1>
    <hr/>

    {!! Form::model($article = new \App\Article,['url' => 'articles']) !!}
        @include('articles.form', ['submitButtonText' => 'Нийтлэл үүсгэх'])
    {!! Form::close() !!}

    @include('errors.list')
@stop