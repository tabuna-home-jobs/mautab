@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Сервера системы</h1>
    </div>


    <div class="wrapper-md">


        @foreach($listStats as $key => $value)
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$key}}
                </div>

                <div class="panel wrapper">
                    <div class="row">

                        <div class="hbox text-center b-b b-light text-sm">
                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>Веб домены:</span>
                                <span class="h4">{{$value['U_WEB_DOMAINS']}}</span>
                            </p>

                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>SSL домены: {{$value['U_WEB_SSL']}}</span>
                            </p>

                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>Веб алиасы: {{$value['U_WEB_ALIASES']}}</span>
                            </p>

                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>DNS domains: {{$value['U_DNS_DOMAINS']}}</span>
                            </p>

                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>DNS записи: {{$value['U_DNS_RECORDS']}}</span>
                            </p>
                        </div>
                        <div class="hbox text-center b-b b-light text-sm">
                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>Тариф: {{$value['PACKAGE']}}</span>
                            </p>

                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>Количество IP: {{$value['IP_OWNED']}}</span>
                            </p>

                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>Почтовые домены: {{$value['U_MAIL_DOMAINS']}}</span>
                            </p>

                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>Почтовые аккаунты: {{$value['U_MAIL_ACCOUNTS']}}</span>
                            </p>

                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>Базы данных: {{$value['U_DATABASES']}}</span>
                            </p>
                        </div>


                        <div class="hbox text-center b-b b-light text-sm">
                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>CRON: {{$value['U_CRON_JOBS']}}</span>
                            </p>

                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>Бекапы: {{$value['U_BACKUPS']}}</span>
                            </p>

                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>DISK_QUOTA: {{$value['DISK_QUOTA']}} мб</span>
                            </p>

                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>Использование диска: {{$value['U_DISK']}} мб</span>
                            </p>

                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>Папки пользователя: {{$value['U_DISK_DIRS']}} мб</span>
                            </p>
                        </div>


                        <div class="hbox text-center b-b b-light text-sm">
                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>Веб: {{$value['U_DISK_WEB']}} мб</span>
                            </p>

                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>Почта: {{$value['U_DISK_MAIL']}} мб</span>
                            </p>

                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>DISK_QUOTA: {{$value['DISK_QUOTA']}} мб</span>
                            </p>

                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>База данных: {{$value['U_DISK_DB']}} мб</span>
                            </p>


                            <p class="col padder-v text-muted b-r b-light">
                                <i class="fa fa-users block m-b-xs fa-2x"></i>
                                <span>Трафик: {{$value['U_BANDWIDTH']}} мб</span>
                            </p>


                        </div>


                    </div>
                </div>

            </div>


        @endforeach
    </div>




@endsection
