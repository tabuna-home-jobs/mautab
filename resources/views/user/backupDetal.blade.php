@extends('app')

@section('content')
    <section class="container" xmlns="http://www.w3.org/1999/html">


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
                                    <td><i class="fa fa-history"></i></td>
                                </tr>
                            @endif
                        @endforeach

                        @foreach($web = explode(',',$Backup['DNS']) as $value)
                            @if (!empty($value))
                                <tr>
                                    <td>ДНС запись</td>
                                    <td class="question">{{ $value  }}</td>
                                    <td><i class="fa fa-history"></i></td>
                                </tr>
                            @endif
                        @endforeach

                        @foreach($web = explode(',',$Backup['MAIL']) as $value)
                            @if (!empty($value))
                                <tr>
                                    <td>Почта</td>
                                    <td class="question">{{ $value  }}</td>
                                    <td><i class="fa fa-history"></i></td>
                                </tr>
                            @endif
                        @endforeach

                        @foreach($web = explode(',',$Backup['DB']) as $value)
                            @if (!empty($value))
                                <tr>
                                    <td>База данных</td>
                                    <td class="question">{{ $value  }}</td>
                                    <td><i class="fa fa-history"></i></td>
                                </tr>
                            @endif
                        @endforeach

                        @foreach($web = explode(',',$Backup['CRON']) as $value)
                            @if (!empty($value))
                                <tr>
                                    <td>Задание</td>
                                    <td class="question">{{ $value  }}</td>
                                    <td><i class="fa fa-history"></i></td>
                                </tr>
                            @endif
                        @endforeach

                        @foreach($web = explode(',',$Backup['UDIR']) as $value)
                            @if (!empty($value))
                                <tr>
                                    <td>user dir</td>
                                    <td class="question">{{ $value  }}</td>
                                    <td><i class="fa fa-history"></i></td>
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
        <hr class="col-xs-12">

    </section>

@endsection
