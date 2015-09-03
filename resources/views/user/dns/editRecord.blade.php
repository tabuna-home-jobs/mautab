@extends('app')

@section('content')



    <div class="col-xs-12">

        <form class="col-md-8" method="post" action="{{route('records.update',$domain)}}">

            <div class="alert alert-info" role="alert">
                Изменения для домена {{$domain}}
            </div>
            <div class="form-group">
                <label>Домен </label>
                <input type="text" class="form-control" value="{{$domain}}" name="v_domain" disabled/>
            </div>
            <div class="form-group">
                <label>Запись / Поддомен </label>
                <input type="text" class="form-control" name="v_rec" required value="{{$record['RECORD']}}" disabled/>
            </div>
            <div class="form-group">
                <label>Тип</label>
                <input type="text" class="form-control" value="{{$record['TYPE']}}" name="v_type" disabled/>
            </div>

            <div class="form-group">
                <label>IP адрес или значение </label>
                <input type="text" class="form-control" value="{{$record['VALUE']}}" name="v_val"/>
            </div>

            <div class="form-group">
                <label>Приоритет (опционально)</label>
                <input type="text" class="form-control" value="{{$record['PRIORITY']}}" name="v_priority"/>
            </div>

            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="record" value="{{$record['ID']}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" value="Отправить" class="btn btn-blue">
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
                        @if($record['SUSPENDED'] == 'no')
                            <span class="text-success"> Активен</span>
                        @else
                            <span class="text-danger"> Заблокирован</span>
                        @endif
                    </li>
                </ul>


                <div class="panel-footer">
                    <p>
                        <small class="pull-right"> {{$record['DATE'] ." ". $record['TIME']}}</small>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
