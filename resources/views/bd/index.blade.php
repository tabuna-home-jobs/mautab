@extends('app')

@section('content')
    <section class="container">

        <div class="col-xs-12">

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Имя Базы</th>
                        <th>Информация</th>
                        <th>Управление</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(!empty($BdList))
                        @foreach($BdList as $nameBd => $bd)

                            @if($bd['SUSPENDED'] != "no")
                                <tr class="danger">
                            @else
                                <tr>
                                    @endif
                                    <td class="nameD">
                                        {{$nameBd}}
                                        <div>
                                            Диск: {{$bd['U_DISK']}} мб
                                        </div>
                                        <div><small>{{$bd['DATE']}}</small></div>
                                    </td>
                                    <td class="info-dns">
                                        <p><div><span>Пользователь:</span><span>{{$bd['DBUSER']}}</span></div></p>
                                        <p><div><span>Сервер:</span><span>{{$bd['HOST']}}</span></div></p>
                                        <p><div><span>Тип:</span><span>{{$bd['TYPE']}}</span></div></p>
                                        <p><div><span>Кодировка:</span><span>{{$bd['CHARSET']}}</span></div></p>
                                    </td>
                                    <td>
                                        <p><a href="#"><i class="fa fa-line-chart"></i> Веб-аналитика</a></p>
                                        <p><a href="#"><i class="fa fa-heartbeat"></i> Просмотреть логи</a></p>
                                        <p><a href="/bd/crud/{{Auth::user()->nickname}}"><i class="fa fa-pencil-square-o"></i> Редактировать</a></p>
                                        <p><a href="#"><i class="fa fa-trash"></i> Удалить</a></p>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td>Нет данных</td>
                                        <td>Нет данных</td>
                                        <td>Нет данных</td>
                                        <td>Нет данных</td>
                                    </tr>
                                @endif


                    </tbody>
                </table>
            </div>


        </div>


    </section>

@endsection
