<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MauTab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="none"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>


    <!-- CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/main.css">
    <link rel="stylesheet" href="/theme.css">


    <!-- Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>


<body class="body-full">


<header class="navbar navbar-inverse normal" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">Mautab</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">


                <li class="active"><a href="#">Возможности</a></li>
                <li><a href="/price">Хостинг</a></li>
                <li><a href="#">База знаний</a></li>
                <li><a href="/auth/login">Войти</a></li>


            </ul>
            <ul class="nav navbar-nav navbar-right visible-md visible-lg">
                <li>
                    <a href="/auth/login" class="button">Попробывать</a>
                </li>
            </ul>
        </nav>
    </div>
</header>


@yield('content')


<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 copyright">
                © 2015 Mautab, Inc.
            </div>
            <div class="col-sm-9 menu">
                <ul>
                    <li class="active">
                        <a href="#">Конфеденциальность</a>
                    </li>
                    <li>
                        <a href="#">Способы оплаты</a>
                    </li>
                    <li>
                        <a href="#">База знаний</a>
                    </li>
                    <li>
                        <a href="#">Разработка сайтов</a>
                    </li>
                    <li>
                        <a href="#">О нас</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
