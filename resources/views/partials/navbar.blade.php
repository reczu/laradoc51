<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Laradoc51</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Articles <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ action('ArticlesController@index') }}">Przeglądaj</a></li>
                        <li><a href="{{ action('ArticlesController@create') }}">Dodaj</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav">
                <li><p class="navbar-text">Our latest: {!! link_to_action('ArticlesController@show', $latest->title, [$latest->id]) !!}</p> </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{ action('Auth\AuthController@getLogin') }}">Login</a></li>
                    <li><a href="{{ action('Auth\AuthController@getRegister') }}">Register</a></li>
                @else
                    <p class="navbar-text">Signed in as {{ Auth::user()->name }} <a href="{{ url('auth/logout') }}" class="navbar-link">Logout</a></p>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>