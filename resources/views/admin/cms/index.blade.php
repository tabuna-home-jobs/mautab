@extends('admin')

@section('content')

    <div class="app-content-full h-full no-top-0">

        <div class="hbox hbox-auto-xs hbox-auto-sm bg-light">

            <!-- column -->
            <div class="col w b-r">
                <div class="vbox">
                    <div class="row-row">
                        <div class="cell scrollable hover">
                            <div class="cell-inner">
                                <div class="list-group no-radius no-border no-bg m-b-none">
                                    <li class="list-group-item b-b text-center" tabindex="0">CMS:</li>


                                    @foreach($ListCMS as $value)

                                        <a href="{{route('admin.cms.edit',$value->slug)}}"
                                           class="list-group-item m-l hover-anchor b-a" tabindex="0">
                                            <span class="pull-right text-muted hover-action" role="button" tabindex="0"><i
                                                        class="fa fa-times"></i></span>
                                            <span class="block m-l-n">{{$value->name}}</span>
                                        </a>

                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col bg-white-only">
                <div class="vbox">

                    <div class="row-row">
                        <div class="cell">
                            <div class="cell-inner">
                                <div class="wrapper-lg">


                                    <div class="hbox h-auto m-b-lg text-center">
                                        <div class="col v-middle h1 font-thin">
                                            <div>Новая CMS</div>
                                        </div>
                                    </div>


                                    <!-- fields -->
                                    <form class="form-horizontal" method="post"
                                          action="{{route('admin.cms.store')}}">

                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="name" class="col-sm-4 control-label">Название</label>

                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="title" class="col-sm-4 control-label">Заголовок</label>

                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="title">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="keywords" class="col-sm-4 control-label">Ключевые
                                                    слова</label>

                                                <div class="col-sm-8">
                                                    <input type="text" ui-jq="tagsinput" class="form-control"
                                                           name="keywords">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="description" class="col-sm-4 control-label">Описание</label>

                                                <div class="col-sm-8">
                                                    <textarea class="form-control" name="description"></textarea>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="last_version" class="col-sm-4 control-label">Последняя
                                                    версия</label>

                                                <div class="col-sm-8">
                                                    <input type="url" class="form-control" name="last_version">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="web_site" class="col-sm-4 control-label">Web
                                                    сайт</label>

                                                <div class="col-sm-8">
                                                    <input type="url" class="form-control" name="web_site">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-sm-12">


                                    <textarea class="textarea form-control textareaedit" name="content" rows="30">
                                    </textarea>


                                        </div>


                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="col-xs-12 text-center">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default">Создать</button>
                                            </div>
                                        </div>


                                    </form>
                                    <!-- / fields -->


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /column -->
        </div>
    </div>

@endsection