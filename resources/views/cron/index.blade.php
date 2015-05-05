@extends('app')

@section('content')

    <section class="container">
        <p class="text-center">
            <a id="show-add-bd" data-toggle="collapse" href="#add-bd" aria-expanded="false" aria-controls="collapseExample">
                <i class="fa fa-plus"></i>Добавить
            </a>
        </p>

        <div class="collapse col-xs-12" id="add-bd">
            <form class="col-md-8 col-xs-12" method="post" action="{{URL::route('cron.store')}}">


                <div class="form-group input-line">
                    <label>Минута </label>
                    <input type="text" name="v_min" class="form-control" value=""/>
                </div>

                <div class="form-group input-line">
                    <label>Час </label>
                    <input type="text" name="v_hour" class="form-control" value=""/>
                </div>

                <div class="form-group input-line">
                    <label>День </label>
                    <input type="text" name="v_day" class="form-control" value=""/>
                </div>

                <div class="form-group input-line">
                    <label>Месяц </label>
                    <input type="text" name="v_month" class="form-control" value=""/>
                </div>

                <div class="form-group input-line">
                    <label>День недели </label>
                    <input type="text" name="v_wday" class="form-control" value=""/>
                </div>

                <div class="form-group input-line">
                    <label>Команда </label>
                    <input type="text" name="v_cmd" class="form-control" value=""/>
                </div>

                <div class="form-group">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" value="Отправить" class="button-full">
                </div>
            </form>

            <div class="col-md-4 hidden-sm hidden-xs">


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Информация:</h3>
                    </div>
                    <div class="panel-body">
                        cron — демон-планировщик задач в UNIX-подобных операционных системах, использующийся для периодического выполнения заданий в определённое время.
                        Регулярные действия описываются инструкциями, помещенными в файлы crontab и в специальные директории.
                    </div>
                </div>

            </div>

            <hr class="clearfix col-xs-12">
        </div>


        <div class="col-md-12" id="add-shadow">


            <div class=" table-responsive">
                <table class="table table-condensed table-hover table-striped">
                    <tbody>
                    @foreach($CronList as $key => $job)
                        @if($job['SUSPENDED'] == 'no')
                            <tr>
                        @else
                            <tr class="danger">
                                @endif
                                <td>{{$job['CMD']}}</td>
                                <td>{{$job['MIN']}} - {{$job['HOUR']}} - {{$job['DAY']}} - {{$job['MONTH']}} - {{$job['WDAY']}}</td>
                                <td>@if($job['JOB'] == 1) Запущен @else Ожидает @endif</td>
                                <td>{{$job['DATE']}} : {{$job['TIME']}}</td>
                                <td>
                                    <div class="btn-group pull-right" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default"><i class="fa fa-pencil-square-o"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>

                            @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </section>

@endsection
