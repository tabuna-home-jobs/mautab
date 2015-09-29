@extends('admin')

@section('content')


    <div class="panel panel-default" ui-jq="adminTiketView">
        <div class="bg-light lter b-b wrapper-md">
            <h1 class="m-n font-thin h3">Тикет #{{$tiket->id}}</h1>
        </div>
        <div class="panel-body">

            <div class="col-md-8">
                <div>
                    <span class="title-name">{{User::findOrFail($tiket->user_id)->getNickname()}}</span>
                    говорит: <cite>{{$tiket->title}}</cite>
                </div>

                <blockquote class="col-xs-12">
                    <p>
                        {{$tiket->message}}
                    </p>
                </blockquote>

                <div class="clearfix"></div>
                <ul class="list-group list-group-lg no-bg auto" id="messages">
                    @foreach($tiket->subtiket as $val)
                        <li class="list-group-item clearfix">
                            <span class="clear">
                                <span>{{User::findOrFail($val->user_id)->getNickname()}}</span>
                                <small class="text-muted clear">{{$val->message}}</small>
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>


            <div class="col-md-4">
                <h2>Ответь этому сосунку</h2>

                <form id="answerTiket">
                    <div class="form-group">
                        <label>Сообщение</label>
                        <textarea name="message" cols="5" rows="5" class="form-control"></textarea>
                    </div>
                    <input type="hidden" value="{{$tiket->id}}" name="tikets_id">

                    <div class="col-sm-4">
                        <button class="btn btn-primary" id="submitTicket">Ответить</button>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-4 close-title">
                                @if($tiket->complete == 1)
                                    Закрыто
                                @else
                                    Открыто
                                @endif
                            </div>
                            <div class="col-sm-8">
                                <label class="i-switch bg-success m-t-xs m-r">
                                    @if($tiket->complete == 0)
                                    <input type="radio" name="complete" value="1">
                                    @elseif($tiket->complete == 1)
                                    <input type="radio" name="complete" value="1" checked>
                                    @endif
                                    <i></i>
                                </label>
                                <label class="i-switch bg-danger m-t-xs m-r">
                                    @if($tiket->complete == 0)
                                    <input type="radio" name="complete" value="0" checked="">
                                    @elseif($tiket->complete == 1)
                                    <input type="radio" name="complete" value="0">
                                    @endif
                                    <i></i>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>





@endsection
