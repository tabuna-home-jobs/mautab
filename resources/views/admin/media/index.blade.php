@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md" ui-jq="ibdexMedia">
        <div class="row">
            <div class="col-xs-3">
                <h1 class="m-n font-thin h3">Медиа</h1>
            </div>
            <div class="col-xs-9">
                <div class="control-toolbar toolbar-padded">
                    <div class="toolbar-item toolbar-primary">
                        <div class="panelko">

                            <form enctype="multipart/form-data" action="{{route('admin.media.store')}}" method="post"
                                  id="sendFile">
                                <button type="button" class="btn btn-primary upthis">
                                    <i class="fa fa-upload"></i> Загрузить
                                </button>

                                <div style="display: none;">
                                    <input type="file" id="uploadthis" name="fileUpload">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>

                            </form>

                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-folder"></i> Создать папку
                            </button>

                            <button type="button" class="btn btn-default">
                                <i class="fa fa-refresh"></i>
                            </button>


                            <button type="button" class="btn btn-default">
                                <i class="fa fa-reply-all"></i> Переместить
                            </button>

                            <button type="button" class="btn btn-default">
                                <i class="fa fa-trash"></i> Удалить
                            </button>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                Библиотека
            </div>

            <div class="panel-body">

                <table class="table table-hover">
                    <colgroup>
                        <col>
                        <col width="130px">
                        <col width="130px">

                    </colgroup>

                    <tbody class="media-body-tbl">

                    <tr>
                        <td>
                            <a href="#">
                                <i class="fa fa-folder"></i> Папко
                            </a>
                        </td>
                        <td>0 объектов</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">
                                <i class="fa fa-photo"></i> Фотография некая
                            </a>
                        </td>
                        <td>3.11 KB</td>
                        <td>Oct 18, 2015</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">
                                <i class="fa fa-photo"></i> Ещё одна фотография
                            </a>
                        </td>
                        <td>5.49 KB</td>
                        <td>Oct 19, 2015</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">
                                <i class="fa fa-video-camera"></i> Видеофайл
                            </a>
                        </td>
                        <td>456.09 KB</td>
                        <td>Oct 15, 2015</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">
                                <i class="fa fa-file-o"></i> Файл
                            </a>
                        </td>
                        <td>6.14 KB</td>
                        <td>Oct 11, 2015</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">
                                <i class="fa fa-music"></i> Песня
                            </a>
                        </td>
                        <td>312.14 KB</td>
                        <td>Oct 09, 2015</td>
                    </tr>

                    </tbody>
                </table>

            </div>

        </div>
    </div>




@endsection
