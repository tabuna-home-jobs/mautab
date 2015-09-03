<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MauTab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>

    <link rel="stylesheet" href="/theme//bower_components/bootstrap/dist/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="/theme/bower_components/animate.css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="/theme/bower_components/font-awesome/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="/theme/css/app.css" type="text/css"/>

    <link rel="stylesheet" href="/main.css">
</head>


<div class="app app-header-fixed">
    @yield('content')
</div>

<script src="/theme/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/theme/bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="/theme/bower_components/jquery_appear/jquery.appear.js"></script>
</body>
</html>