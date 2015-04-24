<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/favicon.png" />

  <title>Cloudme</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/animate.css">
  <link rel="stylesheet" href="/style.css">
  <script src="wow.js"></script>
  <script>
    new WOW().init();
  </script>

</head>
<body>


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
          <li><a href="#">{{ Auth::user()->name }} </a></li>
        </ul>
      </div>
    </div>
  </nav>


    <menu class="menuapp container text-center">

        <div class="col-md-2 col-sm-3 col-xs-4">

            <a href="/home">
                <span class="fa fa-user"></span>
                <h4>Пользователь</h4>
            </a>
            <hr>
            <p class="menu-small"> Диск: {{ $UserInfo['U_DISK'] }} мб </p>
            <p class="menu-small"> Траффик: {{$UserInfo['U_BANDWIDTH'] }} мб </p>

        </div>

        <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="/web">
                <span class="fa fa-desktop"></span>
                <h4>Web</h4>
            </a>
            <hr>

            <p class="menu-small"> Домены: {{$UserInfo['U_WEB_DOMAINS'] }} </p>
            <p class="menu-small"> Алиасы: {{$UserInfo['U_WEB_ALIASES'] }} </p>
        </div>


        <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="/dns">
                <span class="fa fa-sitemap"></span>
                <h4>DNS</h4>
            </a>
            <hr>
            <p class="menu-small"> Домены: {{$UserInfo['U_DNS_DOMAINS'] }} </p>
            <p class="menu-small"> Алиасы: {{$UserInfo['U_DNS_RECORDS'] }} </p>
        </div>

        <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="/bd">
                <span class="fa fa-database"></span>
                <h4>Базы данных</h4>
            </a>
            <hr>
            <p class="menu-small"> Базы данных: {{$UserInfo['U_DATABASES'] }} </p>
        </div>

        <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="#">
                <span class="glyphicon glyphicon-shopping-cart"></span>
                <h4>Оплата</h4>
            </a>
            <hr>
            <p class="menu-small"> Баланс: {{ Auth::user()->balans }} руб </p>

            <p class="menu-small"> Приостановка: {{Auth::user()->EndOfService }} </p>
        </div>

        <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="/tikets">
                <span class="fa fa-life-ring"></span>
                <h4>Поддержка</h4>
            </a>
            <hr>
            <p class="menu-small"> Задания: {{$UserInfo['U_CRON_JOBS'] }} </p>
        </div>



    </menu>




    @if (Session::has('good'))
        <div class="container">
            <div class="alert alert-success text-center">{{Session::get('good')}}</div>
        </div>
    @endif




</header>





@yield('content')
   

@include('footer')
