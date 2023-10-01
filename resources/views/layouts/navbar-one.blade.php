<nav class="navbar navbar-default home-two-nav">
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
            <a class="navbar-brand" href="#"><img src="{{ asset('./img/home-two-logo.png') }}" alt=""/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('home', app()->getLocale()) }}">{{ __('navbar.home') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('cars', app()->getLocale()) }}">{{ __('navbar.cars') }}</a>
                </li>
                <li class="">
                    <a href="">{{ __('navbar.blog') }}</a>
                </li>
                <li class="">
                    <a href="/about-us">{{ __('navbar.about us') }}</a>
                </li>
                <li class="logo">
                    <a href="/"><img src="{{ asset('img/home-two-logo.png') }}" alt=""></a>
                </li>
                <li class="">
                    <a href="/contact">{{ __('navbar.contact') }}</a>
                </li>
                @if(auth()->user())
                    <li class=""><a href="{{ route('profile', app()->getLocale()) }}">
                            {{ __('navbar.profile') }}</a>
                    </li>
                    <li class=""><a href="{{ route('logout') }}">
                            {{ __('navbar.logout') }}</a>
                    </li>
                @else
                    <li class="login-register-link"><a href="{{ route('registration', app()->getLocale()) }}">
                            {{ __('navbar.login') }}</a>
                    </li>
                @endif
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">{{ app()->getLocale() }}<span class="ion-chevron-down"></span></a>
                    @if(app()->getLocale() == 'en')
                        <ul class="dropdown-menu with-language">
                            <li><a rel="alternate" hreflang="tr" href="{{ route(request()->route()->getName(), ['lang' => 'tr', 'id' => request()->route()->parameters()['id'] ?? null]) }}">TR</a></li>
                        </ul>
                    @elseif(app()->getLocale() == 'tr')
                        <ul class="dropdown-menu with-language">
                            <li><a rel="alternate" hreflang="tr" href="{{ route(request()->route()->getName(), ['lang' => 'en', 'id' => request()->route()->parameters()['id'] ?? null]) }}">EN</a></li>
                        </ul>
                    @endif
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
