<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CloudMe - Хостинг для вашего сайта</title>
    <link rel="shortcut icon" href="images/icons/favicon.png" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/normalize.css" />
    <link rel="stylesheet" href="/css/foundation.css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/animate.min.css" />
    <link rel="stylesheet" href="/css/morphext.css" />
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.css">
    <link rel="stylesheet" href="/css/owl.transitions.css">
    <link rel="stylesheet" href="/css/slicknav.css">
    <link rel="stylesheet" href="/style.css" />
    <script src="/js/vendor/modernizr.js"></script>
  </head>
  <body class="login-page">

<!--  HEADER -->    
<header class="login">
<div class="top">
  <div class="row">
  <div class="small-12 large-3 medium-3 columns">
   <div class="logo">
   <a href="index.html" title=""><img src="/images/logo.png" alt="" title=""/></a>
   </div>
</div>

<div class="small-12 large-9 medium-9 columns">

<!--  NAVIGATION MENU AREA -->
    <nav class="desktop-menu">
     <ul class="sf-menu">
         <li class="current-menu-item"><a href="#">Хостинг</a></li>

          @if (Auth::guest())
            <li><a href="/auth/login">Войти</a></li>
            <li><a href="/auth/register">Зарегистрироваться</a></li>
          @else
          <li><a href="#">{{ Auth::user()->name }} </a>
              <ul>
                 <li><a href="/auth/logout">Выйти</a></li>
              </ul>
          </li>
          @endif
    </ul>
  </nav>
<!--  END OF NAVIGATION MENU AREA --> 

<!--  MOBILE MENU AREA -->
  <nav class="mobile-menu">
    <ul>
  <li>
         <li><a href="#">Хостинг</a></li>

          @if (Auth::guest())
            <li><a href="/auth/login">Войти</a></li>
            <li><a href="/auth/register">Зарегистрироваться</a></li>
          @else
          <li><a href="#">{{ Auth::user()->name }} </a>
              <ul>
                 <li><a href="/auth/logout">Выйти</a></li>
              </ul>
          </li>
          @endif
</ul>
  </nav>
  <!--  END OF MOBILE MENU AREA -->


  </div>
  </div>
  </div>

</header>  
<!--  END OF HEADER --> 




@yield('content')
   

@include('footer')




      