@extends('layouts.master')
@section('navbar')
    @include('layouts.navbar-two')
@endsection
@section('content')
    <div class="rq-page-content">
        <div class="rq-content-block">
            <div class="rq-title-container bredcrumb-title small">
                <div class="container">
                    <h2 class="rq-title">{{ __('login.register') }}</h2>
                    <ol class="breadcrumb rq-subtitle">
                        <li><a href="#">{{ __('login.home') }}</a></li>
                        <li class="active">{{ __('login.register') }}</li>
                    </ol>
                </div>
            </div>
            <div class="rq-registration-content-single"> <!-- start of login form portion -->
                <div class="container">
                    <h4>{{ __('login.Login your account') }}</h4>
                    @error('email')
                    <div class="alert">{{ __('login.Invalid credentials') }}</div>
                    @enderror
                    <div class="rq-login-form">
                        <form action="{{ route('login', app()->getLocale()) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="email" name="email" class="rq-form-control" placeholder="{{__('login.Your email')}}">
                                </div>
                                <div class="col-md-5">
                                    <input type="password" name="password" class="rq-form-control"  placeholder="{{__('login.Your password')}}">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="rq-btn rq-btn-primary fluid border-radius">{{ __('login.login') }} <i class="arrow_right"></i></button>
                                </div>
                                <div class="col-md-12">
                                    <div class="rq-checkbox">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="remember-me">
                        <span class="rq-checkbox">
                          <input type="checkbox" name="remember-me" id="remember-me">
                          <label for="remember-me">{{ __('login.Keep me logged in') }}</label>
                        </span>
                                        <span class="forgotpass">
                          <a href="#">{{ __('login.Forgot your password') }} ?</a>
                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> <!-- end login div -->
                </div>
            </div> <!-- end of login form portion -->
            <div class="rq-registration-content-single small-bottom-margin"> <!-- start of registration portion -->
                <div class="container">
                    <div class="rq-login-form no-border">
                        <h4>{{ __('login.Dont have an account! Register now') }} </h4>
                        <form class="form-horizontal"  action="{{ route('register', app()->getLocale()) }}" method="post" >
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" name="name" class="rq-form-control reverse" placeholder="{{ __('login.Name') }}" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="last_name" class="rq-form-control reverse" placeholder="{{ __('login.Last Name') }}" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="password" name="password" class="rq-form-control reverse" placeholder="{{ __('login.Password') }}" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="email" name="email" class="rq-form-control reverse" placeholder="{{ __('login.Email Address') }}" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="number" name="phone" class="rq-form-control reverse" placeholder="{{ __('login.Phone') }}" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="password" name="re-password" class="rq-form-control reverse" placeholder="{{ 'login.RePassword' }}" required>
                                </div>
                                <div class="col-md-12">
                                    <div class="register-button">
                                        <button type="submit" class="rq-btn rq-btn-primary border-radius">{{ __('login.register') }} <i class="arrow_right"></i></button>
                                    </div>
                                </div>
                            </div> <!-- end of registration section -->
                        </form>
                    </div>
                </div>
            </div><!--  end of registration form portin -->
        </div>
    </div>
@endsection
