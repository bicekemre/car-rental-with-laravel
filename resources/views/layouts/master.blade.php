<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Turbo</title>
    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600' rel='stylesheet' type='text/css'>
    <!-- Main style -->
    <link rel="stylesheet" href="{{ asset('css/turbo.style.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="fakeloader">
    <div class="spinner5">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<div id="main-wrapper" class="">
    <header class="header index-two-header">
        @yield('header')
        @yield('navbar')

    </header> <!-- end header -->
    @yield('content')
</div> <!-- end #main-wrapper -->

<footer class="rq-footer">
    <div class="rq-main-footer">
        <div class="container">
            <div class="secondary-footer-logo">
                <img src="{{ asset('img/company-logo.png') }}" alt="">
            </div>
            <ul class="rq-footer-social">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Google +</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
    </div> <!-- /.rq-main-footer -->
    <div class="rq-copyright-section">
        <div class="container">
            <p class="secondary-copyright">© 2016 Turbo. All Rights Reseverd</p>
        </div>
    </div> <!-- /.rq-copyright-section -->
</footer>
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scripts.js') }}" ></script>
</body>
</html>
