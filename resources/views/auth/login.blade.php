@extends('_layouts.auth')

@section('content')



    <div class="container w-xxl w-auto-xs">
        <a href class="navbar-brand block m-t">Mautab</a>
        <div class="m-b-lg">
            <div class="wrapper text-center">
                <strong>Войти в панель управления</strong>
            </div>


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


            <form name="form" role="form" method="POST" action="{{ url('/auth/login') }}" class="form-validation">
                <div class="text-danger wrapper text-center" ng-show="authError">

                </div>
                <div class="list-group list-group-sm">
                    <div class="list-group-item">
                        <input type="email" placeholder="Sheldon@gmail.com"
                               name="email" value="{{ old('email') }}" class="form-control no-border" required>
                    </div>
                    <div class="list-group-item">
                        <input type="password" placeholder="********"
                               name="password" class="form-control no-border"  required>
                    </div>
                </div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Войти</button>
                <div class="text-center m-t m-b"><a href="{{ url('/password/email') }}">Забыли пароль?</a></div>
                <div class="line line-dashed"></div>
                <p class="text-center"><small>У вас нет аккаунта?</small></p>
                <a href="{{ url('/auth/register') }}" class="btn btn-lg btn-default btn-block">Зарегистрироваться</a>
            </form>
        </div>
        <div class="text-center">
            <p>
                <small class="text-muted">Web app framework base on Bootstrap and AngularJS<br>&copy; 2014</small>
            </p>
        </div>
    </div>






@endsection
