@extends('app')

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">Basic form</div>
        <div class="panel-body">

        <div class="col-xs-12">

        <div class="row">

            <div class="col-xs-12">
                <h4 class="pull-left"><i class="fa fa-cog fa-red"></i> {{Lang::get('menu.Info')}}:</h4>
                <a data-toggle="collapse" href="#editprofile" aria-expanded="false" aria-controls="collapseExample"
                   class="pull-right">{{Lang::get('menu.Settings')}}</a>
            </div>


            <div class="col-xs-12 collapse" id="editprofile">

                <hr>

                <form class="col-md-12" action="{{URL::route('home.update')}}" method="post">
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
                                <option value="en" @if($UserInfoLaravel->lang == "en") selected @endif >English</option>
                                <option value="ru" @if($UserInfoLaravel->lang == "ru") selected @endif >Russian</option>
                            </select>
                        </div>


                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" value="Изменить" class="btn btn btn-blue">

                    </div>

                </form>


                <hr class="col-xs-12">

            </div>


            <div class="col-md-4">






                <div class="col wrapper-lg bg-light dk r-r">
                    <h4 class="font-thin m-t-none m-b"><i class="fa fa-info-circle"></i> Информация</h4>

                    <div class="">
                        <div class="m-b">
                            <p class="pull-right text-primary">{{$UserInfo['U_BANDWIDTH']}} из {{$UserInfo['BANDWIDTH']}}</p>
                            <span>{{Lang::get('menu.traffic')}}</span>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-primary" style="width: {{$UserInfo['U_BANDWIDTH']/$UserInfo['BANDWIDTH'] * 100  }}%"> </div>
                        </div>

                        <div class="m-b">
                            <span class="pull-right text-info">{{$UserInfo['U_DISK']}} из {{$UserInfo['DISK_QUOTA']}}</span>
                            <span>{{Lang::get('menu.disk')}}</span>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-info"  style="width: {{$UserInfo['U_DISK']/$UserInfo['DISK_QUOTA'] * 100  }}%"></div>
                        </div>


                        <div class="m-b">
                            <span class="pull-right text-info">{{ $UserInfo['U_WEB_DOMAINS'] }}
                                из {{ $UserInfo['WEB_DOMAINS'] }}</span>
                            <span>{{Lang::get('menu.domains')}}</span>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-info"  style="width: {{$UserInfo['U_WEB_DOMAINS']/$UserInfo['WEB_DOMAINS'] * 100  }}%"></div>
                        </div>


                        <div class="m-b">
                            <span class="pull-right text-info">{{ $UserInfo['U_DNS_DOMAINS'] }}
                                из {{ $UserInfo['DNS_DOMAINS'] }}</span>
                            <span>{{Lang::get('menu.DNS')}}</span>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-info" style="width: {{$UserInfo['U_DNS_DOMAINS']/$UserInfo['DNS_DOMAINS'] * 100  }}%"></div>
                        </div>



                        <div class="m-b">
                            <span class="pull-right text-info">{{ $UserInfo['U_DATABASES'] }}
                                из {{ $UserInfo['DATABASES'] }}</span>
                            <span>{{Lang::get('menu.BD')}}</span>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-info" style="width: {{$UserInfo['U_DATABASES']/$UserInfo['DATABASES'] * 100  }}%"></div>
                        </div>

                    </div>
                    <p class="text-muted">Dales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
                </div>


            </div>


            <div class="col-md-8">

                <div class="col-md-12">


                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>{{ $UserInfoLaravel->nickname }}</h3>

                                    <p>{{ $UserInfoLaravel->first_name }} {{ $UserInfoLaravel->last_name }}</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <a href="#" class="small-box-footer">Управление профилем <i
                                            class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-6 col-xs-12">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>{{Lang::get('menu.balance')}}</h3>

                                    <p>{{ $UserInfoLaravel->balans }} </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-money"></i>
                                </div>
                                <a href="#" class="small-box-footer">Мои счета <i
                                            class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-6 col-xs-12">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>Тариф</h3>

                                    <p>{{ $UserInfo['PACKAGE'] }}</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-tachometer"></i>
                                </div>
                                <a href="#" class="small-box-footer">Управление тарифом <i
                                            class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-6 col-xs-12">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>Файлы</h3>

                                    <p>Менеджер файлов</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file-code-o"></i>
                                </div>
                                <a href="#" class="small-box-footer">Перейти <i
                                            class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                    </div>


                    <p>{{ $UserInfo['FNAME'] }} {{ $UserInfo['LNAME'] }}


                        @if($UserInfo['SUSPENDED'] == "no")
                            <span class="label label-success">Активен</span>
                        @else
                            <span class="label label-danger">Не активен</span>
                        @endif

                    </p>

                    <p>{{Lang::get('menu.balance')}}: {{ $UserInfoLaravel->balans }} руб </p>

                    <p>{{Lang::get('menu.suspended')}}: {{ $UserInfoLaravel->end_of_service }} </p>

                    <p>Тариф: {{ $UserInfo['PACKAGE'] }}  </p>


                    <table class="table table-condensed table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Номер счёта</th>
                            <th>Сумма</th>
                            <th>Статус</th>
                            <th>Дата</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Payments as $pay)
                            <tr>
                                <th>{{$pay->id}}</th>
                                <th>{{$pay->sum}}</th>

                                @if($pay->status)
                                    <th>Зачислен</th>
                                @elseif(!$pay->status)
                                    <th>Ошибка</th>
                                @else
                                    <th>Ожидает</th>
                                @endif
                                <th>{{$pay->created_at}}</th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {!! $Payments->render() !!}

                </div>
            </div>


        </div>


    </div>

</div>
    </div>

@endsection
