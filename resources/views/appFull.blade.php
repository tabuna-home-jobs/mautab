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

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->


    <link rel="stylesheet" href="/theme//bower_components/bootstrap/dist/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="/theme/bower_components/animate.css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="/theme/bower_components/font-awesome/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="/theme/css/app.css" type="text/css"/>

    <link rel="stylesheet" href="/main.css">
    <!--<link rel="stylesheet" href="/theme.css">-->

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
                <li>
                    <a href="#what" data-ride="scroll">What is Angulr</a>
                </li>
                <li>
                    <a href="#why" data-ride="scroll">Why</a>
                </li>
                <li>
                    <a href="#features" data-ride="scroll">Features</a>
                </li>
                <li>
                    <a href="http://themeforest.net/item/angulr-bootstrap-admin-web-app-with-angularjs/8437259">Download</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <div class="m-t-sm">
                        <a href="/auth/login" class="btn btn-link btn-sm">Войти</a> или
                        <a href="/auth/register" class="btn btn-sm btn-primary btn-rounded m-l"><strong>Зарегистрироваться</strong></a>
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
                    <h4 class="text-u-c m-b font-thin"><span class="b-b b-dark font-bold">Version</span> options</h4>
                    <ul class="list-unstyled">
                        <li><a href="../angular"><i class="fa fa-angle-right m-r-sm"></i>Angular App</a></li>
                        <li><a href="../html"><i class="fa fa-angle-right m-r-sm"></i>Html Template</a></li>
                        <li><a href="../angular/#music/home"><i class="fa fa-angle-right m-r-sm"></i>Music single page
                                application</a></li>
                        <li><a href="#"><i class="fa fa-angle-right m-r-sm"></i>App landing page</a></li>
                    </ul>
                    <p class="m-b-xl">More coming...</p>
                </div>
                <div class="col-sm-3">
                    <h4 class="text-u-c m-b font-thin"><span class="b-b b-dark font-bold">Find</span> Us</h4>

                    <p class="text-sm">23 soe Midlokls <br>
                        120002 Loki — UNITED KINGDOM <br>
                        +333 432 321 322
                    </p>

                    <p>Sale: <a href="mailto:hey@example.com">info@example.com</a></p>

                    <p class="m-b-xl">Job: <a href="mailto:hey@example.com">job@example.com</a></p>
                </div>
                <div class="col-sm-3">
                    <h4 class="text-u-c m-b-xl font-thin"><span class="b-b b-dark font-bold">Follow</span> Us</h4>

                    <div class="m-b-xl">
                        <a href="#" class="btn btn-icon btn-rounded btn-dark"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn btn-icon btn-rounded btn-dark"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="btn btn-icon btn-rounded btn-dark"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="btn btn-icon btn-rounded btn-dark"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="btn btn-icon btn-rounded btn-dark"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h4 class="text-u-c m-b font-thin"><span class="b-b b-dark font-bold">News</span> Letter</h4>

                    <p>Do not want to miss anything? Subscribe to our newsletter box</p>

                    <form class="form-inline m-t m-b text-center m-b-xl">
                        <div class="aside-xl inline">
                            <div class="input-group">
                                <input type="text" id="address" name="address" class="form-control btn-rounded"
                                       placeholder="Your email">
                    <span class="input-group-btn">
                      <button class="btn btn-default btn-rounded" type="submit">Subscribe</button>
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
                        <li><a href="#">Sales</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">API</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Job</a></li>
                    </ul>
                </div>
                <div class="col-xs-4 text-right">
                    Angulr &copy; 2015
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