@include('header')


<div id="home" class="web-open hidden-xs">
    <div>
        <img class="img-responsive" alt="banner" src="/images/open.jpg">

        <div class="caption">
            <div class="caption-wrapper">
                <div class="caption-info">
                    <h1 class="animated bounceInUp">Профессиональная веб-разработка</h1>

                    <p class="animated bounceInLeft">Передовые технологии и уникальные компетенции решать наиболее сложные задачи</p>
                    <a class="explore animated bounceInDown" href="#about"><i class="fa fa-angle-down  fa-3x"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>








<div id="services" class="container text-center">

    <h1 class="text-center title" id="portfolio">Наши преимущества</h1>

    <div class="separator"></div>
    <p class="lead text-center"> являются результатом ограничения других </p>
    <br>

    <div class="row">

        <!-- Service Item (title, icon and description for your service) -->
        <div class="col-sm-4 col-md-4 service-box">
            <!-- Icon -->
            <i class="fa fa-desktop fa-3x"></i>

            <!-- Title and Description -->
            <div class="service-title">
                <h3>Веб-дизайн</h3>
            </div>
            <p>Использование только красивых и элегантных страниц веб-сайта с вашим успешным брендом</p>
        </div>

        <!-- Service Item (title, icon and description for your service) -->
        <div class="col-sm-4 col-md-4 service-box service-box-l">
            <!-- Icon -->
            <i class="fa fa-folder-open-o fa-3x"></i>

            <!-- Title and Description -->
            <div class="service-title">
                <h3>Опыт и знания</h3>
            </div>
            <p>На нашем счету множество сложных и нестандартных веб решений различной тематики</p>
        </div>

        <!-- Service Item (title, icon and description for your service) -->
        <div class="col-sm-4 col-md-4 service-box service-box-l">
            <!-- Icon -->
            <i class="fa fa-cubes fa-3x"></i>

            <!-- Title and Description -->
            <div class="service-title">
                <h3>Использование Bootstrap</h3>
            </div>
            <p>Даёт уверенность в кросбраузерности веб-сайта, а так же в простоте изменения внешнего вида</p>
        </div>

        <!-- Service Item (title, icon and description for your service) -->
        <div class="col-sm-4 col-md-4 service-box-none">
            <!-- Icon -->
            <i class="fa fa-bolt fa-3x"></i>

            <!-- Title and Description -->
            <div class="service-title">
                <h3>Высокая произодительность</h3>
            </div>
            <p>Максимальна быстрая загрузка страниц веб-сайта, с соблюдением рекомендаций от Google Speed Page</p>
        </div>

        <!-- Service Item (title, icon and description for your service) -->
        <div class="col-sm-4 col-md-4 service-box-none service-box-l">
            <!-- Icon -->
            <i class="fa fa-cog fa-3x"></i>

            <!-- Title and Description -->
            <div class="service-title">
                <h3>SEO оптимизация</h3>
            </div>
            <p>Понимание современных поисковых систем даёт необходимую информацию как лучше продвигать веб-сайт</p>
        </div>

        <!-- Service Item (title, icon and description for your service) -->
        <div class="col-sm-4 col-md-4 service-box-none service-box-l">
            <!-- Icon -->
            <i class="fa fa-file-code-o fa-3x"></i>

            <!-- Title and Description -->
            <div class="service-title">
                <h3>Чистый код c Laravel</h3>
            </div>
            <p>В ходе работы используеться исключительно Laravel в тандеме с высоко квалифицированными специалистами</p>
        </div>

    </div>
    <!-- /row -->
</div>


<div class="container">

    <div class="process">
        <h3 class="text-center">Процес создания Веб-сайта</h3>
        <ul class="row text-center list-inline">
            <li>
                <span><i class="fa fa-history"></i><b>Получаем заявку</b></span>
            </li>
            <li>
                <span><i class="fa fa-puzzle-piece"></i><b>Согласуем ТЗ</b></span>
            </li>
            <li>
                <span><i class="fa fa-database"></i><b>Разработка</b></span>
            </li>
            <li>
                <span><i class="fa fa-magic"></i><b>Интеграция</b></span>
            </li>
            <li>
                <span><i class="fa fa-cloud-upload"></i><b>Продвижение</b></span>
            </li>
        </ul>
    </div>
</div>








<!-- section start -->
<!-- ================ -->
<div class="section">
    <div class="container">
        <h1 class="text-center title" id="portfolio">Наши работы</h1>

        <div class="separator"></div>
        <p class="lead text-center">Интересные или нестандатрные работы с подробным описанием проделанной работы</p>
        <br>

        <div class="row object-non-visible" data-animation-effect="fadeIn">
            <div class="col-md-12">

                <!-- isotope filters start -->
                <div class="filters text-center">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#" data-filter="*">Все</a></li>
                        <li><a href="#" data-filter=".web-design">Web дизайн</a></li>
                        <li><a href="#" data-filter=".app-development">Приложения</a></li>
                        <li><a href="#" data-filter=".site-building">Сайты</a></li>
                    </ul>
                </div>
                <!-- isotope filters end -->

                <!-- portfolio items start -->
                <div class="isotope-container row grid-space-20">
                    <div class="col-sm-6 col-md-3 isotope-item web-design">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="/images/portfolio-1.jpg" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-1">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Web дизайн</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-1">Название</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="project-1-label">Название</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Project Description</h3>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed,
                                                   incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat
                                                   dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium
                                                   voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta
                                                   quis.</p>

                                                <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio
                                                   exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur
                                                   adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor
                                                   placeat corporis quisquam dolorum at nesciunt.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="/images/portfolio-1.jpg" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item app-development">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="/images/portfolio-2.jpg" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-2">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Приложения</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-2">Название</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="project-2-label">Название</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Project Description</h3>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed,
                                                   incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat
                                                   dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium
                                                   voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta
                                                   quis.</p>

                                                <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio
                                                   exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur
                                                   adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor
                                                   placeat corporis quisquam dolorum at nesciunt.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img class="img-responsive" src="/images/portfolio-2.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item web-design">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="/images/portfolio-3.jpg" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-3">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Web дизайн</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-3">Название</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="project-3-label">Название</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Project Description</h3>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed,
                                                   incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat
                                                   dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium
                                                   voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta
                                                   quis.</p>

                                                <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio
                                                   exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur
                                                   adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor
                                                   placeat corporis quisquam dolorum at nesciunt.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img class="img-responsive" src="/images/portfolio-3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item site-building">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="/images/portfolio-4.jpg" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-4">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Сайты</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-4">Название</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-4" tabindex="-1" role="dialog" aria-labelledby="project-4-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="project-4-label">Название</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Project Description</h3>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed,
                                                   incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat
                                                   dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium
                                                   voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta
                                                   quis.</p>

                                                <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio
                                                   exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur
                                                   adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor
                                                   placeat corporis quisquam dolorum at nesciunt.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img class="img-responsive" src="/images/portfolio-4.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item app-development">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="/images/portfolio-5.jpg" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-5">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Приложения</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-5">Название</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-5" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="project-5-label">Название</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Project Description</h3>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed,
                                                   incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat
                                                   dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium
                                                   voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta
                                                   quis.</p>

                                                <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio
                                                   exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur
                                                   adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor
                                                   placeat corporis quisquam dolorum at nesciunt.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="/images/portfolio-5.jpg" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item web-design">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="/images/portfolio-6.jpg" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-6">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Web дизайн</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-6">Название</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-6" tabindex="-1" role="dialog" aria-labelledby="project-6-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="project-6-label">Название</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Project Description</h3>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed,
                                                   incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat
                                                   dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium
                                                   voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta
                                                   quis.</p>

                                                <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio
                                                   exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur
                                                   adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor
                                                   placeat corporis quisquam dolorum at nesciunt.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="/images/portfolio-6.jpg" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item site-building">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="/images/portfolio-7.jpg" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-7">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Сайты</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-7">Название</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-7" tabindex="-1" role="dialog" aria-labelledby="project-7-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="project-7-label">Название</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Project Description</h3>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed,
                                                   incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat
                                                   dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium
                                                   voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta
                                                   quis.</p>

                                                <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio
                                                   exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur
                                                   adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor
                                                   placeat corporis quisquam dolorum at nesciunt.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="/images/portfolio-7.jpg" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item web-design">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="/images/portfolio-8.jpg" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-8">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Web дизайн</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-8">Название</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-8" tabindex="-1" role="dialog" aria-labelledby="project-8-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="project-8-label">Название</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Project Description</h3>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed,
                                                   incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat
                                                   dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium
                                                   voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta
                                                   quis.</p>

                                                <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio
                                                   exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur
                                                   adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor
                                                   placeat corporis quisquam dolorum at nesciunt.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="/images/portfolio-8.jpg" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item web-design">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="/images/portfolio-9.jpg" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-9">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Web дизайн</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-9">Название</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-9" tabindex="-1" role="dialog" aria-labelledby="project-9-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="project-9-label">Название</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Project Description</h3>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed,
                                                   incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat
                                                   dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium
                                                   voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta
                                                   quis.</p>

                                                <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio
                                                   exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur
                                                   adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor
                                                   placeat corporis quisquam dolorum at nesciunt.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="/images/portfolio-9.jpg" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item site-building">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="/images/portfolio-10.jpg" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-10">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Сайты</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-10">Название</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-10" tabindex="-1" role="dialog" aria-labelledby="project-10-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="project-10-label">Название</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Project Description</h3>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed,
                                                   incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat
                                                   dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium
                                                   voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta
                                                   quis.</p>

                                                <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio
                                                   exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur
                                                   adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor
                                                   placeat corporis quisquam dolorum at nesciunt.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="/images/portfolio-10.jpg" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item web-design">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="/images/portfolio-11.jpg" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-11">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Web дизайн</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-11">Название</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-11" tabindex="-1" role="dialog" aria-labelledby="project-11-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="project-11-label">Название</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Project Description</h3>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed,
                                                   incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat
                                                   dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium
                                                   voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta
                                                   quis.</p>

                                                <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio
                                                   exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur
                                                   adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor
                                                   placeat corporis quisquam dolorum at nesciunt.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="/images/portfolio-11.jpg" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item app-development">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="/images/portfolio-12.jpg" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-12">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Приложения</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-12">Название</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-12" tabindex="-1" role="dialog" aria-labelledby="project-12-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="project-12-label">Название</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Project Description</h3>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed,
                                                   incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat
                                                   dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium
                                                   voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta
                                                   quis.</p>

                                                <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio
                                                   exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur
                                                   adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor
                                                   placeat corporis quisquam dolorum at nesciunt.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="/images/portfolio-12.jpg" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                </div>
                <!-- portfolio items end -->

            </div>
        </div>
    </div>
</div>
<!-- section end -->


@include('footer')
