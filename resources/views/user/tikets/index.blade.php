@extends('app')

@section('content')

    <div class="col-xs-12">
        <h2 class="text-center">{{Lang::get('tikets.Tickets')}}</h2>

        <p class="text-center">{{Lang::get('tikets.description')}} </p>
    </div>

    <div class="col-md-8 table-responsive">
        <table class="table table-condensed table-hover table-striped">
            <thead>
            <tr>
                <th>{{Lang::get('tikets.numberTable')}}</th>
                <th>{{Lang::get('tikets.titleTable')}}</th>
                <th>{{Lang::get('tikets.statusTable')}}</th>
                <th>{{Lang::get('tikets.managementTable')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($Tikets as $Tiket)
                <tr>
                    <td>{{ $Tiket->id }}</td>
                    <td>{{ $Tiket->title }}</td>
                    <td>@if (!$Tiket->complete)
                            {{Lang::get('tikets.statusFalse')}}
                        @else
                            {{Lang::get('tikets.statusTrue')}}
                        @endif
                    </td>
                    <td><a href="{{ route('tikets.show', $Tiket->id) }}">{{Lang::get('tikets.viewTable')}}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $Tikets->render() !!}
    </div>


    <div class="col-md-4">
        <h2>Напиши и будет решено</h2>

        <form action="{{route('tikets.store')}}" method="POST">
            <div class="form-group">
                <label>Заголовок</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Описание</label>
                <textarea name="message" cols="5" class="form-control"></textarea>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-blue" value="Войти">
        </form>
    </div>














    <div class="panel panel-default">
        <div class="panel-heading">Basic form</div>
        <div class="panel-body">


            <div class="hbox hbox-auto-xs hbox-auto-sm">
                <div class="col w-md bg-light dk b-r bg-auto">
                    <div class="wrapper b-b bg">
                        <button class="btn btn-sm btn-default pull-right visible-sm visible-xs" ui-toggle="show"
                                target="#email-menu"><i class="fa fa-bars"></i></button>
                        <a href="" class="btn btn-sm btn-danger w-xs font-bold">Написать</a>
                    </div>
                    <div class="wrapper hidden-sm hidden-xs" id="email-menu">
                        <ul class="nav nav-pills nav-stacked nav-sm">
                            <li><a href="/dashboard/feedback/"><i class="fa fa-inbox"></i> Входящее</a></li>
                            <li><a href="/dashboard/feedback?noread=true"><i class="fa fa-file-text-o"></i> Не
                                    прочитанные</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">

                    <div>


                        <!-- list -->
                        <ul class="list-group list-group-lg no-radius m-b-none m-t-n-xxs">


                            @foreach ($Tikets as $Tiket)


                                <li class="list-group-item clearfix b-l-3x">
                                    <div class="pull-right text-sm text-muted">
                                        <span class="hidden-xs ">{{ $Tiket->created_at  }}</span>
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="clear">
                                        <div><a class="text-md "
                                                href="{{ route('tikets.show', $Tiket->id) }}">{{Lang::get('tikets.viewTable')}}
                                                ">{{ $Tiket->title  }}</a><span class="label bg-light m-l-sm ">


                                            @if (!$Tiket->complete)
                                                    {{Lang::get('tikets.statusFalse')}}
                                                @else
                                                    {{Lang::get('tikets.statusTrue')}}
                                                @endif

                                        </span></div>
                                        <div class="text-ellipsis m-t-xs">{{str_limit($Tiket->content,100,'...')}}</div>
                                    </div>
                                </li>

                            @endforeach


                        </ul>

                        <!-- / list -->
                    </div>


                </div>
            </div>
        </div>
    </div>










@endsection






