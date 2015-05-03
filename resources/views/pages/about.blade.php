@extends('app')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h2 class="jumbotron__header">Миний тухай</h2>
            <p class="jumbotron__body">
                If Laravel includes Twitter Bootstrap out of the box, then it makes sense for us to take at least a few moments to review the basic workflow.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="col-md-4">
            @if($name == 'Одхүү')
                <h1>Hi Odhuu</h1>
            @else
                <h1>else</h1>
            @endif
        </div>
        <div class="col-md-4">
            <h3>People I like</h3>
            <ul>
                @foreach($people as $porsen)
                    <li>{{ $porsen }}</li>
                @endforeach
            </ul>
            <h1>About me: {!! $name !!}</h1>
            <p>About me About me About me About me About me </p>
        </div>
        <div class="col-md-4"></div>
    </div>
@stop
@section('footer')
@stop