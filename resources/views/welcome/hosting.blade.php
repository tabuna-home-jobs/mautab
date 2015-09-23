@extends('appFull')

@section('content')


    <div class="bg-white-only">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="m-t-xxl m-b-xxl padder-v">
                    <h1 class="font-bold l-h-1x m-t-xxl text-black padder-v animated fadeInDown">
                        Идейные соображения высшего порядка <span class="b-b b-black b-3x"> играют важную роль</span> в
                        формировании модели развития.
                    </h1>

                    <h3 class="text-muted m-t-xl l-h-1x">

                        Таким образом <span
                                class="b-b b-2x">дальнейшее развитие</span> различных форм деятельности в значительной
                        степени обуславливает создание новых предложений.

                    </h3>
                </div>
                <p class="text-center m-b-xxl wrapper">
                    <a href="#"
                       target="_blank"
                       class="btn b-2x btn-lg b-black btn-default btn-rounded text-lg font-bold m-b-xxl animated fadeInUpBig">От
                        100 рублей</a>
                </p>
            </div>
        </div>
    </div>
    <div id="why" class="bg-light">
        <div class="container">
            <div class="m-t-xxl m-b-xl text-center wrapper">
                <h2 class="text-black font-bold">Используйте для всех <span class="b-b b-dark">ваших проектов</span>
                </h2>

                <p class="text-muted h4 m-b-xl">Профессиональный подход, партнерство с проверенными поставщиками и самое
                    современное оборудование позволяют нам обеспечивать по-настоящему надежный хостинг.</p>
            </div>
            <div class="row m-t-xl m-b-xl text-center">
                <div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                    <p class="h3 m-b-xl inline b b-dark rounded wrapper-lg">
                        <i class="fa w-1x fa fa-magic"></i>
                    </p>

                    <div class="m-b-xl">
                        <h4 class="m-t-none">Компетентная поддержка</h4>

                        <p class="text-muted m-t-lg">Поможет развернуть любую CMS или Framework, а так же ответит на все
                            возникшие вопросы</p>
                    </div>
                </div>
                <div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="600">
                    <p class="h3 m-b-xl inline b b-dark rounded wrapper-lg">
                        <i class="fa w-1x fa-gears"></i>
                    </p>

                    <div class="m-b-xl">
                        <h4 class="m-t-none">Современная система</h4>

                        <p class="text-muted m-t-lg">Используйте современные отказоустойчивые системы для своих
                            проектов</p>
                    </div>
                </div>
                <div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="900">
                    <p class="h3 m-b-xl inline b b-dark rounded wrapper-lg">
                        <i class="fa w-1x fa-clock-o"></i>
                    </p>

                    <div class="m-b-xl">
                        <h4 class="m-t-none">Начните в пару минут</h4>

                        <p class="text-muted m-t-lg">Mautab делает использование хостинга интуитивно понятным, что
                            позволяет экономить ваше время</p>
                    </div>
                </div>
            </div>
            <div class="m-t-xl m-b-xl text-center wrapper">
                <p class="h4">Подходит для большинства веб систем:
                    <span class="text-primary">WordPress</span>,
                    <span class="text-primary">OpenCard</span>,
                    <span class="text-primary">Joomla</span>,
                    <span class="text-primary">Laravel</span>...
                </p>

                <p class="m-t-xl"><a href="#testimonial" data-ride="scroll"
                                     class="btn btn-lg btn-white b-2x b-dark btn-rounded bg-empty m-sm">Полный
                        список</a></p>
            </div>
        </div>
    </div>
    <div id="testimonial" class="bg-white dker clearfix">
        <div class="container m-t-xxl m-b-xxl padder-v">

            <div class="row no-gutter">

                @foreach($Package as $value)

                    <div class="col-lg-3 col-md-4 col-sm-6">

                        @if($value->Recommended)

                            <div class="panel b-a m-t-n-md m-b-xl">
                                <div class="panel-heading wrapper-xs bg-info dker no-border">
                                </div>
                                <div class="wrapper bg-info text-center m-l-n-xxs m-r-n-xxs">
                                    <h4 class="text-u-c m-b-none">{{$value->name}}</h4>

                                    <h2 class="m-t-none">
                                        <sup class="pos-rlt" style="top:-22px"><i class="fa fa-rub"></i></sup>
                                        <span class="text-2x text-lt">{{ ceil( $value->price *30)}}</span>
                                        <span class="text-xs">/ в месяц</span>
                                    </h2>
                                </div>
                                @else
                                    <div class="panel b-a">

                                        <div class="panel-heading wrapper-xs bg-primary no-border">
                                        </div>

                                        <div class="wrapper text-center b-b b-light">
                                            <h4 class="text-u-c m-b-none">{{$value->name}}</h4>

                                            <h2 class="m-t-none">
                                                <sup class="pos-rlt" style="top:-22px"><i class="fa fa-rub"></i></sup>
                                                <span class="text-2x text-lt">{{ ceil( $value->price *30)}}</span>
                                                <span class="text-xs">/ в месяц</span>
                                            </h2>
                                        </div>
                                        @endif
                                        <ul class="list-group text-center">

                                            <li class="list-group-item">
                                                <i class="fa fa-check-circle-o text-success m-r-xs"></i>Веб домены <span
                                                        class="pull-right">{{$value->WebDomains}}</span>
                                            </li>
                                            <li class="list-group-item">
                                                <i class="fa fa-check-circle-o text-success m-r-xs"></i>Веб алиасы
                                                <small>(на домен)</small>
                                                <span class="pull-right">{{$value->WebAliases}}</span>
                                            </li>
                                            <li class="list-group-item">
                                                <i class="fa fa-check-circle-o text-success m-r-xs"></i>DNS
                                                domains <span
                                                        class="pull-right">{{$value->DNSDomains}}</span>
                                            </li>
                                            <li class="list-group-item">
                                                <i class="fa fa-check-circle-o text-success m-r-xs"></i>DNS записи
                                                <small>(на домен)</small>
                                                <span class="pull-right">{{$value->DNSRecords}}</span>
                                            </li>

                                            <li class="list-group-item">
                                                <i class="fa fa-check-circle-o text-success m-r-xs"></i>Базы
                                                данных <span
                                                        class="pull-right">{{$value->Databases}}</span>
                                            </li>


                                            <li class="list-group-item">
                                                @if($value->CronJobs)
                                                    <i class="fa fa-check-circle-o text-success m-r-xs"></i>Cron задания
                                                    <span
                                                            class="pull-right">{{$value->CronJobs}}</span>
                                                @else
                                                    <i class="fa fa-times-circle-o text-danger m-r-xs"></i> <span
                                                            class="text-l-t">Cron задания</span>
                                                @endif
                                            </li>
                                            <li class="list-group-item">
                                                @if($value->Backups)
                                                    <i class="fa fa-check-circle-o text-success m-r-xs"></i>Резервные
                                                    копии  <span
                                                            class="pull-right">{{$value->Backups}}</span>
                                                @else
                                                    <i class="fa fa-times-circle-o text-danger m-r-xs"></i> <span
                                                            class="text-l-t">Резервные копии</span>
                                                @endif
                                            </li>

                                            <li class="list-group-item">
                                                @if($value->SSHAccess)
                                                    <i class="fa fa-check-circle-o text-success m-r-xs"></i><span
                                                            class="text-l-t">SSH
                                                    доступ</span>
                                                @else
                                                    <i class="fa fa-times-circle-o text-danger m-r-xs"></i> <span
                                                            class="text-l-t">SSH доступ</span>
                                                @endif
                                            </li>
                                        </ul>

                                        @if($value->Recommended)
                                            <div class="panel-footer text-center b-t m-t bg-light lter">
                                                <div class="m-t-sm">Рекомендуемый пакет</div>
                                                <a href="{{url('/auth/register')}}"
                                                   class="btn btn-info m">Попробывать</a>
                                            </div>
                                        @else
                                            <div class="panel-footer text-center">
                                                <a href="{{url('/auth/register')}}" class="btn btn-primary m">Попробывать</a>
                                            </div>
                                        @endif

                                    </div>
                            </div>

                            @endforeach
                    </div>

            </div>

        <!--Новости -->
            <div class="container m-t-xxl m-b-xxl padder-v">
                <div class="row">
                    <div class="col-md-12 text-center  m-t-xl m-b-xl"><h2><span class="h2-hr-centr"></span><span class="h2-span">Новости</span></h2></div>
                    @foreach($News as $new)
                        <div class="col-md-3 text-center ">
                            <div class="news-heder m-b"><a class="text-black font-bold" href="/news/{{$new->slug}}">{{$new->title}}</a></div>
                            <div class="news-desript m-b">{{str_limit( strip_tags($new->preview), 100, '...' )}}<br><a href="/news/{{$new->slug}} ">Читать далее</a></div>
                            <div class="news-date text-muted ">Опубликовано: {{ $new->created_at->diffForHumans() }}</div>
                        </div>
                    @endforeach

                    <div class="m-t-xl text-center col-xs-12">
                        <a href="/news"  class="btn btn-lg btn-white b-2x b-dark btn-rounded bg-empty m-sm">Все новости</a>
                    </div>
                </div>

            </div>
            <!--end Новости -->

        </div>


            @endsection
        </div>