@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Пользователь</h1>
    </div>


    <div class="col-md-6">

    <div class="wrapper-md">

        <div class="panel panel-default">
            <div class="panel-heading">
                Общее
            </div>


            <form class="panel-body" method="post" action="{{route('admin.users.update',$user->id)}}">


                <div class="form-group">
                    <label>Ник нейм</label>
                    <input class="form-control" readonly required name="nickname" value="{{$user->nickname}}">
                </div>

                <div class="line line-dashed b-b line-lg"></div>


                <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" required name="email" value="{{$user->email}}">
                        </div>

                <div class="line line-dashed b-b line-lg"></div>

                        <div class="form-group">
                            <label>Имя</label>
                            <input class="form-control" required name="first_name" value="{{$user->first_name}}">
                        </div>

                <div class="line line-dashed b-b line-lg"></div>

                <div class="form-group">
                            <label>Фамилия</label>
                            <input class="form-control" required name="last_name" value="{{$user->last_name}}">
                        </div>


                <div class="line line-dashed b-b line-lg"></div>

                <div class="form-group">
                            <label>Баланс</label>
                    <input class="form-control" required name="balans" type="number" value="{{$user->balans}}">
                        </div>


            </form>

        </div>

    </div>
    </div>











    <div class="col-md-6">

        <div class="wrapper-md">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Системное
                </div>


                <form class="panel-body" method="post" action="{{route('admin.users.update',$user->id)}}">


                    <div class="form-group">
                        <label>Пакет</label>
                        <select class="form-control" name="v_shell">
                            @foreach($packages as $value)
                                <option value="{{$value->id}}"
                                        @if($user->id == $value->id)selected @endif>{{$value->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="line line-dashed b-b line-lg"></div>


                    <div class="form-group">
                        <label>Язык</label>
                        <select class="form-control" name="v_language">
                            <option value="ar">ar</option>
                            <option value="bs">bs</option>
                            <option value="cn">cn</option>
                            <option value="cz">cz</option>
                            <option value="de">de</option>
                            <option value="el">el</option>
                            <option value="en">en</option>
                            <option value="es">es</option>
                            <option value="fi">fi</option>
                            <option value="fr">fr</option>
                            <option value="hu">hu</option>
                            <option value="id">id</option>
                            <option value="it">it</option>
                            <option value="nl">nl</option>
                            <option value="no">no</option>
                            <option value="pt">pt</option>
                            <option value="ro">ro</option>
                            <option value="ru" selected="">ru</option>
                            <option value="se">se</option>
                            <option value="tr">tr</option>
                            <option value="tw">tw</option>
                            <option value="ua">ua</option>
                        </select>

                    </div>


                    <div class="line line-dashed b-b line-lg"></div>


                    <div class="form-group">
                        <label>Доступ по SSH</label>
                        <select class="form-control" name="v_shell">
                            <option value="sh" selected="">sh</option>
                            <option value="dash">dash</option>
                            <option value="bash">bash</option>
                            <option value="rbash">rbash</option>
                            <option value="nologin">nologin</option>
                            <option value="rssh">rssh</option>
                            <option value="nologin">nologin</option>
                            <option value="nologin">nologin</option>
                            <option value="nologin">nologin</option>
                        </select>
                    </div>


                    <div class="line line-dashed b-b line-lg"></div>

                    <div class="form-group">
                        <label>Серверы имен</label>

                        <div class="form-group">
                            <input type="text" size="20" class="form-control" name="v_ns1"
                                   value="ns2.t198.topaz.fastwebserver.de">
                        </div>

                        <div class="form-group">
                            <input type="text" size="20" class="form-control" name="v_ns2"
                                   value="ns2.t198.topaz.fastwebserver.de">
                        </div>

                        <div class="form-group">
                            <input type="text" size="20" class="form-control" name="v_ns3"
                                   value="ns2.t198.topaz.fastwebserver.de">
                        </div>

                        <div class="form-group">
                            <input type="text" size="20" class="form-control" name="v_ns4"
                                   value="ns2.t198.topaz.fastwebserver.de">
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" value="Отправить" class="btn btn-primary">
                    </div>

                </form>

            </div>

        </div>
    </div>







@endsection
