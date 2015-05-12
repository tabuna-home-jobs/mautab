@extends('admin')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-center">
            Список страниц
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            <h5 class="box-title">
                                <a href="{{URL::route('admin.pages.create')}}" class="btn btn-link btn-sm"><span class="fa fa-plus"></span> Добавить новую запись </a>
                            </h5>
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table  table-hover">
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
                                            <a href="{{ URL::route('admin.pages.edit',$Page->id) }}" class="btn btn-default"><span class="fa fa-edit"></span> </a>
                                            <a href="#" data-toggle="modal" data-target="#Modal-{{$Page->id}}" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>


                                    </td>
                                </tr>


                                <!-- Modal -->
                                <div class="modal fade" id="Modal-{{$Page->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                <form action="{{URL::route('admin.pages.destroy')}}" method="post">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
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
                        {!! $PageList->render() !!}
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section><!-- /.content -->

@endsection
