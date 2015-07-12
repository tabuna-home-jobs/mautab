<section class="menuapp row text-center">

    <div class="col-md-2 col-sm-4 col-xs-6">

        <a href="{{URL::route('hosting.home.index')}}"
           class="{{Active::route('hosting.home.*')}}">
            <span class="fa fa-user"></span>
            <h4>{{Lang::get('menu.user')}}</h4>
        </a>
        <hr>

        <p class="menu-small">{{Lang::get('menu.disk')}}: {{ $UserInfo['U_DISK'] }} мб </p>

        <p class="menu-small">{{Lang::get('menu.traffic')}}: {{$UserInfo['U_BANDWIDTH'] }} мб </p>

    </div>

    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="{{URL::route('hosting.web.index')}}"
           class="{{Active::route('hosting.web.*')}}">
            <span class="fa fa-desktop"></span>
            <h4>{{Lang::get('menu.Web')}}</h4>
        </a>
        <hr>

        <p class="menu-small"> {{Lang::get('menu.domains')}}: {{$UserInfo['U_WEB_DOMAINS'] }} </p>

        <p class="menu-small"> {{Lang::get('menu.aliases')}}: {{$UserInfo['U_WEB_ALIASES'] }} </p>
    </div>


    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="{{URL::route('hosting.dns.index')}}"
           class="{{Active::route('hosting.dns.*')}}">
            <span class="fa fa-sitemap"></span>
            <h4>{{Lang::get('menu.DNS')}}</h4>
        </a>
        <hr>
        <p class="menu-small"> {{Lang::get('menu.domains')}}: {{$UserInfo['U_DNS_DOMAINS'] }} </p>

        <p class="menu-small"> {{Lang::get('menu.records')}}: {{$UserInfo['U_DNS_RECORDS'] }} </p>
    </div>

    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="{{URL::route('hosting.bd.index')}}"
           class="{{Active::route('hosting.bd.*')}}">
            <span class="fa fa-database"></span>
            <h4>{{Lang::get('menu.BD')}}</h4>
        </a>
        <hr>
        <p class="menu-small"> {{Lang::get('menu.BD')}}: {{$UserInfo['U_DATABASES'] }} </p>
    </div>

    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="{{URL::route('hosting.cron.index')}}"
           class="{{Active::route('hosting.cron.*')}}">
            <span class="fa fa-clock-o"></span>
            <h4>{{Lang::get('menu.Cron')}}</h4>
        </a>
        <hr>
        <p class="menu-small"> {{Lang::get('menu.jobs')}}: {{$UserInfo['U_CRON_JOBS'] }} </p>
    </div>

    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="{{URL::route('hosting.tikets.index')}}"
           class="{{Active::route('hosting.tikets.*')}}">
            <span class="fa fa-life-ring"></span>
            <h4>{{Lang::get('menu.support')}}</h4>
        </a>
        <hr>

        <p class="menu-small"><a href="{{URL::route('hosting.log.index')}}">Журнал действий</a></p>

        <p class="menu-small"><a href="{{URL::route('hosting.backup.index')}}">Резервные копии</a></p>
    </div>

</section>
