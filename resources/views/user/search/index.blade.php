@extends('app')

@section('content')



    <div class="panel panel-default">
        <div class="panel-heading">{{Lang::get('menu.Web')}}</div>
        <div class="panel-body">


            <div class="col-md-12">

                <div class="wrapper-md">
                    <form action="#" class="m-b-md">
                        <div class="input-group">
                            <input type="text" class="form-control input-lg" placeholder="Поиск...">
      <span class="input-group-btn">
        <button class="btn btn-lg btn-default" type="button">Поиск</button>
      </span>
                        </div>
                    </form>
                    <p class="m-b-md"><strong>23</strong> Элементов соответствует вышему <strong>запросу</strong></p>

                    <div class="tab-container">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#tab1" data-toggle="tab">Все <span
                                            class="badge badge-sm m-l-xs">16</span></a></li>
                            <li><a href="#tab2" data-toggle="tab">Web <span
                                            class="badge bg-danger badge-sm m-l-xs">6</span></a></li>
                            <li><a href="#tab3" data-toggle="tab">DNS <span
                                            class="badge bg-primary badge-sm m-l-xs">9</span></a></li>
                            <li><a href="#tab3" data-toggle="tab">BD <span
                                            class="badge bg-primary badge-sm m-l-xs">9</span></a></li>
                            <li><a href="#tab3" data-toggle="tab">Cron <span
                                            class="badge bg-primary badge-sm m-l-xs">9</span></a></li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <ul class="list-group no-borders pull-in m-b-none">
                                    @foreach($Search as $all)
                                        <li class="list-group-item">
                                            <a href="#"
                                               class="h4 text-primary m-b-sm m-t-sm block">{{$all['RESULT']}}</a>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque
                                                quam. Aliquam sollicitudin egestas dui nec, fermentum diam. Vivamus vel
                                                tincidunt libero, vitae elementum ligula venenatis ipsum ac feugiat.
                                                Vestibulum ullamcorper sodales nisi nec condimentum</p>

                                            <p><span class="label bg-primary pos-rlt m-r inline wrapper-xs"><i
                                                            class="arrow right arrow-primary"></i> Тип:</span> <a
                                                        href="" class="m-r-sm">{{$all['TYPE']}}</a>
                                            </p>

                                            <p class="text-right">Добавлен: {{$all['DATE']}} {{$all['TIME']}}</p>

                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane" id="tab2">
                                <ul class="list-group list-group-alt list-group-lg no-borders pull-in m-b-none">
                                    <li class="list-group-item">
                                        <a href="#" class="pull-left thumb-md m-r">
                                            <img src="img/a0.jpg" alt="..." class="img-circle">
                                        </a>

                                        <div class="clear">
                                            <a href="#" class="h4 text-primary m-b-sm block">Jone Dosh <span
                                                        class="label label-sm bg-info">Editor</span></a>

                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque
                                                quam. Aliquam sollicitudin egestas dui nec, fermentum diam. Vivamus vel
                                                tincidunt libero
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="tab3">

                                <ul class="list-group list-group-alt list-group-lg no-borders pull-in m-b-none">
                                    <li class="list-group-item">
                                        <a href="#" class="pull-left thumb-md m-r">
                                            <img src="img/a0.jpg" alt="..." class="img-circle">
                                        </a>

                                        <div class="clear">
                                            <a href="#" class="h4 text-primary m-b-sm block">Jone Dosh <span
                                                        class="label label-sm bg-info">Editor</span></a>

                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque
                                                quam. Aliquam sollicitudin egestas dui nec, fermentum diam. Vivamus vel
                                                tincidunt libero
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    </div>



@endsection
