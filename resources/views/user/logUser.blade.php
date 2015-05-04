@extends('app')

@section('content')
    <section class="container">


        @forelse($log as $elementlog)
            <div class="col-xs-12 log-row">
                <h1 class="col-md-3 col-xs-12 subheaderlog"> {{ $elementlog['DATE']  }} : {{ $elementlog['TIME']  }}</h1>
                <blockquote class="col-md-9 col-xs-12">
                    <p class="question">{{$elementlog['CMD']}}</p>
                </blockquote>
            </div>
            <hr class="col-xs-12">
        @empty
            <div class="col-xs-12 text-center"><h2>Лог чист</h2></div>
        @endforelse


    </section>

@endsection
