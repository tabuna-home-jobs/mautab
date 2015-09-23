<section class="menuapp row text-center">

    <div class="col-md-2 col-sm-4 col-xs-6">

        <a href="{{route('home.index')}}"
           class="{{Active::route(['home.*','settings.*','manager.*'])}}">
            <span class="fa fa-user"></span>
            <h4>{{Lang::get('menu.user')}}</h4>
        </a>

        <p class="menu-small">{{Lang::get('menu.disk')}}: {{ $UserInfo['U_DISK'] }} мб </p>

        <p class="menu-small">{{Lang::get('menu.traffic')}}: {{$UserInfo['U_BANDWIDTH'] }} мб </p>

    </div>

    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="{{route('web.index')}}"
           class="{{Active::route('web.*')}}">
            <span class="fa fa-desktop"></span>
            <h4>{{Lang::get('menu.Web')}}</h4>
        </a>

        <p class="menu-small"> {{Lang::get('menu.domains')}}: {{$UserInfo['U_WEB_DOMAINS'] }} </p>

        <p class="menu-small"> {{Lang::get('menu.aliases')}}: {{$UserInfo['U_WEB_ALIASES'] }} </p>
    </div>


    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="{{route('dns.index')}}"
           class="{{Active::route('dns.*')}}">
            <span class="fa fa-sitemap"></span>
            <h4>{{Lang::get('menu.DNS')}}</h4>
        </a>

        <p class="menu-small"> {{Lang::get('menu.domains')}}: {{$UserInfo['U_DNS_DOMAINS'] }} </p>

        <p class="menu-small"> {{Lang::get('menu.records')}}: {{$UserInfo['U_DNS_RECORDS'] }} </p>
    </div>

    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="{{route('bd.index')}}"
           class="{{Active::route('bd.*')}}">
            <span class="fa fa-database"></span>
            <h4>{{Lang::get('menu.BD')}}</h4>
        </a>

        <p class="menu-small"> {{Lang::get('menu.BD')}}: {{$UserInfo['U_DATABASES'] }} </p>
    </div>

    <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="{{route('cron.index')}}"
           class="{{Active::route('cron.*')}}">
            <span class="fa fa-clock-o"></span>
            <h4>{{Lang::get('menu.Cron')}}</h4>
        </a>

        <p class="menu-small"> {{Lang::get('menu.jobs')}}: {{$UserInfo['U_CRON_JOBS'] }} </p>
    </div>

    <div class="col-md-2 col-sm-4 col-xs-6">

        @if(Auth::user()->checkRole('admin'))
            <a href="{{route('admin..index')}}"
               class="{{Active::route('admin.*')}}">
                <span class="fa fa-server text-success"></span>
                <h4>Dashboard</h4>
            </a>
        @else
        <a href="{{route('tikets.index')}}"
           class="{{Active::route('tikets.*')}}">
            <span class="fa fa-life-ring"></span>
            <h4>{{Lang::get('menu.support')}}</h4>
        </a>
        @endif

        <p class="menu-small"><a href="{{route('log.index')}}">{{Lang::get('menu.log')}}</a></p>

        <p class="menu-small"><a href="{{route('backup.index')}}">{{Lang::get('menu.backup')}}</a></p>
    </div>

</section>
