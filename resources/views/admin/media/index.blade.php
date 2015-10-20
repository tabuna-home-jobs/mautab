@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md" >
        <div class="row" ui-jq="uploadWidget">
            <div class="col-xs-3" ui-jq="uploadFile">
                <h1 class="m-n font-thin h3" ui-jq="ibdexMedia">Медиа</h1>
            </div>
            <div class="col-xs-9" ui-jq="jqueryxdr">
                <div class="control-toolbar toolbar-padded" ui-jq="jquerypostmess">
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



                <form id="fileupload" action="{{route("admin.media.store")}}" method="POST" enctype="multipart/form-data" class="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!-- Redirect browsers with JavaScript disabled to the origin page -->
                    <noscript>&lt;input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"&gt;</noscript>
                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                    <div class="row fileupload-buttonbar">
                        <div class="col-lg-7">
                            <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input type="file" name="fileUpload" multiple="">
                </span>
                            <button type="submit" class="btn btn-primary start">
                                <i class="glyphicon glyphicon-upload"></i>
                                <span>Start upload</span>
                            </button>
                            <button type="reset" class="btn btn-warning cancel">
                                <i class="glyphicon glyphicon-ban-circle"></i>
                                <span>Cancel upload</span>
                            </button>
                            <button type="button" class="btn btn-danger delete">
                                <i class="glyphicon glyphicon-trash"></i>
                                <span>Delete</span>
                            </button>
                            <input type="checkbox" class="toggle">
                            <!-- The global file processing state -->
                            <span class="fileupload-process"></span>
                        </div>
                        <!-- The global progress state -->
                        <div class="col-lg-5 fileupload-progress fade">
                            <!-- The global progress bar -->
                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                            </div>
                            <!-- The extended global progress state -->
                            <div class="progress-extended">&nbsp;</div>
                        </div>
                    </div>
                    <!-- The table listing the files available for upload/download -->
                    <table role="presentation" class="table table-striped">
                        <tbody class="files">
                        </tbody>
                    </table>
                    <div class="alert alert-danger">Upload server currently unavailable - Tue Oct 20 2015 21:45:08 GMT+0300 (MSK)</div></form>

            </div>

        </div>
    </div>




@endsection
