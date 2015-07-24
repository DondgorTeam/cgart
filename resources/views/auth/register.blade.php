@extends('layouts.master')

@section('content')
<div class="container">
    <div id="signup-form">
        <h1 class="">Artists</h1>
        <form method="POST" action="/auth/register">
            <div class="panel">
                <div class="panel-body">
                    <fieldset>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="name" class="control-label">Нэр:</label>
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}" >
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">Имэйл:</label>
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Нууц үг:</label>
                            <input class="form-control" type="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Нууц үгийг давтах:</label>
                            <input class="form-control" type="password" name="password_confirmation">
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary">Бүртгүүлэх</button>
                        </div>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection