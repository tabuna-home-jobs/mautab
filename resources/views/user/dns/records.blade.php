@extends('app')

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">
            <small>Записи домена</small>
            <b>{{$domain}}</b>
        </div>
        <div class="panel-body">


            <div class="col-xs-12">
                <p class="text-center">
                    <a aria-controls="collapseExample" aria-expanded="false" href="#add-records" data-toggle="collapse"
                       id="show-add-bd">
                        <i class="fa fa-plus"></i>
                    </a>
                </p>
            </div>


            <div class="collapse col-xs-12" id="add-records">

                <form class="col-md-8" method="post" action="{{route('records.store')}}">

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
                            <p>DNS - Компьютерная распределённая система для получения информации о доменах. Чаще всего
                                используется для получения IP-адреса по имени
                                хоста
                                (компьютера или устройства), получения информации о маршрутизации почты, обслуживающих
                                узлах для протоколов в домене (SRV-запись). </p>

                            <p>Основой DNS является представление об иерархической структуре доменного имени и зонах.
                            </p>
                        </div>
                    </div>

                </div>

            </div>


        </div>


        <div id="add-shadow" class="table-responsive">
            <table class="table table-striped b-t b-light text-center">

                <thead>
                <tr>
                    <th class="text-center">Запись / Поддомен</th>
                    <th class="text-center">Тип</th>
                    <th class="text-center">IP адрес или значение</th>
                    <th class="text-center">Дата создания</th>
                    <th class="text-right">Управление</th>
                </tr>
                </thead>

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
                                    <a href="{{route('records.edit',['domain' => $domain, 'record' => $record['ID']])}}"
                                       class="btn btn-default">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>

                                    <a href="#" class="btn btn-danger"
                                       onclick="delModal('{{$domain}}','/hosting/records/destroy','{{$record["ID"]}}')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
            <script type="text/javascript">
                //Модалка для удаления
                /**
                 *
                 * @param name - имя элемента которы надо удалить
                 * @param route - используемый роут Например: (/hosting/web/destroy)
                 * @param id - id записи с которой происходят манипуляции удаления
                 *
                 */
                function delModal(name, route, id) {

                    //csfr
                    var csrf = $('meta[name="csrf-token"]').attr('content');

                    var valueName = name;
                    //Обрабатываем выходящее значение
                    var key = name.replace('.', '');
                    //Формируем модалку
                    var modalka = ' <div class="modal fade" id="Modal-' + key + '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">Удалить ' + valueName + ' ?</h4></div><div class="modal-body">Вы действительно хотите удалить ' + valueName + '</div><div class="modal-footer"><form action="' + route + '" method="post"><button type="button" class="btn btn-default" data-dismiss="modal">Нет</button><button type="submit" class="btn btn-danger">Да</button><input type="hidden" name="v_domain" value="' + valueName + '"/><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="v_record_id" value="' + id + '" ><input type="hidden" name="_token" value="' + csrf + '"></form></div></div></div></div>';

                    //Добавляем модалку в дом дерево
                    $('footer').append(modalka);
                    //Вызываем модалку
                    $('#Modal-' + key).modal();
                    //По зыкрытию нашей модалки удаляем её из дома
                    $('#Modal-' + key).on('hidden.bs.modal', function () {
                        $('#Modal-' + key).remove();
                    })
                }
            </script>

        </div>


    </div>


@endsection
