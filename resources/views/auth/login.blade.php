@extends('layouts.app') @section('content')
<div class="container ">
    <div class="login">
        <div class="loginmodal-container">
            <h1>CGArt сайтад нэвтрэх</h1>
            <br>
            <form role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}

                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" name="email" placeholder="Имэйл хаяг" value="{{ old('email') }}"> @if ($errors->has('email'))
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

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Намайг сан
                    </label>
                </div>

                <button type="submit" class="submit">Нэвтрэх</button>
                <div class="login-help">
                    <a class="btn-link" href="{{ url('/password/reset') }}">Нууц үгээ мартсан бол?</a>
                    <a href="/register" class="link_right">Бүртгүүлэх</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection