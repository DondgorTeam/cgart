<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><a class="{{ Request::is('picturies') ? 'active' : '' }} navbar-link" href="/picturies"><i class="fa fa-picture-o"></i> Зургууд</a></li>
                    <li><a class="{{ Request::is('categories') ? 'active' : '' }} navbar-link" href="/categories"><i class="fa fa-th-large"></i>Ангилал</a></li>
                    <!--<li><a class="{{ Request::is('about') ? 'active' : '' }} navbar-link" href="#"><i class="fa fa-connectdevelop"></i>Форум</a></li>-->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span>
                            <img width="20" src="//www.gravatar.com/avatar/dadf7c8caa83d70a97fbab018ff76971" class="nav-gravatar" alt="Odhuu">
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            <li><a href="/profile"><i class="fa fa-user"></i> Миний мэдээлэл</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Тохиргоо</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>