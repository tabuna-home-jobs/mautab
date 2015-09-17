@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Список не отвеченных тикетов</h1>
    </div>

    <div class="wrapper-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                Тикеты
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Название</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tiketList as $tiket)
                            <tr>
                                <td>{{$tiket->id}}</td>
                                <td>{{$tiket->title}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $tiketList->render() !!}
            </div>
        </div>
    </div>




@endsection
