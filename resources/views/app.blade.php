<!DOCTYPE html>
<html lang="en">
<head>
    <!-- set the title of you site -->
    <title>Framer - Awesome components based framework / Demo 2</title>
    <!-- encoding -->
    <meta charset="utf-8">
    <!-- responsiveness, scaling... -->
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <!-- set the descritpion of you site -->
    <meta name="description"
          content="Responsive, Mobile First, Retina, Bootstrap 3, One Page, Multi Page, Multi-Purpose, Agency, Clean, Creative, Minimal">
    <!-- set author of your site -->
    <meta name="author" content="Awerest - interactive studio">
    <!-- IE compatibility modes -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}" >

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


    <!-- custom styling -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/main.css">
    <!-- iconic font - FontAwesome -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700,300,600,400&subset=latin,cyrillic-ext'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat::300italic,400italic,600italic,700,300,600,400&subset=latin,cyrillic-ext'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700,300,600,400&subset=latin,cyrillic-ext'
          rel='stylesheet' type='text/css'>
    <!-- favicon -->
    <link rel="icon" type="image/ico" href="favicon.ico">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries. All other JS at the end of file. -->
    <!-- [if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60" class="theme-two">


<div class="navbar navbar-default navbar-fixed-top skrollable skrollable-between" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#video-hero-1" class="navbar-brand"><img class="img-responsive" src="/img/framer-logo-light.png"
                                                              alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#video-hero-1">Home</a></li>
                <li class=""><a href="#services">Services</a></li>
                <li class=""><a href="#features">Features</a></li>
                <li class=""><a href="#counter">About</a></li>
                <li class=""><a href="#blog">Blog</a></li>
            </ul>
        </div>
    </div>
</div>


<section class="container">


    @if (Session::has('good'))
        <div class="alert alert-success text-center container">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
            {{Session::get('good')}}
        </div>
    @endif
    @if (Session::has('danger'))
        <div class="alert alert-danger text-center container">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
            {{Session::get('danger')}}
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger container">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</section>


@yield('content')


<footer class="dark-footer black-gray-bg light">
    <div class="divide-xs"></div>
    <div class="container">
        <div class="row text-center">
            <div class="col-xs-12 divide-sm">
                <img class="img-responsive" src="img/framer-logo-light.png" alt="">
            </div>
            <div class="col-sm-6 col-sm-offset-3 divide-sm">
                <p class="dark-smoke">Framer is not just one template, it's a tons of components that together create
                    unlimited number of templates. Initial version contains: 8 hero, 14 content, 11 showcase sections, 8
                    footers, 2 contact pages, 10 blog pages and 7 demos, + 20 various other sections. We are dedicated
                    to work on new components and expand framer in the future.</p>
            </div>


            <div class="col-xs-12">
                <div class="row divide-sm">
                    <div class="col-sm-3 divide-sm separator">
                        <h4>Company</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 divide-sm separator">
                        <h4>Menu</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 divide-sm separator">
                        <h4>Features</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Images</a></li>
                            <li><a href="#">Icons</a></li>
                            <li><a href="#">Fonts</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 divide-sm separator">
                        <h4>News</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Career</a></li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="divide-xs"></div>
    <div class="black-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12  divide-xs text-center dark-smoke">
                    <p>
                        <small>Copyright &copy; 2015 Awerest Inc. All rights reserved.</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>



