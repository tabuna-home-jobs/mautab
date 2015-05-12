@extends('admin')

@section('content')

    <section class="content-header">
        <h1 class="text-center">
            {{ $Page->name or 'Новая страница' }}
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class='row'>
            <div class='col-md-12'>


                <form action="{{URL::route('admin.pages.update')}}" method="post">


                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control" type="text" maxlength="255" required name="title" value="{{$Page->title or ''}}">
                        </div>
                        <div class="form-group">
                            <label>Имя</label>
                            <input class="form-control" type="text" maxlength="255" required name="name" value="{{$Page->name or ''}}">
                        </div>
                        <div class="form-group">
                            <label>Теги</label>
                            <input class="form-control" type="text" maxlength="255" required name="tag" value="{{$Page->tag or ''}}">
                        </div>
                        <div class="form-group">
                            <label>Описание</label>
                            <input class="form-control" type="text" maxlength="255" required name="descript" value="{{$Page->descript or ''}}">
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-default">Отправить</button>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Содержание</label>
                                    <textarea class="textarea form-control textareaedit" name="cont" rows="20">
                                        {!! $Page->content or '' !!}
                                    </textarea>
                        </div>
                    </div>

                    <input type="hidden" name="id" value="{{$Page->id}}">
                    <input type="hidden" name="_method" value="PUT">


                </form>
            </div>
        </div>
        </div><!-- /.col-->
        </div><!-- ./row -->

    </section><!-- /.content -->

@endsection
