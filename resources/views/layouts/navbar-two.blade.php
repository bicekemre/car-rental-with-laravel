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
            <a class="navbar-brand" href="{{ route('home', app()->getLocale()) }}"><img src="{{ asset('./img/company-logo.png') }}" alt=""/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Request::is('home*') ? 'active' : '' }}">
                    <a href="{{ route('home', app()->getLocale()) }}">{{ __('navbar.home') }}</a>
                </li>
                <li class="{{ Request::is(app()->getLocale().'/cars*') ? 'active' : '' }}">
                    <a href="{{ route('cars', app()->getLocale()) }}">{{ __('navbar.cars') }}</a>
                </li>
                <li class="{{  Request::is(app()->getLocale().'blog*') ? 'active' : '' }}">
                    <a href="{{ route('blog', app()->getLocale()) }}">{{ __('navbar.blog') }}</a>
                </li>
                <li class="{{  Request::is(app()->getLocale().'contact*') ? 'active' : '' }}">
                    <a href="{{ route('contact', app()->getLocale()) }}">{{ __('navbar.contact') }}</a>
                </li>
                <li class="{{  Request::is(app()->getLocale().'aboutus*') ? 'active' : '' }}">
                    <a href="{{ route('aboutus', app()->getLocale()) }}">{{ __('navbar.about us') }}</a>
                </li>
                @if(auth()->user())
                    <li class="{{  Request::is(app()->getLocale().'profile*') ? 'active' : '' }}"><a href="{{ route('profile', app()->getLocale()) }}">
                            {{ __('navbar.profile') }}</a>
                    </li>
                    <li class="{{  Request::is(app()->getLocale().'logout*') ? 'active' : '' }}"><a href="{{ route('logout', app()->getLocale()) }}">
                            {{ __('navbar.logout') }}</a>
                    </li>
                @else
                    <li class="login-register-link right-side-link {{  Request::is(app()->getLocale().'registration*') ? 'active' : '' }}"><a href="{{ route('registration', app()->getLocale()) }}">
                            <i class="icon_lock-open_alt"></i>Login</a>
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
