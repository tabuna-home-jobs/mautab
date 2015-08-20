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


                    <div class="panel-group col-md-8" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                       aria-expanded="true" aria-controls="collapseOne">
                                        Личные данные
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingOne">
                                <div class="panel-body">


                                    <form class="form-horizontal" action="{{URL::route('settings.update')}}"
                                          method="post">

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Аккаунт</label>

                                            <div class="col-sm-9"><input type="text" class="form-control" disabled
                                                                         value="{{Auth::User()->nickname}} "></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Имя</label>

                                            <div class="col-sm-9"><input type="text" class="form-control" disabled
                                                                         value="{{ $UserInfo['FNAME'] }} "></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Фамилия</label>

                                            <div class="col-sm-9"><input type="text" class="form-control" disabled
                                                                         value="{{ $UserInfo['LNAME'] }} "></div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Телефон</label>

                                            <div class="col-sm-9"><input type="text" class="form-control"
                                                                         value=""></div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="email">Электронная почта</label>

                                            <div class="col-sm-9"><input type="email" name="email" class="form-control"
                                                                         required
                                                                         value="{{ Auth::User()->email }} "></div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="password">Пароль</label>

                                            <div class="col-sm-9"><input type="password" class="form-control"
                                                                         id="password" name="password" required
                                                                         pattern=".{8,}"
                                                                         title="Пароль должен содержать не менее 8 символов"
                                                                         placeholder="Пароль"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="password">Язык</label>

                                            <div class="col-sm-9"><select class="form-control" required name="lang">
                                                    <option value="en"
                                                            @if($UserInfoLaravel->lang == "en") selected @endif >English
                                                    </option>
                                                    <option value="ru"
                                                            @if($UserInfoLaravel->lang == "ru") selected @endif >Russian
                                                    </option>
                                                </select></div>
                                        </div>


                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <input type="submit" value="Изменить" class="btn btn-primary">
                                            </div>
                                        </div>


                                    </form>


                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Безопасность
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingTwo">
                                <div class="panel-body">


                                    <form class="form-horizontal" role="form">

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Новый пароль</label>

                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Повторите пароль</label>

                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-default">Изменить</button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Уведомления
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingThree">
                                <div class="panel-body">


                                    <div class="col-sm-12">
                                        <div class="checkbox">
                                            <label class="i-checks">
                                                <input type="checkbox" name="1" value="Documents"><i></i>
                                                Я хочу получать уведомления по Email
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="i-checks">
                                                <input type="checkbox" name="1" value="Documents"><i></i>
                                                Я хочу получать уведомления по Email
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-default">Изменить</button>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>

        </div>
    </div>

@endsection
