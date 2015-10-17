@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Пользователь</h1>
        <small class="text-muted">Системные активные аккаунты</small>
    </div>


    <form method="post" action="{{route('admin.users.update',$user->id)}}">


        <div class="col-md-4">

            <div class="wrapper-md">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Общее
                    </div>


                    <div class="panel-body">
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


                    </div>

                </div>

            </div>
        </div>


        <div class="col-md-8">

            <div class="wrapper-md">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Системное
                    </div>


                    <div data-example-id="togglable-tabs">
                        <ul id="myTabs" class="nav nav-tabs" role="tablist">
                            <li role="presentation"><a href="#vesta" id="vesta-tab" role="tab" data-toggle="tab"
                                                       aria-controls="vesta" aria-expanded="false">Vesta</a></li>
                            <li role="presentation"><a href="#roles" role="tab" id="roles-tab" data-toggle="tab"
                                                       aria-controls="roles" aria-expanded="false">Роли</a></li>
                            <li role="presentation"><a href="#permissions" role="tab" id="permissions-tab"
                                                       data-toggle="tab" aria-controls="false" aria-expanded="false">Права</a>
                            </li>


                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade" id="vesta" aria-labelledby="vesta-tab">


                                <div class="panel-body">
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


                                </div>


                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="roles" aria-labelledby="roles-tab">


                                <div class="panel-body">
                                    <div class="premission-list">
                                        @foreach ($Roles as $role)
                                            <div class="col-xs-12">
                                                <label class="i-checks m-b-none">
                                                    <input type="checkbox"
                                                           name="role[{{$role->slug}}]" value="1">
                                                    <i></i> {{$role->slug}}
                                                </label>
                                            </div>
                                            <div class="line line-dashed b-b line-lg"></div>
                                        @endforeach
                                    </div>
                                </div>


                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="permissions"
                                 aria-labelledby="permissions-tab">


                                <div class="panel-body">

                                    <div class="premission-list">
                                        @foreach (Route::getRoutes() as $route)
                                            @if(!is_null($route->getName()))
                                                <div class="col-xs-6">
                                                    <label class="i-checks m-b-none">
                                                        <input type="checkbox"

                                                               @if(isset($user->permissions[$route->getName()]))
                                                               checked
                                                               @endif

                                                               name="permissions[{{$route->getName()}}]" value="1">
                                                        <i></i> {{$route->getName()}}
                                                    </label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>


                                </div>


                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" value="Отправить" class="btn btn-primary">
                    </div>

                </div>

            </div>
        </div>
    </form>
@endsection