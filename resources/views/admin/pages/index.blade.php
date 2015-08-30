@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Страницы</h1>
    </div>

    <div class="wrapper-md">

        <div class="panel panel-default">
            <div class="panel-heading">

                <a href="{{route('admin.pages.create')}}" class="btn btn-link btn-sm"><span
                            class="fa fa-plus"></span> Добавить новую запись </a>


            </div>

            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Имя</th>
                        <th>Заголовок</th>
                        <th>Управление</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($PageList as $Page)
                        <tr>
                            <td>{{ $Page->id }}</td>
                            <td>{{ $Page->name }}</td>
                            <td>{{ $Page->title }}</td>
                            <td>

                                <div class="btn-group pull-right" role="group" aria-label="...">
                                    <a href="{{ route('admin.pages.edit',$Page->slug) }}"
                                       class="btn btn-default"><span class="fa fa-edit"></span> </a>
                                    <a href="#" data-toggle="modal" data-target="#Modal-{{$Page->slug}}"
                                       class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>


                            </td>
                        </tr>


                        <!-- Modal -->
                        <div class="modal fade" id="Modal-{{$Page->slug}}" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Удалить
                                            {{$Page->name}}?</h4>
                                    </div>
                                    <div class="modal-body">
                                        Вы действительно хотите удалить {{$Page->name}}
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{route('admin.pages.destroy')}}" method="post">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Нет
                                            </button>
                                            <button type="submit" class="button-small">Да</button>
                                            <input type="hidden" name="id" value="{{$Page->id}}"/>
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
                    <div class="col-sm-offset-4 col-sm-4 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">Всего элементов: {!! $PageList->count() !!}</small>
                    </div>
                    <div class="col-sm-4 text-right text-center-xs">
                        {!! $PageList->render() !!}
                    </div>
                </div>
            </footer>
        </div>
    </div>

    s
@endsection
