@extends('app')

@section('content')

        <div class="col-xs-12">


            @if(!empty($webList))

                @foreach($webList as $domain => $d_val)

                    <div class="alert alert-info" role="alert">
                        Редактирование домена {{$domain}}
                    </div>
                    <form class="col-md-8 col-xs-12" method="post" action="">

                        <div class="form-group input-line">
                            <label>Домен </label>
                            <input type="text" name="v_domain" class="form-control" value="{{$domain}}" required/>
                        </div>
                        <div class="form-group">
                            <label>IP адрес</label>
                            <select type="text" class="form-control" name="v_ip">
                                <option value="{{$d_val['IP']}}" selected>{{$d_val['IP']}}</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Алиасы</label>
                            <textarea cols="40" rows="5" class="form-control" name="v_aliases">{{$d_val['ALIAS']}}</textarea>
                        </div>
                        <div class="form-group checkbox">
                            <label>
                                <input type="checkbox" name="v_proxy" checked/>Поддержка Nginx
                            </label>
                        </div>
                        <div class="form-group supp-niginx">
                            <label>Proxy Extentions</label>
                            <textarea cols="40" rows="5" name="v_proxy_ext" class="form-control">{{$d_val['PROXY_EXT']}}</textarea>
                        </div>




    <div class="form-group">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" value="Отправить" class="btn btn-blue">
        <input type="hidden" name="domain" value="{{$domain}}"/>
        <input type="hidden" name="_method" value="PUT">
    </div>
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
                                    @if($d_val['SUSPENDED'] == 'no')
                                        <span class="text-success"> Активен</span>
                                    @else
                                        <span class="text-danger"> Заблокирован</span>
                                    @endif
                                </li>
                                <li class="list-group-item">Занимаемое пространство: {{$d_val['U_DISK']}} мб</li>

                            </ul>


                            <div class="panel-footer">
                                <p>
                                    <small class="pull-right"> {{$d_val['DATE'] ." ". $d_val['TIME']}}</small>
                                </p>
                            </div>
                        </div>
                    </div>

                @endforeach
            @else
                <div>Нет данных</div>
            @endif
        </div>



@endsection
