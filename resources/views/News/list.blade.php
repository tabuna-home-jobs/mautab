@extends('appFull')

@section('content')

    <div class="container app-fixed-body">
        <div class="wrapper-md">

            <div class="col-sm-8">
                <div class="blog-post">
                    <div class="panel">
                        @foreach($news as $value)
                        <div class="wrapper-lg">
                            <h2 class="m-t-none"><a href="">{{$value->title}}</a></h2>

                            <div class="line line-lg b-b b-light"></div>
                            <div>


                                {!!$value->content!!}

                            </div>
                            @endforeach
                            <div class="line line-lg b-b b-light"></div>
                            <div class="text-muted">
                                <i class="fa fa-clock-o text-muted"></i> Feb 20, 2013


                                <p class=" pull-right">
                                    <a class="btn btn-icon btn-rounded btn-dark"
                                       href="http://www.facebook.com/sharer.php?u={{Request::url()}}" target="_blank"><i
                                                class="fa fa-facebook"></i></a>

                                    <a class="btn btn-icon btn-rounded btn-dark"
                                       href="https://twitter.com/share?url={{Request::url()}}" target="_blank"><i
                                                class="fa fa-twitter"></i></a>

                                    <a class="btn btn-icon btn-rounded btn-dark"
                                       href="https://plus.google.com/share?url={{Request::url()}}" target="_blank"><i
                                                class="fa fa-google-plus"></i></a>

                                    <a class="btn btn-icon btn-rounded btn-dark"
                                       href="http://vkontakte.ru/share.php?url={{Request::url()}}" target="_blank"><i
                                                class="fa fa-vk"></i></a>

                                    <a class="btn btn-icon btn-rounded btn-dark"
                                       href="http://www.ok.ru/dk?st.cmd=addShare&st.s=1&st._surl={{Request::url()}}"
                                       target="_blank"><i class="fa fa-odnoklassniki"></i></a>
                                </p>


                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-3">
                <h5 class="font-bold">Categories</h5>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="">
                            <span class="badge pull-right">15</span>
                            Photograph
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="">
                            <span class="badge pull-right">30</span>
                            Life style
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="">
                            <span class="badge pull-right">9</span>
                            Food
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="">
                            <span class="badge pull-right">4</span>
                            Travel world
                        </a>
                    </li>
                </ul>
                <div class="tags m-b-lg l-h-2x">
                    <a class="label bg-primary" href="">Bootstrap</a> <a class="label bg-primary"
                                                                         href="">Application</a> <a
                            class="label bg-primary" href="">Apple</a> <a
                            class="label bg-primary" href="">Less</a> <a class="label bg-primary" href="">Theme</a> <a
                            class="label bg-primary" href="">Wordpress</a>
                </div>
            </div>


        </div>
    </div>





@endsection
