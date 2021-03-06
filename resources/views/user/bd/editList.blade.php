@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">{{Lang::get('menu.BD')}}</div>
        <div class="panel-body">


            @if(!empty($BdList))
                @foreach($BdList as $nameBd => $bd)
                    <form class="col-md-8" method="post" action="{{route('bd.update')}}">


                        <small class="pull-right"> Префикс {{Auth::User()->nickname }}_ будет
                            автоматически добавлен к БД и пользователю
                            БД
                        </small>

                        <div class="form-group">
                            <label>База данных </label>
                            <input type="text" class="form-control" value="{{$nameBd}}" disabled/>
                        </div>

                        <small class="pull-right"> Префикс {{Auth::User()->nickname }}_ будет
                            автоматически добавлен к БД и пользователю
                            БД
                        </small>

                        <div class="form-group">
                            <label>Пользователь</label>
                            <input type="text" class="form-control" name="user_bd" required value="{{$bd['DBUSER']}}"/>
                        </div>
                        <div class="form-group">
                            <label>Пароль</label>
                            <input type="text" class="form-control" name="password_bd" required pattern=".{8,}"
                                   title="Пароль должен содержать не менее 8 символов" placeholder="*********"/>
                        </div>
                        <div class="form-group">
                            <label>Кодировка</label>
                            <input type="text" class="form-control" value="{{$bd['CHARSET']}}" disabled/>
                        </div>

                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="bd" value="{{$nameBd}}"/>
                        <input type="submit" value="Отправить" class="btn btn-blue">
                    </form>

                    <div class="col-md-4">


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Информация:</h3>
                            </div>
                            <div class="panel-body">
                                <p>Общая информация, а тут какой то текст, на сколько важна эта информация!</p>

                            </div>

                            <ul class="list-group">

                                <li class="list-group-item"> Статус:
                                    @if($bd['SUSPENDED'] == 'no')
                                        <span class="text-success"> Активен</span>
                                    @else
                                        <span class="text-danger"> Заблокирован</span>
                                    @endif
                                </li>
                                <li class="list-group-item">Занимаемое пространство: {{$bd['U_DISK']}} мб</li>
                                <li class="list-group-item">Кодировка: {{$bd['CHARSET']}}</li>
                                <li class="list-group-item">Тип:{{$bd['TYPE']}}</li>
                                <li class="list-group-item">Адрес: {{$bd['HOST']}}</li>
                            </ul>


                            <div class="panel-footer">
                                <p>
                                    <small class="pull-right"> {{$bd['DATE'] ." ". $bd['TIME']}}</small>
                                </p>
                            </div>
                        </div>
                    </div>

                @endforeach
            @else
                <div>Нет данных</div>
            @endif


        </div>
    </div>

@endsection
