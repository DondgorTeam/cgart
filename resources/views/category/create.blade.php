@extends('layouts.admin')
@section('content')
<div class="container">
    <div id="signup-form">
        <h1>Ангилал нэмэх</h1>

        <form method="POST" action="{{ action('CategoryController@store') }}">
            <div class="panel">
                <div class="panel-body">
                    <fieldset>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="name" class="control-label">Нэр:</label>
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}" >
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary btn-join">Үүсгэх</button>
                        </div>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection