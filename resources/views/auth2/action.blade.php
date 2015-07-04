@include('header')


<div class="web-open">
    <div>
        <img class="img-responsive" alt="banner" src="/images/background-auth.jpeg">

        <div class="caption">
            <div class="caption-wrapper">
                <div class="caption-info">


                    <div class="container container-auth">
    <h1>Активация аккаунта</h1>

                        <form action="/auth/action" method="post">

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


                    </div>


                </div>
</div>
        </div>
    </div>
</div>






@include('footer')
