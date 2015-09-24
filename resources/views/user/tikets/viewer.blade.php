@extends('app')
@section('content')

    <div class="panel panel-default" ui-jq="userTiketView">
        <div class="panel-heading">{{$Tiket->title}}</div>
        <div class="panel-body">


            <blockquote class="col-xs-12">
                <p>{{$Tiket->message}}</p>
            </blockquote>


            <div class="panel">

                <ul class="list-group list-group-lg no-bg auto" id="bodyChat">
                    @foreach ($subTiket as $Tik)
                        <li class="list-group-item clearfix">
                            <span class="clear">
                                <span>{{User::findOrFail($Tik->user_id)->getNickname()}}</span>
                                <small class="text-muted clear">{{$Tik->message}}</small>
                            </span>
                        </li>
                    @endforeach
                </ul>


                <div class="clearfix panel-footer">

                    @if($Tiket->complete != 1)
                    <form id="commentform">

                        <div class="input-group">
                            <input name="message" type="text" placeholder="Сообщение"  class="form-control input-sm btn-rounded">
                            <input type="hidden" name="tikets_id" value="{{$Tiket->id}}">
                            <input type="hidden" name="interview" value="1">
                            <span class="input-group-btn">
                              <button class="btn btn-default btn-sm btn-rounded" id="subAnwerUser">
                                  <i class="fa fa-paper-plane-o"></i>
                              </button>
                            </span>
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






