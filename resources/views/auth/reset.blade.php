@extends('appContent')

@section('content')


    <div class="web-open">
        <div>
            <img class="img-responsive" alt="banner" src="/images/background-auth.jpeg">

            <div class="caption">
                <div class="caption-wrapper">
                    <div class="caption-info">


                        <div class="container container-auth">


                            <h1>Востановить пароль</h1>


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

                            <form class="form-horizontal" role="form" method="POST"
                                  action="{{ url('/password/reset') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group">
                                    <label class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email"
                                               value="{{ old('email') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Reset Password
                                        </button>
                                    </div>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
