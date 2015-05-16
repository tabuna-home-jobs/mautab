@extends('app')

@section('content')
    <section class="container">

        <div class="col-xs-12">

            <div class="wrap-b row">
                <div class="row">
                    <div class="col-md-11 text-center">{{$domain}}</div>
                    <div class="col-md-1 text-right add-dom">
                        <a aria-controls="collapseExample" aria-expanded="false" href="#add-records" data-toggle="collapse" id="show-add-bd">
                                <i class="fa fa-plus"></i>
                            </a>
                    </div>
                </div>


                <div class="collapse col-xs-12" id="add-records">
                    <form class="col-md-8 col-xs-12" method="post" action="{{URL::route('dns.store')}}">

                        <div class="alert alert-info" role="alert"> Добавление DNS домена</div>
                        <div class="form-group input-line">
                            <label>Домен </label>
                            <input type="text" name="v_domain" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>IP адрес</label>
                            <input type="text" class="form-control" name="v_ip" required/>
                        </div>
                        <p class="text-center">
                            <a id="show-dop-info" data-toggle="collapse" href="#dop-info" aria-expanded="false" aria-controls="collapseExample">
                                <i class="fa fa-plus"></i>Дополнительные опции
                            </a>
                        </p>

                        <div class="collapse" id="dop-info">
                            <div class="form-group">
                                <label>Зарегистрирован до
                                    <small>(ГГГГ-ММ-ДД)</small>
                                </label>
                                <input type="text" class="form-control" name="v_exp" value="{{date("Y-m-d",time() + 24 * 60 * 60 * 365)}}" required/>
                            </div>
                            <div class="form-group">
                                <label>TTL</label>
                                <input type="text" class="form-control" name="v_ttl" value="14400" required/>
                            </div>
                            <div class="form-group">
                                <label>Сервер имен</label>

                                <div class="form-group">
                                    <label>NS1</label>
                                    <input type="text" class="form-control" name="v_ns1" value="ns1.localhost.ltd" required/>
                                </div>
                                <div class="form-group">
                                    <label>NS2</label>
                                    <input type="text" class="form-control" name="v_ns2" value="ns2.localhost.ltd" required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="submit" value="Отправить" class="button-full">
                        </div>
                    </form>

                    <div class="col-md-4 hidden-sm hidden-xs">


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Информация:</h3>
                            </div>
                            <div class="panel-body">
                                <p>DNS - Компьютерная распределённая система для получения информации о доменах. Чаще всего используется для получения IP-адреса по имени
                                   хоста
                                   (компьютера или устройства), получения информации о маршрутизации почты, обслуживающих узлах для протоколов в домене (SRV-запись). </p>

                                <p>Основой DNS является представление об иерархической структуре доменного имени и зонах.
                                </p>
                            </div>
                        </div>

                    </div>

                    <hr class="clearfix col-xs-12">
                </div>





                @foreach($records as $key => $record)

                        @if($record['SUSPENDED'] == 'no')
                        <div class="row">
                        @else
                                <div class="danger row">
                                @endif
                                    <div class="col-xs-1" id=" {{$record['ID']}}">{{$record['RECORD']}}</div>
                                    <div class="col-xs-1">{{$record['TYPE']}}</div>
                                    <div class="col-xs-1">{{$record['PRIORITY']}}</div>
                                    <div class="col-xs-4"> {{substr($record['VALUE'],0,30)}}</div>
                                    <div class="col-xs-3">{{$record['DATE']}} : {{$record['TIME']}}</div>

                                    <div class="btn-group pull-right" role="group" aria-label="...">
                                        <a href="{{URL::route('records.edit',['domain' => $domain, 'record' => $record['ID']])}}" class="btn btn-default">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#Modal-{{$record['ID']}}"
                                           class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>


                                    <!-- Modal -->
                                    <div class="modal fade" id="Modal-{{$record['ID']}}" tabindex="-1" role="dialog"
                                         aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Удалить Задание ?</h4>
                                                </div>
                                                <div class="modal-body">
                                                    Вы действительно хотите удалить {{$record['RECORD']}}
                                                    - {{$record['VALUE']}}
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{URL::route('records.destroy')}}" method="post">
                                                        <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Нет
                                                        </button>
                                                        <button type="submit" class="button-small">Да</button>
                                                        <input type="hidden" name="v_record_id"
                                                               value="{{$record['ID']}}"/>
                                                        <input type="hidden" name="v_domain" value="{{$domain}}"/>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                    @endforeach


            </div>


        </div>


    </section>

@endsection
