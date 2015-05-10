@extends('admin')

@section('content')

    <section class="container">
        <p class="text-center">
            <a id="show-add-bd" data-toggle="collapse" href="#add-bd" aria-expanded="false" aria-controls="collapseExample">
                <i class="fa fa-plus"></i>Добавить
            </a>
        </p>

        <div class="collapse col-xs-12" id="add-bd">
            <form class="col-md-8 col-xs-12" method="post" action="{{URL::route('admin.groups.store')}}">

                <div class="form-group">
                    <label>Название</label>
                    <input class="form-control" name="name">
                </div>

                <div class="form-group">


                    @foreach (Route::getRoutes() as $route)
                        @if(!is_null($route->getName()))
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="permissions[{{$route->getName()}}]" value="1">
                                    {{$route->getName()}}
                                </label>
                            </div>
                        @endif
                    @endforeach


                </div>


                <div class="form-group">
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


        <div class="col-md-12" id="add-shadow">

            <div class=" table-responsive">
                <table class="table table-condensed table-hover table-striped">
                    <tbody>
                    @foreach($Groups as $key => $Group)
                        <tr>
                            <td>{{$Group->id}}</td>
                            <td>{{$Group->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    {!! $Groups->render(); !!}
                </table>

            </div>


        </div>
    </section>

@endsection
