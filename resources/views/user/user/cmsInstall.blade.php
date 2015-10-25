@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Помощник в установки</div>
        <div class="panel-body">


            <div class="stepwizard" ui-jq="wizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>

                        <p>Система</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>

                        <p>Веб-сайт</p>
                    </div>
                </div>
            </div>
            <form role="form" action="{{route('install.store')}}" method="post">
                <div class="row setup-content" id="step-1">
                    <div class="col-xs-12">
                        <h3> Выберите CMS</h3>

                        <div class="line line-dashed b-b line-lg"></div>

                        @foreach($CMSList as $cms)

                            <div class="radio col-xs-4 text-center">
                                <label class="i-checks i-checks-sm">
                                    <input type="radio" name="cms" required value="{{$cms->id}}">
                                    <i></i>
                                    <img src="{{$cms->avatar}}" class="img-responsive" alt="{{$cms->name}}">

                                    <p>{{$cms->name}}</p>
                                </label>
                            </div>

                        @endforeach

                        <div class="line line-dashed b-b line-lg"></div>

                        <button class="btn btn-primary nextBtn pull-right" type="button">Далее</button>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">


                        <ul class="list-group">

                            @foreach($Domains as $name => $domain)


                                <li class="list-group-item">
                                    <div class="radio">
                                        <label class="i-checks i-checks-sm">
                                            <input type="radio" required name="domain" value="{{$name}}">
                                            <i></i> {{$name}}
                                        </label>
                                    </div>

                                </li>

                            @endforeach
                        </ul>


                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success btn-lg pull-right" data-toggle="modal"
                                data-target="#installCMS">
                            Установить!
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="installCMS" tabindex="-1" role="dialog"
                             aria-labelledby="installCMS">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Вы уверены что хотите установить выбранное решение?</h4>
                                    </div>
                                    <div class="modal-body">
                                        Это действие удалит все файлы на вашем, веб сайте и создаст репликацию
                                        выбранного решения
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена
                                        </button>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-primary">Установить</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </form>


        </div>
    </div>


@endsection
