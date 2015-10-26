@extends('app')

@section('content')

    <div class="panel panel-default" ui-jq="dnsIndex">
        <div class="panel-heading">{{Lang::get('menu.DNS')}}</div>
        <div class="panel-body">

            <p class="text-center">
                <a id="show-add-bd" data-toggle="collapse" href="#add-dns" aria-expanded="false"
                   aria-controls="collapseExample">
                    <i class="fa fa-plus"></i>Добавить
                </a>
            </p>

            <div class="collapse col-xs-12" id="add-dns">
                <form class="col-md-8 col-xs-12" method="post" action="{{route('dns.store')}}">

                    <div class="alert alert-info" role="alert"> Добавление DNS домена</div>
                    <div class="form-group input-line">
                        <label>Домен </label>
                        <input type="text" name="v_domain" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label>IP адрес</label>
                        <input type="text" class="form-control" name="v_ip" required/>
                    </div>


                    <div class="line line-dashed b-b"></div>


                    <p class="text-center">
                        <a id="show-dop-info" data-toggle="collapse" href="#dop-info" aria-expanded="false"
                           aria-controls="collapseExample">
                            <i class="fa fa-plus"></i>Дополнительные опции
                        </a>
                    </p>

                    <div class="collapse" id="dop-info">
                        <div class="form-group">
                            <label>Зарегистрирован до
                                <small>(ГГГГ-ММ-ДД)</small>
                            </label>
                            <input type="text" class="form-control" name="v_exp"
                                   value="{{date("Y-m-d",time() + 24 * 60 * 60 * 365)}}" required/>
                        </div>
                        <div class="form-group">
                            <label>TTL</label>
                            <input type="text" class="form-control" name="v_ttl" value="14400" required/>
                        </div>
                        <div class="form-group">
                            <label>Сервер имен</label>

                            <div class="form-group">
                                <label>NS1</label>
                                <input type="text" class="form-control" name="v_ns1" value="ns1.localhost.ltd"
                                       required/>
                            </div>
                            <div class="form-group">
                                <label>NS2</label>
                                <input type="text" class="form-control" name="v_ns2" value="ns2.localhost.ltd"
                                       required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" value="Отправить" class="btn btn-blue">
                    </div>
                </form>

                <div class="col-md-4 hidden-sm hidden-xs">


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Информация:</h3>
                        </div>
                        <div class="panel-body">
                            <p>DNS - Компьютерная распределённая система для получения информации о доменах. Чаще всего
                                используется для получения IP-адреса по имени хоста
                                (компьютера или устройства), получения информации о маршрутизации почты, обслуживающих
                                узлах для
                                протоколов в домене (SRV-запись). </p>

                            <p>Основой DNS является представление об иерархической структуре доменного имени и зонах.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div id="add-shadow" class="table-responsive">
            <table class="table table-striped b-t b-light">
                <tbody>
                @forelse($DnsList as $nameDns => $Dns)

                    <tr>
                        <td>{{$nameDns}}</td>

                        <td>{{$Dns['SOA']}}</td>
                        <td>{{$Dns['TTL']}}</td>
                        <td>

                            <div class="btn-group pull-right" role="group" aria-label="...">

                                <a href="{{route('records.show', $nameDns)}}"
                                   class="btn btn-default">
                                    <i class="fa fa-plus block m-b-xs"></i>
                                </a>
                                <a href="{{route('dns.show', $nameDns)}}"
                                   class="btn btn-default">
                                    <i class="fa fa-pencil-square-o block m-b-xs"></i>
                                </a>

                                <a href="#" onclick="delModal('{{$nameDns}}', '{{route('dns.destroy')}}');"
                                   class="btn btn-danger">
                                    <i class="fa fa-trash block m-b-xs"></i>
                                </a>
                            </div>

                        </td>

                    </tr>



                @empty

                    <div class="jumbotron text-center">
                        <h1>Пусто!</h1>

                        <p>Вы ещё не создали ни одной DNS записи</p>

                    </div>
                @endforelse
                </tbody>
            </table>
            </div>
        </div>
    </div>


@endsection
