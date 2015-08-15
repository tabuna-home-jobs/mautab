@extends('app')

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">Настройки</div>
        <div class="panel-body">

            <div class="col-xs-12">

                <div class="row">


                    <form class="col-md-12" action="{{URL::route('settings.update')}}" method="post">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Аккаунт</label>
                                <input type="text" class="form-control" disabled value="{{Auth::User()->nickname}} ">
                            </div>

                            <div class="form-group">
                                <label>Имя</label>
                                <input type="text" class="form-control" disabled value="{{ $UserInfo['FNAME'] }} ">
                            </div>

                            <div class="form-group">
                                <label>Фамилия</label>
                                <input type="text" class="form-control" disabled value="{{ $UserInfo['LNAME'] }} ">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Электронная почта</label>
                                <input type="email" name="email" class="form-control" required
                                       value="{{ Auth::User()->email }} ">
                            </div>


                            <div class="form-group">
                                <label for="password">Пароль</label>
                                <input type="password" class="form-control" id="password" name="password" required
                                       pattern=".{8,}"
                                       title="Пароль должен содержать не менее 8 символов"
                                       placeholder="Пароль">
                            </div>

                            <div class="form-group">
                                <label for="password">Язык</label>
                                <select class="form-control" required name="lang">
                                    <option value="en" @if($UserInfoLaravel->lang == "en") selected @endif >English</option>
                                    <option value="ru" @if($UserInfoLaravel->lang == "ru") selected @endif >Russian</option>
                                </select>
                            </div>


                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" value="Изменить" class="btn btn btn-blue">

                        </div>

                    </form>


                </div>


            </div>

        </div>
    </div>

@endsection
