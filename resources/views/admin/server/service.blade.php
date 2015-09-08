@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Сервер - {{$ServerName}}</h1>
    </div>




    <div class="wrapper-md bg-white-only b-b">
        <div class="row text-center">
            <div class="col-sm-12 col-xs-12">
                <div>HOSTNAME <i class="fa fa-fw fa-caret-up text-success text-sm"></i></div>
                <div class="h2 m-b-sm">{{$SystemInfo['HOSTNAME']}}</div>
            </div>
            <div class="col-sm-4 col-xs-4">
                <div>OS <i class="fa fa-fw fa-caret-down text-warning text-sm"></i></div>
                <div class="h2 m-b-sm">{{$SystemInfo['OS']}}</div>
            </div>
            <div class="col-sm-4 col-xs-4">
                <div>VERSION <i class="fa fa-fw fa-caret-up text-success text-sm"></i></div>
                <div class="h2 m-b-sm">{{$SystemInfo['VERSION']}}</div>
            </div>
            <div class="col-sm-4 col-xs-4">
                <div>ARCH <i class="fa fa-fw fa-caret-down text-danger text-sm"></i></div>
                <div class="h2 m-b-sm">{{$SystemInfo['ARCH']}}</div>
            </div>


            <div class="col-sm-6 col-xs-4">
                <div>UPTIME <i class="fa fa-fw fa-caret-down text-danger text-sm"></i></div>
                <div class="h2 m-b-sm">{{$SystemInfo['UPTIME']}}</div>
            </div>


            <div class="col-sm-6 col-xs-4">
                <div>LOADAVERAGE <i class="fa fa-fw fa-caret-down text-danger text-sm"></i></div>
                <div class="h2 m-b-sm">{{$SystemInfo['LOADAVERAGE']}}</div>
            </div>


        </div>
    </div>





    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                Процессы
            </div>
            <div class="table-responsive">

                <table class="table table-condensed table-hover text-center">

                    <thead>
                    <tr>
                        <td>Name</td>
                        <td>CPU - Процессор</td>
                        <td>MEM - Память</td>
                        <td>RTIME - Запущен</td>
                        <td>Управление</td>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach($SystemService as $key => $service)

                        @if($service['STATE'] == 'stopped')
                            <tr class="danger">
                        @else
                            <tr>
                                @endif

                                <td>{{$key}}
                                    <p>
                                        <small>{{$service['SYSTEM']}}</small>
                                    </p>
                                </td>
                                <td>{{$service['CPU']}} %</td>
                                <td>{{$service['MEM']}} мб</td>
                                <td>{{$service['RTIME']}} мин</td>
                                <td>
                                    <div class="btn-group pull-right" role="group">


                                        @if($service['STATE'] == 'stopped')
                                            <a href="{{route('admin.serverservice.index',['service'=> $key, 'serverName'=> $ServerName, 'action'=>'start'])}}"
                                               class="btn m-b-xs btn-sm btn-success btn-addon">
                                                <i class="fa fa-spinner"></i> Запустить
                                            </a>
                                        @else
                                            <a href="{{route('admin.serverservice.index',['service'=> $key, 'serverName'=>$ServerName, 'action'=>'stop'])}}"
                                               class="btn m-b-xs btn-sm btn-danger btn-addon">
                                                <i class="fa fa-shield"></i> Остановить
                                            </a>
                                        @endif

                                        <a href="{{route('admin.serverservice.index',['service'=> $key, 'serverName'=>$ServerName, 'action'=>'restart'])}}"
                                           class="btn m-b-xs btn-sm btn-primary btn-addon">
                                            <i class="fa fa-spinner"></i> Перезапустить
                                        </a>


                                    </div>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>




@endsection
