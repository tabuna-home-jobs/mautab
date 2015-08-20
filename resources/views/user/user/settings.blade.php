@extends('app')

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">Настройки</div>
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


                    <form class="col-md-8" action="{{URL::route('settings.update')}}" method="post">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Аккаунт</label>
                                <input type="text" class="form-control" disabled value="{{Auth::User()->nickname}} ">
                            </div>

                            <div class="form-group">
                                <label>Имя</label>
                                <input type="text" class="form-control" disabled value="{{ $UserInfo['FNAME'] }} ">
                            </div>

                            <div class="form-group">
                                <label>Фамилия</label>
                                <input type="text" class="form-control" disabled value="{{ $UserInfo['LNAME'] }} ">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Электронная почта</label>
                                <input type="email" name="email" class="form-control" required
                                       value="{{ Auth::User()->email }} ">
                            </div>


                            <div class="form-group">
                                <label for="password">Пароль</label>
                                <input type="password" class="form-control" id="password" name="password" required
                                       pattern=".{8,}"
                                       title="Пароль должен содержать не менее 8 символов"
                                       placeholder="Пароль">
                            </div>

                            <div class="form-group">
                                <label for="password">Язык</label>
                                <select class="form-control" required name="lang">
                                    <option value="en" @if($UserInfoLaravel->lang == "en") selected @endif >English
                                    </option>
                                    <option value="ru" @if($UserInfoLaravel->lang == "ru") selected @endif >Russian
                                    </option>
                                </select>
                            </div>


                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" value="Изменить" class="btn btn-primary">

                        </div>

                    </form>


                </div>


            </div>

        </div>
    </div>

@endsection
