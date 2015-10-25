@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Системные типы</h1>
        <small class="text-muted">Типы - это главные критерии для работы с контентом</small>
    </div>



    <div class="wrapper-md">

        <div class="panel panel-default">
            <div class="panel-heading font-bold">Системные типы используемые в контенте или в блоках</div>


            <div class="row wrapper">
                <div class="col-sm-5 m-b-xs">
                    <a href="{{route('admin.type.create')}}" class="btn btn-sm btn-default">Создать</a>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
                    </div>
                </div>
            </div>


            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-striped b-t b-light">
                        <thead>
                        <tr>
                            <th>@sortablelink ('name','Имя')</th>
                            <th>@sortablelink ('slug','Slug')</th>
                            <th>@sortablelink ('is_block','Тип')</th>
                            <th>@sortablelink ('updated_at','Последние изменение')</th>
                            <th>Управление</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($Types as $type)
                            <tr>
                                <td>{{ $type->name }}</td>
                                <td>{{ $type->slug }}</td>
                                <td>{{ $type->is_block }}</td>
                                <td>{{ $type->updated_at }}</td>
                                <td>

                                    <div class="btn-group pull-right" role="group" aria-label="...">
                                        <a href="{{ route('admin.type.edit',$type->slug) }}"
                                           class="btn btn-default"><span class="fa fa-edit"></span> </a>
                                        <a href="#" data-toggle="modal" data-target="#Modal-{{$type->slug}}"
                                           class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>


                                </td>
                            </tr>


                            <!-- Modal -->
                            <div class="modal fade" id="Modal-{{$type->slug}}" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Удалить
                                                {{$type->name}}?</h4>
                                        </div>
                                        <div class="modal-body">
                                            Вы действительно хотите удалить {{$type->name}}
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{route('admin.type.destroy',$type->slug)}}"
                                                  method="post">
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

            </div>


            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-offset-4 col-sm-4 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">Всего
                            элементов: {!! $Types->count() !!}</small>
                    </div>
                    <div class="col-sm-4 text-right text-center-xs">
                        {!! $Types->appends(\Input::except('page'))->render() !!}
                    </div>
                </div>
            </footer>

        </div>


    </div>




@endsection
