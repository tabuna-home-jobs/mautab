@include('header')



<div class="container text-center">
    <h1>Авторизация</h1>
</div>


<div class="container login-container">



    <div class="login-form text-center">

        <form class="col-xs-12 col-md-6" action="/auth/login" method="post">
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
                {!! Form::email('email', @$email, array('size'=> '50','class' => 'form-control'))!!}
            </div>

            <div class="form-group">
                <label class="control-label">Пароль:</label>
                <input type="password" class="form-control" size="50" name="password">
            </div>


            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn btn-blue" value="Войти">
            <a href="/password/email">Забыли пароль?</a>
        </form>


        <div  class="col-xs-12 col-md-6">
            <img class="img-responsive" alt="" src="/img/email-mockup.png">
        </div>



    </div>
</div>









@include('footer')








