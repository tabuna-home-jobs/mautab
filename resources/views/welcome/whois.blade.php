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
                    <h3 class="text-dark font-bold m-b-lg">Сервис для проверки доменов.</h3>
                    <ul class="list-unstyled  m-t-xl">
                        <li data-ride="animated" data-animation="fadeInUp" data-delay="600" class="fadeInUp animated">
                            <i class="icon-check pull-left text-lg m-r m-t-sm"></i>

                            <p class="clear m-b-lg"><strong>Введите любое имя сайта</strong>
                                в поисковую строку, и узнаете, свободен домен или занят. Если доменное имя уже занято,
                                можно узнать, кто его владелец и как с ним связаться.
                            </p>
                        </li>
                        <li data-ride="animated" data-animation="fadeInUp" data-delay="600" class="fadeInUp animated">
                            <i class="icon-check pull-left text-lg m-r m-t-sm"></i>

                            <p class="clear m-b-lg"><strong>Введите любое имя сайта</strong>
                                в поисковую строку, и узнаете, свободен домен или занят. Если доменное имя уже занято,
                                можно узнать, кто его владелец и как с ним связаться.
                            </p>
                        </li>
                        <li data-ride="animated" data-animation="fadeInUp" data-delay="600" class="fadeInUp animated">
                            <i class="icon-check pull-left text-lg m-r m-t-sm"></i>

                            <p class="clear m-b-lg"><strong>Введите любое имя сайта</strong>
                                в поисковую строку, и узнаете, свободен домен или занят. Если доменное имя уже занято,
                                можно узнать, кто его владелец и как с ним связаться.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



@endsection
