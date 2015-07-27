@extends('_layouts.auth')

@section('content')




    <div class="row header">
        <div class="col-md-12">
            <h3 class="logo">
                <a href="/">Mautab</a>
            </h3>
            <h4>Войти в панель управления</h4>
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


                            <form role="form" method="POST" action="{{ url('/auth/login') }}">

                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <input type="email" class="form-control" placeholder="Sheldon@gmail.com"
                                               name="email" value="{{ old('email') }}">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <input type="password" class="form-control" placeholder="********"
                                               name="password">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Запонить меня
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-blue">Войти</button>
                                    <a class="btn btn-link" href="{{ url('/password/email') }}">Забыли пароль?</a>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="already-account">
                <p>
                    <a href="{{ url('/password/email') }}">Забыли пароль?</a></p>

                <p>У вас нет аккаунта?
                    <a href="{{ url('/auth/register') }}">Зарегистрироваться</a></p>
            </div>

        </div>
    </div>










@endsection
