@extends('app')

@section('content')
<section class="container">
    


<div class="col-xs-12">

<hr>

<div class="row">

<div class="col-xs-12">
  <h4 class="pull-left"><i class="fa fa-cog fa-red"></i> Настройки:</h4>
    <a data-toggle="collapse" href="#editprofile" aria-expanded="false" aria-controls="collapseExample" class="pull-right">Управление</a>
</div>


    <div class="col-xs-12 collapse" id="editprofile">

        <hr>

        <form class="col-md-12" action="/home" method="post">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Аккаунт</label>
                    <input type="text" class="form-control" disabled value="{{Auth::user()->nickname}} ">
                </div>

                <div class="form-group">
                    <label>Имя</label>
                    <input type="text" class="form-control" disabled value="{{ $UserInfo['FNAME'] }} ">
                </div>

                <div class="form-group">
                    <label>Фамилия</label>
                    <input type="text" class="form-control" disabled value="{{ $UserInfo['LNAME'] }} ">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Электронная почта</label>
                    <input type="email" name="email" class="form-control" required value="{{ Auth::user()->email }} ">
                </div>


                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password" name="name" required pattern=".{8,}" title="Пароль должен содержать не менее 8 символов"
                           placeholder="Пароль">
                </div>

                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="Изменить" class="button-full">

            </div>

        </form>


        <hr class="col-xs-12">

    </div>


    <div class="col-md-6">


      <div class="col-md-12">
    <p>{{ $UserInfo['FNAME'] }} {{ $UserInfo['LNAME'] }}


    @if($UserInfo['SUSPENDED'] == "no")
      <span class="label label-success">Активен</span>
    @else
      <span class="label label-danger">Не активен</span>
    @endif

    </p>  
  <p>Баланс: {{ $UserInfoLaravel->balans }} руб </p>
  <p>Дата окончания услуг: {{ $UserInfoLaravel->EndOfService }} </p>

          <p>Тариф: {{ $UserInfo['PACKAGE'] }}  </p>

      </div>

  
<div class="col-md-12">
                    <p  class="text-center">Трафик:  {{ $UserInfo['U_BANDWIDTH'] }} мб</p>
                      <div class="progress">

                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $UserInfo['U_BANDWIDTH'] }}" aria-valuemin="0" aria-valuemax="{{ $UserInfo['BANDWIDTH'] }}" style="width: {{  $UserInfo['U_BANDWIDTH'] *  $UserInfo['BANDWIDTH'] / 100  }} %; min-width: 2em;">
                        </div>
                      </div>


                        <p  class="text-center">Диск: {{ $UserInfo['U_DISK'] }} мб</p>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $UserInfo['U_DISK'] }}" aria-valuemin="0" aria-valuemax="{{ $UserInfo['DISK_QUOTA'] }}" style="width: {{  $UserInfo['U_DISK'] *  $UserInfo['DISK_QUOTA'] / 100  }} %; min-width: 2em;">
                        </div>
                      </div>
</div>






  </div>



  <div class="col-md-6">
        <table class="table">

            <tr>
                <td class="counter-name">Веб:</td>
                <td class="counter-value">{{ $UserInfo['U_DISK_WEB'] }} мб</td>
            </tr>

            <tr>
                <td class="counter-name">Базы данных::</td>
                <td class="counter-value">{{ $UserInfo['U_DISK_DB'] }} мб</td>
            </tr>

            <tr>
              <td class="counter-name">Веб домены:</td>
              <td class="counter-value">{{ $UserInfo['U_WEB_DOMAINS'] }} / {{ $UserInfo['WEB_DOMAINS'] }}</td>
          </tr>
          <tr>
              <td class="counter-name">DNS домены::</td>
              <td class="counter-value"> {{ $UserInfo['U_DNS_DOMAINS'] }} / {{ $UserInfo['DNS_DOMAINS'] }}</td>
          </tr>
          <tr>
              <td class="counter-name">Базы данных:</td>
              <td class="counter-value">{{ $UserInfo['U_DATABASES'] }} / {{ $UserInfo['DATABASES'] }}</td>
          </tr>
          <tr>
              <td class="counter-name">Сервер имен:</td>
              <td class="counter-value">{{ $UserInfo['NS'] }}</td>
          </tr>
      </table>
  </div>
</div>





<hr>


</div>


</section>

@endsection
