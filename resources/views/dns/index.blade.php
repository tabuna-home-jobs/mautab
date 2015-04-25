@extends('app')

@section('content')
<section class="container">

<div class="col-xs-12">

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Домен</th>
                    <th>Информация</th>
                    <th>Управление</th>
                </tr>
            </thead>
            <tbody>

            @if(!empty($DnsList))
                @foreach($DnsList as $nameDns => $Dns)
                    @if($Dns['SUSPENDED'] != "no")
                        <tr class="danger">
                    @else
                        <tr>
                    @endif
                        <td class="nameD">
                            {{$nameDns}}
                            <div>
                                {{$Dns['IP']}}
                            </div>
                            <div><small>{{$Dns['DATE']}}</small></div>
                        </td>
                        <td class="info-dns">
                            <p><div><span>SOA:</span>{{$Dns['SOA']}}</div></p>
                            <p><div><span>TTL:</span>{{$Dns['TTL']}}</div></p>
                            <p><div><span>Шаблон:</span>{{$Dns['TPL']}}</div></p>
                            <p><div><span>Регистраци до:</span>{{$Dns['EXP']}}</div></p>
                        </td>
                        <td>
                            <p><a href="#"><i class="fa fa-line-chart"></i> Веб-аналитика</a></p>
                            <p><a href="#"><i class="fa fa-heartbeat"></i> Просмотреть логи</a></p>
                            <p><a href="/dns/{{$nameDns}}"><i class="fa fa-pencil-square-o"></i> Редактировать</a></p>
                            <p><a href="#"><i class="fa fa-trash"></i> Удалить</a></p>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>Нет данных</td>
                    <td>Нет данных</td>
                    <td>Нет данных</td>
                    <td>Нет данных</td>
                </tr>
            @endif


            </tbody>
        </table>
    </div>


</div>


</section>

@endsection
