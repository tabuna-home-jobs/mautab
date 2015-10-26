<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MauTab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700,800&subset=latin,cyrillic'
          rel='stylesheet'
          type='text/css'>

    <link rel="stylesheet" href="/bower_components/animate.css/animate.css" type="text/css"/>

    <link rel="stylesheet" href="{{asset('/build/css/app.css')}}" type="text/css"/>


</head>


<!-- header -->
<header id="header" class="navbar bg-white-only">
    <div class="container">
        <div class="navbar-header">
            <button class="btn btn-link visible-xs pull-right m-r" type="button" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a href="/" class="navbar-brand m-r-lg"><span class="h3">Mautab</span></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a class="{{Active::route('whois.index')}}" href="{{route('whois.index')}}">Who is</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    @if(Auth::check())
                        <div class="m-t-sm">
                            <a href="/auth/logout" class="btn btn-link btn-sm">Выйти</a>
                            <a href="/home" class="btn btn-sm btn-primary btn-rounded m-l"><strong>Панель
                                    управления</strong></a>
                        </div>
                    @else
                        <div class="m-t-sm">
                            <a href="/auth/login" class="btn btn-link btn-sm">Войти</a> или
                            <a href="/auth/register" class="btn btn-sm btn-primary btn-rounded m-l"><strong>Зарегистрироваться</strong></a>
                        </div>
                    @endif
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
                <nav class="navi clearfix">

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

<!--
<section class="app">
-->
<section>

    @include('_layouts.message')

    @if (count($errors) > 0)
        <div class="alert notification alert-danger">
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




