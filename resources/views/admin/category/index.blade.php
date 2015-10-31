@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Категории</h1>
        <small class="text-muted">Категории - это главные критерии для работы с контентом</small>
    </div>



    <div class="wrapper-md">

        <div class="panel panel-default">
            <div class="panel-heading font-bold">Системные типы используемые в контенте или в блоках</div>


            <div class="row wrapper">
                <div class="col-sm-5 m-b-xs">
                    <a href="{{route('admin.category.create')}}" class="btn btn-sm btn-default">Создать</a>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Найти!</button>
          </span>
                    </div>
                </div>
            </div>


            <div class="panel-body row">

                <div class="table-responsive">
                    <table class="table table-striped b-t b-light">
                        <thead>
                        <tr>
                            <th>@sortablelink ('name','Имя')</th>
                            <th>@sortablelink ('updated_at','Последние изменение')</th>
                            <th>Управление</th>

                        </tr>
                        </thead>
                        <tbody>
                                @foreach ($Categories->toTree() as $category)
                                    @include('admin._partials.category', $category)
                                @endforeach
                        </tbody>
                    </table>
                </div>

            </div>


            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-offset-4 col-sm-4 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">Всего
                            элементов: {!! $Categories->count() !!}</small>
                    </div>
                    <div class="col-sm-4 text-right text-center-xs">
                        {!! $Categories->appends(\Input::except('page'))->render() !!}
                    </div>
                </div>
            </footer>

        </div>


    </div>




@endsection
