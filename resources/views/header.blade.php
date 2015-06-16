<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MauTab @yield('title', ' - Профессиональное решение')</title>
    <meta name="description" content="@yield('description', ' - Профессиональное решение')">
    <meta name="keywords" content="@yield('keywords', ' - Профессиональное решение')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>


    <!-- CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/main.css">


    <!-- Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.min.js"></script>
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
                                    <li><a href="/">О нас</a></li>
                                    <li><a href="/web">Веб студия</a></li>
                                    <li><a href="/host">Хостинг</a></li>
                                    <li><a href="/patner">Партнёрам</a></li>


                                    <li class="parent megamenu promo">
                                        <a href="#">Продукты</a>
                                        <ul class="sub">
                                            <li class="sub-wrapper">
                                                <div class="sub-list">
                                                    <div class="box closed">
                                                        <h6 class="title">Разработка веб проектов</h6>
                                                        <ul>
                                                            <li><a href="#">Веб-сайт</a></li>
                                                            <li><a href="#">Веб-система</a></li>
                                                            <li><a href="#">Веб-что то там</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- .box -->

                                                    <div class="box closed">
                                                        <h6 class="title">Поддержка</h6>
                                                        <ul>
                                                            <li><a href="#">Хостинг сайтов</a></li>
                                                            <li><a href="#">Matrix Switchers</a></li>
                                                            <li><a href="#">Audio/Video Processing</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- .box -->

                                                    <div class="box closed">
                                                        <h6 class="title">Системы для бизнеса</h6>
                                                        <ul>
                                                            <li><a href="#">Система ведения проектов</a></li>
                                                            <li><a href="#">Система управления контентом</a></li>
                                                            <li><a href="#">Системы для бизнеса</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- .box -->

                                                    <div class="box closed">
                                                        <h6 class="title">Инструменты SEO</h6>
                                                        <ul>
                                                            <li><a href="#">Контроль позиций сайта</a></li>
                                                            <li><a href="#">Who Is</a></li>
                                                            <li><a href="#">Узнать ТИЦ сайта</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- .box -->

                                                    <div class="box closed">
                                                        <h6 class="title">Savant Display Solutions</h6>
                                                        <ul>
                                                            <li><a href="#">Video Tiling<span
                                                                            class="item-new bg-success">Coming Soon</span></a>
                                                            </li>
                                                            <li><a href="#">On-Screen Display</a></li>
                                                            <li><a href="#">Digital Messaging</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- .box -->

                                                    <div class="box closed">
                                                        <h6 class="title">Войти\Зарегистироваться</h6>
                                                        <ul>
                                                            <li><a href="/auth/login">Войти</a></li>
                                                            <li><a href="/auth/register">Зарегистироваться</a></li>
                                                            <li><a href="#">Architectural Speakers</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- .box -->
                                                </div>
                                                <!-- .sub-list -->

                                                <div class="promo-block text-right">
                                                    <a href="#">
                                                        <img width="253" height="457" alt="" class="replace-2x"
                                                             src="http://template.progressive.itembridge.com/3.0.1/content/img/megamenu-big.jpg">
                                                    </a>
                                                </div>
                                                <!-- .promo-block -->
                                            </li>
                                        </ul>
                                        <!-- .sub -->
                                    </li>


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
