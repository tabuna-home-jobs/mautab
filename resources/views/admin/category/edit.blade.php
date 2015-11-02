@extends('admin')

@section('content')


    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Категории</h1>
        <small class="text-muted">Категории - это главные критерии для работы с контентом</small>
    </div>


    <div class="wrapper-md">


        <div class="panel panel-default">
            <div class="panel-heading font-bold">Новая категория</div>


            <div class="panel-body">
                <form class="form-horizontal" action="{{route('admin.category.update',$category->slug)}}" method="post">

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Название</label>

                        <div class="col-lg-10">
                            <input type="text" name="name" value="{{$category->name}}" class="form-control">
                        </div>
                    </div>

                    <div class="line line-dashed b-b line-lg"></div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Slug</label>

                        <div class="col-lg-10">
                            <input type="text" name="slug" class="form-control" value="{{$category->slug}}">
                        </div>
                    </div>

                    <div class="line line-dashed b-b line-lg"></div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Отношение</label>


                        <div class="col-lg-10">
                            <select ui-jq="chosen" class="chosen-select form-control w-full" name="parent_id">
                                <option value="0">Без отношения</option>
                                @foreach($Categories as $cat)
                                    <option value="{{$cat->id}}" @if($category->parent_id == $cat->id) selected @endif>{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="line line-dashed b-b line-lg"></div>

                    <div class="form-group text-center">
                        <div class="col-md-6">
                            {!! csrf_field() !!}

                            <input type="hidden" name="_method" value="PUT">
                            <button type="submit" class="btn btn-sm btn-info">Создать</button>
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
