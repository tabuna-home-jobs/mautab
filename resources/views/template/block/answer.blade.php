<div class="bg-dark main-slider clearfix">
    <div class="container m-t-xxl m-b-xxl padder-v">
        <div class="carousel auto slide clearfix" id="b-slide" data-interval="6000">
            <ol class="carousel-indicators">

                @foreach($Block->element as $key => $element)
                    <li data-target="#b-slide" data-slide-to="{{$key}}" class="@if(!$key) active @endif"></li>
                @endforeach
            </ol>

            <div class="carousel-inner text-center m-t-xl m-b-xl">
                @foreach($Block->element as $key => $element)
                    <div class="item @if(!$key) active @endif">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3 m-b-xl">
                                <h4 class="font-thin l-h-2x text-white m-b-lg"><em>
                                        {{$element->storyLang->content}}
                                    </em></h4>

                                <p class="text-muted">{{$element->storyLang->name}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <a class="left carousel-control" href="#b-slide" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="right carousel-control" href="#b-slide" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </div>

</div>