@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Платежи</div>
        <div class="panel-body">


            <form class="form-inline text-right" action="{{route('payments.store')}}" method="POST">
                <div class="form-group">
                    <label for="sum" class="text-center">Сколько я хочу положить средств</label>
                    <input type="number" name="sum" class="form-control" placeholder="Сумма">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-default">Создать счёт</button>
            </form>

        </div>


        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <tbody>
                <thead>
                <tr>
                    <th>Номер счёта</th>
                    <th>Сумма</th>
                    <th>Статус</th>
                    <th>Дата</th>

                </tr>
                </thead>
                <tbody>
                @foreach($Payments as $pay)
                    <tr>
                        <th>{{$pay->id}}</th>
                        <th>{{$pay->sum}}</th>
                        @if($pay->status === null)
                            <th>Ожидает</th>
                        @elseif($pay->status)
                            <th>Зачислен</th>
                        @else
                            <th>Ошибка</th>
                        @endif
                        <th>{{$pay->created_at}}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>


            {!! $Payments->render() !!}

        </div>


    </div>

@endsection
