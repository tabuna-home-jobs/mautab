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


</header>


<div class="container">

    <nav class="menu-admin text-center col-xs-1">

        <div class="btn-group-vertical" role="group" aria-label="...">
            <a class="btn btn-default" href="{{URL::route('home.index')}}">
                <span class="fa fa-home"></span>
            </a>

            <a class="btn btn-default" href="{{URL::route('home.index')}}">
                <span class="fa fa-tasks"></span>
            </a>


            <a class="btn btn-default" href="{{URL::route('admin.users.index')}}">
                <span class="fa fa-user"></span>
            </a>


            <a class="btn btn-default" href="{{URL::route('admin.groups.index')}}">
                <span class="fa fa-users"></span>
            </a>

            <a class="btn btn-default" href="{{URL::route('admin.pages.index')}}">
                <span class="fa fa-file-text"></span>
            </a>

            <a class="btn btn-default" href="{{URL::route('home.index')}}">
                <span class="fa fa-user"></span>
            </a>

        </div>


    </nav>


    <arside class="col-xs-11">

    @if (Session::has('good'))
            <div class="alert alert-success text-center">{{Session::get('good')}}</div>
    @endif

        @yield('content')
    </arside>

</div>

@include('footer')
