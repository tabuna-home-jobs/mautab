@extends('page')
@section('content')
    <div class="support-subheader">
        <div class="row">
            <div class="small-12 columns">
                <h2>{{Lang::get('tikets.Tickets')}}</h2>

                @if (Session::has('good'))
                    <div class="alert alert-success">{{Session::get('good')}}</div>

                @endif

            </div>
        </div>
    </div>
 
    <div class="row">
        <div class="small-12 large-9 medium-9 columns">

            <!-- POST START -->
            <div class="entry">
                <h1>{{$Tiket->title}}</h1>
                {{$Tiket->message}}
            </div>
            <!-- POST END -->

            <!-- SHARE -->
            <div class="single-section-container"><h6 class="single-section-title"><span class="single-section-text">Ответы</span></h6></div>
            <!-- END OF SHARE -->
            <!-- AUTHOR BOX -->
            @foreach ($subTiket as $Tik)
            <div class="author-wrap">
                <div class="row">
                    <div class="small-12 large-2 medium-3 columns">
                        <div class="author-gravatar"><img src="images/gravatar.png" alt=""/></div>
                    </div>
                    <div class="small-12 large-10 medium-9 columns">
                        <div class="author-info">
                            <div class="author author-title"><h6>{{$Tik->title}}</h6></div>
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
                                <textarea id="comment" name="reply" cols="45" rows="8" aria-required="true"></textarea></p>
                            <p class="form-submit">
                                <input name="id" type="hidden"  value="{{$Tiket->id}}" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input name="submit" type="submit" id="submit" value="Ответить" />
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END OF COMMENTS -->

        </div>
    </div>



@endsection






