@extends('app')
@section('content')




    <div class="col-md-8 col-xs-12">

    <div class="col-xs-12">
            <h2 class="text-center">{{$Tiket->title}}</h2>
            <p>{{$Tiket->message}}</p>
        </div>

            <!-- SHARE -->
        <div class="text-right"><h6>{{Lang::get('hosting.tikets.answers')}}</h6></div>
        <hr>
            <!-- END OF SHARE -->
            <!-- AUTHOR BOX -->
            @foreach ($subTiket as $Tik)
                <div class="row">
                    <div class="col-xs-12">
                                <p>
                                    {{$Tik->message}}
                                </p>
                    </div>
                </div>
            <hr>
            @endforeach
            <!-- END OF AUTHOR BOX -->
    </div>

            <!-- COMMENTS -->
    <div class="commentsform col-md-4 col-xs-12">
                <div id="addcomments">
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">Ваш ответ</h3>

                        <form action="{{URL::route('hosting.tikets.update')}}" method="POST" id="commentform" class="comment-form">
                            <p class="comment-form-comment">
                                <label for="comment">Сообщение</label>
                                <textarea name="message" name="reply" class="form-control" cols="45" rows="8" aria-required="true"></textarea></p>
                            <p class="form-submit">
                                <input name="id" type="hidden"  value="{{$Tiket->id}}" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="PUT">
                                <input name="submit" type="submit" class="btn btn-blue" id="submit" value="Ответить"/>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END OF COMMENTS -->

    </div>


@endsection






