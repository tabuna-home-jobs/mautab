@extends('app')
@section('content')



<div class="container">
        <div class="col-xs-12">
            <h2 class="text-center">{{$Tiket->title}}</h2>
            <p>{{$Tiket->message}}</p>
        </div>



            <!-- SHARE -->
            <div class="single-section-container"><h6 class="single-section-title"><span class="single-section-text">Ответы</span></h6></div>
            <!-- END OF SHARE -->
            <!-- AUTHOR BOX -->
            @foreach ($subTiket as $Tik)
            <div class="author-wrap">
                <div class="row">
                    <div class="col-xs-2">
                        <div class="author-gravatar"><img src="/img/gravatar.png" class="img-responsive" alt=""/></div>
                    </div>
                    <div class="col-xs-10">
                        <div class="author-info">
                         <!--   <div class="author author-title"><h6>{{$Tik->title}}</h6></div> -->
                            <div class="author-description">
                                <p>
                                    {{$Tik->message}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- END OF AUTHOR BOX -->

            <!-- COMMENTS -->
            <div class="commentsform">
                <div id="addcomments">
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">Ваш ответ</h3>
                        <form action="/tikets/reply" method="POST" id="commentform" class="comment-form">
                            <p class="comment-form-comment">
                                <label for="comment">Сообщение</label>
                                <textarea id="comment" name="reply" class="form-control" cols="45" rows="8" aria-required="true"></textarea></p>
                            <p class="form-submit">
                                <input name="id" type="hidden"  value="{{$Tiket->id}}" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input name="submit" type="submit" class="button-full" id="submit" value="Ответить" />
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END OF COMMENTS -->

    </div>



@endsection






