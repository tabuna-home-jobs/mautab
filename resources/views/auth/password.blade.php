@extends('_layouts.auth')

@section('content')



    <div class="container w-xl w-auto-xs">
        <a href="/" class="navbar-brand block m-t">Mautab</a>

        <div class="m-b-lg">
            <div class="wrapper text-center">
                <strong>Что бы востановить доступ к системе в ведите свой Email</strong>
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

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

            <form name="reset" method="POST"
                  action="{{ url('/password/email') }}">
                <div class="list-group list-group-sm">
                    <div class="list-group-item">
                        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}"
                               class="form-control no-border" required>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Отправить</button>
            </form>
            <div collapse="isCollapsed" class="m-t">
                <div class="alert alert-success">
                    <p>A reset link sent to your email address, please check it in 7 days. <a ui-sref="access.signin"
                                                                                              class="btn btn-sm btn-success">Sign
                            in</a></p>
                </div>
            </div>
        </div>
        <div class="text-center">
            <p>
                <small class="text-muted">Mautab &copy; 2015</small>
            </p>
        </div>
    </div>











@endsection
