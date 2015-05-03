<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Artists</title>
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css'>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/all.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.nav')
    <div class="container">
        @include('flash::message')

	    @yield('content')
    </div>
	<!-- Scripts -->
	<script src="{{ asset('js/main.js') }}"></script>

    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            e.target // newly activated tab
            e.relatedTarget // previous active tab
        });
    </script>
    @yield('footer')
</body>
</html>
