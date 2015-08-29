@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Платежи</div>
        <div class="panel-body">


            <form class="form-inline text-right" action="{{route('payments.store')}}" method="POST">
                <div class="form-group">
                    <label for="payments" class="text-center">Сколько я хочу положить средств</label>
                    <input type="number" name="payments" class="form-control" placeholder="Сумма">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-default">Создать счёт</button>
            </form>

        </div>


        <div class="collapse col-xs-12" id="add-payments">
            <form class="col-md-offset-3 col-md-4 col-xs-12" method="post" action="{{route('web.store')}}">

                <div class="form-group input-line">
                    <label class="control-label">Домен </label>
                    <input type="text" name="v_domain" class="form-control" value="" required/>
                </div>


                <div class="line line-dashed b-b"></div>
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

                        @if($pay->status)
                            <th>Зачислен</th>
                        @elseif(!$pay->status)
                            <th>Ошибка</th>
                        @else
                            <th>Ожидает</th>
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
