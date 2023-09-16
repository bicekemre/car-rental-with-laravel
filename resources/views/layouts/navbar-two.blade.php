<nav class="navbar navbar-default" id="sticker">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('./img/company-logo.png') }}" alt=""/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="/">{{ __('home') }}</a>
                </li>
                <li class="">
                    <a href="/cars">{{ __('cars') }}</a>
                </li>
                <li class="">
                    <a href="/blog">{{ __('blog') }}</a>
                </li>
                <li class="">
                    <a href="/contact">{{ __('contact') }}</a>
                </li>
                <li class="">
                    <a href="/about-us">{{ __('about-us') }}</a>
                </li>
                @if(auth()->user())
                    <li class=""><a href="{{ route('profile') }}">
                            {{ __('profile') }}</a>
                    </li>
                    <li class=""><a href="{{ route('logout') }}">
                            {{ __('log out') }}</a>
                    </li>
                @else
                    <li class="login-register-link right-side-link"><a href="{{ route('registration') }}">
                            <i class="icon_lock-open_alt"></i>Login</a>
                    </li>
                @endif
                <li class="dropdown right-side-link">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">ENG<span class="ion-chevron-down"></span></a>
                    <ul class="dropdown-menu with-language">
                        <li><a href="#">Fr</a></li>
                        <li><a href="#">De</a></li>
                    </ul>
                </li>
                <li class="dropdown right-side-link last">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">USD<span class="ion-chevron-down"></span></a>
                    <ul class="dropdown-menu with-language">
                        <li><a href="#">USD</a></li>
                        <li><a href="#">Eur</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
