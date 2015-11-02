@extends('admin._layouts.twoColumnsContainer')




@section('firstContent')

    <div class="list-group no-radius no-border no-bg m-b-none">
        <li class="list-group-item b-b text-center" tabindex="0">Типы:</li>


        @foreach($Types as $value)

            <a href="{{route('admin.post.index',['type'=>$value->id])}}"
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
                <li><a href="{{route('admin.post.create')}}">Создать <i class="fa fa-plus"></i></a></li>
            </ul>
            Посты
        </div>


        <div class="panel-body row">

            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>Название</th>
                        <th>Последние изменение</th>
                        <th>Управление</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($Posts as $post)
                        <tr>
                            <td>{{ $post->slug }}</td>
                            <td>{{ $post->publish }}</td>
                            <td>

                                <div class="btn-group pull-right" role="group" aria-label="...">


                                    <a href="{{route('admin.post.story.create',$post->slug)}}"
                                       class="btn btn-default"><i class="fa fa-plus"></i> </a>

                                    <a href="{{route('admin.post.story.index',$post->slug)}}"
                                       class="btn btn-default"><i class="fa fa-bars"></i>
                                    </a>

                                    <a href="{{ route('admin.post.edit',$post->slug) }}"
                                       class="btn btn-default"><i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#Modal-{{$post->slug}}"
                                       class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>


                            </td>
                        </tr>


                        <!-- Modal -->
                        <div class="modal fade" id="Modal-{{$post->slug}}" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Удалить
                                            {{$post->slug}}?</h4>
                                    </div>
                                    <div class="modal-body">
                                        Вы действительно хотите удалить {{$post->slug}}
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{route('admin.post.destroy',$post->slug)}}"
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