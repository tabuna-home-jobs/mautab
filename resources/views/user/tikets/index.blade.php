@extends('app')

@section('content')



    <div class="panel panel-default">
        <div class="panel-heading">Тикеты</div>
        <div class="panel-body">


            <div class="col-xs-12">
        <h2 class="text-center">{{Lang::get('tikets.Tickets')}}</h2>

        <p class="text-center">{{Lang::get('tikets.description')}} </p>
    </div>

    <div class="col-md-8 table-responsive">
        <table class="table table-condensed table-hover table-striped">
            <thead>
            <tr>
                <th>{{Lang::get('tikets.numberTable')}}</th>
                <th>{{Lang::get('tikets.titleTable')}}</th>
                <th>{{Lang::get('tikets.statusTable')}}</th>
                <th>{{Lang::get('tikets.managementTable')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($Tikets as $Tiket)
                <tr>
                    <td>{{ $Tiket->id }}</td>
                    <td>{{ $Tiket->title }}</td>
                    <td>@if (!$Tiket->complete)
                            {{Lang::get('tikets.statusFalse')}}
                        @else
                            {{Lang::get('tikets.statusTrue')}}
                        @endif
                    </td>
                    <td><a href="{{ route('tikets.show', $Tiket->id) }}">{{Lang::get('tikets.viewTable')}}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $Tikets->render() !!}
    </div>


    <div class="col-md-4">
        <h2>Напиши и будет решено</h2>

        <form action="{{route('tikets.store')}}" method="POST">
            <div class="form-group">
                <label>Заголовок</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Описание</label>
                <textarea name="message" cols="5" class="form-control"></textarea>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-blue" value="Войти">
        </form>
    </div>


        </div>
    </div>




<script>
    var conn = new WebSocket('ws://localhost:8990');
    conn.onopen = function(e) {

        console.log('Соединение успешно установлено');
    };

    conn.onmessage = function(e) {
        console.log(e.data);
    };
</script>





@endsection






