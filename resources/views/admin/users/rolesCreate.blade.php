@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Навая Роль</h1>
    </div>


    <form method="post" action="{{route('admin.roles.store')}}">


        <div class="col-md-4">

            <div class="wrapper-md">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Общее
                    </div>


                    <div class="panel-body">


                        <div class="form-group">
                            <label>Название</label>
                            <input class="form-control" required name="name">
                        </div>

                        <div class="line line-dashed b-b line-lg"></div>


                        <div class="form-group">
                            <label>Slug</label>
                            <input class="form-control" required name="slug">
                        </div>

                    </div>

                </div>

            </div>
        </div>


        <div class="col-md-8">

            <div class="wrapper-md">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Права
                    </div>


                    <div class="panel-body">


                        <div class="premission-list">
                            @foreach (Route::getRoutes() as $route)
                                @if(!is_null($route->getName()))
                                    <div class="col-xs-4">
                                        <label class="i-checks m-b-none">
                                            <input type="checkbox" name="permissions[{{$route->getName()}}]" value="1">
                                            <i></i> {{$route->getName()}}
                                        </label>
                                    </div>
                                @endif
                            @endforeach
                        </div>


                        <div class="line line-dashed b-b line-lg"></div>


                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="submit" value="Отправить" class="btn btn-primary">
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </form>






@endsection
