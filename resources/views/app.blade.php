<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MauTab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>


    <!-- CSS -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->


    <link rel="stylesheet" href="/theme//bower_components/bootstrap/dist/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/theme/bower_components/animate.css/animate.css" type="text/css" />
    <link rel="stylesheet" href="/theme/bower_components/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="/theme/css/app.css" type="text/css" />

    <link rel="stylesheet" href="/main.css">
    <!--<link rel="stylesheet" href="/theme.css">-->

</head>


<!-- header -->
<header id="header" class="navbar bg-white-only">
    <div class="container">
        <div class="navbar-header">
            <button class="btn btn-link visible-xs pull-right m-r" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
                <a href="/" class="navbar-brand m-r-lg"><span class="h3">Mautab</span></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li class="active"><a href="#">Возможности</a></li>
                <li><a href="#">Цена</a></li>
                <li><a href="#">Помощь</a></li>
                <li><a href="#">Цена</a></li>
                <li><a href="#">Помощь</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <div class="m-t-sm">
                        <a href="../angular/#/access/signin" class="btn btn-link btn-sm">Войти</a> или
                        <a href="../angular/#/access/signup" class="btn btn-sm btn-success btn-rounded m-l"><strong>Зарегистрироваться</strong></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- / header -->





<div class="app-aside-dock ">

    <!-- aside -->
    <aside id="aside" class="app-aside hidden-xs bg-dark">
        <div class="aside-wrap">
            <div class="navi-wrap">

                <!-- nav -->
                <nav ui-nav="" class="navi clearfix">

                    <div class="container">
                    @include('user/_layouts/headerHosting')
                    </div>

                </nav>
                <!-- nav -->

            </div>
        </div>
    </aside>
    <!-- / aside -->

</div>







<section class="app">

    @if (Session::has('good'))
        <div class="alert alert-success text-center container">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span
                        aria-hidden="true">×</span></button>
            {{Session::get('good')}}
        </div>
    @endif
    @if (Session::has('danger'))
        <div class="alert alert-danger text-center container">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span
                        aria-hidden="true">×</span></button>
            {{Session::get('danger')}}
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger container">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span
                        aria-hidden="true">×</span></button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <div class="container wrapper-md">
        @yield('content')
        </div>

</section>


@include('footer')




