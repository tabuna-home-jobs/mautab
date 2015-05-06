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
                  @if (Auth::guest())
            <li><a href="/auth/login">Войти</a></li>
            <li><a href="/auth/register">Зарегистрироваться</a></li>
           @else
          <li><a href="#">{{ Auth::user()->name }} </a></li>
          @endif
        </ul>
      </div>
    </div>
  </nav>


    <!--  MONITORING  -->
    <section class="monitoring col-xs-12">
        <h2>Быстрое и богатое управление проектами</h2>

        <p class="text-center">С нашими бесплатными онлайн сервесами вы с лёгкостью сможете администрировать свой ресурс</p>

        <div data-wow-delay="0.3s" class="text-center wow fadeInUp monit"><img src="/img/monitoring.png" class="img-responsive center-block" alt=""/></div>

        <div class="container"><p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin molestie ultrices. Aliquam at
                                                      efficitur nibh. Etiam accumsan diam ut ligula interdum, non interdum est ornare. Curabitur dapibus nisl in ipsum
                                                      aliquet condimentum quis sit amet metus. Aliquam semper vehicula lacus volutpat tincidunt. Suspendisse vel sem id
                                                      ante rhoncus convallis id in dui. Vestibulum urna quam, porttitor id aliquet vel, lobortis at odio. Quisque nec
                                                      pulvinar sapien. </p></div>

    </section>
    <!--  END OF MONITORING  -->


    <!--
      <div class="container text-center">
        <h3>Хостинг для вашего сайта</h3>

        <h1>Лучшая площадка для вашего проекта</h1>
        <button type="submit" class="btn button-prizrak">Тарифные планы</button>
      </div>
    -->

</header>


<!--  TESTIMONIALS  -->
<section class="testimonials col-xs-12">
    <div class="circle"><i class="fa fa-heart"></i></div>
    <h2>Нас выбрали <span id="lovedby">0</span> разработчика</h2>
</section>
<!--  END OF TESTIMONIALS -->


<section class="features  col-xs-12">
  <div class="container">
    <div class="row text-center">
      <h2>Особенности</h2>

      <p>Мы одни из первых, кто предлогает самые передовые технологии для профессиональной поддержки сайта</p>


        <ul class="col-xs-12">
        <li class="wow fadeInLeft col-xs-12 col-sm-4" data-wow-delay="0.2s">
          <i class="fa fa-database"></i>

          <h3>Базы данных</h3>

          <p>Используйте не только MySQL, но и PostgreSQL с предоставлением сервиса для их администрирования онлайн</p>
        </li>

        <li class="wow fadeInLeft col-xs-12 col-sm-4" data-wow-delay="0.4s">
          <i class="fa fa-git-square"></i>

          <h3>Контроль версий</h3>

          <p>Идеальная совместная работа комадны, обеспечиваеться системой контроля версий git</p>
        </li>

        <li class="wow fadeInLeft col-xs-12 col-sm-4" data-wow-delay="0.6s">
          <i class="fa fa-code"></i>

          <h3>Программное обеспечение</h3>

          <p>Использование только стабильного и современного программного обеспечения с постоянным автоматически обновлением</p>
        </li>

        <li class="wow fadeInRight col-xs-12 col-sm-4" data-wow-delay="0.2s">
          <i class="fa fa-bolt"></i>

          <h3>Канал связи</h3>

          <p>Мощный и стабильный канал связи обеспечит высокую скорость загрузки страниц</p>
        </li>

        <li class="wow fadeInRight col-xs-12 col-sm-4" data-wow-delay="0.4s">
          <i class="fa fa-hdd-o"></i>

          <h3>SSD-Диски</h3>

          <p>Для высокой производительности используеться исключительно твердотелые носители</p>
        </li>

        <li class="wow fadeInRight col-xs-12 col-sm-4" data-wow-delay="0.6s">
          <i class="fa fa-rocket"></i>

          <h3>Node.js</h3>

          <p>Теперь не нужно покупать VPS для использоания Node.js</p>
        </li>
      </ul>

    </div>
  </div>
</section>


<!--  TESTIMONIALS  -->
<section class="testimonials col-xs-12">
    <div class="circle"><i class="fa fa-heart"></i></div>
    <h2>Нас выбрали <span id="lovedby">0</span> разработчика</h2>
</section>
<!--  END OF TESTIMONIALS -->

<!--  PRICING BOXES  -->
<div class="pricingboxes container">
  <div class="col-xs-12">
      <h2>Тут должен быть хороший современный вид цены!</h2>

    <p>Оптимальное осотношение цены и позможностей для вашего проекта</p>
  </div>

  <div class="col-xs-12">
    <div data-wow-delay="0.2s" class="col-xs-12 col-sm-4 columns wow zoomIn">
      <div class="title">Любительский</div>
      <ul class="pricing-table">
        <li class="description">100% поддержка <strong>CMS</strong></li>
        <li class="bullet-item">5GB Диск</li>
        <li class="bullet-item">5 Сайтов</li>
        <li class="bullet-item">Один почтовый адрес</li>
        <li class="bullet-item">Одна база данных</li>
        <li class="bullet-item">24/7 техническая поддержка</li>
        <li class="price"><span><i class="fa fa-rub"></i>
99</span>В месяц
        </li>
        <li class="cta-button"><p><span><a href="">Заказать</a></span></p></li>
      </ul>
    </div>

    <div data-wow-delay="0.4s" class="col-xs-12 col-sm-4 columns wow zoomIn">
      <div class="title">Профессиональный</div>
      <ul class="pricing-table">
        <li class="description">Тонкая настройка - <strong>Легко</strong></li>
        <li class="bullet-item">10GB Диск</li>
        <li class="bullet-item">20 Сайтов</li>
        <li class="bullet-item">100 почтовых адресов</li>
        <li class="bullet-item">20 Баз данных</li>
        <li class="bullet-item">Доступ к консоли</li>
        <li class="price"><span><i class="fa fa-rub"></i>
299</span>В месяц
        </li>
        <li class="cta-button"><p><span><a href="">Заказать</a></span></p></li>
      </ul>
    </div>

    <div data-wow-delay="0.6s" class="col-xs-12 col-sm-4 columns wow zoomIn">
      <div class="title">Корпоративный</div>
      <ul class="pricing-table">
        <li class="description">Лучшее решение для <strong>Веб-студии</strong></li>
        <li class="bullet-item">20GB Диск</li>
        <li class="bullet-item">50 Сайтов</li>
        <li class="bullet-item">Неограниченное число адресов</li>
        <li class="bullet-item">50 Баз данных</li>
        <li class="bullet-item">Доступ к консоли</li>
        <li class="price"><span><i class="fa fa-rub"></i>
499</span>В месяц
        </li>
        <li class="cta-button"><p><span><a href="">Заказать</a></span></p></li>
      </ul>
    </div>

  </div>
</div>
<!--  END OF PRCING BOXES  -->


<!--  CALL TO ACTION  -->
<section class="calltoaction">
    <div class="col-xs-12">
        <div data-wow-delay="0.3s" class="longshadow wow fadeInDown">Новый клиент?</div>
        <div data-wow-delay="0.5s" class="calltoactioninfo wow fadeInUp">
            <h2><span id="discount">0</span><span>%</span> Скидка</h2>

            <h3>При вводе промокода <strong>"CLOUDMENEW"</strong></h3>
            <a href="#" class="btn">Войти сейчас!</a>
        </div>
    </div>
</section>
<!--  END OF CALL TO ACTION -->



<!--  SHARE HOSTING FEATURES  -->
<section class="sharedfeatures-odd wow fadeInUp ">
  <div class="container">
    <div class="col-xs-12 col-sm-4">
      <div class="circle"><i class="fa fa-globe"></i></div>
    </div>
    <div class="col-xs-12 col-sm-8">
      <h2>Расположение серверов по всему миру</h2>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin molestie ultrices. Aliquam at efficitur nibh. Etiam accumsan diam ut ligula interdum, non interdum est ornare. Curabitur dapibus nisl in ipsum aliquet condimentum quis sit amet metus. Aliquam semper vehicula lacus volutpat tincidunt. Suspendisse vel sem id ante rhoncus convallis id in dui. Vestibulum urna quam, porttitor id aliquet vel, lobortis at odio. Quisque nec pulvinar sapien. </p>
    </div>
  </div>
</section>

<section class="sharedfeatures-even wow fadeInUp">
  <div class="container">
    <div class="col-xs-12 col-sm-8">
      <h2>Простая установка</h2>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin molestie ultrices. Aliquam at efficitur nibh. Etiam accumsan diam ut ligula interdum, non interdum est ornare. Curabitur dapibus nisl in ipsum aliquet condimentum quis sit amet metus. Aliquam semper vehicula lacus volutpat tincidunt. Suspendisse vel sem id ante rhoncus convallis id in dui. Vestibulum urna quam, porttitor id aliquet vel, lobortis at odio. Quisque nec pulvinar sapien.  </p>
    </div>
    <div class="col-xs-12 col-sm-4">
      <div class="circle"><i class="fa fa-random"></i></div>
    </div>
  </div>

</section>

<section class="sharedfeatures-odd wow fadeInUp">
  <div class="container">
    <div class="col-xs-12 col-sm-4">
      <div class="circle"><i class="fa fa-thumbs-o-up"></i></div>
    </div>
    <div class="col-xs-12 col-sm-8">
      <h2>24/7  Круглосуточная поддержка</h2>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin molestie ultrices. Aliquam at efficitur nibh. Etiam accumsan diam ut ligula interdum, non interdum est ornare. Curabitur dapibus nisl in ipsum aliquet condimentum quis sit amet metus. Aliquam semper vehicula lacus volutpat tincidunt. Suspendisse vel sem id ante rhoncus convallis id in dui. Vestibulum urna quam, porttitor id aliquet vel, lobortis at odio. Quisque nec pulvinar sapien. </p>
    </div>
  </div>
</section>

<section class="sharedfeatures-even wow fadeInUp">
  <div class="container">
    <div class="col-xs-12 col-sm-8">
      <h2>SSD Диски</h2>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin molestie ultrices. Aliquam at efficitur nibh. Etiam accumsan diam ut ligula interdum, non interdum est ornare. Curabitur dapibus nisl in ipsum aliquet condimentum quis sit amet metus. Aliquam semper vehicula lacus volutpat tincidunt. Suspendisse vel sem id ante rhoncus convallis id in dui. Vestibulum urna quam, porttitor id aliquet vel, lobortis at odio. Quisque nec pulvinar sapien.  </p>
    </div>
    <div class="col-xs-12 col-sm-4">
      <div class="circle"><i class="fa fa-hdd-o"></i></div>
    </div>
  </div>
</section>
<!--  SHARE HOSTING FEATURES  -->






<!--  CONTACT CONTENT  -->
<div class="contact-section col-xs-12">
  <div class="container">
    <div class="col-xs-12 col-sm-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin molestie ultrices. Aliquam at efficitur nibh. Etiam accumsan diam ut ligula interdum, non interdum est ornare. Curabitur dapibus nisl in ipsum aliquet condimentum quis sit amet metus. Aliquam semper vehicula lacus volutpat tincidunt. Suspendisse vel sem id ante rhoncus convallis id in dui. Vestibulum urna quam, porttitor id aliquet vel, lobortis at odio. Quisque nec pulvinar sapien. </p>

      <div class="contact-details">
        <h4>CloudMe</h4>
        <ul>
          <li><span>г.Москва, Красная площадь, Кремль. </span>
            Центральный регион, Россия
          </li>
          <li>8 (495) 695-37-76</li>
          <li><a href="" title="">hello@cloudme.com</a></li>
        </ul>
      </div>
    </div>
    <div class="col-xs-12 col-sm-8 wow fadeInUp">

      <div id="contactform">

          <h1>Тут красивая форма</h1>

      </div>

    </div>
  </div>
</div>

<!--  END OF CONTACT CONTENT  -->



















@include('footer')


