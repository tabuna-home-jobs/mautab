@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Сервер - {{$ServerName}}</h1>
    </div>


    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                IP - адреса
            </div>
            <div class="table-responsive">

                <table class="table table-condensed table-hover text-center">

                    <thead>
                    <tr>
                        <td>IP</td>
                        <td>OWNER</td>
                        <td>STATUS</td>
                        <td>NAME</td>
                        <td>U_WEB_DOMAINS</td>
                        <td>INTERFACE</td>
                        <td>NETMASK</td>
                        <td>NAT</td>
                        <td>Дата</td>
                        <td>Управление</td>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($ListIp as $Ip => $value)

                        <tr>
                            <td>{{$Ip}}</td>
                            <td>{{$value['OWNER']}}</td>
                            <td>{{$value['STATUS']}}</td>
                            <td>{{$value['NAME']}}</td>
                            <td>{{$value['U_WEB_DOMAINS']}}</td>
                            <td>{{$value['INTERFACE']}}</td>
                            <td>{{$value['NETMASK']}}</td>
                            <td>{{$value['NAT']}}</td>
                            <td>{{$value['DATE']}}  {{$value['TIME']}}</td>
                            <td>
                                <div class="btn-group pull-right" role="group">


                                    <a href="{{route('admin.serverip.edit',[$Ip, 'serverName' => $ServerName])}}"
                                       class="btn m-b-xs btn-sm btn-primary btn-addon">
                                        <i class="fa fa-edit"></i> Редактировать
                                    </a>

                                    <form action="{{route('admin.serverip.destroy',['service'=> '', 'serverName'=>$ServerName])}}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <button type="submit"
                                                class="btn m-b-xs btn-sm btn-danger btn-addon">
                                            <i class="fa fa-trash"></i> Удалить
                                        </button>
                                    </form>
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
