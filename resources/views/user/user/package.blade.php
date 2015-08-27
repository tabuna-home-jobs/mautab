@extends('app')

@section('content')



    @foreach($Package as $value)

        <div class="col-md-3 col-sm-6">
            <div class="panel b-a">

                @if(Auth::user()->package_id == $value->id)
                    <div class="panel-heading text-center bg-primary no-border">
                        <span class="text-u-c m-b-none font-bold">Текущий</span>
                    </div>

                @else
                    <div class="panel-heading wrapper-xs bg-success no-border">
                    </div>
                @endif


                <div class="wrapper text-center">
                    <h4 class="text-u-c m-b-none">{{$value->name}}</h4>

                    <h2 class="m-t-none">
                        <sup class="pos-rlt" style="top:-22px"><i class="fa fa-rub"></i></sup>
                        <span class="text-2x text-lt">{{ ceil( $value->price *30)}}</span>
                        <span class="text-xs">/ в месяц</span>
                    </h2>
                </div>
                <ul class="list-group">

                    <li class="list-group-item">
                        <i class="fa fa-check-circle-o text-success m-r-xs"></i>Веб домены <span
                                class="pull-right">{{$value->WebDomains}}</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-check-circle-o text-success m-r-xs"></i>Веб алиасы
                        <small>(на домен)</small>
                        <span class="pull-right">{{$value->WebAliases}}</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-check-circle-o text-success m-r-xs"></i>DNS domains <span
                                class="pull-right">{{$value->DNSDomains}}</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-check-circle-o text-success m-r-xs"></i>DNS записи
                        <small>(на домен)</small>
                        <span class="pull-right">{{$value->DNSRecords}}</span>
                    </li>

                    <!--
                    <li class="list-group-item">
                        <i class="fa fa-check-circle-o text-success m-r-xs"></i>Почтовые домены  {{$value->MailDomains}}
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check-circle-o text-success m-r-xs"></i>Почтовые аккаунты <small>(на домен)</small> <span class="pull-right">{{$value->MailAccounts}}</span>
                    </li>
                    -->

                    <li class="list-group-item">
                        <i class="fa fa-check-circle-o text-success m-r-xs"></i>Базы данных <span
                                class="pull-right">{{$value->Databases}}</span>
                    </li>

                    <li class="list-group-item">
                        <i class="fa fa-check-circle-o text-success m-r-xs"></i>Квота
                        <small>(в мегабайтах)</small>
                        <span class="pull-right">{{$value->Quota}}</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-check-circle-o text-success m-r-xs"></i>Трафик
                        <small>(в мегабайтах)</small>
                        <span class="pull-right">{{$value->Bandwidth}}</span>
                    </li>


                    <li class="list-group-item">
                        @if($value->CronJobs)
                            <i class="fa fa-check-circle-o text-success m-r-xs"></i>Cron задания  <span
                                    class="pull-right">{{$value->CronJobs}}</span>
                        @else
                            <i class="fa fa-times-circle-o text-danger m-r-xs"></i> <span
                                    class="text-l-t">Cron задания</span>
                        @endif
                    </li>
                    <li class="list-group-item">
                        @if($value->Backups)
                            <i class="fa fa-check-circle-o text-success m-r-xs"></i>Резервные копии  <span
                                    class="pull-right">{{$value->Backups}}</span>
                        @else
                            <i class="fa fa-times-circle-o text-danger m-r-xs"></i> <span
                                    class="text-l-t">Резервные копии</span>
                        @endif
                    </li>

                    <li class="list-group-item">
                        @if($value->SSHAccess)
                            <i class="fa fa-check-circle-o text-success m-r-xs"></i>SSH доступ</span>
                        @else
                            <i class="fa fa-times-circle-o text-danger m-r-xs"></i> <span
                                    class="text-l-t">SSH доступ</span>
                        @endif
                    </li>
                </ul>


                @if(Auth::user()->package_id != $value->id)
                    <div class="panel-footer text-center">
                        <button type="button" class="btn btn-success m" data-toggle="modal"
                                data-target=".modal-{{$value->name}}">Изменить тариф
                        </button>
                    </div>


                    <form class="modal fade modal-{{$value->name}}" tabindex="-1" role="dialog"
                          action="{{route('package.store')}}" method="POST">
                        <div class="modal-dialog modal-sm">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="gridSystemModalLabel">Подтверждение смены тарифа</h4>
                            </div>

                            <div class="modal-content">
                                Вы уверены что хотите сменить тариф ?
                            </div>

                            <div class="modal-footer">
                                <input type="hidden" name="package" value="{{$value->id}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                <button type="submit" class="btn btn-danger">Изменить тариф</button>
                            </div>

                        </div>
                    </form>





                @endif

            </div>
        </div>


    @endforeach




@endsection
