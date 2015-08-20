<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MauTab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="robots" content="nofollow"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="w1-verification" content="122418262209">


    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:600,400,500,300&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>

    <!-- CSS -->
    <link rel="stylesheet" href="/theme//bower_components/bootstrap/dist/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="/theme/bower_components/animate.css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="/theme/bower_components/font-awesome/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="/theme/css/app.css" type="text/css"/>

    <link rel="stylesheet" href="/main.css">

</head>

<!-- header -->
<header id="header" class="navbar navbar-fixed-top bg-white-only padder-v" data-spy="affix" data-offset-top="1">
    <div class="container">
        <div class="navbar-header">
            <button class="btn btn-link visible-xs pull-right m-r" type="button" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a href="#" class="navbar-brand m-r-lg"><span
                        class="h3">Mautab</span></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li class="active"><a href="#">Возможности</a></li>
                <li><a href="#">Цена</a></li>
                <li><a href="#">Форум</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <div class="m-t-sm">
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
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- / header -->


@yield('content')


        <!-- footer -->
<footer id="footer">
    <div class="bg-info">
        <div class="container">
            <div class="row m-t-xl m-b-xl">
                <div class="col-sm-6 text-white text-center">
                    <h4 class="m-b">Я для себя всё решил!</h4>
                </div>
                <div class="col-sm-6 text-center">
                    <a href="{{ url('/auth/register') }}"
                       class="btn btn-lg btn-default btn-rounded">Попробовать</a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="container">
            <div class="row m-t-xl m-b-xl">
                <div class="col-sm-3">
                    <h4 class="text-u-c m-b font-thin"><span class="b-b b-dark font-bold">Общая</span> информация</h4>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Политика безопасности</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Политика конфиденциальности</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Правила пользования</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Оплата</a></li>
                    </ul>
                    <p class="m-b-xl">More coming...</p>
                </div>
                <div class="col-sm-3">
                    <h4 class="text-u-c m-b font-thin"><span class="b-b b-dark font-bold">Наши</span> Контакты</h4>

                    <p class="text-sm">23 soe Midlokls <br>
                        120002 Loki — UNITED KINGDOM <br>
                        +333 432 321 322
                    </p>

                    <p>Sale: <a href="mailto:hey@example.com">info@example.com</a></p>

                    <p class="m-b-xl">Job: <a href="mailto:hey@example.com">job@example.com</a></p>
                </div>
                <div class="col-sm-3">
                    <h4 class="text-u-c m-b-xl font-thin"><span class="b-b b-dark font-bold">Наши</span> Проекты</h4>

                    <div class="m-b-xl">
                        <a href="#" class="btn btn-icon btn-rounded btn-dark"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn btn-icon btn-rounded btn-dark"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="btn btn-icon btn-rounded btn-dark"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="btn btn-icon btn-rounded btn-dark"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="btn btn-icon btn-rounded btn-dark"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h4 class="text-u-c m-b font-thin"><span class="b-b b-dark font-bold">Новостная</span> рассылка</h4>

                    <p>Не хотите пропустить что-нибудь? Подпишитесь на нашу рассылку</p>

                    <form class="form-inline m-t m-b text-center m-b-xl">
                        <div class="aside-xl inline">
                            <div class="input-group">
                                <input type="text" id="address" name="address" class="form-control btn-rounded"
                                       placeholder="Ваш Email">
                    <span class="input-group-btn">
                      <button class="btn btn-default btn-rounded" type="submit">Подписаться</button>
                    </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light dk">
        <div class="container">
            <div class="row padder-v m-t">
                <div class="col-xs-8">
                    <ul class="list-inline">
                        <li><a href="#">Скидки</a></li>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">API</a></li>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">Работа</a></li>
                    </ul>
                </div>
                <div class="col-xs-4 text-right">
                    Mautab &copy; 2015
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->
<script src="/theme/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/theme/bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="/theme/bower_components/jquery_appear/jquery.appear.js"></script>
</body>
</html>