<section class="menuapp container text-center">

    <div class="col-md-2 col-sm-4 col-xs-6">

        <a href="{{URL::route('hosting.home.index')}}">
            <span class="fa fa-home"></span>
            <h4>{{Lang::get('menu.Panel')}}</h4>
        </a>


        <hr>

        <p class="menu-small">Текст</p>

        <p class="menu-small">Текст</p>

    </div>

    <div class="col-md-2 col-sm-4 col-xs-6">

        <a href="{{URL::route('admin.users.index')}}">
            <span class="fa fa-user"></span>
            <h4>{{Lang::get('menu.Users')}}</h4>
        </a>

        <hr>

    </div>


    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="#">
            <span class="fa fa-shopping-cart"></span>
            <h4>Заказы</h4>
        </a>

        <hr>
        <p class="menu-small"><a href="#">Категории</a></p>

        <p class="menu-small"><a href="#">Услуги</a></p>
    </div>

    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="#">
            <span class="fa fa-file-text"></span>
            <h4>Документы</h4>
        </a>

        <hr>
        <p class="menu-small"><a href="#">Маркетинговая продукция</a></p>

        <p class="menu-small"><a href="#">Маркетинговая продукция</a></p>

    </div>


    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="#">
            <span class="fa fa-newspaper-o"></span>
            <h4>Блог</h4>
        </a>
        <hr>
        <p class="menu-small"><a href="#">Категории</a></p>

        <p class="menu-small">
            <a href="{{URL::route('admin.pages.index')}}">
                {{Lang::get('menu.Pages')}}
            </a>
        </p>
    </div>

    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="{{URL::route('hosting.tikets.index')}}">
            <span class="fa fa-life-ring"></span>
            <h4>{{Lang::get('menu.support')}}</h4>
        </a>
        <hr>

        <p class="menu-small"><a href="{{URL::route('hosting.log.index')}}">Журнал действий</a></p>

        <p class="menu-small"><a href="{{URL::route('hosting.backup.index')}}">Резервные копии</a></p>
    </div>

</section>
