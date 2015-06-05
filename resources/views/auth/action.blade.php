@include('header')




<div class="container text-center">
    <h1>Активация аккаунта</h1>
</div>


<div class="container login-container">
    <div class="login-form text-center">


        <form action="/auth/action" class="col-xs-12 col-md-6" method="post">

            <div class="alert alert-info" role="alert">
                <p>На указанный адрес электронной потчы была высланна информация для активации аккаунта</p>
            </div>

            <div class="form-group">
                <label for="email" class="control-label">E-mail</label>
                <input type="email" name="email" class="form-control" size="100" value="{{old('email')}}">
            </div>

            <div class="form-group">
                <label for="email" class="control-label">Ключ</label>
                <input type="text" name="key" class="form-control" size="255" value="{{old('key')}}">
            </div>


            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-blue" value="Активировать">

            <p><a href="/auth/repeat/">Мне не пришёл код сообщения?</a></p>
        </form>


        <div class="col-xs-12 col-md-6">


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

            <img class="img-responsive" alt="" src="/img/email-mockup.png">
        </div>


    </div>
</div>








@include('footer')
