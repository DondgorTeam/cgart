@extends('layouts.admin') @section('content')
<div class="banner">
    <div class="container">
        <center>
            <h4>АНГИЛАЛ<h4></center>
    </div>
</div>
<br>
<div class="container">
   @foreach(array_chunk($categories->all(), 4) as $row)
   
        @foreach($row as $category)
            <div class="grid" id="category">
                <a href="">
                    <figure>
                        <figcaption>{{ $category->name }}</figcaption>
                    </figure>
                </a>
            </div>
        @endforeach
    @endforeach
</div>

<div class="container">
    <h2 class="banner-profile_name"></h2>
</div>
@endsection