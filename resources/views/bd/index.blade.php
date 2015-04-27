@extends('app')

@section('content')
    <section class="container">

        <p class="text-center">
            <a id="show-add-bd" data-toggle="collapse" href="#add-bd" aria-expanded="false" aria-controls="collapseExample">
                <i class="fa fa-plus"></i>Добавить
            </a>
        </p>
        <div class="collapse col-xs-12" id="add-bd">
            <form class="col-md-8" method="post" action="{{URL::route('bd.store')}}">

                <div class="alert alert-info" role="alert"> Префикс {{Auth::user()->nickname }}_ будет автоматически добавлен к БД и пользователю БД</div>
                <div class="form-group input-line">
                    <label>База данных </label>

                    <input type="text" name="v_database" class="form-control" value=""/>
                    <span id="pre_name_bd"></span>
                </div>
                <div class="form-group">
                    <label>Пользователь</label>
                    <input type="text" class="form-control" name="v_dbuser" required />
                    <span id="pre_name_user"></span>

                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input type="text" class="form-control" name="password_bd" required  pattern=".{8,}" title="Пароль должен содержать не менее 8 символов" placeholder="*********" />
                </div>

                <div class="form-group">
                    <label>Кодировка</label>
                    <select name="v_charset" class="form-control">
                        <option value="big5">big5</option>
                        <option value="dec8">dec8</option>
                        <option value="cp850">cp850</option>
                        <option value="hp8">hp8</option>
                        <option value="koi8r">koi8r</option>
                        <option value="latin1">latin1</option>
                        <option value="latin2">latin2</option>
                        <option value="swe7">swe7</option>
                        <option value="ascii">ascii</option>
                        <option value="ujis">ujis</option>
                        <option value="sjis">sjis</option>
                        <option value="hebrew">hebrew</option>
                        <option value="tis620">tis620</option>
                        <option value="euckr">euckr</option>
                        <option value="koi8u">koi8u</option>
                        <option value="gb2312">gb2312</option>
                        <option value="greek">greek</option>
                        <option value="cp1250">cp1250</option>
                        <option value="gbk">gbk</option>
                        <option value="latin5">latin5</option>
                        <option value="armscii8">armscii8</option>
                        <option selected="" value="utf8">utf8</option>
                        <option value="ucs2">ucs2</option>
                        <option value="cp866">cp866</option>
                        <option value="keybcs2">keybcs2</option>
                        <option value="macce">macce</option>
                        <option value="macroman">macroman</option>
                        <option value="cp852">cp852</option>
                        <option value="latin7">latin7</option>
                        <option value="cp1251">cp1251</option>
                        <option value="cp1256">cp1256</option>
                        <option value="cp1257">cp1257</option>
                        <option value="binary">binary</option>
                        <option value="geostd8">geostd8</option>
                        <option value="cp932">cp932</option>
                        <option value="eucjpms">eucjpms</option>
                    </select>
                </div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" value="Отправить" class="button-full">

            </form>

            <div class="col-md-4">


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Информация:</h3>
                    </div>
                    <div class="panel-body">
                        <p> MySQL является самой популярной СУБД с открытым исходным кодом в мире. </p>

                        <p>MySQL может эффективно помочь вам обеспечивают высокую производительность, масштабируемых приложений баз данных.
                        </p>
                    </div>
                </div>

            </div>

            <hr class="clearfix col-xs-12">
        </div>




        <div class="col-md-12" id="add-shadow">
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
        </div>


    </section>

@endsection
