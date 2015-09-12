@extends('admin')

@section('content')





    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">  {{ $Page->name or 'Новая страница' }}</h1>
    </div>

    <div class="wrapper-md">

        <div class="panel panel-default">
            <div class="panel-heading">

                {{ $Page->name or 'Новая страница' }}

            </div>


            <div class="panel-body">

                <form action="{{route('admin.pages.update', $Page->slug)}}" method="post">


                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Содержание</label>
                                    <textarea class="textarea form-control textareaedit" name="cont" rows="30">
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
                            <label>Имя</label>
                            <input class="form-control" type="text" maxlength="255" required name="name"
                                   value="{{$Page->name or ''}}">
                        </div>

                        <div class="form-group">
                            <label>Теги</label>
                            <input ui-jq="tagsinput" ui-options="" class="form-control w-md" data-role="tagsinput"
                                   type="text" maxlength="255"
                                   required name="tag" value="{{$Page->tag or ''}}">
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
