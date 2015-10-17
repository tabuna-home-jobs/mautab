@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Редактирование системного типа {{$Type->name}}</h1>
    </div>



    <div class="wrapper-md">

        <div class="panel panel-default">
            <div class="panel-heading font-bold">Системные типы используемые в контенте или в блоках</div>


            <div class="panel-body">


                <form class="form-horizontal" method="post" action="{{route('admin.type.update',$Type->slug)}}">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Имя</label>

                        <div class="col-lg-10">
                            <input type="text" name="name" class="form-control" required value="{{$Type->name}}">
                        </div>
                    </div>

                    <div class="line line-dashed b-b line-lg"></div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Slug</label>

                        <div class="col-lg-10">
                            <input type="text" name="slug" class="form-control" required value="{{$Type->slug}}">
                            <span class="help-block m-b-none">Будет использован для опередения в системе</span>
                        </div>
                    </div>

                    <div class="line line-dashed b-b line-lg"></div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Блок</label>


                        <div class="col-lg-10">
                            <label class="i-switch bg-success m-t-xs m-r">
                                <input type="radio" name="is_block" value="1" @if($Type->is_block) checked @endif>
                                <i></i>
                            </label>
                            <label class="i-switch bg-danger m-t-xs m-r">
                                <input type="radio" name="is_block" value="0" @if(!$Type->is_block) checked @endif>
                                <i></i>
                            </label>
                        </div>

                    </div>


                    <div class="line line-dashed b-b line-lg"></div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            {!!  csrf_field() !!}
                            <input type="hidden" name="_method" value="PUT">
                            <button type="submit" class="btn btn-sm btn-info">Изменить</button>
                        </div>
                    </div>
                </form>


            </div>


            <div class="panel-footer">Последне редактирование: <span class="pull-right">{{$Type->updated_at}}</span>
            </div>

        </div>


    </div>




@endsection
