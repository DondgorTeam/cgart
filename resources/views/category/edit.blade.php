@extends('layouts.admin') @section('content')
<div class="container">
    <div id="signup-form">
        <h1>Ангилал засах</h1>

        <form method="POST" action="{{ action('CategoryController@update', ['id' => $category->id]) }}" >
            <input type="hidden" name="_method" value="PUT">
            <fieldset>
                {!! csrf_field() !!}
                <div class="">
                    <label for="name" class="control-label">Нэр:</label>
                    <input class="form-control" type="text" name="name" value="{{ $category->name }}">
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary btn-join">Засварлах</button>
                </div>
            </fieldset>
        </form>
        
        <form action="{{ url('categories/'.$category->id) }}" method="POST">
            {!! csrf_field() !!}
            {!! method_field('DELETE') !!}
            <button type="submit" class="btn">Устгах</button>
        </form>
    </div>
</div>
@endsection