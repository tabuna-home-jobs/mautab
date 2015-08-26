@extends('app')

@section('content')


    <div class="panel-group col-md-4" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">
            <div class="panel-heading">Информация</div>
            <div class="panel-body">


                <div class="col wrapper-lg bg-light dk r-r">
                    <h4 class="font-thin m-t-none m-b"><i class="fa fa-info-circle"></i> Информация</h4>

                    <p class="m-b-md">Статус :
                        @if($UserInfo['SUSPENDED'] == "no")
                            <span class="label label-success pull-right">Активен</span>
                        @else
                            <span class="label label-danger pull-right">Не активен</span>
                        @endif
                    </p>


                    <div class="m-b">
                        <p class="pull-right text-primary">{{$UserInfo['U_BANDWIDTH']}}
                            из {{$UserInfo['BANDWIDTH']}}</p>
                        <span>{{Lang::get('menu.traffic')}}</span>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-primary"
                             style="width: {{$UserInfo['U_BANDWIDTH']/$UserInfo['BANDWIDTH'] * 100  }}%"></div>
                    </div>

                    <div class="m-b">
                                    <span class="pull-right text-info">{{$UserInfo['U_DISK']}}
                                        из {{$UserInfo['DISK_QUOTA']}}</span>
                        <span>{{Lang::get('menu.disk')}}</span>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-info"
                             style="width: {{$UserInfo['U_DISK']/$UserInfo['DISK_QUOTA'] * 100  }}%"></div>
                    </div>


                    <div class="m-b">
                            <span class="pull-right text-info">{{ $UserInfo['U_WEB_DOMAINS'] }}
                                из {{ $UserInfo['WEB_DOMAINS'] }}</span>
                        <span>{{Lang::get('menu.domains')}}</span>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-info"
                             style="width: {{$UserInfo['U_WEB_DOMAINS']/$UserInfo['WEB_DOMAINS'] * 100  }}%"></div>
                    </div>


                    <div class="m-b">
                            <span class="pull-right text-info">{{ $UserInfo['U_DNS_DOMAINS'] }}
                                из {{ $UserInfo['DNS_DOMAINS'] }}</span>
                        <span>{{Lang::get('menu.DNS')}}</span>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-info"
                             style="width: {{$UserInfo['U_DNS_DOMAINS']/$UserInfo['DNS_DOMAINS'] * 100  }}%"></div>
                    </div>


                    <div class="m-b">
                            <span class="pull-right text-info">{{ $UserInfo['U_DATABASES'] }}
                                из {{ $UserInfo['DATABASES'] }}</span>
                        <span>{{Lang::get('menu.BD')}}</span>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-info"
                             style="width: {{$UserInfo['U_DATABASES']/$UserInfo['DATABASES'] * 100  }}%"></div>
                    </div>


                    <p class="text-muted">Статистические данные обновляються каждые несколько часов</p>
                </div>


            </div>
        </div>
    </div>


    <div class="panel-group col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Тарифные планы
                </h4>
            </div>
            <div class="panel-body">


                <div class="col-md-4 col-sm-6">
                    <div class="panel b-a">
                        <div class="panel-heading wrapper-xs bg-success no-border">
                        </div>
                        <div class="wrapper text-center">
                            <h4 class="text-u-c m-b-none">Bussiness</h4>

                            <h2 class="m-t-none">
                                <sup class="pos-rlt" style="top:-22px">$</sup>
                                <span class="text-2x text-lt">299</span>
                                <span class="text-xs">/ mo</span>
                            </h2>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <i class="icon-check text-success m-r-xs"></i> Email preview on air
                            </li>
                            <li class="list-group-item">
                                <i class="icon-check text-success m-r-xs"></i> Spam testing and blocking
                            </li>
                            <li class="list-group-item">
                                <i class="icon-check text-success m-r-xs"></i> 100 GB Space
                            </li>
                            <li class="list-group-item">
                                <i class="icon-check text-success m-r-xs"></i> 200 user accounts
                            </li>
                            <li class="list-group-item">
                                <i class="icon-close text-danger m-r-xs"></i> <span class="text-l-t">Free support for two years</span>
                            </li>
                            <li class="list-group-item">
                                <i class="icon-close text-danger m-r-xs"></i> <span class="text-l-t">Free upgrade for one year</span>
                            </li>
                        </ul>
                        <div class="panel-footer text-center">
                            <a href="" class="btn btn-success m">Start your free trial</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
    </div>



@endsection
