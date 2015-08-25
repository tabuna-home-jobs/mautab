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
                                    <li class="list-group-item b-b" tabindex="0">Тарифы:</li>


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
                    <div class="wrapper b-t">
                        <span tooltip="Double click to Edit" class="pull-right text-muted inline wrapper-xs m-r-sm"><i
                                    class="fa fa-question"></i></span>

                        <a href="{{route('admin.package.create')}}" class="btn btn-sm btn-default" tabindex="0"><i
                                    class="fa fa-plus fa-fw m-r-xs"></i> Новый тариф</a>
                    </div>
                </div>
            </div>


            <div class="col bg-white-only">
                <div class="vbox">

                    <div class="row-row">
                        <div class="cell">
                            <div class="cell-inner">
                                <div class="wrapper-lg">

                                    <!-- fields -->
                                    <form class="form-horizontal" method="post"
                                          action="{{route('admin.package.update',$SelectPackage->id)}}">

                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label for="name" class="col-sm-4 control-label">Название</label>

                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="name"
                                                           value="{{$SelectPackage->name}}">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="price" class="col-sm-4 control-label">Цена</label>

                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" name="price"
                                                           value="{{$SelectPackage->price}}">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="WebDomains" class="col-sm-4 control-label">Web
                                                    Domains</label>

                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" name="WebDomains"
                                                           value="{{$SelectPackage->WebDomains}}">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="WebAliases" class="col-sm-4 control-label">Web
                                                    Aliases</label>

                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" name="WebAliases"
                                                           value="{{$SelectPackage->WebAliases}}">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="DNSDomains" class="col-sm-4 control-label">DNS
                                                    Domains</label>

                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" name="DNSDomains"
                                                           value="{{$SelectPackage->DNSDomains}}">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="DNSRecords" class="col-sm-4 control-label">DNS
                                                    Records</label>

                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" name="DNSRecords"
                                                           value="{{$SelectPackage->DNSRecords}}">
                                                </div>
                                            </div>


                                            <div class="col-sm-offset-4 col-sm-8">
                                                <div class="checkbox">
                                                    <label class="i-checks">
                                                        <input type="checkbox" name="SSHAccess" checked=""><i></i> SSH
                                                        Access
                                                    </label>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label for="MailDomains" class="col-sm-4 control-label">Mail
                                                    Domains</label>

                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" name="MailDomains"
                                                           value="{{$SelectPackage->MailDomains}}">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="MailAccounts" class="col-sm-4 control-label">Mail
                                                    Accounts</label>

                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" name="MailAccounts"
                                                           value="{{$SelectPackage->MailAccounts}}">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="Databases" class="col-sm-4 control-label">Databases</label>

                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" name="Databases"
                                                           value="{{$SelectPackage->Databases}}">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="CronJobs" class="col-sm-4 control-label">Cron Jobs</label>

                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" name="CronJobs"
                                                           value="{{$SelectPackage->CronJobs}}">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="Backups" class="col-sm-4 control-label">Backups</label>

                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" name="Backups"
                                                           value="{{$SelectPackage->Backups}}">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="Quota" class="col-sm-4 control-label">Quota</label>

                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" name="Quota"
                                                           value="{{$SelectPackage->Quota}}">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="Bandwidth" class="col-sm-4 control-label">Bandwidth</label>

                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" name="Bandwidth"
                                                           value="{{$SelectPackage->Bandwidth}}">
                                                </div>
                                            </div>


                                        </div>


                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="col-xs-12 text-center">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default">Сохранить</button>
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