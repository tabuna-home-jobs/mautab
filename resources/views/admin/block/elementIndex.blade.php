@extends('admin')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Элементы</h1>
        <small class="text-muted">Элементы относящиеся к данному блоку</small>
    </div>



    <div class="wrapper-md">


        <div class="panel panel-default">
            <div class="panel-heading font-bold">Элементы</div>


            <div class="row wrapper">
                <div class="col-sm-4">
                    <a href="{{URL::previous()}}" class="btn btn-sm btn-default">Назад</a>
                </div>
                <div class="col-sm-4">
                    <form action="{{route('admin.language.index')}}">
                        <div class="input-group">
                            <input type="text" class="input-sm form-control" name="search" placeholder="Поиск ...">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="submit">Найти!</button>
          </span>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4">
                    <p class="pull-right">
                        <a href="{{route('admin.block.element.create',$block->slug)}}" class="btn btn-sm btn-default">Создать</a>
                    </p>
                </div>
            </div>


            <div class="panel-body row">

                <div class="table-responsive">
                    <table class="table table-striped b-t b-light">
                        <thead>
                        <tr>
                            <th>@sortablelink ('name','Название')</th>
                            <th>@sortablelink ('sort','Порядок')</th>
                            <th>@sortablelink ('updated_at','Последние изменение')</th>
                            <th>Управление</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($Elements as $element)

                            <tr>
                                <td>{{ $element->name }}</td>
                                <td>{{ $element->sort }}</td>
                                <td>{{ $element->updated_at }}</td>
                                <td>

                                    <div class="btn-group pull-right" role="group" aria-label="...">
                                        <a href="{{ route('admin.block.element.edit',[$block->slug,$element->id]) }}"
                                           class="btn btn-default"><span class="fa fa-edit"></span> </a>
                                        <a href="#" data-toggle="modal" data-target="#Modal-{{$element->id}}"
                                           class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>


                                </td>
                            </tr>


                            <!-- Modal -->
                            <div class="modal fade" id="Modal-{{$element->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Удалить
                                                {{$element->name}}?</h4>
                                        </div>
                                        <div class="modal-body">
                                            Вы действительно хотите удалить {{$element->name}}
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{route('admin.block.element.destroy',[$block->slug,$element->id])}}"
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
                            элементов: {!! $Elements->count() !!}</small>
                    </div>
                    <div class="col-sm-4 text-right text-center-xs">
                        {!! $Elements->appends(\Input::except('page'))->render() !!}
                    </div>
                </div>
            </footer>

        </div>


    </div>




@endsection