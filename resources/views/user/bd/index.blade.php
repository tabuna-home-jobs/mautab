@extends('app')

@section('content')


    <div class="panel panel-default" ui-jq="ibdexBd">
        <div class="panel-heading">{{Lang::get('menu.BD')}}</div>
        <div class="panel-body">

            <p class="text-center">
                <a id="show-add-bd" data-toggle="collapse" href="#add-bd" aria-expanded="false"
                   aria-controls="collapseExample">
                    <i class="fa fa-plus"></i>Добавить
                </a>
            </p>


            <div class="collapse col-xs-12" id="add-bd">
                <form class="col-md-8 col-xs-12" method="post" action="{{route('bd.store')}}">

                    <div class="alert alert-info" role="alert"> Префикс {{Auth::User()->nickname }}_ будет автоматически
                        добавлен к БД и пользователю БД
                    </div>
                    <div class="form-group input-line">
                        <label>База данных </label>

                        <input type="text" name="v_database" class="form-control" value=""/>
                        <span id="pre_name_bd"></span>
                    </div>
                    <div class="form-group">
                        <label>Пользователь</label>
                        <input type="text" class="form-control" name="v_dbuser" required/>
                        <span id="pre_name_user"></span>

                    </div>
                    <div class="form-group">
                        <label>Пароль</label>
                        <input type="text" class="form-control" name="password_bd" required pattern=".{8,}"
                               title="Пароль должен содержать не менее 8 символов"
                               placeholder="*********"/>
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
                            <p> MySQL является самой популярной СУБД с открытым исходным кодом в мире. </p>

                            <p>MySQL может эффективно помочь вам обеспечивают высокую производительность, масштабируемых
                                приложений баз данных.
                            </p>
                        </div>
                    </div>

                </div>

                <hr class="clearfix col-xs-12">
            </div>

        </div>

        <div class="table-responsive" id="add-shadow">

            @if(count($BdList) > 0)
                <table class="table table-striped b-t b-light">

                    <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Пользователь</th>
                        <th>Диск</th>
                        <th class="text-right">Управление</th>
                    </tr>
                    </thead>

                    <tbody>

                    @endif

                    @forelse($BdList as $nameBd => $bd)
                        <tr>
                            <td>{{$nameBd}}</td>

                            <td>{{$bd['DBUSER']}}</td>
                            <td>{{$bd['U_DISK']}}</td>
                            <td>
                                <div class="btn-group pull-right" role="group" aria-label="...">

                                    <a href="http://{{(string)Config::get('vesta.server')[Auth::User()->server]['ip'] }}/phpmyadmin"
                                       target="_blank"
                                       class="btn btn-default">
                                        <i class="fa fa-database block m-b-xs"></i>
                                    </a>
                                    <a href="{{route('bd.show', $nameBd)}}"
                                       class="btn btn-default">
                                        <i class="fa fa-pencil-square-o block m-b-xs"></i>
                                    </a>
                                    <a href="#" onclick="delModal('{{$nameBd}}', '{{route('bd.destroy')}}');"
                                       class="btn btn-danger">
                                        <i class="fa fa-trash block m-b-xs"></i>
                                    </a>
                                </div>

                            </td>
                        </tr>




                    @empty
                        <div class="jumbotron text-center">
                            <h1>Пусто!</h1>

                            <p>Вы ещё не создали ни одной базы данных</p>

                        </div>

                    @endforelse


                    @if(count($BdList) > 0)
                    </tbody>
                </table>
            @endif

        </div>
    </div>

    </div>


@endsection