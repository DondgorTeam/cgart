<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mongolian artists- @yield('Artists')</title>
        <link rel="stylesheet" href="/css/app.css" type="text/css" />
        <!-- font -->   
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic,900,900italic&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <body>
        @include('partials.home_nav')
        @yield('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-4"><a href=""><figure><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></figure></div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-6"><a href=""><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></div>
                        <div class="col-lg-6"><a href=""><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></div>
                    </div>
                    <div class="row" style="margin-top:11px;">
                        <div class="col-lg-6"><a href=""><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></div>
                        <div class="col-lg-6"><a href=""><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></div>
                    </div>
                </div>
                <div class="col-lg-4"><a href=""><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></div>
            </div>
            <div class="row" style="margin-top:11px;">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-6"><a href=""><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></div>
                        <div class="col-lg-6"><a href=""><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></div>
                    </div>
                    <div class="row" style="margin-top:11px;">
                        <div class="col-lg-6"><a href=""><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></div>
                        <div class="col-lg-6"><a href=""><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></div>
                    </div>
                    <div class="row" style="margin-top:11px;">
                        <div class="col-lg-6"><a href=""><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></div>
                        <div class="col-lg-6"><a href=""><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-6"><a href=""><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></div>
                        <div class="col-lg-6"><a href=""><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></div>
                    </div>
                    <div class="row" style="margin-top:11px;">
                        <div class="col-lg-6"><a href=""><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></div>
                        <div class="col-lg-6"><a href=""><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></div>
                    </div>
                    <div class="row" style="margin-top:11px;">
                        <div class="col-lg-6"><a href=""><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></div>
                        <div class="col-lg-6"><a href=""><img src="{{ asset('picturies/test.jpg') }}" alt="#" width="100%"></a></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container"></div>
        <br>
        <div class="container-fluid footer">
            <div class="container">
            <footer>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h4>concept art</h4>
                        <p>The best PHP screencasts on the web. Buy me lunch once a month, and I'll teach you everything about modern PHP workflow.</p>
                        <ul class="">
                            <li><a href="http://facebook.com/conceptart"><i class="icon-facebook"></i></a></li>
                            <li><a href="http://twitter.com/conceptart"><i class="icon-twitter"></i></a></li>
                            <li><a href="https://github.com/conceptart"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h4>Суралцах</h4>
                        <ul>
                            <li><a href="/allItems">Зураг</a></li>
                            <li><a href="/articles">Ангилал</a></li>
                            <li><a href="/contact">Нийт хичээл</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h5></h5>
                        
                    </div>
                </div>
                <br>
                <div class="row border-top">
                    <div class="col-md-6 col-sm-6"><p>2015 он "Дүрслэх урлаг".</p></div>
                    <div class="col-md-6 col-sm-6"><p class="text-right">Байршил Монгол</p></div>
                </div>
                <br>
                <br>
            </footer>
            </div>
        </div>
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <!-- // <script src="../../dist/js/bootstrap.min.js"></script> -->
    </body>
</html>