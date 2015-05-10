<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.png"/>

    <title>Cloudme</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/style.css">


</head>
<body>


<div id="wath"></div>


<header class="header-login-app">

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Меню</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img title="" alt="" src="/img/logo.png">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">{{ Sentry::getUser()->name }} </a></li>
                </ul>
            </div>
        </div>
    </nav>


    <menu class="menuapp container text-center">

        <div class="col-md-2 col-sm-4 col-xs-6">

            <a href="{{URL::route('home.index')}}">
                <span class="fa fa-user"></span>
                <h4>{{Lang::get('menu.user')}}</h4>
            </a>
            <hr>

            <p class="menu-small"></p>

            <p class="menu-small"></p>

        </div>

        <div class="col-md-2 col-sm-4 col-xs-6">
            <a href="{{URL::route('web.index')}}">
                <span class="fa fa-desktop"></span>
                <h4>{{Lang::get('menu.Web')}}</h4>
            </a>
            <hr>

            <p class="menu-small"></p>

            <p class="menu-small"></p>
        </div>


        <div class="col-md-2 col-sm-4 col-xs-6">
            <a href="{{URL::route('dns.index')}}">
                <span class="fa fa-sitemap"></span>
                <h4>{{Lang::get('menu.DNS')}}</h4>
            </a>
            <hr>
            <p class="menu-small"></p>

            <p class="menu-small"></p>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6">
            <a href="{{URL::route('bd.index')}}">
                <span class="fa fa-database"></span>
                <h4>{{Lang::get('menu.BD')}}</h4>
            </a>
            <hr>
            <p class="menu-small"></p>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6">
            <a href="{{URL::route('cron.index')}}">
                <span class="fa fa-clock-o"></span>
                <h4>{{Lang::get('menu.Cron')}}</h4>
            </a>
            <hr>
            <p class="menu-small"></p>
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

    </menu>




    @if (Session::has('good'))
        <div class="container">
            <div class="alert alert-success text-center">{{Session::get('good')}}</div>
        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Что то пошло не так!</strong> Пожалуйста проверьте вводимые данные.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    @endif


</header>





@yield('content')


@include('footer')
