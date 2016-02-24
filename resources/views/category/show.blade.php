@extends('layouts.master')
@section('content')
<div class="banner">
    <div class="container">
        <center><h4>{{ $category->name }}<h4></center>
    </div>
</div>
<br>
<!--@can('update',$category)
    <a href="#">update</a>
@endcan-->
<div class="container">
    <h2 class="banner-profile_name"></h2>
</div>
@endsection