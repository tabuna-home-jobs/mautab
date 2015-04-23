@extends('app')

@section('content')
    <section class="container">

        <div class="col-xs-12">

            <form action="/web/domain" method="POST" >


                <div class="col-md-6">

                    <div class="form-group">
                        <label for="v_domain">Домен</label>
                        <input type="text" class="form-control" id="v_domain" name="v_domain" placeholder="example.com">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="v_dns"> Поддержка DNS
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="v_mail"> Поддержка почты
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="v_aliases">Алиасы</label>
                        <textarea class="form-control" name="v_aliases" id="v_aliases"/></textarea>
                    </div>
                </div>




                <div class="col-md-6">

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="v_proxy" data-support="Nginx">  Поддержка Nginx
                        </label>
                    </div>


                    <div class="collapse in" id="supportNginx">
                        <div class="well">

                            <div class="form-group">
                                <label for="v_proxy_ext">Proxy Extentions </label>
                                <textarea class="form-control" name="v_proxy_ext" id="v_proxy_ext"/>jpeg, jpg, png, gif, bmp, ico, svg, tif, tiff, css, js, htm, html, ttf, otf, webp, woff, txt, csv, rtf, doc, docx, xls, xlsx, ppt, pptx, odf, odp, ods, odt, pdf, psd, ai, eot, eps, ps, zip, tar, tgz, gz, rar, bz2, 7z, aac, m4a, mp3, mp4, ogg, wav, wma, 3gp, avi, flv, m4v, mkv, mov, mp4, mpeg, mpg, wmv, exe, iso, dmg, swf</textarea>
                            </div>

                        </div>
                    </div>


                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="v_ftp" data-support="FTP"> Дополнительный ftp
                        </label>
                    </div>

                    <div class="collapse in" id="supportFTP">
                        <div class="well">

                            <div class="form-group">
                                <label for="v_ftp_user[1][v_ftp_user]">Аккаунт
                                    <small>Префикс admin_ будет автоматически добавлен к названию аккаунта</small></label>
                                <input type="text" name="v_ftp_user[1][v_ftp_user]" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="v_ftp_user[1][v_ftp_password]">Пароль</label>
                                <input type="password" name="v_ftp_user[1][v_ftp_password]" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="v_ftp_user[1][v_ftp_path]">Путь</label>
                                <input type="text" name="v_ftp_user[1][v_ftp_path]" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="v_ftp_user[1][v_ftp_email]">Отправить данные ftp аккаунта по адресу </label>
                                <input type="email" name="v_ftp_user[1][v_ftp_email]" class="form-control">
                            </div>

                        </div>
                    </div>

                </div>




                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input name="submit" type="submit" class="button-full" id="submit" value="Добавить" />
                </p>
            </form>


        </div>


    </section>

@endsection
