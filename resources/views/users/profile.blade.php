@extends('layouts.master') @section('content')
<div class="container">
    <div class="profile">
        <div class="profile_avatar">
            <img src="http://s.gravatar.com/avatar/dadf7c8caa83d70a97fbab018ff76971?s=100" alt="{{ $user->name }}">
        </div>
        <div class="utility-flex">
            <h1 class="profile_name">{{ $user->name }}</h1> 
        </div>
    </div>
    <div class="profile_nav">
         @if ($currentUser->id == $user->id)
            <a href="/user/eit" id="editProfile" class="btn" data-toggle="modal" data-target="#myModal">Засварлах</a>
            <a href="/pictures/create" id="editProfile" class="btn">Зураг нэмэх</a> 
         @endif
    </div>
</div>
<br>

<div class="container">
    <section  id="images">
    <header>
        
    </header>
    <div class="wrap clear-fix">
        @foreach($pictures as $picture)
        <figure class="row figure">
            
            <a href="{{ url('artwork', $picture->id) }}">
                <img src="images/{{ $picture->path_thumb }}" alt="#" width="100%">
            </a>
            <figcaption>
                <a class="artist" href="{{ App\User::find($picture->user_id)->name }}" title="#">{{ App\User::find($picture->user_id)->name }}</a>
                <a class="vote" href="#"><i class="material-icons md-18">grade</i></a>
            </figcaption>
            <!-- <div class="figure_title"><a href="{{ url('artwork', $picture->id) }}">{{ $picture->name }}</a></div> -->
        </figure>
        @endforeach
    </div>
    </section>
</div>

<script>
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
})

</script>
@endsection