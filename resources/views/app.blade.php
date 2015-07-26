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


    <!-- CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/main.css">
    <link rel="stylesheet" href="/theme.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries. All other JS at the end of file. -->
    <!-- [if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>


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
                <li><a href="#">Цена</a></li>
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


<section class="container">


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






    @include('user/_layouts/headerHosting')
    @yield('content')

</section>


@include('footer')




