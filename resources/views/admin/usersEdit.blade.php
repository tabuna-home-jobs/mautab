@extends('admin')

@section('content')


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Что то пошло не так!</strong> Пожалуйста проверьте вводимые данные.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class=" col-xs-12">
            <form class="col-md-8 col-xs-12" method="post" action="{{URL::route('admin.users.update')}}">

                <div data-example-id="togglable-tabs" role="tabpanel" class="bs-example bs-example-tabs">
                    <ul role="tablist" class="nav nav-tabs" id="myTab">
                        <li class="active" role="presentation"><a aria-expanded="true" aria-controls="home" data-toggle="tab" role="tab" id="home-tab" href="#home">Основное</a>
                        </li>

                        <li role="presentation"><a aria-controls="groups" data-toggle="tab" id="groups-tab" role="tab" href="#groups">Группы</a></li>

                        <li role="presentation"><a aria-controls="profile" data-toggle="tab" id="profile-tab" role="tab" href="#profile">Права</a></li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div aria-labelledby="home-tab" id="home" class="tab-pane fade in active" role="tabpanel">


                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" required name="email" value="{{$user->email}}">
                            </div>

                            <div class="form-group">
                                <label>Ник нейм</label>
                                <input class="form-control" required name="nickname" value="{{$user->nickname}}">
                            </div>

                            <div class="form-group">
                                <label>Имя</label>
                                <input class="form-control" required name="first_name" value="{{$user->first_name}}">
                            </div>

                            <div class="form-group">
                                <label>Фамилия</label>
                                <input class="form-control" required name="last_name" value="{{$user->last_name}}">
                            </div>

                            <div class="form-group">
                                <label>Баланс</label>
                                <input class="form-control" required name="balans" value="{{$user->balans}}">
                            </div>

                            <div class="form-group">
                                <label>Окончание услуг</label>
                                <input class="form-control" required name="end_of_service" value="{{$user->end_of_service}}">
                            </div>



                        </div>

                        <div aria-labelledby="groups-tab" id="groups" class="tab-pane fade" role="tabpanel">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <div class="check-all">
                                        <label>
                                            <input type="checkbox" id="check-all-group"/>
                                            Отметить/снять все
                                        </label>
                                    </div>
                                    @foreach($groups as $value)
                                        <div class="permissGroup col-xs-4">
                                            <label>
                                                <input type="checkbox" name="groups[]"
                                                       value="{{$value->id}}"
                                                @foreach($thisgroup as $thisUserGroup)
                                                    @if($value->id == $thisUserGroup->id)
                                                       checked
                                                            @endif
                                                        @endforeach
                                                        />
                                                {{$value->name}}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>


                        <div aria-labelledby="profile-tab" id="profile" class="tab-pane fade" role="tabpanel">

                            <div class="form-group">
                                <div class="check-all">
                                    <label>
                                        <input type="checkbox" id="check-all"/>
                                        Отметить/снять все
                                    </label>
                                </div>
                                @foreach (Route::getRoutes() as $route)
                                    @if(!is_null($route->getName()))
                                        <div class="col-xs-4 premissionCheckbox">
                                            <label>
                                                <input type="checkbox"
                                                       name="permissions['{{$route->getName()}}']"
                                                       value="1"
                                                @if(isset($user->permissions["'".$route->getName()."'"]))
                                                       checked
                                                        @endif
                                                        >
                                                {{$route->getName()}}
                                            </label>
                                        </div>
                                    @endif
                                @endforeach
                            </div>


                        </div>

                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" value="Отправить" class="btn btn-blue">
                    </div>
                </div>


            </form>

            <div class="col-md-4 hidden-sm hidden-xs">


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Информация:</h3>
                    </div>
                    <div class="panel-body">
                        cron — демон-планировщик задач в UNIX-подобных операционных системах, использующийся для периодического выполнения заданий в определённое время.
                        Регулярные действия описываются инструкциями, помещенными в файлы crontab и в специальные директории.
                    </div>
                </div>

            </div>

            <hr class="clearfix col-xs-12">
        </div>


@endsection
