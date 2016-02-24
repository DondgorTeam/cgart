@extends('layouts.master') @section('content') @can('update-post', $picture)
<a href="#">Edit the Forum</a> @endcan
<div class="container">
    <aside class="user-sidebar" id="sidebar">
        <section class="user-info clear-fix">
            <figure>
                <div class="avatar">
                    <a class="current-user-avatar" href="https://sinapahlevani.cgplus.com/">
                        <img alt="" class="user-avatar" src="https://cgplus.com/uploads/production/users/profile/6523/avatar/fb8eed031449182514.4958456_thumb.jpg">
                    </a>
                </div>
                <figcaption>
                    <h2 class="sidebar-username fit-text" style="font-size: 18px;">
                        <a href="https://sinapahlevani.cgplus.com/">Sina<br>Pahlevani</a>
                    </h2>
                    <div class="user-location"></div>
                </figcaption>
            </figure>
        </section>
        <section class="user-stats">
            <ul>
                <li class="expandable expandable-expand">
                    <span class="active" data-slug="">
                        <a class="clear-fix" data-context=".user-stats, #page-content" href="https://sinapahlevani.cgplus.com/">
                            <span class="counter f-right">13</span>
                            <span class="f-left">Works</span>
                        </a>
                    </span>
                </li>
                <li>
                    <a class="" data-context=".user-stats, #page-content" href="https://sinapahlevani.cgplus.com/favorites">
                        <span class="counter f-right">0</span> Favorites
                    </a>
                </li>
            </ul>
        </section>
    </aside>
    <div id="page-content">
        <header>
            <ul class="path t-ellipsis">
                <li>
                    <a href="#">All works</a>
                </li>
                <li>
                    DARTH SIDIOUS RETURNS
                </li>
            </ul>
            <div>
                @if ($currentUser == $user)
                    <form action="{{ url('picturies/'.$picture->id) }}" method="POST">
                        {!! csrf_field() !!}
                        {!! method_field('DELETE') !!}
                        <button type="submit" class="btn">Устгах</button>
                    </form>
                @endif
         </div>
        </header>
        <div class="image-area">
            <img src="{{ asset('images/' .  $picture->path ) }}" alt="{{ $picture->name }}" class="ready">
            <a class="image-prev icon icon-arrow-left-big" data-context=".image-area, .image-details, .image-title" data-ignore="true" data-large="#" data-medium="#" data-original="#" href="#">Prev</a>
            <a class="image-next icon icon-arrow-right-big" data-context=".image-area, .image-details, .image-title" data-ignore="true" data-large="#" data-medium="#" data-original="#" href="#">Next</a>
        </div>
        <h3>{{ $picture->name }}</h3>
    </div>
</div>
</div>
@endsection