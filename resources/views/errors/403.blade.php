@extends('_layouts.auth')

@section('content')



    <div class="container w-xxl w-auto-xs">
        <div class="text-center m-b-lg">
            <h1 class="text-shadow text-white">403</h1>

            <div class="wrapper text-center">
                <strong>Хакер что ли?</strong>
            </div>
        </div>
        <div class="list-group bg-info auto m-b-sm m-b-lg">
            <a href="/" class="list-group-item">
                <i class="fa fa-chevron-right text-muted"></i>
                <i class="fa fa-fw fa-home m-r-xs"></i> На главную
            </a>
            <a href="{{ URL::previous() }}" class="list-group-item">
                <i class="fa fa-chevron-right text-muted"></i>
                <i class="fa fa-fw fa-mail-forward m-r-xs"></i> Назад
            </a>
        </div>
        <div class="text-center">
            <p>
                <small class="text-muted">Mautab &copy; 2015</small>
            </p>
        </div>
    </div>




@endsection
