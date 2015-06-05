@include('header')



<div class="container text-center">
    <h1>Опришлите ещё раз</h1>
</div>


<div class="container login-container">
    <div class="login-form text-center">


        <form action="/auth/repeat" class="col-xs-12 col-md-6" method="post">

            <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <input class="form-control" size="100" value="{{ old('email')  }}" name="email" type="email">
            </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-blue" value="Востановить пароль">
        </form>


        <div class="col-xs-12 col-md-6">


            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif


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


</header>





@include('footer')
