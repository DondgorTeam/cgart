@extends('app')

@section('content')

    <h1>Зураг оруулах</h1>
    <hr/>

    {!! Form::open(['route' => 'photos.store', 'files' => true]) !!}
        {{--{{ Form::hidden('user_id', Auth::user()->id) }}--}}

        <div class="form-group">
            {!! Form::label('title','Гарчиг:') !!}
            {!! Form::text('title',null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('fileName','Зураг оруулах:') !!}
            {!! Form::file('fileName', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Upload Photo', ['class'=>'btn btn-primary ']) !!}
        </div>

    {!! Form::close() !!}

@stop