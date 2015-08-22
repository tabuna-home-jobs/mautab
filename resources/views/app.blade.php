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

    <link rel="stylesheet" href="/theme/bower_components/bootstrap/dist/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="/theme/bower_components/animate.css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="/theme/bower_components/font-awesome/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="/theme/css/app.css" type="text/css"/>
    <link rel="stylesheet" href="/main.css">

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


<div class="ng-scope app-aside-dock">
    <aside id="aside" class="app-aside hidden-xs bg-dark">


        <!-- nav -->
        <nav class="navi clearfix">
            <ul class="nav">
                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                    <span>Navigation</span>
                </li>
                <li>
                    <a href="" class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                        <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
                        <span class="font-bold">Dashboard</span>
                    </a>
                    <ul class="nav nav-sub dk">
                        <li class="nav-sub-header">
                            <a href="">
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <span>Dashboard v1</span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard.html">
                                <b class="label bg-info pull-right">N</b>
                                <span>Dashboard v2</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="mail.html">
                        <b class="badge bg-info pull-right">9</b>
                        <i class="glyphicon glyphicon-envelope icon text-info-lter"></i>
                        <span class="font-bold">Email</span>
                    </a>
                </li>
                <li class="line dk"></li>

                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                    <span>Components</span>
                </li>
                <li>
                    <a href="" class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                        <b class="badge bg-info pull-right">3</b>
                        <i class="glyphicon glyphicon-th"></i>
                        <span>Layout</span>
                    </a>
                    <ul class="nav nav-sub dk">
                        <li class="nav-sub-header">
                            <a href="">
                                <span>Layout</span>
                            </a>
                        </li>
                        <li>
                            <a href="layout_app.html">
                                <span>Application</span>
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
                    <a href="" class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                        <i class="glyphicon glyphicon-briefcase icon"></i>
                        <span>UI Kits</span>
                    </a>
                    <ul class="nav nav-sub dk">
                        <li class="nav-sub-header">
                            <a href="">
                                <span>UI Kits</span>
                            </a>
                        </li>
                        <li>
                            <a href="ui_button.html">
                                <span>Buttons</span>
                            </a>
                        </li>
                        <li>
                            <a href="ui_icon.html">
                                <b class="badge bg-info pull-right">3</b>
                                <span>Icons</span>
                            </a>
                        </li>
                        <li>
                            <a href="ui_grid.html">
                                <span>Grid</span>
                            </a>
                        </li>
                        <li>
                            <a href="ui_widget.html">
                                <b class="badge bg-success pull-right">13</b>
                                <span>Widgets</span>
                            </a>
                        </li>
                        <li>
                            <a href="ui_sortable.html">
                                <span>Sortable</span>
                            </a>
                        </li>
                        <li>
                            <a href="ui_portlet.html">
                                <span>Portlet</span>
                            </a>
                        </li>
                        <li>
                            <a href="ui_timeline.html">
                                <span>Timeline</span>
                            </a>
                        </li>
                        <li>
                            <a href="ui_jvectormap.html">
                                <span>Vector Map</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="" class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                        <b class="label bg-primary pull-right">2</b>
                        <i class="glyphicon glyphicon-list"></i>
                        <span>Table</span>
                    </a>
                    <ul class="nav nav-sub dk">
                        <li class="nav-sub-header">
                            <a href="">
                                <span>Table</span>
                            </a>
                        </li>
                        <li>
                            <a href="table_static.html">
                                <span>Table static</span>
                            </a>
                        </li>
                        <li>
                            <a href="table_datatable.html">
                                <span>Datatable</span>
                            </a>
                        </li>
                        <li>
                            <a href="table_footable.html">
                                <span>Footable</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="" class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                        <i class="glyphicon glyphicon-edit"></i>
                        <span>Form</span>
                    </a>
                    <ul class="nav nav-sub dk">
                        <li class="nav-sub-header">
                            <a href="">
                                <span>Form</span>
                            </a>
                        </li>
                        <li>
                            <a href="form_element.html">
                                <span>Form elements</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="ui_chart.html">
                        <i class="glyphicon glyphicon-signal"></i>
                        <span>Chart</span>
                    </a>
                </li>
                <li>
                    <a href="" class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                        <i class="glyphicon glyphicon-file icon"></i>
                        <span>Pages</span>
                    </a>
                    <ul class="nav nav-sub dk">
                        <li class="nav-sub-header">
                            <a href="">
                                <span>Pages</span>
                            </a>
                        </li>
                        <li>
                            <a href="page_profile.html">
                                <span>Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="page_post.html">
                                <span>Post</span>
                            </a>
                        </li>
                        <li>
                            <a href="page_search.html">
                                <span>Search</span>
                            </a>
                        </li>
                        <li>
                            <a href="page_invoice.html">
                                <span>Invoice</span>
                            </a>
                        </li>
                        <li>
                            <a href="page_price.html">
                                <span>Price</span>
                            </a>
                        </li>
                        <li>
                            <a href="page_lockme.html">
                                <span>Lock screen</span>
                            </a>
                        </li>
                        <li>
                            <a href="page_signin.html">
                                <span>Signin</span>
                            </a>
                        </li>
                        <li>
                            <a href="page_signup.html">
                                <span>Signup</span>
                            </a>
                        </li>
                        <li>
                            <a href="page_forgotpwd.html">
                                <span>Forgot password</span>
                            </a>
                        </li>
                        <li>
                            <a href="page_404.html">
                                <span>404</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- nav -->

    </aside>
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




