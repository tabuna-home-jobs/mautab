@extends('admin')

@section('content')

    <div class="app-content-body  app-content-full">

        <div class="h-full no-top-0">

            <div class="hbox hbox-auto-xs hbox-auto-sm bg-light">

                <!-- column -->
                <div class="col w b-r">
                    <div class="vbox">
                        <div class="row-row">
                            <div class="cell scrollable hover">
                                <div class="cell-inner">
                                    <div class="list-group no-radius no-border no-bg m-b-none">
                                        <li class="list-group-item b-b text-center" tabindex="0">Тарифы:</li>


                                        @foreach($Package as $key => $value)

                                            <a href="{{route('admin.package.edit',$value)}}"
                                               class="list-group-item m-l hover-anchor b-a" tabindex="0">
                                            <span class="pull-right text-muted hover-action" role="button" tabindex="0"><i
                                                        class="fa fa-times"></i></span>
                                                <span class="block m-l-n">{{$key}}</span>
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
                                                <div>Новый тариф</div>
                                            </div>
                                        </div>


                                        <!-- fields -->
                                        <form class="form-horizontal" method="post"
                                              action="{{route('admin.package.store')}}">

                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label for="name" class="col-sm-4 control-label">Название</label>

                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="name">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="price" class="col-sm-4 control-label">Цена</label>

                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" name="price">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="Quota" class="col-sm-4 control-label">Quota</label>

                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" name="Quota">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="Bandwidth"
                                                           class="col-sm-4 control-label">Bandwidth</label>

                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" name="Bandwidth">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="WebDomains" class="col-sm-4 control-label">Web
                                                        Domains</label>

                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" name="WebDomains">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="WebAliases" class="col-sm-4 control-label">Web
                                                        Aliases</label>

                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" name="WebAliases">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">SSH
                                                        Access</label>

                                                    <div class="col-sm-8">
                                                        <label class="i-switch bg-success m-t-xs m-r">
                                                            <input type="radio" name="SSHAccess" value="1">
                                                            <i></i>
                                                        </label>
                                                        <label class="i-switch bg-danger m-t-xs m-r">
                                                            <input type="radio" name="SSHAccess" value="0" checked>
                                                            <i></i>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Рекомендованный</label>

                                                    <div class="col-sm-8">
                                                        <label class="i-switch bg-success m-t-xs m-r">
                                                            <input type="radio" name="Recommended" value="1">
                                                            <i></i>
                                                        </label>
                                                        <label class="i-switch bg-danger m-t-xs m-r">
                                                            <input type="radio" name="Recommended" value="0"
                                                                   checked>
                                                            <i></i>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Скрытый</label>

                                                    <div class="col-sm-8">
                                                        <label class="i-switch bg-success m-t-xs m-r">
                                                            <input type="radio" name="Hidden" value="1">
                                                            <i></i>
                                                        </label>
                                                        <label class="i-switch bg-danger m-t-xs m-r">
                                                            <input type="radio" name="Hidden" value="0" checked>
                                                            <i></i>
                                                        </label>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-sm-6">


                                                <div class="form-group">
                                                    <label for="DNSDomains" class="col-sm-4 control-label">DNS
                                                        Domains</label>

                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" name="DNSDomains">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="DNSRecords" class="col-sm-4 control-label">DNS
                                                        Records</label>

                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" name="DNSRecords">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="MailDomains" class="col-sm-4 control-label">Mail
                                                        Domains</label>

                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" name="MailDomains">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="MailAccounts" class="col-sm-4 control-label">Mail
                                                        Accounts</label>

                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" name="MailAccounts">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="Databases"
                                                           class="col-sm-4 control-label">Databases</label>

                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" name="Databases">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="CronJobs" class="col-sm-4 control-label">Cron
                                                        Jobs</label>

                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" name="CronJobs">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="Backups" class="col-sm-4 control-label">Backups</label>

                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" name="Backups">
                                                    </div>
                                                </div>


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

    </div>

@endsection