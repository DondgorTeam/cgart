<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mongolian computer graphics artists- @yield('CGArt')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- font -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,900&subset=cyrillic-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        
        <!--js-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!--cropper-->
        <link  href="https://cdn.rawgit.com/fengyuanchen/cropper/v2.2.0/dist/cropper.min.css" rel="stylesheet">
        <script src="https://cdn.rawgit.com/fengyuanchen/cropper/v2.2.0/dist/cropper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <header class="header">
        @include('partials.home_nav')
        </header>
        <main>
        @yield('content')
        
        <br>
        <br>
        </main>
        @include('partials.footer')
        
        <!--<script src="{{ asset('') }}"></script>-->
    </body>
</html>