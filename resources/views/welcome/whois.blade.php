@extends('appFull')

@section('content')


    <div class="bg-white-only">
        <div class="container">
            <div class="row m-t-xl m-b-xxl">
                <div class="col-sm-6 fadeInLeft animated" data-ride="animated" data-animation="fadeInLeft"
                     data-delay="300">
                    <div class="m-t-xxl">
                        <form action="{{route('whois.store')}}" method="post">
                            {!! csrf_field() !!}
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="{{$domain or 'http://hooli.com'}}"
                                       name="webdomain"
                                       required>
                                      <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">Узнать!</button>
                                      </span>
                            </div>
                            <div class="form-group">
                                <textarea readonly rows="20"
                                          class="form-control">{{$info or 'Укажите доменное имя, что бы узнать информацию' }}</textarea>
                            </div>

                        </form>

                    </div>
                </div>
                <div class="col-sm-6 wrapper-xl">
                    <h3 class="text-dark font-bold m-b-lg">Save your time with the great tools</h3>
                    <ul class="list-unstyled  m-t-xl">
                        <li data-ride="animated" data-animation="fadeInUp" data-delay="600" class="fadeInUp animated">
                            <i class="icon-check pull-left text-lg m-r m-t-sm"></i>

                            <p class="clear m-b-lg"><strong>Using Less</strong>, Angulr's CSS is built on Less, a
                                preprocessor with additional functionality like variables, mixins, and functions for
                                compiling CSS. </p>
                        </li>
                        <li data-ride="animated" data-animation="fadeInUp" data-delay="900" class="fadeInUp animated">
                            <i class="icon-check pull-left text-lg m-r m-t-sm"></i>

                            <p class="clear m-b-lg"><strong>Grunt Task</strong>, Angulr using Grunt to automate
                                development tasks, like compiling less to css, concatenating and minifying js files...
                            </p>
                        </li>
                        <li data-ride="animated" data-animation="fadeInUp" data-delay="1100" class="fadeInUp animated">
                            <i class="icon-check pull-left text-lg m-r m-t-sm"></i>

                            <p class="clear m-b-lg"><strong>Bower Package</strong>, fetching and installing packages
                                from all over, finding, downloading, and saving the stuff you’re looking for.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



@endsection