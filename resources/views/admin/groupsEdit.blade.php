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
            <form class="col-md-8 col-xs-12" method="post" action="{{URL::route('admin.groups.update')}}">

                <div class="form-group">
                    <label>Название</label>
                    <input class="form-control" required name="namenew" value="{{$group->name}}">
                </div>

                <div class="form-group">


                    @foreach (Route::getRoutes() as $route)
                        @if(!is_null($route->getName()))
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"
                                    @if(isset($group->permissions[$route->getName()]))
                                           checked
                                           @endif
                                           name="permissions[{{$route->getName()}}]" value="1">
                                    {{$route->getName()}}
                                </label>
                            </div>
                        @endif
                    @endforeach


                </div>


                <div class="form-group">
                    <input type="hidden" name="id" value="{{$group->id}}">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" value="Отправить" class="button-full">
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
