@extends('app')

@section('content')



    <div class="panel panel-default">
        <div class="panel-heading">Поиск</div>
        <div class="panel-body">


            <div class="col-md-12">

                <div class="wrapper-md">
                    <form action="{{route('search.index')}}" class="m-b-md">
                        <div class="input-group">
                            <input type="text" name="query" class="form-control input-lg" placeholder="Поиск...">
      <span class="input-group-btn">
        <button class="btn btn-lg btn-default" type="submit">Поиск</button>
      </span>
                        </div>
                    </form>
                    <p class="m-b-md">Найдено элементов по <strong>Вашему</strong> запросу:
                        <strong>{{count($Search)}}</strong></p>

                    <ul class="list-group no-borders pull-in m-b-none">


                        @foreach($Search as $all)



                            <li class="list-group-item">


                                <a
                                        @if($all['TYPE'] == 'bd')
                                        href="{{route('bd.show',$all['RESULT'])}}"
                                        @elseif($all['TYPE'] == 'web')
                                        href="{{route('web.show',$all['RESULT'])}}"
                                        @elseif($all['TYPE'] == 'dns')
                                        href="{{route('dns.show',$all['RESULT'])}}"
                                        @elseif($all['TYPE'] == 'cron')
                                        href="{{route('cron.show',$all['LINK'])}}"
                                        @endif


                                        class="h4 text-primary m-b-sm m-t-sm block">{{$all['RESULT']}}
                                </a>

                                <p><span class="label bg-primary pos-rlt m-r inline wrapper-xs"><i
                                                class="arrow right arrow-primary"></i> Тип: {{$all['KEY']}}</span><span
                                            class="m-r-sm">{{$all['TYPE']}}</span>
                                </p>

                                <p class="pull-right">Добавлен: {{$all['DATE']}} {{$all['TIME']}}</p>
                                <hr>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>


    </div>
    </div>



@endsection
