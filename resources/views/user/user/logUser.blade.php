@extends('app')

@section('content')








    <div class="panel panel-default">
        <div class="panel-heading">Недавние действия</div>
        <div class="panel-body">


            <ul class="timeline">

                <li class="tl-header">
                    <div class="btn btn-icon btn-rounded btn-default"><i class="fa fa-history"></i></div>
                </li>

                @forelse($log as $elementlog)

                    <li class="tl-item">
                        <div class="tl-wrap b-primary">
                            <span class="tl-date">{{$elementlog['TIME']}}</span>

                            <div class="tl-content panel padder b-a block">
                                <span class="arrow left pull-up hidden-left"></span>
                                <span class="arrow right pull-up visible-left"></span>

                                <div class="text-lt">{{$elementlog['CMD']}}</div>
                                <small class="text-right">{{$elementlog['DATE']}}</small>
                            </div>
                        </div>
                    </li>


                @empty

                    <li class="tl-item">
                        <div class="tl-wrap b-primary">
                            <span class="tl-date"></span>

                            <div class="tl-content panel padder b-a block">
                                <span class="arrow left pull-up hidden-left"></span>
                                <span class="arrow right pull-up visible-left"></span>

                                <div class="text-lt">Лог чист</div>
                            </div>
                        </div>
                    </li>
                @endforelse


                <li class="tl-header">
                    <div class="btn btn-icon btn-rounded btn-default"><i class="fa fa-history"></i></div>
                </li>

            </ul>


        </div>
    </div>


@endsection
