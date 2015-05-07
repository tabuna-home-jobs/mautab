@extends('app')

@section('content')
    <section class="container">

        <div class="col-xs-12">

                    <form class="col-md-8" method="post" action="">

                        <div class="alert alert-info" role="alert">
                            Изменения для домена {{$nameDNS}}
                        </div>
                        <div class="form-group">
                            <label>Домен </label>
                            <input type="text" class="form-control" value="" name="v_domain" readonly/>
                        </div>
                        <div class="form-group">
                            <label>Запись / Поддомен </label>
                            <input type="text" class="form-control" name="v_rec" required value="" readonly/>
                        </div>
                        <div class="form-group">
                            <label>Тип</label>
                            <input type="text" class="form-control" value="" name="v_type" readonly/>
                        </div>

                        <div class="form-group">
                            <label>IP адрес или значение </label>
                            <input type="text" class="form-control" value="" name="v_val"/>
                        </div>

                        <div class="form-group">
                            <label>Приоритет (опционально)</label>
                            <input type="text" class="form-control" value="" name="v_priority"/>
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
        </div>
    </section>

@endsection
