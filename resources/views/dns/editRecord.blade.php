@extends('app')

@section('content')
    <section class="container">

        <div class="col-xs-12">

            @if(!empty($DnsList))
                @foreach($DnsList as $nameDNS => $dns)

                    <form class="col-md-8" method="post" action="">

                        <div class="alert alert-info" role="alert">
                            Изменения для домена {{$nameDNS}}
                        </div>
                        <div class="form-group">
                            <label>Домен </label>
                            <input type="text" class="form-control" value="{{$nameDNS}}" name="dns" readonly/>
                        </div>
                        <div class="form-group">
                            <label>IP</label>
                            <input type="text" class="form-control" name="ip" required value="{{$dns['IP']}}"/>
                        </div>
                        <div class="form-group">
                            <label>Зарегистрирован до</label>
                            <input type="text" class="form-control" value="{{$dns['EXP']}}" name="exp"/>
                        </div>
                        <div class="form-group">
                            <label>SOA</label>
                            <input type="text" class="form-control" value="{{$dns['SOA']}}" name="soa"/>
                        </div>
                        <div class="form-group">
                            <label>TTL</label>
                            <input type="text" class="form-control" name="ttl" value="{{$dns['TTL']}}"/>
                        </div>
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" value="Отправить" class="button-full">
                    </form>

                    <div class="col-md-4">


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Информация:</h3>
                            </div>
                            <div class="panel-body">
                                <p>Общая информация, а тут какой то текст, на сколько важна эта информация!</p>

                            </div>

                            <ul class="list-group">

                                <li class="list-group-item"> Статус:
                                    @if($dns['SUSPENDED'] == 'no')
                                        <span class="text-success"> Активен</span>
                                    @else
                                        <span class="text-danger"> Заблокирован</span>
                                    @endif
                                </li>
                            </ul>


                            <div class="panel-footer">
                                <p>
                                    <small class="pull-right"> {{$dns['DATE'] ." ". $dns['TIME']}}</small>
                                </p>
                            </div>
                        </div>
                    </div>

                @endforeach
            @else
                <div>Нет данных</div>
            @endif
        </div>
    </section>

@endsection
