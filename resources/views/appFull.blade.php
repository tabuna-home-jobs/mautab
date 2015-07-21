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
                <li><a href="/price">Цена</a></li>
                <li><a href="#">Помощь</a></li>
                <li><a href="#">Цена</a></li>
                <li><a href="#">Помощь</a></li>


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
                React LLC 2014
            </div>
            <div class="col-sm-6 menu">
                <ul>
                    <li class="active">
                        <a href="#">Возможности</a>
                    </li>
                    <li>
                        <a href="#">Оплата</a>
                    </li>
                    <li>
                        <a href="#">Цена</a>
                    </li>
                    <li>
                        <a href="#">Помощь</a>
                    </li>
                    <li>
                        <a href="#">О нас</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3 social">
                <a href="features.html#">
                    <img src="images/social/social-tw.png" alt="twitter"/>
                </a>
                <a href="features.html#">
                    <img src="images/social/social-dbl.png" alt="dribbble"/>
                </a>
            </div>
        </div>
    </div>
</div>
