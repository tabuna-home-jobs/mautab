@extends('app')
@section('content')

    <div class="panel panel-default" ui-jq="userTiketView">
        <div class="panel-heading">
            <span>Вы спросили:</span>
            <cite>{{$Tiket->title}}</cite>
        </div>
        <div class="panel-body">
            <blockquote class="col-xs-12">
                <p>{{$Tiket->message}}</p>
            </blockquote>


            <div class="panel-body">

                <div class="col-md-8">
                    <ul class="list-group list-group-lg no-bg auto" id="bodyChat">
                        @foreach ($subTiket as $Tik)
                            <li class="list-group-item clearfix">
                                <span class="clear">
                                    <span class="text-black">{{User::findOrFail($Tik->user_id)->getNickname()}}</span>
                                    <small class="clear">{{$Tik->message}}</small>
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>


                <div class="col-md-4 mess-window">

                    @if($Tiket->complete != 1)
                        <h2>Спрашивай</h2>
                        <form id="commentform">

                            <div class="form-group">
                                <label>Сообщение</label>
                                <textarea name="message" cols="5" rows="5" class="form-control"></textarea>
                            </div>
                            <input type="hidden" value="{{$Tiket->id}}" name="tikets_id">
                            <input type="hidden" name="interview" value="1">
                            <div class="col-sm-4">
                                <button class="btn btn-primary" id="subAnwerUser">Ответить</button>
                            </div>
                        </form>
                    @else
                        <div class="alert-danger alert">
                            Тема закрыта
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </div>

@endsection






