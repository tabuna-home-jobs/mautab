@extends('app')

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">{{ $name  }}</div>
        <div class="panel-body">

            <div class="col-xs-12 log-row">
                <h1 class="col-md-3 col-xs-12 subheaderlog"> {{ $name  }}</h1>
                <blockquote class="col-md-9 col-xs-12">


                    <div class="table-responsive">
                        <table class="table">

                            @foreach($web = explode(',',$Backup['WEB']) as $value)
                                @if (!empty($value))
                                    <tr>
                                        <td>Web - домен</td>
                                        <td class="question">{{ $value  }}</td>
                                        <td><a href="#" data-toggle="modal"
                                               data-target="#Modal-{{str_replace('.','-',$value)}}-web"><i
                                                        class="fa fa-history"></i></a></td>


                                        <!-- Modal -->
                                        <div class="modal fade" id="Modal-{{str_replace('.','-',$value)}}-web"
                                             tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Востановить {{$value}}
                                                            ?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Вы действительно хотите востановить {{$value}} ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{URL::route('backup.store')}}" method="post">
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Нет
                                                            </button>
                                                            <button type="submit" class="button-small">Да</button>
                                                            <input type="hidden" name="object" value="{{$value}}"/>
                                                            <input type="hidden" name="type" value="web">
                                                            <input type="hidden" name="backup" value="{{$name}}">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </tr>
                                @endif
                            @endforeach

                            @foreach($web = explode(',',$Backup['DNS']) as $value)
                                @if (!empty($value))
                                    <tr>
                                        <td>ДНС запись</td>
                                        <td class="question">{{ $value  }}</td>
                                        <td><a href="#" data-toggle="modal"
                                               data-target="#Modal-{{str_replace('.','-',$value)}}-dns"><i
                                                        class="fa fa-history"></i></a></td>


                                        <!-- Modal -->
                                        <div class="modal fade" id="Modal-{{str_replace('.','-',$value)}}-dns"
                                             tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Востановить {{$value}}
                                                            ?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Вы действительно хотите востановить {{$value}} ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{URL::route('backup.store')}}" method="post">
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Нет
                                                            </button>
                                                            <button type="submit" class="button-small">Да</button>
                                                            <input type="hidden" name="object" value="{{$value}}"/>
                                                            <input type="hidden" name="type" value="dns">
                                                            <input type="hidden" name="backup" value="{{$name}}">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                @endif
                            @endforeach

                            @foreach($web = explode(',',$Backup['MAIL']) as $value)
                                @if (!empty($value))
                                    <tr>
                                        <td>Почта</td>
                                        <td class="question">{{ $value  }}</td>
                                        <td><a href="#" data-toggle="modal"
                                               data-target="#Modal-{{str_replace('.','-',$value)}}-mail"><i
                                                        class="fa fa-history"></i></a></td>


                                        <!-- Modal -->
                                        <div class="modal fade" id="Modal-{{str_replace('.','-',$value)}}-mail"
                                             tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Востановить {{$value}}
                                                            ?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Вы действительно хотите востановить {{$value}} ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{URL::route('backup.store')}}" method="post">
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Нет
                                                            </button>
                                                            <button type="submit" class="button-small">Да</button>
                                                            <input type="hidden" name="object" value="{{$value}}"/>
                                                            <input type="hidden" name="type" value="mail">
                                                            <input type="hidden" name="backup" value="{{$name}}">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                @endif
                            @endforeach

                            @foreach($web = explode(',',$Backup['DB']) as $value)
                                @if (!empty($value))
                                    <tr>
                                        <td>База данных</td>
                                        <td class="question">{{ $value  }}</td>
                                        <td><a href="#" data-toggle="modal"
                                               data-target="#Modal-{{str_replace('.','-',$value)}}-db"><i
                                                        class="fa fa-history"></i></a></td>


                                        <!-- Modal -->
                                        <div class="modal fade" id="Modal-{{str_replace('.','-',$value)}}-db"
                                             tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Востановить {{$value}}
                                                            ?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Вы действительно хотите востановить {{$value}} ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{URL::route('backup.store')}}" method="post">
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Нет
                                                            </button>
                                                            <button type="submit" class="button-small">Да</button>
                                                            <input type="hidden" name="object" value="{{$value}}"/>
                                                            <input type="hidden" name="type" value="db">
                                                            <input type="hidden" name="backup" value="{{$name}}">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                @endif
                            @endforeach

                            @foreach($web = explode(',',$Backup['CRON']) as $value)
                                @if (!empty($value))
                                    <tr>
                                        <td>Задание</td>
                                        <td class="question">{{ $value  }}</td>
                                        <td><a href="#" data-toggle="modal"
                                               data-target="#Modal-{{str_replace('.','-',$value)}}-cron"><i
                                                        class="fa fa-history"></i></a></td>


                                        <!-- Modal -->
                                        <div class="modal fade" id="Modal-{{str_replace('.','-',$value)}}-cron"
                                             tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Востановить {{$value}}
                                                            ?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Вы действительно хотите востановить {{$value}} ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{URL::route('backup.store')}}" method="post">
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Нет
                                                            </button>
                                                            <button type="submit" class="button-small">Да</button>
                                                            <input type="hidden" name="object" value="{{$value}}"/>
                                                            <input type="hidden" name="type" value="cron">
                                                            <input type="hidden" name="backup" value="{{$name}}">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                @endif
                            @endforeach

                            @foreach($web = explode(',',$Backup['UDIR']) as $value)
                                @if (!empty($value))
                                    <tr>
                                        <td>user dir</td>
                                        <td class="question">{{ $value  }}</td>
                                        <td><a href="#" data-toggle="modal"
                                               data-target="#Modal-{{str_replace('.','-',$value)}}-udir"><i
                                                        class="fa fa-history"></i></a></td>


                                        <!-- Modal -->
                                        <div class="modal fade" id="Modal-{{str_replace('.','-',$value)}}-udir"
                                             tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Востановить {{$value}}
                                                            ?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Вы действительно хотите востановить {{$value}} ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{URL::route('backup.store')}}" method="post">
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Нет
                                                            </button>
                                                            <button type="submit" class="button-small">Да</button>
                                                            <input type="hidden" name="object" value="{{$value}}"/>
                                                            <input type="hidden" name="type" value="udir">
                                                            <input type="hidden" name="backup" value="{{$name}}">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                @endif
                            @endforeach

                        </table>
                    </div>

                    <hr>

                    <p class="text-right">
                        <small>Размер: {{ $Backup['SIZE']  }} мб</small>
                    </p>
                    <p class="text-right">
                        <small>Дата: {{ $Backup['DATE']  }} : {{ $Backup['TIME']  }} </small>
                    </p>
                </blockquote>
            </div>

        </div>
    </div>


@endsection
