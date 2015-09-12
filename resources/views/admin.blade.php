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

                <li class="active"><a href="#">Возможности</a></li>
                <li><a href="#">Цена</a></li>
                <li><a href="#">Форум</a></li>

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


<div class="app">


    <!-- aside -->
    <aside id="aside" class="app-aside hidden-xs bg-dark">
        <div class="aside-wrap">
            <div class="navi-wrap">

                <!-- nav -->
                <nav class="navi clearfix">
                    <ul class="nav">
                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span>Главное</span>
                        </li>


                        <li class="{{Active::route('admin..*')}}">
                            <a href="{{route('admin..index')}}">
                                <i class="fa fa-line-chart text-primary-dker"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>


                        <li class="{{Active::route('admin.users.*')}}">
                            <a href="{{route('admin.users.index')}}">
                                <i class="fa fa-users"></i>
                                <span>Пользователи</span>
                            </a>
                        </li>


                        <li class="line dk"></li>

                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span>Хостинг</span>
                        </li>


                        <li class="{{Active::route(['admin.server.*','admin.serverstats.*'])}}">
                            <a href="{{route('admin.server.index')}}">
                                <i class="fa fa-server"></i>
                                <span>Сервер</span>
                            </a>
                        </li>


                        <li class="{{Active::route('admin.package.*')}}">
                            <a href="{{route('admin.package.index')}}">
                                <i class="fa fa-cubes text-success"></i>
                                <span>Тарифы</span>
                            </a>
                        </li>


                        <li class="line dk"></li>

                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span>Компоненты</span>
                        </li>
                        <li>
                            <a href="#" class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                                <i class="glyphicon glyphicon-th"></i>
                                <span>Контент</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                <li class="nav-sub-header">
                                    <a href="">
                                        <span>Контент</span>
                                    </a>
                                </li>
                                <li class="{{Active::route('admin.pages.*')}}">
                                    <a href="{{route('admin.pages.index')}}">
                                        <span>Страницы</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layout_fullwidth.html">
                                        <span>Full width</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layout_boxed.html">
                                        <span>Boxed layout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="mail.html">
                                <i class="glyphicon glyphicon-envelope icon"></i>
                                <span>Email рассылка</span>
                            </a>
                        </li>


                    </ul>
                </nav>
                <!-- nav -->

            </div>
        </div>
    </aside>
    <!-- / aside -->


    <!-- content -->
    <div id="content" class="app-content" role="main">
        <div class="app-content-body ">


            @if (Session::has('good'))
                <div class="alert notification alert-success text-center container">
                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span
                                aria-hidden="true">×</span></button>
                    {{Session::get('good')}}
                </div>
            @endif
            @if (Session::has('danger'))
                <div class="alert notification alert-danger text-center container">
                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span
                                aria-hidden="true">×</span></button>
                    {{Session::get('danger')}}
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert notification alert-danger container">
                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span
                                aria-hidden="true">×</span></button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif




            @yield('content')

        </div>
    </div>
    <!-- /content -->
</div>


@include('footer')




