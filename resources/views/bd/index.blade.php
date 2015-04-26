@extends('app')

@section('content')
    <section class="container">

        <p class="text-center"><a href="{{URL::route('bd.create')}}"><i class="fa fa-plus"></i>Добавить</a></p>

            @if(!empty($BdList))

            @foreach($BdList as $nameBd => $bd)

                <div class="col-xs-4">


                    @if($bd['SUSPENDED'] == 'no')
                        <div class="panel panel-default ">
                            @else
                                <div class="panel panel-danger ">
                                    @endif

                                    <div class="panel-heading">
                                        <h3 class="panel-title"> {{$nameBd}}</h3>
                                    </div>

                                    <ul class="list-group">
                                        <li class="list-group-item"><span>Диск:</span><span>{{$bd['U_DISK']}} мб</span></li>
                                        <li class="list-group-item">Пользователь:</span><span>{{$bd['DBUSER']}}</span></li>
                                        <li class="list-group-item">Кодировка:</span><span>{{$bd['CHARSET']}}</span></li>
                                    </ul>


                                    <div class="panel-footer">


                                        <div class="container-fluid">
                                            <div class="pull-left">
                                                <small>{{$bd['DATE']}}</small>
                                            </div>

                                            <div class="btn-group pull-right">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Управление <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="http://{{Auth::user()->IpServer}}/phpmyadmin" target="_blank"><i class="fa fa-server"></i> Открыть
                                                                                                                                                            phpMyAdmin</a>
                                                    </li>
                                                    <li><a href="{{URL::route('bd.show', $nameBd)}}"><i class="fa fa-pencil-square-o"></i> Редактировать</a></li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#Modal-{{$nameBd}}"><i class="fa fa-trash"></i> Удалить</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="Modal-{{$nameBd}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Удалить {{$nameBd}} ?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Вы действительно хотите удалить {{$nameBd}} ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{URL::route('bd.destroy')}}" method="post">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
                                                            <button type="submit" class="btn btn-primary">Да</button>
                                                            <input type="hidden" name="v_database" value="{{$nameBd}}"/>
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
                                @endforeach


                    @else
                <div class="jumbotron">
                    <h1>Пусто!</h1>

                    <p>Вы ещё не создали ни одной базы данных</p>

                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Создать</a></p>
                </div>
            @endif



    </section>

@endsection
