@extends('admin')

@section('content')



    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">Список не отвеченных тикетов</h1>
    </div>

    <div class="wrapper-md tab-container" ui-jq="adminTiketIndex">


        <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active">
                    <a href="#open" aria-controls="open" role="tab" data-toggle="tab">Открытые вопросы</a>
                </li>
                <li role="presentation">
                    <a href="#closed" aria-controls="closed" role="tab" data-toggle="tab">Закрытые</a>
                </li>
            </ul>


        <div class="table-responsive wile">

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="open">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Название</th>
                                <th>Сообщение</th>
                                <th class="text-right">Действие</th>
                            </tr>
                            </thead>
                            <tbody id="ticketBody">

                            @foreach($tiketList as $tiket)
                                @if($tiket->complete == 0)
                                    <tr>
                                        <td>{{$tiket->id}}</td>
                                        <td>
                                            <a href="{{ route('admin.tikets.show', $tiket->id) }}">
                                                {{$tiket->title}}
                                            </a>
                                        </td>
                                        <td>
                                            {{str_limit(strip_tags($tiket->message), $limit = 100, $end = '...')}}
                                        </td>
                                        <td>
                                            <div class="btn-group pull-right" role="group" aria-label="...">
                                                <a href="{{route('admin.tikets.show', $tiket->id)}}"
                                                   class="btn btn-info">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="closed">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Название</th>
                                <th>Сообщение</th>
                                <th class="text-right">Действие</th>
                            </tr>
                            </thead>
                            <tbody id="ticketBody-close">

                            @foreach($tiketList as $tiket)
                                @if($tiket->complete == 1)
                                    <tr>
                                        <td>{{$tiket->id}}</td>
                                        <td>
                                            <a href="{{ route('admin.tikets.show', $tiket->id) }}">
                                                {{$tiket->title}}
                                            </a>
                                        </td>
                                        <td>
                                            {{str_limit(strip_tags($tiket->message), $limit = 100, $end = '...')}}
                                        </td>
                                        <td>
                                            <div class="btn-group pull-right del-group" role="group" aria-label="...">
                                                <a href="{{route('admin.tikets.show', $tiket->id)}}"
                                                   class="btn btn-info">
                                                    <i class="fa fa-search"></i>
                                                </a>

                                                <form action="{{route('admin.tikets.destroy', $tiket->id)}}"
                                                      method="post">
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                </form>


                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                {!! $tiketList->render() !!}
            </div>




@endsection
