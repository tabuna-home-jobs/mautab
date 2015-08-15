@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Basic form</div>
        <div class="panel-body">

            <div class="col-xs-12">
                <p class="text-center">
                    <a id="show-add-bd" data-toggle="collapse" href="#add-bd" aria-expanded="false"
                       aria-controls="collapseExample">
                        <i class="fa fa-plus"></i>
                    </a>
                </p>
            </div>
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
