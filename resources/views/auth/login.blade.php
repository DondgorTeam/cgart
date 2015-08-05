@extends('home')

@section('content')
    <div id="form">
        <h1 class="logo">Artists</h1>
        <form method="POST" action="/auth/login" >

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="form-group">
                <label for="email" class="control-label">Имэйл:</label>
                <input  type="email" name="email" value="" class="form-control">
            </div>
    
            <div class="form-group">
                <label for="password" class="control-label">Нууц үг:</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
    
            <div class="form-group text-left">
                <input type="checkbox" name="remember">
                <label for="remember">Намайг сан</label>
            </div>
    
            <div class="form-group buttons">
                <button type="submit" class="btn btn-primary">Нэвтрэх</button>
            </div>
        </form>
    </div>
@endsection