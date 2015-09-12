@extends('app')

@section('content')


    <div class="panel panel-default" ui-jq="webAdd">
        <div class="panel-heading">{{Lang::get('menu.Web')}}</div>
        <div class="panel-body">


            <p class="col-sm-12 text-center text-success">
                <a id="show-add-bd" data-toggle="collapse" href="#add-bd" aria-expanded="false"
                   aria-controls="collapseExample">
                    <i class="fa fa-plus"></i>Добавить
                </a>
            </p>


            <div class="collapse col-xs-12" id="add-bd">
                <form class="col-md-8 col-xs-12" method="post" action="{{route('web.store')}}">

                    <div class="alert alert-info" role="alert">Добавление домена</div>

                    <div class="form-group input-line">
                        <label class="control-label">Домен </label>
                        <input type="text" name="v_domain" class="form-control" value="" required/>
                    </div>


                    <div class="line line-dashed b-b"></div>


                    <a id="show-add-options" data-toggle="collapse" href="#options" aria-expanded="false"
                       aria-controls="collapseExample">Дополнительные опции</a>

                    <!--Дополнительные опции (по умолчанию скрыт)-->
                    <div class="options collapse" id="options" aria-expanded="false">
                        <div class="form-group">
                            <label>Алиасы</label>
                            <textarea cols="40" rows="5" class="form-control" name="v_aliases"></textarea>
                        </div>
                        <div class="form-group checkbox">
                            <label>
                                <input type="checkbox" name="v_proxy" checked/>Поддержка Nginx
                            </label>
                        </div>
                        <div class="form-group supp-niginx">
                            <label>Proxy Extentions</label>
                            <textarea cols="40" rows="5" name="v_proxy_ext" class="form-control">jpeg, jpg, png, gif, bmp, ico, svg, tif, tiff, css, js, htm, html, ttf, otf, webp, woff, txt, csv, rtf, doc, docx, xls, xlsx, ppt, pptx, odf, odp, ods, odt, pdf, psd, ai, eot, eps, ps, zip, tar, tgz, gz, rar, bz2, 7z, aac, m4a, mp3, mp4, ogg, wav, wma, 3gp, avi, flv, m4v, mkv, mov, mp4, mpeg, mpg, wmv, exe, iso, dmg, swf</textarea>
                        </div>

                        <!-- Как пойдёт
                        <div class="form-group checkbox">
                            <label>
                                <input type="checkbox" name="v_ssl"/>Поддержка SSL
                            </label>
                        </div>
                        -->


                    </div>
                    <!--Дополнительные опции (по умолчанию скрыт)-->

                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" value="Отправить" class="btn btn-blue">
                    </div>
                </form>

                <div class="col-md-4 hidden-sm hidden-xs">


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Информация:</h3>
                        </div>
                        <div class="panel-body">
                            <p> MySQL является самой популярной СУБД с открытым исходным кодом в мире. </p>

                            <p>MySQL может эффективно помочь вам обеспечивают высокую производительность, масштабируемых
                                приложений баз данных.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-12" id="add-shadow">

                @forelse($UserDomain as $key => $Domain)

                    <div class="col-xs-12 col-md-4">

                        <div class="panel b-a">
                            <div class="text-center no-border bg-primary">
                                <span class="text-lt text-ellipsis p-title">{{ $key }}</span>
                            </div>


                            <div class="hbox bg-primary bg">
                                <div class="col wrapper">
                                    <span>Диск</span>

                                    <div class="h1 text-info font-thin text-ellipsis">{{ $Domain['U_DISK'] }}</div>
                                </div>
                                <div class="col wrapper bg-info">
                                    <span>Трафик</span>

                                    <div class="h1 text-warning font-thin text-ellipsis">{{ $Domain['U_BANDWIDTH'] }}</div>
                                </div>
                            </div>


                            <div class="hbox text-center b-b b-light text-sm">
                                <a href="{{route('ftp.show', $key)}}" class="col padder-v text-muted b-r b-light">
                                    <i class="fa fa-plus block m-b-xs"></i>
                                    <span>FTP</span>
                                </a>
                                <a href="{{route('web.show', $key)}}" class="col padder-v text-muted b-r b-light">
                                    <i class="fa fa-pencil-square-o block m-b-xs"></i>
                                    <span>Edit</span>
                                </a>
                                <a href="#" onclick="delModal('{{$key}}', '{{route('web.destroy')}}');"
                                   class="col padder-v text-muted">
                                    <i class="fa fa-trash block m-b-xs"></i>
                                    <span>Delete</span>
                                </a>
                            </div>

                        </div>

                    </div>

                @empty
                    <div class="jumbotron text-center">
                        <h1>Пусто!</h1>

                        <p>У Вас ещё нет ни одного веб-сайта</p>

                    </div>

                @endforelse


            </div>
        </div>


    </div>
    </div>



@endsection
