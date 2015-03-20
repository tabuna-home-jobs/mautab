<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CloudMe - Хостинг для вашего сайта</title>
    <link rel="shortcut icon" href="images/icons/favicon.png" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/morphext.css" />
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="style.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

<!--  HEADER -->    
<header>
<!--  MESSAGES ABOVE HEADER IMAGE -->
<div class="message">
<div class="row">
<div class="small-12 columns">
<div class="message-intro">
<span class="message-line"></span>
<p>Хостинг для вашего сайта</p>
<span class="message-line"></span>
</div>
<h1><span id="js-rotating">Лучшая площадка для вашего проекта</span></h1>
<a href="#pricingboxes" class="small radius button">Тарифные платы</a>
</div>
</div>
</div>
<!--  END OF MESSAGES ABOVE HEADER IMAGE -->

<div class="top">
  <div class="row">
  <div class="small-12 large-3 medium-3 columns">
   <div class="logo">
   <a href="/" title=""><img src="images/logo.png" alt="" title=""/></a>
   </div>
</div>

<div class="small-12 large-9 medium-9 columns">

<!--  NAVIGATION MENU AREA -->
    <nav class="desktop-menu">
     <ul class="sf-menu">
          @if (Auth::guest())
            <li><a href="/auth/login">Войти</a></li>
            <li><a href="/auth/register">Зарегистрироваться</a></li>
          @else
          <li class="current-menu-item"><a href="#">{{ Auth::user()->name }} </a>
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

<!--  FEATURES -->
<section class="features">
<div class="row">
<div class="small-12 columns">
<h2>Особенности</h2>
<p>Мы одни из первых, кто предлогает самые передовые технологии для профессиональной поддержки сайта</p>

<ul class="small-block-grid-1 large-block-grid-3 medium-block-grid-3">

<li  data-wow-delay="0.2s" class="wow fadeInLeft">
<i class="fa fa-database"></i>
<h3>Базы данных</h3>
<p>Используйте не только MySQL, но и PostgreSQL с предоставлением сервиса для их администрирования онлайн</p>
</li>

<li data-wow-delay="0.4s" class="wow fadeInLeft">
<i class="fa fa-git-square"></i>
<h3>Контроль версий</h3>
<p>Идеальная совместная работа комадны, обеспечиваеться системой контроля версий git</p>
</li>

<li data-wow-delay="0.6s" class="wow fadeInLeft">
<i class="fa fa-code"></i>
<h3>Программное обеспечение</h3>
<p>Использование только стабильного и современного программного обеспечения с постоянным автоматически обновлением</p>
</li>

<li data-wow-delay="0.2s" class="wow fadeInRight">
<i class="fa fa-bolt"></i>
<h3>Канал связи</h3>
<p>Мощный и стабильный канал связи обеспечит высокую скорость загрузки страниц</p>
</li>

<li data-wow-delay="0.4s" class="wow fadeInRight">
<i class="fa fa-hdd-o"></i>
<h3>SSD-Диски</h3>
<p>Для высокой производительности используеться исключительно твердотелые носители</p>
</li>

<li data-wow-delay="0.6s" class="wow fadeInRight">
<i class="fa fa-rocket"></i>
<h3>Node.js</h3>
<p>Теперь не нужно покупать VPS для использоания Node.js</p>
</li>

</ul>
</div>
</div>
</section>
<!--  END OF FEATURES -->

<!--  CALL TO ACTION  -->
<section class="calltoaction">
<div class="row">
<div class="small-12 columns">
<div data-wow-delay="0.3s" class="longshadow wow fadeInDown">Новый клиент?</div>
<div data-wow-delay="0.5s" class="calltoactioninfo wow fadeInUp">
<h2><span id="discount">0</span><span>%</span> Скидка</h2>
<h3>При вводе промокода <strong>"CLOUDMENEW"</strong></h3>
<a href="#" class="small radius button">Войти сейчас!</a>
</div>
</div>
</div>
</section>
<!--  END OF CALL TO ACTION -->




<!--  PRICING BOXES  -->
<div class="pricingboxes">
<a id="pricingboxes"></a>
<div class="row"> 
<div class="small-12 columns">
<h2>Выбери тариф который тебе подходит</h2>
<p>Оптимальное осотношение цены и позможностей для вашего проекта</p>
</div>
</div>

<div class="spacing-30"></div>

<div class="row">
<div data-wow-delay="0.2s"  class="small-12 large-4 medium-4 columns wow zoomIn">
<div class="title">Любительский</div>
<ul class="pricing-table">
<li class="description">100% поддержка <strong>CMS</strong></li>
<li class="bullet-item">5GB Диск</li>
<li class="bullet-item">5 Сайтов</li>
<li class="bullet-item">Один почтовый адрес</li>
<li class="bullet-item">Одна база данных</li>
<li class="bullet-item">24/7 техническая поддержка</li>
<li class="price"><span><i class="fa fa-rub"></i>
99</span>В месяц</li>
<li class="cta-button"><p><span><a href="">Заказать</a></span></p></li>
</ul>
</div>

<div data-wow-delay="0.4s"  class="small-12 large-4 medium-4 columns wow zoomIn">
<div class="title">Профессиональный</div>
<ul class="pricing-table">
<li class="description">Тонкая настройка - <strong>Легко</strong></li>
<li class="bullet-item">10GB Диск</li>
<li class="bullet-item">20 Сайтов</li>
<li class="bullet-item">100 почтовых адресов</li>
<li class="bullet-item">20 Баз данных</li>
<li class="bullet-item">Доступ к консоли</li>
<li class="price"><span><i class="fa fa-rub"></i>
299</span>В месяц</li>
<li class="cta-button"><p><span><a href="">Заказать</a></span></p></li>
</ul>
</div>

<div data-wow-delay="0.6s"  class="small-12 large-4 medium-4 columns wow zoomIn">
<div class="title">Корпоративный</div>
<ul class="pricing-table">
<li class="description">Лучшее решение для <strong>Веб-студии</strong></li>
<li class="bullet-item">20GB Диск</li>
<li class="bullet-item">50 Сайтов</li>
<li class="bullet-item">Неограниченное число адресов</li>
<li class="bullet-item">50 Баз данных</li>
<li class="bullet-item">Доступ к консоли</li>
<li class="price"><span><i class="fa fa-rub"></i>
499</span>В месяц</li>
<li class="cta-button"><p><span><a href="">Заказать</a></span></p></li>
</ul>
</div>

</div>
</div>
<!--  END OF PRCING BOXES  -->














<!--  SHARE HOSTING FEATURES  -->
<section class="sharedfeatures-odd wow fadeInUp">
<div class="row">
<div class="small-12 large-4 medium-4 columns">
<div class="circle"><i class="fa fa-globe"></i></div>
</div>
<div class="small-12 large-8 medium-8 columns">
<h2>Расположение серверов по всему миру</h2>
<p>Pitchfork occupy forage, try-hard Blue Bottle artisan Carles PBR typewriter banjo meh four loko fap. Butcher pork belly 90's, scenester raw denim crucifix you probably haven't heard of them kitsch beard cardigan lo-fi synth small batch. Kogi meh tattooed, YOLO Intelligentsia crucifix hoodie. Scenester Shoreditch mumblecore Intelligentsia DIY, 3 wolf moon beard. Chillwave distillery chambray, Neutra paleo fashion axe fixie. Irony XOXO farm-to-table fap narwhal, trust fund selfies put a bird on it Schlitz keffiyeh polaroid photo booth. </p>
</div>
</div>
</section>

<section class="sharedfeatures-even wow fadeInUp">
<div class="row">
<div class="small-12 large-8 medium-8 columns">
<h2>ONE-CLICK SOFTWARE INSTALLATIONS</h2>
<p>Pitchfork occupy forage, try-hard Blue Bottle artisan Carles PBR typewriter banjo meh four loko fap. Butcher pork belly 90's, scenester raw denim crucifix you probably haven't heard of them kitsch beard cardigan lo-fi synth small batch. Kogi meh tattooed, YOLO Intelligentsia crucifix hoodie. Scenester Shoreditch mumblecore Intelligentsia DIY, 3 wolf moon beard. Chillwave distillery chambray, Neutra paleo fashion axe fixie. Irony XOXO farm-to-table fap narwhal, trust fund selfies put a bird on it Schlitz keffiyeh polaroid photo booth. </p>
</div>
<div class="small-12 large-4 medium-4 columns">
<div class="circle"><i class="fa fa-random"></i></div>
</div>

</div>
</section>

<section class="sharedfeatures-odd wow fadeInUp">
<div class="row">
<div class="small-12 large-4 medium-4 columns">
<div class="circle"><i class="fa fa-thumbs-o-up"></i></div>
</div>
<div class="small-12 large-8 medium-8 columns">
<h2>24/7 SUPERB SUPPORT</h2>
<p>Pitchfork occupy forage, try-hard Blue Bottle artisan Carles PBR typewriter banjo meh four loko fap. Butcher pork belly 90's, scenester raw denim crucifix you probably haven't heard of them kitsch beard cardigan lo-fi synth small batch. Kogi meh tattooed, YOLO Intelligentsia crucifix hoodie. Scenester Shoreditch mumblecore Intelligentsia DIY, 3 wolf moon beard. Chillwave distillery chambray, Neutra paleo fashion axe fixie. Irony XOXO farm-to-table fap narwhal, trust fund selfies put a bird on it Schlitz keffiyeh polaroid photo booth. </p>
</div>
</div>
</section>

<section class="sharedfeatures-even wow fadeInUp">
<div class="row">
<div class="small-12 large-8 medium-8 columns">
<h2>SSD Drives</h2>
<p>Pitchfork occupy forage, try-hard Blue Bottle artisan Carles PBR typewriter banjo meh four loko fap. Butcher pork belly 90's, scenester raw denim crucifix you probably haven't heard of them kitsch beard cardigan lo-fi synth small batch. Kogi meh tattooed, YOLO Intelligentsia crucifix hoodie. Scenester Shoreditch mumblecore Intelligentsia DIY, 3 wolf moon beard. Chillwave distillery chambray, Neutra paleo fashion axe fixie. Irony XOXO farm-to-table fap narwhal, trust fund selfies put a bird on it Schlitz keffiyeh polaroid photo booth. </p>
</div>
<div class="small-12 large-4 medium-4 columns">
<div class="circle"><i class="fa fa-hdd-o"></i></div>
</div>

</div>
</section>
<!--  SHARE HOSTING FEATURES  -->















<!--  TESTIMONIALS  -->
<section class="testimonials">
<div class="row">
<div class="small-12 columns">
<div class="circle"><i class="fa fa-heart"></i></div>
<h2>Нас выбрали <span id="lovedby">0</span> разработчика</h2>
<hr class="small"/>

<div id="testimonials-carousel" class="owl-carousel">
    
    <div class="item">
    <div class="whoclient"><span>Petr Wright, Developer at <a href="">Aina Corp.</a></span></div>
    <div class="testimonial-content">
    <div class="testimonialimg"><img src="images/hn-200x200.jpg" alt="" /></div>
   <p>Semiotics ennui shabby chic irony Tumblr. Letterpress Cosby sweater put a bird on it ethnic fap Portland. Ethnic Pitchfork brunch, kogi crucifix cornhole fanny pack. Squid PBR artisan, Austin gastropub vegan lo-fi sustainable ethnic. Before they sold out 8-bit aesthetic ethnic mixtape.</p>
   </div>
    </div>

    <div class="item">
    <div class="whoclient"><span>Neil Wynter, Developer at <a href="">Reise S.A.</a></span></div>
    <div class="testimonial-content">
    <div class="testimonialimg"><img src="images/jo-200x200.jpg" alt="" /></div>
   <p>Voluptate kogi VHS, occupy hella banh mi Thundercats Godard jean shorts plaid in cred food truck. Plaid fingerstache craft beer, disrupt labore Tonx exercitation single-origin coffee assumenda raw denim delectus kogi. Thundercats proident photo booth Truffaut, banjo duis 8-bit church-key sunt mollit selvage elit Cosby.</p>
   </div>
    </div>

    <div class="item">
    <div class="whoclient"><span>Darron Williams, Developer at <a href="">Joseph Ltd.</a></span></div>
    <div class="testimonial-content">
    <div class="testimonialimg"><img src="images/sm-200x200.jpg" alt="" /></div>
   <p>Deep v bespoke ethical, fanny pack ea Odd Future sapiente chia et synth id slow-carb sriracha nesciunt tote bag. Meggings ex pug, enim Odd Future ea salvia deep v sartorial mlkshk literally yr sapiente. Shoreditch deserunt master cleanse, try-hard McSweeney's whatever art party put a bird on it pork.</p>
   </div>
    </div>

        
    </div>

</div>
</div>
</section>
<!--  END OF TESTIMONIALS -->

<!--  MONITORING  -->
<section class="monitoring">
<div class="row">
<div class="small-12 columns">
<h2>Быстрое и богатое управление проектами</h2>
<p class="text-center">С нашими бесплатными онлайн сервесами вы с лёгкостью сможете администрировать свой ресурс</p>
<div data-wow-delay="0.3s" class="text-center wow fadeInUp"><img src="images/monitoring.png" alt=""/></div>
</div>
</div>
</section>
<!--  END OF MONITORING  -->



<div class="domainfeatures-list">
<div class="row"> 
<div class="small-12 columns">
<!-- DOMAIN FEATURES   -->
<ul class="small-block-grid-1 large-block-grid-2 medium-block-grid-2 domainfeatures">

<li  data-wow-delay="0.1s" class="wow zoomIn">
<div class="row"> 
<div class="small-12 large-3 medium-3 columns">
<div class="circle"><i class="fa fa-repeat"></i></div>
</div>
<div class="small-12 large-9 medium-9 columns">
<h3>Бекап</h3>
<p>Допустили ошибку? - Этого уже нет</p>
</div>
</div>
</li>

<li  data-wow-delay="0.2s" class="wow zoomIn">
<div class="row"> 
<div class="small-12 large-3 medium-3 columns">
<div class="circle"><i class="fa fa-plus-circle"></i></div>
</div>
<div class="small-12 large-9 medium-9 columns">
<h3>Лёгое расширение</h3>
<p>Tote bag Brooklyn Bushwick pour-over. Helvetica shabby chic vegan stumptown. Occaecat yr seitan forage. Typewriter lo-fi sartorial.</p>
</div>
</div>
</li>

<li  data-wow-delay="0.3s" class="wow zoomIn">
<div class="row"> 
<div class="small-12 large-3 medium-3 columns">
<div class="circle"><i class="fa fa-list-alt"></i></div>
</div>
<div class="small-12 large-9 medium-9 columns">
<h3>Чистая панель управления</h3>
<p>Tote bag Brooklyn Bushwick pour-over. Helvetica shabby chic vegan stumptown. Occaecat yr seitan forage. Typewriter lo-fi sartorial.</p>
</div>
</div>
</li>

<li  data-wow-delay="0.4s" class="wow zoomIn">
<div class="row"> 
<div class="small-12 large-3 medium-3 columns">
<div class="circle"><i class="fa fa-cog"></i></div>
</div>
<div class="small-12 large-9 medium-9 columns">
<h3>DNS управление</h3>
<p>Tote bag Brooklyn Bushwick pour-over. Helvetica shabby chic vegan stumptown. Occaecat yr seitan forage. Typewriter lo-fi sartorial.</p>
</div>
</div>
</li>

<li  data-wow-delay="0.5s" class="wow zoomIn">
<div class="row"> 
<div class="small-12 large-3 medium-3 columns">
<div class="circle"><i class="fa fa-lock"></i></div>
</div>
<div class="small-12 large-9 medium-9 columns">
<h3>Надёжная защита</h3>
<p>Tote bag Brooklyn Bushwick pour-over. Helvetica shabby chic vegan stumptown. Occaecat yr seitan forage. Typewriter lo-fi sartorial.</p>
</div>
</div>
</li>

<li  data-wow-delay="0.6s" class="wow zoomIn">
<div class="row"> 
<div class="small-12 large-3 medium-3 columns">
<div class="circle"><i class="fa fa-usd"></i></div>
</div>
<div class="small-12 large-9 medium-9 columns">
<h3>Удобные варианты расчёта</h3>
<p>Tote bag Brooklyn Bushwick pour-over. Helvetica shabby chic vegan stumptown. Occaecat yr seitan forage. Typewriter lo-fi sartorial.</p>
</div>
</div>
</li>

</ul>
</div>
</div>
</div>
<!--  END OF DOMAIN FEATURES  -->




<!--  CONTACT CONTENT  -->
<div class="contact-section">
<div class="row"> 
<div class="small-12 large-4 medium-4 columns">
<p>Organic disrupt literally yr, cornhole butcher messenger bag shabby chic readymade ennui gentrify. Photo booth Thundercats letterpress, shabby chic distillery keytar Pitchfork 90's try-hard. Ugh Tonx Pitchfork paleo bicycle rights. Craft beer PBR leggings Etsy.</p>

<div class="contact-details">
<h4>CloudMe</h4>   
<ul>
<li><span>1787 North Williams Avenue</span>
Suite B, Portland, OR, USA</li>
<li>+1 299-670-9615</li>
<li><a href="" title="">hello@cloudme.com</a></li>
</ul>
</div>
</div>
<div class="small-12 large-8 medium-8 columns">


<div id="sendstatus"></div>
<div id="contactform">
<form method="post" action="sendmail.php">
          
            <p><label for="name">Имя:*</label> <input type="text" name="name" id="name" tabindex="1" /></p>
            <p><label for="email">Email:*</label> <input type="text" name="email" id="email" tabindex="2" /></p>
            <p><label for="comments">Сообщение:*</label> <textarea name="comments" id="comments" cols="12" rows="6" tabindex="3"></textarea></p>  
            <p><input type="submit" class="button radius medium" name="submit" id="submit" value="Отправить" tabindex="4" /></p>

</form> 
</div>

</div>
</div>
</div>

<!--  END OF CONTACT CONTENT  -->


@include('footer')