<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.png"/>

    <title>Cloudme</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
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
                    <li><a href="/auth/login">Войти</a></li>
                    <li><a href="/auth/register">Зарегистрироваться</a></li>
                </ul>
            </div>
        </div>
    </nav>


</header>


<div class="container text-center">
    <h1>Опришлите ещё раз</h1>
</div>


<div class="container login-container">
    <div class="login-form text-center">


        <form action="/auth/repeat" class="col-xs-12 col-md-6" method="post">

            <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <input class="form-control" size="100" value="{{ old('email')  }}" name="email" type="email">
            </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="button-full" value="Востановить пароль">
        </form>


        <div class="col-xs-12 col-md-6">


            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif


            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Что то пошло не так!</strong> Пожалуйста проверьте вводимые данные.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <img class="img-responsive" alt="" src="/img/email-mockup.png">
        </div>


    </div>
</div>


</header>





@include('footer')
