@include('header')


<section class="banner">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6">
                <div class="block">
                    <img class="app-img img-responsive" src="/images/app.png" alt="">
                </div>

            </div>
            <div class="col-md-6 col-md-offset-1 col-sm-6">
                <div class="block">
                    <h1>
                        Быстрое и богатое управление проектами
                    </h1>

                    <p>
                        С нашими бесплатными онлайн сервесами вы с лёгкостью сможете администрировать свой ресурс
                    </p>


                    <ul class="download-btn text-center">
                        <li>
                            <a href="/auth/login" class="btn btn-default btn-apple">Войти</a>
                        </li>
                        <li>
                            <a href="/auth/register" class="btn btn-default btn btn-blue">Зарегистироваться</a>
                        </li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
</section>


@include('footer')
