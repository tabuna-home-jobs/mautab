<section class="menuapp row text-center">

    <div class="col-md-2 col-sm-4 col-xs-6">

        <a href="{{URL::route('home.index')}}"
           class="{{Active::route('home.*')}}">
            <span class="fa fa-user"></span>
            <h4>{{Lang::get('menu.user')}}</h4>
        </a>

        <p class="menu-small">{{Lang::get('menu.disk')}}: {{ $UserInfo['U_DISK'] }} мб </p>
        <p class="menu-small">{{Lang::get('menu.traffic')}}: {{$UserInfo['U_BANDWIDTH'] }} мб </p>

    </div>

    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="{{URL::route('web.index')}}"
           class="{{Active::route('web.*')}}">
            <span class="fa fa-desktop"></span>
            <h4>{{Lang::get('menu.Web')}}</h4>
        </a>
        <p class="menu-small"> {{Lang::get('menu.domains')}}: {{$UserInfo['U_WEB_DOMAINS'] }} </p>

        <p class="menu-small"> {{Lang::get('menu.aliases')}}: {{$UserInfo['U_WEB_ALIASES'] }} </p>
    </div>


    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="{{URL::route('dns.index')}}"
           class="{{Active::route('dns.*')}}">
            <span class="fa fa-sitemap"></span>
            <h4>{{Lang::get('menu.DNS')}}</h4>
        </a>
        <p class="menu-small"> {{Lang::get('menu.domains')}}: {{$UserInfo['U_DNS_DOMAINS'] }} </p>

        <p class="menu-small"> {{Lang::get('menu.records')}}: {{$UserInfo['U_DNS_RECORDS'] }} </p>
    </div>

    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="{{URL::route('bd.index')}}"
           class="{{Active::route('bd.*')}}">
            <span class="fa fa-database"></span>
            <h4>{{Lang::get('menu.BD')}}</h4>
        </a>
        <p class="menu-small"> {{Lang::get('menu.BD')}}: {{$UserInfo['U_DATABASES'] }} </p>
    </div>

    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="{{URL::route('cron.index')}}"
           class="{{Active::route('cron.*')}}">
            <span class="fa fa-clock-o"></span>
            <h4>{{Lang::get('menu.Cron')}}</h4>
        </a>
        <p class="menu-small"> {{Lang::get('menu.jobs')}}: {{$UserInfo['U_CRON_JOBS'] }} </p>
    </div>

    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="{{URL::route('tikets.index')}}"
           class="{{Active::route('tikets.*')}}">
            <span class="fa fa-life-ring"></span>
            <h4>{{Lang::get('menu.support')}} <span class="badge badge-menu">4</span></h4>
        </a>
        <p class="menu-small"><a href="{{URL::route('log.index')}}">{{Lang::get('menu.log')}}</a></p>
        <p class="menu-small"><a href="{{URL::route('backup.index')}}">{{Lang::get('menu.backup')}}</a></p>
    </div>

</section>
