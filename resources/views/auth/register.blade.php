<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.png" />

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
                    <li><a href="/login">Войти</a></li>
                    <li><a href="/register">Зарегистрироваться</a></li>
                </ul>
            </div>
        </div>
    </nav>


</header>


<div class="container login-container">
    <div class="login-form text-center">


        <form action="{{URL::route('register.store')}}" method="post" class="col-xs-12 col-md-6">
            <div class="form-group">

                {!! Form::label('nickname', 'Псевдоним', array('class' => 'control-label')) !!}
                {!! Form::text('nickname', @$nickname, array('size'=> '50','class' => 'form-control'))!!}
            </div>

            <div class="form-group">
                {!! Form::label('name', 'Имя', array('class' => 'control-label')) !!}
                {!! Form::text('name', @$name, array('size'=> '50','class' => 'form-control'))!!}
            </div>

            <div class="form-group">
                {!! Form::label('lastname', 'Фамилия', array('class' => 'control-label')) !!}
                {!! Form::text('lastname', @$lastname, array('size'=> '50','class' => 'form-control'))!!}
            </div>


            <div class="form-group">
                {!! Form::label('package', 'Тарифный план', array('class' => 'control-label')) !!}

                {!! Form::select('package', array(
                '0' => 'Любительский',
                '1' => 'Профессиональный',
                '2' => 'Корпоративный'),
                null,
                array('class' => 'form-control'))
                !!}
            </div>


            <div class="form-group">
                {!! Form::label('email', 'E-Mail Адрес', array('class' => 'control-label')) !!}
                {!! Form::email('email', @$email, array('size'=> '100','class' => 'form-control'))!!}
            </div>


            <div class="form-group">
                {!! Form::label('password', 'Пароль', array('class' => 'control-label')) !!}
                {!! Form::password('password', array('size'=> '100','class' => 'form-control'))!!}
            </div>


            <div class="form-group">
                {!! Form::label('password_confirmation', 'Повторите пароль', array('class' => 'control-label')) !!}
                {!! Form::password('password_confirmation', array('size'=> '100','class' => 'form-control'))!!}
            </div>


            {!!  Form::token(); !!}
            <input type="submit" class="button-full" value="Зарегистрироваться">
            {!! Form::close() !!}


            <div  class="col-xs-12 col-md-6">

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









@include('footer')















