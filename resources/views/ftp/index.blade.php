@extends('app')

@section('content')
    <section class="container">
        <div class="col-xs-12">
    <form class="col-md-8 col-xs-12" method="post" action="">
    @foreach($ftplist as $domain => $d_val)
        <div class="alert alert-info" role="alert">
            Добавление и редактирование FTP для домена {{$domain}}
        </div>

        @if(isset($d_val['FTP_USER']) && is_array($d_val['FTP_USER']))
            @foreach($d_val['FTP_USER'] as $key => $ftpU)
                <div class="ftp-groupz">
                    <div class="add-ftp-edit">
                        <div class="form-group">
                            <label>FTP#{{$key+1}}<a href="#" class="del-current-ftp"><small>Удалить</small></a></label>
                        </div>
        <div class="form-group">
            <label>Аккаунт</label>

            <div>
                <small>
                    Префикс {{Sentry::getUser()->nickname }}_ будет автоматически добавлен к названию аккаунта
                </small>
            </div>
            <input type="hidden" class="v-ftp-user-is-new" name="v_ftp_user[{{$key+1}}][is_new]" value="0"/>
            <input type="hidden" class="v-ftp-user-is-new" name="v_ftp_user[{{$key+1}}][is_old]" value="1"/>

            <input type="text" name="v_ftp_user[{{$key+1}}][v_ftp_user]" class="form-control ftp_usr ftp_usr_namen  " value="{{$ftpU}}" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$"/>
        </div>
        <div class="form-group">
            <label>Пароль / <a href="#" class="genPass">сгенерировать</a></label>
            <input type="text" name="v_ftp_user[{{$key+1}}][v_ftp_password]" id="ftppas" class="form-control" value="********"/>
        </div>
        <div class="form-group">
            <label>Path</label>
            <input type="text" name="v_ftp_user[{{$key+1}}][v_ftp_path]" class="form-control" value="{{$d_val['FTP_PATH'][$key]}}"/>
        </div>
                    </div>
                </div>
            @endforeach
@elseif(!empty($d_val['FTP_USER']) && !is_array($d_val['FTP_USER']))
    <div class="ftp-groupz">
        <div class="add-ftp-edit">
            <div class="form-group">
                <label>FTP#1
                    <a href="#" class="del-current-ftp"><small>Удалить</small></a></label>
            </div>
            <div class="form-group">
                <label>Аккаунт</label>

                <div>
                    <small>
                        Префикс {{Sentry::getUser()->nickname }}_ будет автоматически добавлен к названию аккаунта
                    </small>
                </div>
                <input type="hidden" class="v-ftp-user-is-new" name="v_ftp_user[1][is_new]" value="0"/>
                <input type="hidden" class="v-ftp-user-is-new" name="v_ftp_user[1][is_old]" value="1"/>

        <input type="text" name="v_ftp_user[1][v_ftp_user]" class="form-control ftp_usr ftp_usr_namen" value="{{$d_val['FTP_USER']}}" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$"/>
            </div>
            <div class="form-group">
                <label>Пароль / <a href="#" class="genPass">сгенерировать</a></label>
                <input type="text" name="v_ftp_user[1][v_ftp_password]" id="ftppas" class="form-control" value="********"/>
            </div>
            <div class="form-group">
                <label>Path</label>
                <input type="text" name="v_ftp_user[1][v_ftp_path]" class="form-control" value="{{$d_val['FTP_PATH']}}"/>
            </div>
        </div>
    </div>
        @endif
    @endforeach
        <a href="#" id="addFtps">Добавить FTP</a>
        <div class="form-group">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="submit" value="Сохранить" class="button-full">
            <input type="hidden" name="domain" value="{{$domain}}"/>
            <input type="hidden" name="_method" value="PUT">
        </div>
    </form>
    </div>

</section>
@endsection
