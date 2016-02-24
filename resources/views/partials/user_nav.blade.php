<div class="container">
    <nav class="navigation">
        <div class="logo">
            <a href="/">CGArt</a>
        </div>
        <ul class="navigation_links">
            <li>
                <a class="{{ Request::is('pictures') ? 'active' : '' }} navbar-link" href="/artworks">Бүтээлүүд</a>
            </li>
            <li>
                <a class="{{ Request::is('categories') ? 'active' : '' }} navbar-link" href="/category">Ангилал</a>
            </li>
        </ul>
        <ul class="navigation_user">
            @if (Auth::check())
            <li>
                <div class="dropdown">
                    <a href="#" class="dropdown_heading" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span>
                                <img src="//www.gravatar.com/avatar/dadf7c8caa83d70a97fbab018ff76971" class="nav_avatar" alt="Odhuu">
                    </a>
                    <ul class="dropdown_menu">
                        <li><a href="/{{ Auth::user()->name }}"><i class="fa fa-user"></i> Миний урлан</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/setting/{{ Auth::user()->name }}"><i class="fa fa-cog"></i> Тохиргоо</a></li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> Гарах</a></li>
                    </ul>
                </div>
            </li>
            @else
            <li>
                <a href="/login">Нэвтрэх</a>
            </li>
            <li>
                <a href="/register" class="btn btn-join">Шинээр элсэх</a>
            </li>
            @endif
        </ul>

    </nav>
</div>