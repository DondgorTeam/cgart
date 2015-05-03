<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <title>Artists</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:900,500,700,400&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    {{--<link href='//fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>--}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <!--[endif]-->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.12/css/jquery.Jcrop.css' rel='stylesheet' type='text/css'>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.12/js/jquery.Jcrop.min.js"></script>
</head>
<body>
    @include('partials.nav')
    <div class="container">
        <h1>Мэдээ</h1>
        @if(count($articles)>0)
            <div class="row">
                @foreach($articles as $article)
                    <div class="col-md-4">
                        <article>
                            <h3><a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a></h3>
                            <span>Бичсэн: {!! $article->user->name !!}</span><br>
                            <span class="bg">Хугацаа: {{ $article->created_at }}</span><br>
                            {{--<div class="body">{{ $article->content }}</div>--}}
                        </article>
                    </div>
                @endforeach
            </div>
        @endif
        <div class="row">
            <div class="col-md-8">
                {{--{!! Form::open(['route' => 'postImage', 'files' => 'true']) !!}--}}

                        {{--{!! Html::image($data['image'], '', ['id' => 'crop']) !!}--}}
                {{--<br>--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('filename','Зураг оруулах:') !!}--}}
                        {{--{!! Form::file('fileName', ['class'=>'form-control']) !!}--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--{!! Form::submit('Upload Photo', ['class'=>'btn btn-primary ']) !!}--}}
                    {{--</div>--}}
                {{--{!! Form::close() !!}--}}
            </div>

            <script>
                $(document).ready(function(){
                    $('#crop').Jcrop({
                        aspectRatio: 1
//                        onSelect:showPreview,
//                        onChange:showPreview
                    });
//                    function showPreview(coords)
//                    {
//                        var rx = 300 / coords.w;
//                        var ry = 300 / coords.h;
//                    }

                });
            </script>
            <div class="col-md-4">
                content
            </div>
        </div>
        @yield('content')
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
    @yield('footer')
</body>

