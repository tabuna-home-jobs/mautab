@extends('admin')

@section('content')

    <div class="app-content-body">
        <div class="bg-light lter b-b wrapper-md">
            <h1 class="m-n font-thin h3">Роли</h1>
        </div>


        <div class="wrapper-md">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Роли
                </div>


                <div class="row wrapper">
                    <div class="col-sm-5 m-b-xs">
                        <a href="{{route('admin.roles.create')}}" class="btn btn-sm btn-default">Создать</a>
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <input type="text" class="input-sm form-control" placeholder="Поиск ...">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Найти!</button>
          </span>
                        </div>
                    </div>
                </div>


                <div class="table-responsive">
                    <table class="table table-striped b-t b-light table-condensed table-hover">

                        <thead>
                        <tr>
                            <th>@sortablelink ('name','Имя')</th>
                            <th>@sortablelink ('slug','Slug')</th>
                            <th>@sortablelink ('created_at','Создание')</th>
                            <th>Управление</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($Roles as $key => $Role)
                            <tr>
                                <td>{{$Role->name}}</td>
                                <td>{{$Role->slug}}</td>

                                <td>{{$Role->created_at}}</td>
                                <td>
                                    <div class="btn-group pull-right" role="group" aria-label="...">
                                        <a href="{{route('admin.roles.edit', $Role->slug)}}" class="btn btn-default">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#Modal-{{$Role->slug}}"
                                           class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="Modal-{{$Role->slug}}" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Удалить {{$Role->name}} ?</h4>
                                        </div>
                                        <div class="modal-body">
                                            Вы действительно хотите удалить {{$Role->name}}
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{route('admin.roles.destroy')}}" method="post">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Нет
                                                </button>
                                                <button type="submit" class="btn btn-danger">Да</button>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                        </tbody>
                    </table>


                </div>


                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm">
                                Элементов: {!! $Roles->count() !!} из {!! $Roles->total() !!}</small>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            {!! $Roles->appends(\Input::except('page'))->render() !!}
                        </div>
                    </div>
                </footer>


            </div>
        </div>

    </div>


@endsection
