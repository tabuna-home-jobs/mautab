@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Файловый менеджер</div>
        <div class="panel-body">

            <form action="{{route('manager.index')}}"
                  method="get" class="col-xs-12" role="form">

                <div class="input-group m-b">
                    <div class="input-group-btn dropdown" dropdown="">
                        <button type="submit" class="btn btn-default" tabindex="-1">Перейти</button>
                        <button class="btn btn-default" data-toggle="dropdown" aria-expanded="false"><span
                                    class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="">Копировать</a></li>
                            <li><a href="">Вырезать</a></li>
                            <li><a href="">Вставить</a></li>
                            <li class="divider"></li>
                            <li><a href="">Распаковать архив</a></li>
                        </ul>

                    </div>
                    <!-- /btn-group -->
                    <input type="text" name="path" class="form-control" placeholder="/"
                           value="{{Session::get('Path', '')}}" class="form-control">
                </div>


                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </form>


            <table class="table table-responsive">

                <thead>
                <tr>
                    <th class="text-center" width="5%">#</th>
                    <th colspan="3" width="50%">Название</th>
                    <th>Вес</th>
                    <th>Права</th>
                    <th>Дата</th>
                    <th class="text-right" width="10%">Управление</th>
                </tr>
                </thead>


                <tbody>

                @foreach($listDirectory as $list)
                    <tr>

                        <td class="text-center">
                            <div class="checkbox">
                                <label class="i-checks">
                                    <input type="checkbox" name="1" value="Documents"><i></i>
                                </label>
                            </div>
                        </td>


                        <td colspan="3">
                            @if($list['type'] == 'd')
                                <i class="fa fa-folder-open"></i>  <a
                                        href="{{route('manager.index',['name' => $list['name']])}}">{{$list['name']}}</a>
                            @else
                                <i class="fa fa-file-code-o"></i>
                                {{$list['name']}}
                            @endif
                        </td>

                        <td>
                            {{$list['size']}}
                        </td>


                        <td>
                            {{$list['permissions']}}
                        </td>

                        <td>
                            {{$list['date']}}
                        </td>


                        <td class="actions text-right">

                            <a href="#" data-toggle="modal"
                               data-target="#Modal-permission-{{str_replace(".",'',$list['name'])}}"
                               class="btn btn-default">
                                <i class="fa fa-lock"></i>
                            </a>

                            <a href="#" data-toggle="modal"
                               data-target="#Modal-delete-{{str_replace(".",'',$list['name'])}}"
                               class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="Modal-delete-{{str_replace(".",'',$list['name'])}}"
                                 tabindex="-1"
                                 role="dialog" aria-labelledby="myModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Удалить {{$list['name']}} ?</h4>
                                        </div>
                                        <div class="modal-body">
                                            Вы действительно хотите удалить {{$list['name']}}
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{route('manager.destroy')}}"
                                                  method="post">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Нет
                                                </button>
                                                <button type="submit" class="btn btn-danger">Да</button>
                                                <input type="hidden" name="name" value="{{$list['name']}}"/>
                                                <input type="hidden" name="type" value="{{$list['type']}}">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="Modal-permission-{{str_replace(".",'',$list['name'])}}"
                                 tabindex="-1"
                                 role="dialog" aria-labelledby="myModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Удалить {{$list['name']}} ?</h4>
                                        </div>
                                        <div class="modal-body">
                                            Вы действительно хотите изменить права {{$list['name']}}
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{route('manager.update')}}"
                                                  method="post">

                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="permission"
                                                           value="{{$list['permissions']}}">
                                                </div>

                                                <button type="button" class="btn btn-default" data-dismiss="modal">Нет
                                                </button>
                                                <button type="submit" class="btn btn-danger">Да</button>
                                                <input type="hidden" name="name" value="{{$list['name']}}"/>
                                                <input type="hidden" name="_method" value="PUT">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>






@endsection
