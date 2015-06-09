@extends('app')

@section('content')



    <div class="col-xs-12">
        <h3 class="text-center">
            <small>Записи домена</small>
            <b>{{$domain}}</b></h3>

        <p class="text-center">
            <a aria-controls="collapseExample" aria-expanded="false" href="#add-records" data-toggle="collapse" id="show-add-bd">
                <i class="fa fa-plus"></i>
            </a>
        </p>
    </div>






                <div class="collapse col-xs-12" id="add-records">
                    <form class="col-md-8" method="post" action="{{URL::route('hosting.records.store')}}">

                        <div class="alert alert-info" role="alert">
                            Изменения записей для домена {{$domain}}
                        </div>
                        <div class="form-group">
                            <label>Домен </label>
                            <input type="text" class="form-control" value="{{$domain}}" name="v_domain" readonly/>
                        </div>
                        <div class="form-group">
                            <label>Запись / Поддомен </label>
                            <input type="text" class="form-control" name="v_rec" required/>
                        </div>
                        <div class="form-group">
                            <label>Тип</label>
                            <select name="v_type" class="form-control">
                                <option value="A">A</option>
                                <option value="AAAA">AAAA</option>
                                <option value="NS">NS</option>
                                <option value="CNAME">CNAME</option>
                                <option value="MX">MX</option>
                                <option value="TXT">TXT</option>
                                <option value="SRV">SRV</option>
                                <option value="DNSKEY">DNSKEY</option>
                                <option value="KEY">KEY</option>
                                <option value="IPSECKEY">IPSECKEY</option>
                                <option value="PTR">PTR</option>
                                <option value="SPF">SPF</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>IP адрес или значение </label>
                            <input type="text" class="form-control" value="" name="v_val"/>
                        </div>

                        <div class="form-group">
                            <label>Приоритет (опционально)</label>
                            <input type="text" class="form-control" value="" name="v_priority"/>
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" value="Отправить" class="btn btn-blue">
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


    <div id="add-shadow" class="col-xs-12">
        <div class="table-responsive">
            <table class="table table-condensed table-hover table-striped">
                <tbody>

                @foreach($records as $key => $record)

                        @if($record['SUSPENDED'] == 'no')
                            <tr>
                        @else
                            <tr class="danger">
                                @endif


                                <td id=" {{$record['ID']}}">{{$record['RECORD']}}</td>
                                <td>{{$record['TYPE']}}</td>
                                <td> {{substr($record['VALUE'],0,30)}}</td>
                                <td>{{$record['DATE']}} : {{$record['TIME']}}</td>

                                <td>
                                    <div class="btn-group pull-right" role="group" aria-label="...">
                                        <a href="{{URL::route('hosting.records.edit',['domain' => $domain, 'record' => $record['ID']])}}" class="btn btn-default">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#Modal-{{$record['ID']}}"
                                           class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>


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
                                                    <form action="{{URL::route('hosting.records.destroy')}}" method="post">
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

                            </tr>
                            @endforeach
                </tbody>
            </table>
            </div>


        </div>


@endsection
