@extends('app')

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">Информация</div>
        <div class="panel-body">

            <div class="col-xs-12">

                <div class="row">


                    <div class="col-md-4">


                        <div class="col wrapper-lg bg-light dk r-r">
                            <h4 class="font-thin m-t-none m-b"><i class="fa fa-info-circle"></i> Информация</h4>


                            <p class="m-b-md">Статус :
                                @if($UserInfo['SUSPENDED'] == "no")
                                    <span class="label label-success pull-right">Активен</span>
                                @else
                                    <span class="label label-danger pull-right">Не активен</span>
                                @endif
                            </p>


                            <div class="">
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

                            </div>


                            <p class="text-muted">Статистические данные обновляються каждые несколько часов</p>
                        </div>


                    </div>


                    <div class="col-md-8">

                        <div class="col-md-12">


                            <div class="row">
                                <div class="col-lg-6 col-xs-12">
                                    <!-- small box -->
                                    <div class="small-box bg-primary">
                                        <div class="inner">
                                            <h3>{{ $UserInfoLaravel->nickname }}</h3>

                                            <p>{{ $UserInfoLaravel->first_name }} {{ $UserInfoLaravel->last_name }}</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <a href="{{route('settings.index')}}" class="small-box-footer">Управление
                                            профилем <i
                                                    class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-6 col-xs-12">
                                    <!-- small box -->
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3>{{Lang::get('menu.balance')}}</h3>

                                            <p>{{ $UserInfoLaravel->balans }} </p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <a href="{{route('payments.index')}}" class="small-box-footer">Мои счета <i
                                                    class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-6 col-xs-12">
                                    <!-- small box -->
                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                            <h3>Тариф</h3>

                                            <p>{{ $UserInfo['PACKAGE'] }}</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-tachometer"></i>
                                        </div>
                                        <a href="{{route('package.index')}}" class="small-box-footer">Управление тарифом
                                            <i
                                                    class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-6 col-xs-12">
                                    <!-- small box -->
                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                            <h3>Файлы</h3>

                                            <p>Менеджер файлов</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-file-code-o"></i>
                                        </div>
                                        <a href="{{route('manager.index')}}" class="small-box-footer">Перейти <i
                                                    class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->


                                <div class="col-lg-6 col-xs-12">
                                    <!-- small box -->
                                    <div class="small-box bg-black">
                                        <div class="inner">
                                            <h3>CMS</h3>

                                            <p>Помощник в установки</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-wordpress"></i>
                                        </div>
                                        <a href="{{route('install.index')}}" class="small-box-footer">Перейти <i
                                                    class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->


                            </div>


                            <form action="{{route('search.index')}}" class="m-b-md">
                                <div class="input-group">
                                    <input type="text" name="query" class="form-control" placeholder="Поиск...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Поиск</button>
      </span>
                                </div>
                            </form>


                        </div>


                    </div>


                </div>


            </div>

        </div>
    </div>

@endsection
