@extends('admin')

@section('content')

    <section class="content-header">
        <h1 class="text-center">Новая страница</h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class='row'>
            <div class='col-md-12'>

                <form action="{{route('admin.news.store')}}" method="post">


                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input class="form-control" type="text" maxlength="255" required name="title">
                        </div>
                        <div class="form-group">
                            <label>Теги</label>
                            <input class="form-control" type="text" maxlength="255" required name="keywords">
                        </div>
                        <div class="form-group">
                            <label>Описание</label>
                            <input class="form-control" type="text" maxlength="255" required name="descript">
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-default">Отправить</button>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Содержание</label>
                            <textarea class="textarea form-control textareaedit" name="content" rows="20"></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div><!-- /.col-->
        </div><!-- ./row -->

    </section><!-- /.content -->

@endsection
