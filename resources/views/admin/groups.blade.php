@extends('admin')

@section('content')

        <p class="text-center">
            <a id="show-add-bd" data-toggle="collapse" href="#add-bd" aria-expanded="false" aria-controls="collapseExample">
                <i class="fa fa-plus"></i>Добавить
            </a>
        </p>

        <div class="collapse col-xs-12" id="add-bd">
            <form class="col-md-8 col-xs-12" method="post" action="{{URL::route('admin.groups.store')}}">

                <div class="form-group">
                    <label>Название</label>
                    <input class="form-control" required name="name">
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
                            <td>
                                <div class="btn-group pull-right" role="group" aria-label="...">
                                    <a href="{{URL::route('admin.groups.show', $Group->id)}}" class="btn btn-default">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>

                                    <a href="#" data-toggle="modal" data-target="#Modal-{{$Group->id}}" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>


                            <!-- Modal -->
                            <div class="modal fade" id="Modal-{{$Group->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Удалить Задание ?</h4>
                                        </div>
                                        <div class="modal-body">
                                            Вы действительно хотите удалить {{$Group->name}}
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{URL::route('admin.groups.destroy')}}" method="post">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
                                                <button type="submit" class="button-small">Да</button>
                                                <input type="hidden" name="id" value="{{$Group->id}}"/>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                    </tbody>
                    {!! $Groups->render(); !!}
                </table>

            </div>


        </div>

@endsection
