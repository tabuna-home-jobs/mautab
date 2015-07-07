<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MauTab @yield('title', ' - Профессиональное решение')</title>
    <meta name="description" content="@yield('description', ' - Профессиональное решение')">
    <meta name="keywords" content="@yield('keywords', ' - Профессиональное решение')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="none"/>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>


    <!-- CSS -->

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="/main.css">-->
    <link rel="stylesheet" href="/css/app.css">

    <!-- Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


</head>
<body>


<header>
    <div class="topbar"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-6 col-sm-3">
                <a href="/" class="logo">
                    <img src="/images/logo.png" alt="">
                </a>
            </div>
            <div class="col-md-6 col-xs-6 col-sm-6">
                <div class="menu">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="/host">Хостинг</a></li>
                                    <li><a href="/auth/login">Войти</a></li>
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
