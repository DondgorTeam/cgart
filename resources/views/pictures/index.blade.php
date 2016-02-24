@extends('layouts.master') @section('content')
<div class="banner">
    <div class="container">
        <center>
            <h2>Бүтээлүүд</h2>
        </center>
    </div>
</div>
<br>
<div class="container home">
    @foreach($pictures as $picture)
        <figure class="grid figure">
            <a class="artist" href="/user/2">{{ App\User::find($picture->user_id)->name }}</a>
            <a href="{{ url('artwork', $picture->id) }}">
                <img src="images/{{ $picture->path_thumb }}" alt="#" width="100%">
            </a>
            <figcaption><a href="{{ url('artwork', $picture->id) }}">{{ $picture->name }}</a></figcaption>
        </figure>
    @endforeach
</div>

<div class="container">
    <h2 class="banner-profile_name"></h2>
</div>
@endsection