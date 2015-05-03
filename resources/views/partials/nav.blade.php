<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <!-- The mobile navbar-toggle button can be safely removed since you do not need it in a non-responsive implementation -->
            <a class="navbar-brand" href="/">Project name</a>
        </div>
        <!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
        <div id="navbar">
            <ul class="nav navbar-nav">
                <li class="{{ (Request::is('/') ? 'active' : '') }}"><a href="/">Home</a></li>
                <li class="{{ (Request::is('articles') ? 'active' : '') }}"><a href="/articles">Articles</a></li>
                <li class="{{ (Request::is('about') ? 'active' : '') }}"><a href="/about">about</a></li>
                <li class="{{ (Request::is('photos') ? 'active' : '') }}"><a href="/photos">photos</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>{!! link_to_action('ArticlesController@show', $latest->title, [$latest->id]) !!}</li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>