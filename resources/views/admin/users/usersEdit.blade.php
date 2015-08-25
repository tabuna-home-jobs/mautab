@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Пользователь</h1>
    </div>





    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                Пользователь
            </div>


            <form class="panel-body" method="post" action="{{route('admin.users.update')}}">

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
                            <input class="form-control" required name="end_of_service"
                                   value="{{$user->end_of_service}}">
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

        </form>

    </div>

    </div>

@endsection
