@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Локализация</h1>
        <small class="text-muted">Языки поддерживаемые системой</small>
    </div>



    <div class="wrapper-md">


        <div class="panel panel-default">
            <div class="panel-heading font-bold">Новая локализация</div>


            <div class="panel-body">
                <form class="form-horizontal" action="{{route('admin.language.update',$Language->id)}}" method="post">

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Название</label>

                        <div class="col-lg-10">
                            <input type="text" name="name" class="form-control" value="{{$Language->name}}">
                        </div>
                    </div>

                    <div class="line line-dashed b-b line-lg"></div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Код</label>

                        <div class="col-lg-10">
                            <input type="text" name="code" class="form-control" value="{{$Language->code}}">
                        </div>
                    </div>

                    <div class="line line-dashed b-b line-lg"></div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Статус</label>

                        <div class="col-lg-10">
                            <label class="i-switch bg-success m-t-xs m-r">
                                <input type="radio" name="status" value="1" @if($Language->status) checked @endif>
                                <i></i>
                            </label>
                            <label class="i-switch bg-danger m-t-xs m-r">
                                <input type="radio" name="status" value="0" @if(!$Language->status) checked @endif>
                                <i></i>
                            </label>
                        </div>

                    </div>


                    <div class="line line-dashed b-b line-lg"></div>

                    <div class="form-group text-center">
                        <div class="col-md-6">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="PUT">
                            <button type="submit" class="btn btn-sm btn-info">Изменить</button>
                        </div>


                        <div class="col-md-6">
                            <a href="{{URL::previous()}}" class="btn btn-sm btn-danger">Назад</a>
                        </div>

                    </div>


                </form>
            </div>
        </div>


    </div>




@endsection
