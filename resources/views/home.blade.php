@extends('app')

@section('content')
<section class="container">
    


<div class="col-xs-12">

<hr>

<div class="row">

<div class="col-xs-12">
  <h4 class="pull-left"><i class="fa fa-cog fa-red"></i> Настройки:</h4>
   <a href="#" class="pull-right">Управление</a>
</div>





  <div class="col-md-6">


  <div class="col-md-4">
  <img src="/img/gravatar.png" class="img-responsive">
  </div>



  <div class="col-md-8">
    <p>{{ $UserInfo['FNAME'] }} {{ $UserInfo['LNAME'] }}


    @if($UserInfo['SUSPENDED'] == "no")
      <span class="label label-success">Активен</span>
    @else
      <span class="label label-danger">Не активен</span>
    @endif

    </p>  
  <p>Баланс: {{ $UserInfoLaravel->balans }} руб </p>
  <p>Дата окончания услуг: {{ $UserInfoLaravel->EndOfService }} </p>

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


                              <table class="table">
                                  <tr>
                                      <td>
                                          Web : {{ $UserInfo['U_DISK_WEB'] }} мб
                                      </td>
                                      <td>
                                          Базы данных: {{ $UserInfo['U_DISK_DB'] }}  мб
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          Почта: {{ $UserInfo['U_DISK_MAIL'] }} мб

                                      </td>
                                      <td>
                                          Папки пользователя : {{ $UserInfo['U_DISK_DIRS'] }} мб
                                      </td>
                                  </tr>

                      <tr>
                          <td class="counter-name">Электронная почта:</td>
                          <td class="counter-value">{{ $UserInfo['CONTACT'] }}</td>
                      </tr>
                      <tr>
                          <td class="counter-name">Пакет:</td>
                          <td class="counter-value">{{ $UserInfo['PACKAGE'] }}</td>
                      </tr>

                              </table>

</div>






  </div>



  <div class="col-md-6">
        <table class="table">
          <tr>
              <td class="counter-name">Веб домены:</td>
              <td class="counter-value">{{ $UserInfo['U_WEB_DOMAINS'] }} / {{ $UserInfo['WEB_DOMAINS'] }}</td>
          </tr>
          <tr>
              <td class="counter-name">DNS домены::</td>
              <td class="counter-value"> {{ $UserInfo['U_DNS_DOMAINS'] }} / {{ $UserInfo['DNS_DOMAINS'] }}</td>
          </tr>
          <tr>
              <td class="counter-name">Почтовые домены::</td>
              <td class="counter-value">{{ $UserInfo['U_MAIL_DOMAINS'] }} / {{ $UserInfo['MAIL_DOMAINS'] }} </td>
          </tr>
          <tr>
              <td class="counter-name">Базы данных:</td>
              <td class="counter-value">{{ $UserInfo['U_DATABASES'] }} / {{ $UserInfo['DATABASES'] }}</td>
          </tr>
          <tr>
              <td class="counter-name">Cron задания:</td>
              <td class="counter-value">{{ $UserInfo['U_CRON_JOBS'] }} / {{ $UserInfo['CRON_JOBS'] }}</td>
          </tr>
          <tr>
              <td class="counter-name">Резервные копии:</td>
              <td class="counter-value">{{ $UserInfo['U_BACKUPS'] }} / {{ $UserInfo['BACKUPS'] }}</td>
          </tr>
          <tr>
              <td class="counter-name">SSH Доступ:</td>
              <td class="counter-value">{{ $UserInfo['SHELL'] }}</td>
          </tr>
          <tr>
              <td class="counter-name">Выделиных IP адресов:</td>
              <td class="counter-value">{{ $UserInfo['IP_OWNED']}}</td>
          </tr>
          <tr>
              <td class="counter-name">Сервер имен:</td>
              <td class="counter-value">{{ $UserInfo['NS'] }}</td>
          </tr>
      </table>
  </div>
</div>





<div class="row">
    <div class="col-md-6">

   <!-- <h2>Оплата !!</h2> -->

    </div>

    <div class="col-md-6">

    <!-- <h2>Оплата !!</h2> -->

    </div>
</div>


<hr>

<div class="row">
  <div class="col-md-6">

  <h4 class="pull-left"> <i class="fa fa-ticket fa-red"></i> Мои Тикеты:</h4>
   <a href="/tikets" class="pull-right">Управление</a>
          <table  class="table table-condensed table-hover table-striped">
             <thead>
                <tr>
                  <th>Номер</th>
                  <th>Сообщение</th>
                  <th>Управление</th>
               </tr>
             </thead>
              <tbody>
            @foreach ($Tikets as $Tiket)
                 <tr>
                   <td>{{ $Tiket->id }}</td>
                   <td>{{ $Tiket->title }}</td>
                   <td><a href="/tiket/{{ $Tiket->id }}">Просмотреть</a></td>
                 </tr>
            @endforeach
            </tbody>
          </table>
         


  </div>

  <div class="col-md-6">

  <h4 class="pull-left"><i class="fa fa-cloud-download fa-red"></i> Резервные копии:</h4>
   <a href="#" class="pull-right">Управление</a>
          <table  class="table table-condensed table-hover table-striped">
             <thead>
                <tr>
                  <th>Дата</th>
                  <th>Размер</th>
                  <th>Скачать</th>
               </tr>
             </thead>
              <tbody>
            @foreach ($Backups as $key => $Backup)
                 <tr>
                   <td>{{ $Backup['TIME'] }} : {{ $Backup['DATE'] }}</td>
                   <td>{{ $Backup['SIZE'] }} мб</td>
                   <td><a href="/home/backup/{{$key}} ">Скачать</a></td>
                 </tr>
            @endforeach
            </tbody>
          </table>
  </div>
</div>





</div>


</section>

@endsection
