@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Сервера системы</h1>
    </div>



    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                Серверы
            </div>
            <div class="table-responsive">

                <table class="table table-condensed table-hover table-striped">
                    <tbody>
                    @foreach($Servers as $key => $Server)
                        <tr>
                            <td>{{$key}}</td>
                            <td>{{$Server['ip']}}</td>
                            <td>
                                <div class="btn-group pull-right" role="group">
                                    <p><a href="#" class="btn m-b-xs btn-sm btn-primary btn-addon">
                                            <i class="fa fa-cube"></i> Пакеты
                                        </a>

                                        <a href="{{route('admin.serverip.show',$key)}}"
                                           class="btn m-b-xs btn-sm btn-primary btn-addon">
                                            <i class="fa fa-plug"></i> IP
                                        </a>

                                        <a href="{{route('admin.serverstats.show', $key)}}"
                                           class="btn m-b-xs btn-sm btn-primary btn-addon">
                                            <i class="fa fa-pie-chart"></i> Статистика
                                        </a>


                                    </p>

                                    <p>


                                        <a href="#" class="btn m-b-xs btn-sm btn-primary btn-addon">
                                            <i class="fa fa-spinner"></i> Обновления
                                        </a>


                                        <a href="#" class="btn m-b-xs btn-sm btn-primary btn-addon">
                                            <i class="fa fa-shield"></i> Фаервол
                                        </a>

                                        <a href="{{route('admin.serverservice.show',$key)}}"
                                           class="btn m-b-xs btn-sm btn-danger btn-addon">
                                            <i class="fa fa-bolt"></i> Процессы
                                        </a>
                                    </p>

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
