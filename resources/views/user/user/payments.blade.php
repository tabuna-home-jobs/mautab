@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Платежи</div>
        <div class="panel-body">


            <form class="form-inline text-right" action="{{route('payments.store')}}" method="POST">
                <div class="form-group">
                    <label for="sum" class="text-center">Я хочу положить средств</label>
                    <input type="number" name="sum" class="form-control" placeholder="Сумма">
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
                    <th class="text-center" width="20%">@sortablelink ('id','Номер счёта')</th>
                    <th class="text-center">@sortablelink ('sum','Сумма')</th>
                    <th class="text-center">@sortablelink ('updated_at','Дата')</th>
                    <th class="text-center">@sortablelink ('status','Статус')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Payments as $pay)
                    <tr>
                        <th class="text-center">{{$pay->id}}</th>
                        <th class="text-center">{{$pay->sum}} <i class="fa fa-rub"></i></th>
                        <th class="text-center">{{$pay->updated_at->toDateString()}}</th>
                        @if($pay->status === null)
                            <th class="text-center"><i class="fa fa-refresh fa-spin"></i></th>
                        @elseif($pay->status)
                            <th class="text-center"><i class="text-success fa fa-check"></i></th>
                        @else
                            <th class="text-center"><i class="text-danger fa fa-times"></i></th>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>


            {!! $Payments->appends(\Input::except('page'))->render() !!}

        </div>


    </div>

@endsection
