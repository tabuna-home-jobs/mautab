@extends('app')

@section('content')


    <p class="text-center">
        <a id="show-add-bd" data-toggle="collapse" href="#add-dns" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa fa-plus"></i>Добавить
        </a>
    </p>

    <div class="collapse col-xs-12" id="add-dns">
        <form class="col-md-8 col-xs-12" method="post" action="{{URL::route('hosting.dns.store')}}">

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
                <input type="submit" value="Отправить" class="btn btn-blue">
            </div>
        </form>

        <div class="col-md-4 hidden-sm hidden-xs">


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Информация:</h3>
                </div>
                <div class="panel-body">
                    <p>DNS - Компьютерная распределённая система для получения информации о доменах. Чаще всего используется для получения IP-адреса по имени хоста
                       (компьютера или устройства), получения информации о маршрутизации почты, обслуживающих узлах для протоколов в домене (SRV-запись). </p>

                    <p>Основой DNS является представление об иерархической структуре доменного имени и зонах.
                    </p>
                </div>
            </div>

        </div>

        <hr class="clearfix col-xs-12">
    </div>


        <div class="col-md-12" id="add-shadow">

            @forelse($DnsList as $nameDns => $Dns)
                    <div class="col-xs-12 col-md-4">

                        @if($Dns['SUSPENDED'] != "no")
                            <div class="panel panel-danger ">
                    @else
                                    <div class="panel panel-default ">
                    @endif
                                        <div class="panel-heading">
                                            <h3 class="panel-title"> {{$nameDns}}</h3>
                            </div>

                                        <ul class="list-group">
                                            <li class="list-group-item">SOA: <span>{{$Dns['SOA']}}</span></li>
                                            <li class="list-group-item">TTL: <span>{{$Dns['TTL']}}</span></li>
                                            <li class="list-group-item">Регистрация до: <span>{{$Dns['EXP']}}</span></li>
                                        </ul>
                                        <div class="panel-footer">


                                            <div class="container-fluid">
                                                <div class="pull-left">
                                                    <small>{{$Dns['DATE']}}</small>
                                                </div>

                                                <div class="btn-group pull-right" role="group">
                                                    <a href="{{URL::route('hosting.records.show', $nameDns)}}"
                                                       class="btn btn-default">
                                                        <i class="fa fa-server"></i>
                                                    </a>

                                                    <a href="{{URL::route('hosting.dns.show', $nameDns)}}"
                                                       class="btn btn-default">
                                                        <i class="fa fa-pencil-square-o"></i>
                                                    </a>

                                                    <a href="#" data-toggle="modal" data-target="#Modal-{{str_replace(".",'',$nameDns)}}" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>


                                            </div>

                                            <!-- Modal -->
                                            <div class="modal fade" id="Modal-{{str_replace(".",'',$nameDns)}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                 aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                                        aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Удалить {{$nameDns}} ?</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            Вы действительно хотите удалить {{$nameDns}}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form action="{{URL::route('hosting.dns.destroy')}}"
                                                                  method="post">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
                                                                <button type="submit" class="button-small">Да</button>
                                                                <input type="hidden" name="v_domain" value="{{$nameDns}}"/>
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            @empty

                                <div class="jumbotron text-center">
                                <h1>Пусто!</h1>

                                    <p>Вы ещё не создали ни одной DNS записи</p>

                            </div>
                            @endforelse

                    </div>
        </div>



@endsection
