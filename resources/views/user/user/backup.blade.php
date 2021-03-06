@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Резервные копии</div>
        <div class="panel-body">

            @forelse($Backups as $key =>  $Bakup)
                <div class="col-xs-12 log-row">
                    <h1 class="col-md-3 col-xs-12 subheaderlog"><a
                                href="{{route('backup.index')}}/{{ $key  }}"> {{ $key  }}</a></h1>
                    <blockquote class="col-md-9 col-xs-12">
                        <p class="font-thin text-ellipsis">Веб: {{ $Bakup['WEB']}}</p>

                        <p class="font-thin text-ellipsis">ДНС: {{ $Bakup['DNS']}}</p>

                        <p class="font-thin text-ellipsis">БД: {{ $Bakup['DB']}}</p>
                        <!--  <p class="question">Почта: {{ $Bakup['MAIL']}}</p>
                    <p class="question">Крон: {{ $Bakup['CRON']}}</p> -->
                        <p class="text-right">
                            <small>Размер: {{ $Bakup['SIZE']  }} мб</small>
                        </p>
                        <p class="text-right">
                            <small>Дата: {{ $Bakup['DATE']  }} : {{ $Bakup['TIME']  }} </small>
                        </p>
                        <p class="text-right">
                            <a href="#" data-toggle="modal" data-target="#Modal-{{str_replace('.','-',$key)}}">
                                <small><i class="fa fa-trash"></i> Удалить</small>
                            </a>
                        </p>
                    </blockquote>
                </div>
                <hr class="col-xs-12">

                <!-- Modal -->
                <div class="modal fade" id="Modal-{{str_replace('.','-',$key)}}" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Удалить {{$key}} ?</h4>
                            </div>
                            <div class="modal-body">
                                Вы действительно хотите удалить {{$key}}
                            </div>
                            <div class="modal-footer">
                                <form action="{{route('backup.destroy')}}" method="post">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
                                    <button type="submit" class="btn btn-danger">Да</button>
                                    <input type="hidden" name="backup" value="{{$key}}"/>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            @empty
                <div class="col-xs-12 text-center"><h2>Резервных копий не найдено</h2></div>
            @endforelse

        </div>
    </div>


@endsection
