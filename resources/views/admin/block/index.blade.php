@extends('admin._layouts.twoColumnsContainer')




@section('firstContent')

    <div class="list-group no-radius no-border no-bg m-b-none">
        <li class="list-group-item b-b text-center" tabindex="0">Типы:</li>


        @foreach($Types as $value)

            <a href="{{route('admin.block.index',['type'=>$value->id])}}"
               class="list-group-item m-l hover-anchor b-a" tabindex="0">
                                            <span class="pull-right text-muted hover-action" role="button" tabindex="0"><i
                                                        class="fa fa-eye"></i></span>
                <span class="block m-l-n">{{$value->name}}</span>
            </a>

        @endforeach

    </div>

@endsection


@section('secondContent')



    <div class="panel panel-default">


        <div class="panel-heading">
            <ul class="nav nav-pills pull-right">
                <li><a href="{{route('admin.block.create')}}">Создать <i class="fa fa-plus"></i></a></li>
            </ul>
            Блоки
        </div>


        <div class="panel-body">

            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>Slug</th>
                        <th>Последние изменение</th>
                        <th>Управление</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($Blocks as $block)
                        <tr>
                            <td>{{ $block->slug }}</td>
                            <td>{{ $block->updated_at }}</td>
                            <td>

                                <div class="btn-group pull-right" role="group" aria-label="...">
                                    <a href="{{ route('admin.block.edit',$block->slug) }}"
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
                                            {{$block->slug}}?</h4>
                                    </div>
                                    <div class="modal-body">
                                        Вы действительно хотите удалить {{$block->slug}}
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{route('admin.block.destroy',$block->slug)}}"
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


    </div>



@endsection