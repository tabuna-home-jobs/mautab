@extends('app')

@section('content')
    <section class="container">


        @forelse($Backups as $key =>  $Bakup)
            <div class="col-xs-12 log-row">
                <h1 class="col-md-3 col-xs-12 subheaderlog"> {{ $key  }}</h1>
                <blockquote class="col-md-9 col-xs-12">
                    <p class="question">Веб: {{ $Bakup['WEB']}}</p>

                    <p class="question">ДНС: {{ $Bakup['DNS']}}</p>

                    <p class="question">БД: {{ $Bakup['DB']}}</p>
                    <!--  <p class="question">Почта: {{ $Bakup['MAIL']}}</p>
                    <p class="question">Крон: {{ $Bakup['CRON']}}</p> -->
                    <p class="text-right">
                        <small>Размер: {{ $Bakup['SIZE']  }} мб</small>
                    </p>
                    <p class="text-right">
                        <small>Дата: {{ $Bakup['DATE']  }} : {{ $Bakup['TIME']  }} </small>
                    </p>
                </blockquote>
            </div>
            <hr class="col-xs-12">
        @empty
            <div class="col-xs-12 text-center"><h2>Резервных копий не найдено</h2></div>
        @endforelse


    </section>

@endsection
