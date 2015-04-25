@extends('app')

@section('content')
    <section class="container">

        <div class="col-xs-12">


            @if(!empty($BdList))
            <div class="table-responsive">
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th>Имя Базы</th>
                        <th>Информация</th>
                        <th>Управление</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Имя Базы</th>
                        <th>Информация</th>
                        <th>Управление</th>
                    </tr>
                    </tfoot>
                    <tbody>
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
                                        <p><span>Пользователь:</span><span>{{$bd['DBUSER']}}</span></p>

                                        <p><span>Сервер:</span><span>{{$bd['HOST']}}</span></p>

                                        <p><span>Тип:</span><span>{{$bd['TYPE']}}</span></p>

                                        <p><span>Кодировка:</span><span>{{$bd['CHARSET']}}</span></p>
                                    </td>
                                    <td>
                                        <p><a href="http://{{Auth::user()->IpServer}}/phpmyadmin"><i class="fa fa-line-chart"></i> Открыть phpMyAdmin</a></p>
                                        <p><a href="{{URL::route('bd.show', $nameBd)}}"><i class="fa fa-pencil-square-o"></i> Редактировать</a></p>
                                        <p><a href="#"><i class="fa fa-trash"></i> Удалить</a></p>
                                        <p><a href="{{URL::route('bd.create')}}">Добавить</a></p>
                                    </td>
                                </tr>
                                @endforeach
                    </tbody>
                </table>
            </div>

            @else
                <div class="jumbotron">
                    <h1>Пусто!</h1>

                    <p>Вы ещё не создали ни одной базы данных</p>

                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Создать</a></p>
                </div>
            @endif



        </div>


    </section>

@endsection
