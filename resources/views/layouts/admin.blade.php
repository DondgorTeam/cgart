<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="/css/prism.css" type="text/css" />
        <link rel="stylesheet" href="/css/dashboard.css" type="text/css" />
    </head>
    <body>
        @include('partials/admin_nav')
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
    </body>
</html>