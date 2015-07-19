@extends('app')

@section('content')



























    <section class="smoke-bg">
        <div class="container">
            <div class="row divide-md">
                <div class="col-sm-6">
                    <div class="squared fully-squared">
                        <div class="squared-content">
                            <h1>Хостинг<br> сайтов<br>21 века</h1>
                            <a href="index-3.html#" class="btn btn-strong-style black">Зарегистироваться</a>

                            <div class="horizontal-divider"></div>
                            <a href="index-3.html#" class="btn-underline btn-strong-style black">Войти</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="squared fully-squared">
                        <div class="squared-content">
                            <div id="carousel-hero-2" class="carousel" data-ride="carousel">
                                <div class="carousel-inner text-center light">
                                    <div class="item active">
                                        <img src="img/hero-featured-slide-1.png" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="img/hero-featured-slide-2.png" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="img/hero-featured-slide-3.png" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="smoke-bg">
        <!-- tabs / icons -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div role="tabpanel">
                        <ul class="nav nav-tabs nav-justified nav-tabs-top smoke-arrow" role="tablist">
                            <li role="presentation">
                                <a href="index-3.html#tab-5" aria-controls="tab-5" role="tab" data-toggle="tab">
                                    <div class="icon icon-lg gray">
                                        <svg viewBox="0 0 32 32">
                                            <use xlink:href="#happy-smiley"></use>
                                        </svg>
                                    </div>
                                    <h3>Why</h3>
                                </a>
                            </li>
                            <li class="active" role="presentation">
                                <a href="index-3.html#tab-4" aria-controls="tab-4" role="tab" data-toggle="tab">
                                    <div class="icon icon-lg gray">
                                        <svg viewBox="0 0 32 32">
                                            <use xlink:href="#heart"></use>
                                        </svg>
                                    </div>
                                    <h3>Where</h3>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="index-3.html#tab-6" aria-controls="tab-6" role="tab" data-toggle="tab">
                                    <div class="icon icon-lg gray">
                                        <svg viewBox="0 0 32 32">
                                            <use xlink:href="#handle-vector"></use>
                                        </svg>
                                    </div>
                                    <h3>Who</h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content smoke-bg">
            <!-- panel #2 / left tab -->
            <div role="tabpanel" class="tab-pane fade in wh" id="tab-5">
                <div class="float-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <h1 class="wow fadeInUp">Components<br> based framework</h1>

                                <p class="wow fadeInUp" data-wow-delay=".3s">Meet Framer, extended and designed
                                    framework based on Bootstrap with easy-to-use attribute<br> that will speed up
                                    process of building a website and give awesome end product.</p>
                                <a href="index-3.html#" class="btn btn-strong-style black wow fadeInUp"
                                   data-wow-delay=".6s">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- panel #1 / middle tab / first active and visible -->
            <div role="tabpanel" class="tab-pane fade in active wh" id="tab-4">
                <div class="float-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <h1 class="wow fadeInUp">One template<br> infinite possibilities</h1>

                                <p class="wow fadeInUp" data-wow-delay=".3s">A tons of sections that together create
                                    unlimited number of templates.<br> Initial version contains 80+ secitons and we will
                                    make a lot of new ones in the future.</p>
                                <a href="index-3.html#" class="btn btn-strong-style black wow fadeInUp"
                                   data-wow-delay=".6s">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- panel #3 / right tab -->
            <div role="tabpanel" class="tab-pane fade in wh" id="tab-6">
                <div class="float-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <h1 class="wow fadeInUp">Just getting more<br> and more awesome</h1>

                                <p class="wow fadeInUp" data-wow-delay=".3s">We specialize in crafting awesome internet
                                    things, no developers were harmed<br> in the making of this product. We are
                                    dedicated to work on new sections and expand framer in the future.</p>
                                <a href="index-3.html#" class="btn btn-strong-style black wow fadeInUp"
                                   data-wow-delay=".6s">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dark-gray-bg">
        <div class="container">
            <div class="row divide-xl pricing-tables light">
                <div class="col-sm-4 divide-sm text-center">
                    <h4>Basic</h4>

                    <div class="divide-xs"></div>
                    <div class="icon icon-lg gray">
                        <svg viewBox="0 0 32 32">
                            <use xlink:href="#flag"></use>
                        </svg>
                    </div>
                    <div class="divide-xs"></div>
                    <h2 class="inline">$12</h2>

                    <h3 class="inline">
                        <small> / mo</small>
                    </h3>
                    <hr class="dark">
                    <p class="smoke">Easily and efficiently scales your project with one code base, from phones to
                        tablets to desktops.</p>
                    <a href="index-3.html#" class="btn-ghost btn-strong-style light deep-orange">Sign Up</a>
                </div>
                <div class="col-sm-4 divide-sm text-center">
                    <h4>Advanced</h4>

                    <div class="divide-xs"></div>
                    <div class="icon icon-lg gray">
                        <svg viewBox="0 0 32 32">
                            <use xlink:href="#console"></use>
                        </svg>
                    </div>
                    <div class="divide-xs"></div>
                    <h2 class="inline">$18</h2>

                    <h3 class="inline">
                        <small> / mo</small>
                    </h3>
                    <hr class="dark">
                    <p class="smoke">Serve high-resolution images to devices with retina displays. Framer will look
                        beautiful on any device.</p>
                    <a href="index-3.html#" class="btn-ghost btn-strong-style light deep-orange">Sign Up</a>
                </div>
                <div class="col-sm-4 divide-sm text-center">
                    <h4>Business</h4>

                    <div class="divide-xs"></div>
                    <div class="icon icon-lg gray">
                        <svg viewBox="0 0 32 32">
                            <use xlink:href="#globe"></use>
                        </svg>
                    </div>
                    <div class="divide-xs"></div>
                    <h2 class="inline">$26</h2>

                    <h3 class="inline">
                        <small> / mo</small>
                    </h3>
                    <hr class="dark">
                    <p class="smoke">Valid and clean code. Modern subtle animations. Files are commented for quick and
                        easy handling.</p>
                    <a href="index-3.html#" class="btn-ghost btn-strong-style light deep-orange">Sign Up</a>
                </div>
            </div>
        </div>
    </section>













    <section id="" class="theme-one">
        <section>
            <div class="container">
                <div class="row divide-md">
                    <ul class="logo-grid">
                        <li class="col-sm-3 col-xs-6 logo first-row">
                            <img class="img-responsive" alt="" src="/img/logo-1.png">
                        </li>
                        <li class="col-sm-3 col-xs-6 logo first-row">
                            <img class="img-responsive" alt="" src="img/logo-2.png">
                        </li>
                        <li class="col-sm-3 col-xs-6 logo first-row">
                            <img class="img-responsive" alt="" src="img/logo-3.png">
                        </li>
                        <li class="col-sm-3 col-xs-6 ogo first-row last">
                            <img class="img-responsive" alt="" src="img/logo-4.png">
                        </li>
                        <li class="col-sm-3 col-xs-6 logo second-row">
                            <img class="img-responsive" alt="" src="img/logo-5.png">
                        </li>
                        <li class="col-sm-3 col-xs-6 logo second-row">
                            <img class="img-responsive" alt="" src="img/logo-6.png">
                        </li>
                        <li class="col-sm-3 col-xs-6 logo second-row">
                            <img class="img-responsive" alt="" src="img/logo-7.png">
                        </li>
                        <li class="col-sm-3 col-xs-6 logo second-row last">
                            <img class="img-responsive" alt="" src="img/logo-8.png">
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </section>












    <section class="hero-content-1">
        <div class="container">
            <div class="row divide-xl">
                <div class="col-sm-6 divide-sm">
                    <h5 class="smoke">From Envato elite author:</h5>

                    <h2 class="light">The ultimate framework made for all</h2>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-2 divide-lg">
                    <div class="deep-orange-bg divide-xxs"></div>
                </div>
                <div class="col-sm-4 col-sm-offset-2 smoke lead divide-lg">
                    <p>Ideal for startup. Wrap up your startup with beautiful website. Use our premade templates or
                        combine sections quick and easy. With Framer you have options as many as you want.</p>
                </div>
                <div class="col-sm-4 smoke lead divide-lg">
                    <p>Superb for companies. None of the sections depends of layout, customize it and combine to fit
                        your needs. Copy your content in to new, modern design and refresh your brand.</p>
                </div>
            </div>
        </div>
    </section>












    <section class="dark-smoke-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="timeline divide-md">
                        <ul>
                            <li class="left">
                                <div class="timesection">
                                    <div class="timeline-img"><img src="img/works-10.jpg" alt=""></div>
                                    <div class="timeline-content">
                                        <h3>
                                            <small>6. Feb. 2015</small>
                                        </h3>
                                        <h3>Flexibile</h3>

                                        <p>There are no limits in combinations, you can create anything you want.</p>
                                        <a class="btn deep-orange" href="#">More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="right">
                                <div class="timesection">
                                    <div class="timeline-img"><img src="img/works-11.jpg" alt=""></div>
                                    <div class="timeline-content">
                                        <h3>
                                            <small>5. Feb. 2015</small>
                                        </h3>
                                        <h3>Easy to Use</h3>

                                        <p>Stack premade and build new sections with use of components that fit in any
                                            layout.</p>
                                        <a class="btn deep-orange" href="#">More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="left">
                                <div class="timesection">
                                    <div class="timeline-img"><img src="img/works-12.jpg" alt=""></div>
                                    <div class="timeline-content">
                                        <h3>
                                            <small>4. Feb. 2015</small>
                                        </h3>
                                        <h3>Responsive</h3>

                                        <p>Easily and efficiently scales your project with one code base, from phones to
                                            tablets to desktops.</p>
                                        <a class="btn deep-orange" href="#">More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="right">
                                <div class="timesection">
                                    <div class="timeline-img"><img src="img/works-13.jpg" alt=""></div>
                                    <div class="timeline-content">
                                        <h3>
                                            <small>3. Feb. 2015</small>
                                        </h3>
                                        <h3>Well Documented</h3>

                                        <p>The ones who translated the app into 32 languages, some of which we weren't
                                            even aware existed. We stand in awe at what open source community can
                                            do.</p>
                                        <a class="btn deep-orange" href="#">More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="left">
                                <div class="timesection">
                                    <div class="timeline-img"><img src="img/works-14.jpg" alt=""></div>
                                    <div class="timeline-content">
                                        <h3>
                                            <small>2. Feb. 2015</small>
                                        </h3>
                                        <h3>Retina Ready</h3>

                                        <p>Serve high-resolution images to devices with retina displays. Framer will
                                            look beautiful on any device.</p>
                                        <a class="btn deep-orange" href="#">More</a>
                                    </div>
                                </div>
                            </li>
                            <li class="right">
                                <div class="timesection">
                                    <div class="timeline-img"><img src="img/works-15.jpg" alt=""></div>
                                    <div class="timeline-content">
                                        <h3>
                                            <small>1. Feb. 2015</small>
                                        </h3>
                                        <h3>Built With Bootstrap</h3>

                                        <p>Based on the most popular front-end framework for making responsive, mobile
                                            first projects on the web.</p>
                                        <a class="btn deep-orange" href="#">More</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>

    </section>






@endsection
