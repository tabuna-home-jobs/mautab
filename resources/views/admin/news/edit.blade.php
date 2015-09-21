@extends('admin')

@section('content')





    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">  {{ $Page->title or 'Новая страница' }}</h1>
    </div>

    <div class="wrapper-md">

        <div class="panel panel-default">
            <div class="panel-heading">

                {{ $Page->title or 'Новая страница' }}

            </div>


            <div class="panel-body">

                <form action="{{route('admin.news.update', $Page->slug)}}" method="post">


                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Содержание</label>
                                    <textarea class="textarea form-control textareaedit" name="content" rows="30">
                                        {!! $Page->content or '' !!}
                                    </textarea>
                        </div>
                    </div>


                    <div class="col-md-4">

                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control" type="text" maxlength="255" required name="title"
                                   value="{{$Page->title or ''}}">
                        </div>

                        <div class="form-group">
                            <label>Ключевые слова</label>
                            <input class="form-control" type="text" maxlength="255" required name="keywords"
                                   value="{{$Page->keywords or ''}}">
                        </div>







                        <div class="form-group">
                            <label>Описание</label>

                            <textarea class="form-control" rows="7" maxlength="255" required
                                      name="descript">{{$Page->descript or ''}}</textarea>
                        </div>


                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>


                </form>
            </div>
        </div>
    </div>

@endsection
