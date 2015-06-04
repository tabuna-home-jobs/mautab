<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MauTab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- Fonts -->


    <!-- CSS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300,700&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/main.css">


    <!-- Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>


</head>
<body>


<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-6 col-sm-3">
                <a href="#" class="logo">
                    <img src="/images/logo.png" alt="">
                </a>
            </div>
            <div class="col-md-6 col-xs-6 col-sm-6">
                <div class="menu">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="#banner">О нас</a></li>
                                    <li><a href="#service">Веб студия</a></li>
                                    <li><a href="#feature">Хостинг</a></li>
                                    <li><a href="#utility">Партнёрам</a></li>
                                </ul>

                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                </div>
            </div>

            <div class="col-md-3 col-xs-12 col-sm-3">
                <ul class="social-info">
                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-paper-plane"></i></a></li>
                    <li><a href="#"><i class="fa fa-phone-square"></i></a></li>
                </ul>
            </div>


        </div>
    </div>
</header>


<section class="menuapp container text-center">

        <div class="col-md-2 col-sm-4 col-xs-6">

            <a href="{{URL::route('home.index')}}">
                <span class="fa fa-user"></span>
                <h4>{{Lang::get('menu.user')}}</h4>
            </a>
            <hr>

            <p class="menu-small">{{Lang::get('menu.disk')}}: {{ $UserInfo['U_DISK'] }} мб </p>

            <p class="menu-small">{{Lang::get('menu.traffic')}}: {{$UserInfo['U_BANDWIDTH'] }} мб </p>

        </div>

        <div class="col-md-2 col-sm-4 col-xs-6">
            <a href="{{URL::route('web.index')}}">
                <span class="fa fa-desktop"></span>
                <h4>{{Lang::get('menu.Web')}}</h4>
            </a>
            <hr>

            <p class="menu-small"> {{Lang::get('menu.domains')}}: {{$UserInfo['U_WEB_DOMAINS'] }} </p>

            <p class="menu-small"> {{Lang::get('menu.aliases')}}: {{$UserInfo['U_WEB_ALIASES'] }} </p>
        </div>


        <div class="col-md-2 col-sm-4 col-xs-6">
            <a href="{{URL::route('dns.index')}}">
                <span class="fa fa-sitemap"></span>
                <h4>{{Lang::get('menu.DNS')}}</h4>
            </a>
            <hr>
            <p class="menu-small"> {{Lang::get('menu.domains')}}: {{$UserInfo['U_DNS_DOMAINS'] }} </p>

            <p class="menu-small"> {{Lang::get('menu.records')}}: {{$UserInfo['U_DNS_RECORDS'] }} </p>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6">
            <a href="{{URL::route('bd.index')}}">
                <span class="fa fa-database"></span>
                <h4>{{Lang::get('menu.BD')}}</h4>
            </a>
            <hr>
            <p class="menu-small"> {{Lang::get('menu.BD')}}: {{$UserInfo['U_DATABASES'] }} </p>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6">
            <a href="{{URL::route('cron.index')}}">
                <span class="fa fa-clock-o"></span>
                <h4>{{Lang::get('menu.Cron')}}</h4>
            </a>
            <hr>
            <p class="menu-small"> {{Lang::get('menu.jobs')}}: {{$UserInfo['U_CRON_JOBS'] }} </p>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6">
            <a href="{{URL::route('tikets.index')}}">
                <span class="fa fa-life-ring"></span>
                <h4>{{Lang::get('menu.support')}}</h4>
            </a>
            <hr>

            <p class="menu-small"><a href="{{URL::route('log.index')}}">Журнал действий</a></p>

            <p class="menu-small"><a href="{{URL::route('backup.index')}}">Резервные копии</a></p>
        </div>

</section>




    @if (Session::has('good'))
        <div class="alert alert-success text-center alert-fixed-bottom">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
            {{Session::get('good')}}
        </div>
    @endif
    @if (Session::has('danger'))
        <div class="alert alert-danger text-center alert-fixed-bottom">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
            {{Session::get('danger')}}
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger alert-fixed-bottom">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif



<section class="container app-container">
@yield('content')
</section>

@include('footer')
