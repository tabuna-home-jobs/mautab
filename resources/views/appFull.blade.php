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
    <link href='http://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700,800&subset=latin,cyrillic'
          rel='stylesheet'
          type='text/css'>

    <link rel="stylesheet" href="/bower_components/animate.css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/build/css/app.css')}}" type="text/css"/>


</head>

<!-- header -->
<header id="header" class="navbar navbar-fixed-top bg-white-only" data-spy="affix" data-offset-top="1">
    <div class="container">
        <div class="navbar-header">
            <button class="btn btn-link visible-xs pull-right m-r" type="button" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a href="/" class="navbar-brand m-r-lg"><span
                        class="h3">Mautab</span></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a class="{{Active::route('whois.index')}}" href="{{route('whois.index')}}">Who is</a></li>
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
                    <p class="m-b-xl">Email: <a href="mailto:support@mautab.com">support@mautab.com</a></p>

                </div>
                <div class="col-sm-3">
                    <h4 class="text-u-c m-b font-thin"><span class="b-b b-dark font-bold">Новости</span> Компании</h4>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Политика безопасности</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Политика конфиденциальности</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Правила пользования</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>Оплата</a></li>
                    </ul>


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


<script src="{{asset('/build/js/app.js')}}" type="text/javascript"></script>


<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-39757298-2', 'auto');
    ga('send', 'pageview');

</script>


</body>
</html>
