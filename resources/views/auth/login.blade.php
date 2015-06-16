@include('header')


<div class="web-open">
    <div>
        <img class="img-responsive" alt="banner" src="/images/background-auth.jpeg">

        <div class="caption">
            <div class="caption-wrapper">
                <div class="caption-info">


                    <div class="container container-auth">
                        <h1>Авторизация</h1>

                        <form action="/auth/login" method="post">
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
        </div>
    </div>
</div>


@include('footer')








