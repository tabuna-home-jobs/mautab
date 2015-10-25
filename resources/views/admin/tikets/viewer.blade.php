@extends('admin')

@section('content')

    <div class="panel panel-default" ui-jq="adminTiketView">
        <div class="panel-heading">{{$tiket->title}}</div>
        <div class="panel-body">


            <blockquote class="col-xs-12">
                <p>{{$tiket->message}}</p>
            </blockquote>


            <div class="panel panel-scroll-tiket">


                <ul class="list-group list-group-lg no-bg auto" id="messages">

                    @foreach ($tiket->subtiket as $Tik)
                        <li class="list-group-item clearfix">
                        <span class="clear">
                            <span>
                                {{User::findOrFail($Tik->user_id)->getNickname()}}
                            </span>
                            <small class="text-muted clear">{{$Tik->message}}</small>
                        </span>
                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="clearfix panel-footer">
                <div class="mess-window">
                    <form id="answerTiket">
                        <div class="col-sm-9">

                            <div class="input-group">
                                <input name="message" type="text" placeholder="Сообщение"
                                       class="form-control input-sm btn-rounded">
                                    <span class="input-group-btn">
                                      <button class="btn btn-default btn-sm btn-rounded" id="submitTicket">
                                          <i class="fa fa-paper-plane-o"></i>
                                      </button>
                                    </span>
                            </div>
                            <input type="hidden" value="{{$tiket->id}}" name="tikets_id">

                        </div>

                        <div class="col-sm-3">
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
                                            <input type="radio" name="complete" value="0" checked>
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

    </div>




@endsection




