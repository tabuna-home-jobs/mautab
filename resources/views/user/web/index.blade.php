@extends('app')

@section('content')

    <p class="col-sm-10 text-center text-success">
        <a id="show-add-bd" data-toggle="collapse" href="#add-bd" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa fa-plus"></i>Добавить
        </a>
    </p>


    <div class="col-sm-2">


        <form method="get" action="{{URL::route('hosting.search.index')}}">
            <div class="input-group">
                <input type="text" name="query" class="form-control" placeholder="Поиск ...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                    <span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </form>


    </div>


    <div class="collapse col-xs-12" id="add-bd">
        <form class="col-md-8 col-xs-12" method="post" action="{{URL::route('hosting.web.store')}}">

            <div class="alert alert-info" role="alert">Добавление домена</div>
            <div class="form-group input-line">
                <label>Домен </label>
                <input type="text" name="v_domain" class="form-control" value="" required />
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
                                    <li class="list-group-item">Диск:{{ $Domain['U_DISK'] }} мб
                                    Трафик:{{ $Domain['U_BANDWIDTH'] }} мб</li>

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
                                            <a href="{{URL::route('hosting.ftp.show', $key)}}" class="btn btn-default">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                            <a href="{{URL::route('hosting.web.show', $key)}}" class="btn btn-default">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>

                    <a href="#" class="btn btn-danger" onclick="delModal('{{$key}}','/hosting/web/destroy');">
                        <i class="fa fa-trash"></i>
                    </a>
                                        </div>


                                    </div>

                        <!-- Modal -->



        <script type="text/javascript">
            //Модалка для удаления
            /**
             *
             * @param name - имя элемента которы надо удалить
             * @param route - используемый роут Например: (/hosting/web/destroy)
             * @param id - id записи с которой происходят манипуляции удаления
             *
             */
            function delModal(name, route, id){

                //csfr
                var csrf = $('meta[name="csrf-token"]').attr('content');

                var valueName = name;
                //Обрабатываем выходящее значение
                var key = name.replace('.','');
                //Формируем модалку
                var modalka =' <div class="modal fade" id="Modal-'+key+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">Удалить '+valueName+' ?</h4></div><div class="modal-body">Вы действительно хотите удалить '+valueName+'</div><div class="modal-footer"><form action="'+route+'" method="post"><button type="button" class="btn btn-default" data-dismiss="modal">Нет</button><button type="submit" class="btn btn-danger">Да</button><input type="hidden" name="v_domain" value="'+valueName+'"/><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="v_record_id" value="'+id+'" ><input type="hidden" name="_token" value="'+csrf+'"></form></div></div></div></div>';

                //Добавляем модалку в дом дерево
                $('footer').append(modalka);
                //Вызываем модалку
                $('#Modal-'+key).modal();
                //По зыкрытию нашей модалки удаляем её из дома
                $('#Modal-'+key).on('hidden.bs.modal', function () {
                    $('#Modal-'+key).remove();
                })
            }
        </script>

                                </div>
                            </div>

                    </div>


                    @empty
                        <div class="jumbotron text-center">
                            <h1>Пусто!</h1>

                            <p>У Вас ещё нет ни одного веб-сайта</p>

                            <p></p>
                        </div>

                    @endforelse
            </div>
    </div>





@endsection
