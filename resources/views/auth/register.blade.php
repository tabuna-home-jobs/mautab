@extends('_layouts.auth')

@section('content')



    <div class="container w-xxl w-auto-xs">
        <a href class="navbar-brand block m-t">Mautab</a>
        <div class="m-b-lg">
            <div class="wrapper text-center">
                <strong>Регистрация для пользования</strong>
            </div>
            <form name="form" class="form-validation" role="form" method="POST"
                  action="{{ url('/auth/register') }}">

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

                <div class="list-group list-group-sm">
                    <div class="list-group-item">
                        <input  class="form-control no-border" type="text"  name="nickname"
                                placeholder="Никнейм"
                                value="{{ old('nickname') }}" required>
                    </div>


                    <div class="list-group-item">
                        <input  class="form-control no-border" type="text" name="firstname" size="50" value="{{old('firstname')}}"
                                 placeholder="Имя" required>
                    </div>

                    <div class="list-group-item">
                        <input  class="form-control no-border" type="text" name="lastname" size="50" value="{{old('lastname')}}"
                                placeholder="Фамилия" required>
                    </div>


                    <div class="list-group-item">
                        <input  class="form-control no-border" type="email" name="email"  value="{{old('email')}}"
                                placeholder="Email" required>
                    </div>




                    <div class="list-group-item">
                        <select class="form-control no-border" name="package">
                            <option value="0">Любительский</option>
                            <option value="1">Профессиональный</option>
                            <option value="2">Корпоративный</option>
                        </select>
                    </div>


                    <div class="list-group-item">
                        <input  class="form-control no-border" type="password" name="password"
                                placeholder="Пароль" required>
                    </div>

                    <div class="list-group-item">
                        <input  class="form-control no-border" type="password" name="password_confirmation"
                                placeholder="Повторите пароль" required>
                    </div>


                </div>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Зарегистрироваться</button>


                    <div class="line line-dashed"></div>
                        <p class="text-center"><small>У вас уже есть аккаунт?</small></p>
                        <a href="{{ url('/auth/login') }}" class="btn btn-lg btn-default btn-block">Войти</a>
            </form>
        </div>

        <div class="text-center">
            <p>
                <small class="text-muted">Web app framework base on Bootstrap and AngularJS<br>&copy; 2014</small>
            </p>
        </div>
    </div>






@endsection
