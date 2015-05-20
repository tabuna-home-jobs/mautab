@extends('app')

@section('content')

<section class="container">
    <p class="text-center">
        <a id="show-add-bd" data-toggle="collapse" href="#add-bd" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa fa-plus"></i>Добавить
        </a>
    </p>

    <div class="collapse col-xs-12" id="add-bd">
        <form class="col-md-8 col-xs-12" method="post" action="{{URL::route('web.store')}}">

            <div class="alert alert-info" role="alert">Добавление домена</div>
            <div class="form-group input-line">
                <label>Домен </label>
                <input type="text" name="v_domain" class="form-control" value="" required />
            </div>
            <div class="form-group">
                <label>IP адрес</label>
                <select type="text" class="form-control" name="v_ip">
                    <option value="0">Выбрать</option>
                    <option value="151.80.164.81">151.80.164.81</option>
                </select>
            </div>
            <div class="form-group checkbox">
                <label>
                    <input type="checkbox" name="v_dns" checked/>Поддержка DNS
                </label>
            </div>
            <div class="form-group checkbox">
                <label>
                    <input type="checkbox" name="v_mail" checked/>Поддержка почты
                </label>
            </div>
            <div>
                <a id="show-add-options" data-toggle="collapse" href="#options" aria-expanded="false" aria-controls="collapseExample">Дополнительные опции</a>
            </div>

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
                <div class="form-group checkbox">
                    <label>
                        <input type="checkbox" name="v_ssl"/>Поддержка SSL
                    </label>
                </div>
                <div class="form-group checkbox">
                    <label>
                        <input type="checkbox" name="v_ftp"/>Дополнительный FTP
                    </label>
                </div>


                <div class="add-ftp">
                    <div class="ftp-groupz">
                        <div class="form-group">
                            <label>FTP#1</label>
                        </div>
                        <div class="form-group">
                            <label>Аккаунт</label>

                            <div>
                                <small>
                                    Префикс {{Sentry::getUser()->nickname }}_ будет автоматически добавлен к названию аккаунта
                                </small>
                            </div>
                            <input disabled type="hidden" class="v-ftp-user-is-new" name="v_ftp_user[1][is_new]" value="1"/>

                            <input disabled type="text" name="v_ftp_user[1][v_ftp_user]" class="form-control ftp_usr" value=""/>
                        </div>
                        <div class="form-group">
                            <label>Пароль / <a href="#" class="genPass">сгенерировать</a></label>
                            <input disabled type="text" name="v_ftp_user[1][v_ftp_password]" id="ftppas" class="form-control" value=""/>
                        </div>
                        <div class="form-group">
                            <label>Path</label>
                            <input disabled type="text" name="v_ftp_user[1][v_ftp_path]" class="form-control" value=""/>
                        </div>
                        <div class="form-group">
                            <label>Отправить данные FTP аккаунта по адресу</label>
                            <input disabled type="text" name="v_ftp_user[1][v_ftp_email]" class="form-control" value=""/>
                        </div>
                    </div>
                    <a href="#" id="addFtps">Добавить ещё один FTP аккаунт</a>
                </div>
            </div>
            <!--Дополнительные опции (по умолчанию скрыт)-->

            <div class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" value="Отправить" class="button-full">
            </div>
        </form>

        <div class="col-md-4 hidden-sm hidden-xs">


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Информация:</h3>
                </div>
                <div class="panel-body">
                    <p> MySQL является самой популярной СУБД с открытым исходным кодом в мире. </p>

                    <p>MySQL может эффективно помочь вам обеспечивают высокую производительность, масштабируемых приложений баз данных.
                    </p>
                </div>
            </div>

        </div>

        <hr class="clearfix col-xs-12">
    </div>


    <div class="col-md-12" id="add-shadow">


        @forelse($UserDomain as $key => $Domain)

            <div class="col-xs-12 col-md-4">


                @if($Domain['SUSPENDED'] == 'no')
                    <div class="panel panel-default ">
                        @else
                            <div class="panel panel-danger ">
                                @endif

                                <div class="panel-heading">
                                    <h3 class="panel-title"> {{ $key }}</h3>
                                </div>

                                <ul class="list-group">
                                    <li class="list-group-item"><span>Алиасы:</span><span>{{$Domain['ALIAS']}}</span></li>
                                    <li class="list-group-item"><span>Диск:</span><span> {{ $Domain['U_DISK'] }} мб</span></li>
                                    <li class="list-group-item"><span>Трафик:</span><span>{{ $Domain['U_BANDWIDTH'] }} мб</span></li>

                                    <li class="list-group-item"><span>IP:</span><span>{{ $Domain['IP'] }}  {{ $Domain['IP6'] }}</span></li>
                                    <li class="list-group-item"><span>Поддержка Nginx:</span><span>@if($Domain['PROXY'] == "") Нет @else Да @endif</span></li>
                                </ul>


                                <div class="panel-footer">


                                    <div class="container-fluid">
                                        <div class="pull-left">
                                            <small>{{$Domain['DATE']}}</small>
                                        </div>

                                        <div class="btn-group pull-right" role="group">
                                            <a href="http://{{$key}}/" target="_blank" class="btn btn-default">
                                                <i class="fa fa-sign-in"></i>
                                            </a>
                                            <a href="{{URL::route('web.showFTP', $key)}}" class="btn btn-default">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                            <a href="{{URL::route('web.show', $key)}}" class="btn btn-default">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>

                                            <a href="#" data-toggle="modal" data-target="#Modal-{{str_replace(".","",trim($key))}}" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>


                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="Modal-{{str_replace(".","",trim($key))}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                                aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Удалить {{$key}} ?</h4>
                                                </div>
                                                <div class="modal-body">
                                                    Вы действительно хотите удалить {{$key}}
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{URL::route('web.destroy')}}" method="post">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
                                                        <button type="submit" class="button-small">Да</button>
                                                        <input type="hidden" name="v_domain" value="{{$key}}"/>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                    </div>


                    @empty
                        <div class="jumbotron">
                            <h1>Пусто!</h1>

                            <p>У Вас ещё нет ДНС</p>

                            <p><a class="btn btn-primary btn-lg" href="#" role="button">Создать</a></p>
                        </div>

                    @endforelse
            </div>
    </div>
</section>









@endsection
