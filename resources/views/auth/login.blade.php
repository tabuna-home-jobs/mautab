@include('header')


<div class="auth-container">
<div class="container text-center">
    <h1>Авторизация</h1>
</div>


    <div class="container">


        <div class="app-container text-center">

            <form class="col-md-6 col-md-offset-3" action="/auth/login" method="post">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Что то пошло не так!</strong> Пожалуйста проверьте вводимые данные.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="form-group">
                <label class="control-label">Email:</label>

                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input type="email" class="form-control" name="email" value="{{old('email')}}">
                </div>


            </div>

            <div class="form-group">
                <label class="control-label">Пароль:</label>
                <input type="password" class="form-control" size="50" name="password">
            </div>


            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn btn-blue" value="Войти">

                <p><a href="/password/email">Забыли пароль?</a></p>
        </form>


    </div>
</div>


</div>






@include('footer')








