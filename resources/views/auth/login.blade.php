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
   <a href="/" title=""><img src="/images/logo.png" alt="" title=""/></a>
   </div>
</div>

<div class="small-12 large-9 medium-9 columns">


<!--  NAVIGATION MENU AREA -->
    <nav class="desktop-menu">
     <ul class="sf-menu">

          @if (Auth::guest())
            <li class="current-menu-item"><a href="/auth/login">Войти</a></li>
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

<!-- LOGIN FORM -->
<div class="login-container">
<div class="row">
<div class="small-12 large-7 large-centered medium-7 medium-centered columns">

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


		<div class="login-form">
		<form role="form" method="POST" action="/auth/login" >
		
		Электронная почта: <input type="text"  name="email" size="50" value="{{ old('email') }}">
		Пароль: <input type="password" name="password" size="50">
		<input type="checkbox" name="remember"> Запомнить меня
		
<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="submit" value="Войти" />
		
		</form>
		<a href="/password/email">Забыли пароль?</a>
		</div>




</div>
</div>
</div>     

<!--  FOOTER  -->
<footer>
<div class="row">
<div class="small-12 columns">
<div class="contacts">
<div class="row">
<div class="small-12 large-3 medium-3 columns">
<i class="fa fa-map-marker"></i>
PORTLAND, OR, USA
</div>
<div class="small-12 large-3 medium-3 columns">
<i class="fa fa-mobile"></i>
+1 299-670-9615
</div>
<div class="small-12 large-3 medium-3 columns">
<a href=""><i class="fa fa-comments"></i></a>
LIVE CHAT
</div>
<div class="small-12 large-3 medium-3 columns">
<a href=""><i class="fa fa-envelope-o"></i></a>
E-MAIL US
</div>
</div>
</div>
</div>
</div>


<div class="row">
<div class="small-12 columns">
<div class="footerlinks"> 
<div class="small-12 large-3 medium-3 columns border-right">
<h2>Hosting Services</h2>
<ul>
<li><a href="shared.html">Shared Hosting</a></li>
<li><a href="vps.html">Managed VPS</a></li>
<li><a href="servers.html">Dedicated Services</a></li>
<li><a href="">Become a Reseller</a></li>
<li><a href="">Special Offers</a></li>
</ul>
</div>

<div class="small-12 large-3 medium-3 columns border-right">
<h2>Company</h2>
<ul>
<li><a href="">About us</a></li>
<li><a href="">Blog</a></li>
<li><a href="">Terms of Service</a></li>
<li><a href="">Acceptable Use Policy</a></li>
<li><a href="">Affiliates</a></li>
</ul>
</div>

<div class="small-12 large-3 medium-3 columns border-right">
<h2>Add-on Services</h2>
<ul>
<li><a href="">SSL Certificates</a></li>
<li><a href="">Dedicated IPs</a></li>
<li><a href="">Control Panel Licenses</a></li>
<li><a href="">WHMCS License</a></li>
<li><a href="">Migrations / Transfers</a></li>
</ul>
</div>

<div class="small-12 large-3 medium-3 columns">
<h2>CloudMe Newsletter</h2>
<p>Sign up for special offers:</p>

<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="//audemedia.us7.list-manage.com/subscribe/post?u=b5638e105dac814ad84960d90&amp;id=9345afa0aa" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
  
  <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_b5638e105dac814ad84960d90_9345afa0aa" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>
</div>
<!--End mc_embed_signup-->
</div>

</div>
</div>

<!--SOCIAL LINKS -->
<div class="social">
<div class="row">
<div class="small-12 columns">
<ul class="small-block-grid-1 large-block-grid-5 medium-block-grid-5"> 
<li class="facebook"><a href="">FACEBOOK</a></li> 
<li class="twitter"><a href="">TWITTER</a></li> 
<li class="googleplus"><a href="">GOOGLE+</a></li> 
<li class="linkedin"><a href="">LINKEDIN</a></li> 
<li class="pinterest"><a href="">PINTEREST</a></li> 
</ul>
</div>
</div>
</div>
<!-- END OF SOCIAL LINKS -->
<p class="copyright">© Copyright CloudMe, all rights reserved. </p>
</footer>
<!--  END OF FOOTER  -->

<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="/js/vendor/jquery.js"></script>
    <script src="/js/foundation.min.js"></script>
    <script src="/js/vendor/hoverIntent.js"></script>
    <script src="/js/vendor/superfish.min.js"></script>
    <script src="/js/vendor/morphext.min.js"></script>
    <script src="/js/vendor/wow.min.js"></script>
    <script src="/js/vendor/jquery.slicknav.min.js"></script>
    <script src="/js/vendor/waypoints.min.js"></script>
    <script src="/js/vendor/jquery.animateNumber.min.js"></script>
    <script src="/js/vendor/owl.carousel.min.js"></script>
    <script src="/js/vendor/jquery.slicknav.min.js"></script>
    <script src="/js/vendor/masonry.pkgd.min.js"></script>
    <script src="/js/custom.js"></script>

<script>
var container = document.querySelector('.testimonialsContainer');
var msnry = new Masonry( container, {
  // options
  itemSelector: '.testimonial-item'
}); 
</script>

  </body>
</html>








      