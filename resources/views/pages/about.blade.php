@extends('home')

@section('content')

@if($name == 'Одхүү')
    <h1>Hi Odhuu</h1>
@else
    <h1>else</h1>
@endif

<h3>People I like</h3>
<ul>
    @foreach($people as $porsen)
        <li>{{ $porsen }}</li>
    @endforeach
</ul>
<h1>About me: {!! $name !!}</h1>
<p>About me About me About me About me About me </p>

@stop

@section('footer')
@stop