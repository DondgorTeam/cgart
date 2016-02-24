@extends('layouts.app') @section('content')
<div class="container">
    <div class="register">
        <div class="register-container">
            <h1>CGArt уран бүтээлчидтэй нэгдэх</h1>
            <br>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {!! csrf_field() !!}

                <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" placeholder="Нэр" name="name" value="{{ old('name') }}"> @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> @endif
                </div>

                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="" placeholder="Имэйл хаяг" name="email" value="{{ old('email') }}"> @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                </div>

                <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" placeholder="Нууц үг" name="password"> @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                </div>

                <div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" placeholder="Нууц үгээ давтах" name="password_confirmation"> @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span> @endif
                </div>

                <button type="submit" class="submit">Бүртгүүлэх</button>
            </form>
        </div>
    </div>
</div>
@endsection