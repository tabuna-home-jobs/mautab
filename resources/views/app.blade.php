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
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>


    <!-- CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">


    <link rel="stylesheet" href="/main.css">


    <!-- Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>

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
                                                            <li><a href="#">Корпоративный</a></li>
                                                            <li><a href="#">Интернет магазин</a></li>
                                                            <li><a href="#">Лейдинг</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- .box -->

                                                    <div class="box closed">
                                                        <h6 class="title">Поддержка</h6>
                                                        <ul>
                                                            <li><a href="#">Хостинг</a></li>
                                                            <li><a href="#">Доступность24 <span
                                                                            class="badge">Скоро</span></a></li>
                                                            <li><a href="#">Audio/Video Processing <span class="badge">Скоро</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- .box -->

                                                    <div class="box closed">
                                                        <h6 class="title">Системы для бизнеса</h6>
                                                        <ul>
                                                            <li><a href="#">Ведения проектов <span
                                                                            class="badge">Скоро</span></a></li>
                                                            <li><a href="#">Управления контентом <span class="badge">Скоро</span></a>
                                                            </li>
                                                            <li><a href="#">Учёт времени <span
                                                                            class="badge">Скоро</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- .box -->

                                                    <div class="box closed">
                                                        <h6 class="title">Инструменты SEO</h6>
                                                        <ul>
                                                            <li><a href="#">Контроль позиций <span
                                                                            class="badge">Скоро</span></a></li>
                                                            <li><a href="/whois">Who Is</a></li>
                                                            <li><a href="#">Оптимизация <span class="badge">Скоро</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- .box -->


                                                </div>
                                                <!-- .sub-list -->

                                                <div class="promo-block text-right">

                                                    @if(!Auth::check())
                                                        <p><a href="/auth/login">Войти</a></p>
                                                        <p><a href="/auth/register">Зарегистироваться</a></p>
                                                    @else
                                                        <p><a href="/auth/logout">Выйти</a></p>
                                                    @endif

                                                    <a href="#">
                                                        <img height="260" alt="" class="replace-2x"
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



@include('user/_layouts/headerHosting')




    @if (Session::has('good'))
        <div class="alert alert-success text-center container">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
            {{Session::get('good')}}
        </div>
    @endif
    @if (Session::has('danger'))
        <div class="alert alert-danger text-center container">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
            {{Session::get('danger')}}
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger container">
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
