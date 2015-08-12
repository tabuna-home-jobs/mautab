@extends('_layouts.auth')

@section('content')





    <div class="row header">
        <div class="col-md-12">
            <h3 class="logo">
                <a href="/">Mautab</a>
            </h3>
            <h4>Регистрация</h4>
        </div>
    </div>





    <div class="row">
        <div class="col-md-12">
            <div class="wrapper clearfix">
                <div class="formy">
                    <div class="row">
                        <div class="col-md-12">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                                <form class="form-horizontal" role="form" method="POST"
                                      action="{{ url('/auth/register') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Никнейм</label>

                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="nickname"
                                                   placeholder="Sheldon"
                                                   value="{{ old('nickname') }}">
                                    </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="nickname">Имя</label>

                                        <div class="col-md-8">
                                            <input type="text" name="firstname" size="50" value="{{old('firstname')}}"
                                                   class="form-control" placeholder="Sheldon">
                                    </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="nickname">Фамилия</label>

                                        <div class="col-md-8">
                                            <input type="text" name="lastname" size="50" value="{{old('lastname')}}"
                                                   class="form-control" placeholder="Cooper">
                                    </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label">E-Mail адрес</label>

                                        <div class="col-md-8">
                                            <input type="email" class="form-control" name="email"
                                                   placeholder="Sheldon@gmail.com" value="{{ old('email') }}">
                                    </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="package">Тарифный план</label>

                                        <div class="col-md-8">
                                            <select class="form-control" name="package">
                                                <option value="0">Любительский</option>
                                                <option value="1">Профессиональный</option>
                                                <option value="2">Корпоративный</option>
                                            </select>
                                    </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Пароль</label>

                                        <div class="col-md-8">
                                            <input type="password" class="form-control" placeholder="*******"
                                                   name="password">
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Повторите пароль</label>

                                        <div class="col-md-8">
                                            <input type="password" class="form-control" placeholder="*******"
                                                   name="password_confirmation">
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-blue">
                                                Зарегистрироваться
                                            </button>
                                    </div>
                                    </div>
                                </form>


                        </div>
                    </div>
                </div>
            </div>
            <div class="already-account">
                <p>У вас уже есть аккаунт?
                    <a href="{{ url('/auth/login') }}">Войти</a></p>
            </div>

        </div>
    </div>





















@endsection
