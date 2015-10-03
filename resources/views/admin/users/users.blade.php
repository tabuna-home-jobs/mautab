@extends('admin')

@section('content')

    <div class="app-content-body">
        <div class="bg-light lter b-b wrapper-md">
            <h1 class="m-n font-thin h3">Пользователи</h1>
        </div>


        <div class="wrapper-md">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Пользователи
                </div>
                <div class="table-responsive">


                    <table class="table table-striped b-t b-light table-condensed table-hover">

                        <thead>
                        <tr>
                            <th>@sortablelink ('id','#')</th>
                            <th>@sortablelink ('nickname','NickName')</th>
                            <th>@sortablelink ('email','Email')</th>
                            <th>@sortablelink ('balans','Баланс')</th>
                            <th>@sortablelink ('created_at','Создание')</th>
                            <th>Управление</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($Users as $key => $User)
                            <tr>
                                <td>{{$User->id}}</td>
                                <td>{{$User->nickname}}</td>
                                <td>{{$User->email}}</td>
                                <td>{{$User->balans}} руб</td>

                                <td>{{$User->created_at}}</td>
                                <td>
                                    <div class="btn-group pull-right" role="group" aria-label="...">
                                        <a href="{{route('LoginAs', $User->nickname)}}" class="btn btn-default">
                                            <i class="fa fa-sign-out"></i>
                                        </a>


                                        <a href="{{route('admin.users.show', $User->id)}}" class="btn btn-default">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#Modal-{{$User->id}}"
                                           class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="Modal-{{$User->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Удалить {{$User->nickname}} ?</h4>
                                        </div>
                                        <div class="modal-body">
                                            Вы действительно хотите удалить {{$User->nickname}}
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{route('admin.users.destroy')}}" method="post">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Нет
                                                </button>
                                                <button type="submit" class="btn btn-danger">Да</button>
                                                <input type="hidden" name="id" value="{{$User->id}}"/>
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
                                Элементов: {!! $Users->count() !!} из {!! $Users->total() !!}</small>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            {!! $Users->appends(\Input::except('page'))->render() !!}
                        </div>
                    </div>
                </footer>


            </div>
        </div>

    </div>


@endsection
