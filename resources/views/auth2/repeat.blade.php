@include('header')


<div class="web-open">
    <div>
        <img class="img-responsive" alt="banner" src="/images/background-auth.jpeg">

        <div class="caption">
            <div class="caption-wrapper">
                <div class="caption-info">


                    <div class="container container-auth">

                        <h1>Опришлите ещё раз</h1>

                        <form action="/auth/repeat" method="post">


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


            <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <input class="form-control" size="100" value="{{ old('email')  }}" name="email" type="email">
            </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-blue" value="Востановить пароль">
                        </form>


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


@include('footer')
