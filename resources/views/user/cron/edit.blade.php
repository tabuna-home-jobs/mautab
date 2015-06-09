@extends('app')

@section('content')

        <div class="col-xs-12">


            <form class="col-md-8 col-xs-12" method="post" action="{{URL::route('hosting.cron.update')}}">

                <div class="form-group input-line">
                    <label>Минута </label>
                    <input type="text" name="v_min" class="form-control" value="{{$Cron['MIN']}}"/>
                </div>

                <div class="form-group input-line">
                    <label>Час </label>
                    <input type="text" name="v_hour" class="form-control" value="{{$Cron['HOUR']}}"/>
                </div>

                <div class="form-group input-line">
                    <label>День </label>
                    <input type="text" name="v_day" class="form-control" value="{{$Cron['DAY']}}"/>
                </div>

                <div class="form-group input-line">
                    <label>Месяц </label>
                    <input type="text" name="v_month" class="form-control" value="{{$Cron['MONTH']}}"/>
                </div>

                <div class="form-group input-line">
                    <label>День недели </label>
                    <input type="text" name="v_wday" class="form-control" value="{{$Cron['WDAY']}}"/>
                </div>

                <div class="form-group input-line">
                    <label>Команда </label>
                    <input type="text" name="v_cmd" class="form-control" value="{{$Cron['CMD']}}"/>
                </div>

                <div class="form-group">
                    <input type="hidden" name="v_job" value="{{$name}}">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" value="Отправить" class="btn btn-blue">
                </div>
            </form>

            <div class="col-md-4 hidden-sm hidden-xs">


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Информация:</h3>
                    </div>
                    <div class="panel-body">
                        cron — демон-планировщик задач в UNIX-подобных операционных системах, использующийся для
                        периодического выполнения заданий в определённое время.
                        Регулярные действия описываются инструкциями, помещенными в файлы crontab и в специальные
                        директории.
                    </div>
                    <div class="panel-footer">
                        <p class="text-center">{{$Cron['DATE']}} - {{$Cron['TIME']}}</p>
                    </div>
                </div>

            </div>


        </div>


@endsection
