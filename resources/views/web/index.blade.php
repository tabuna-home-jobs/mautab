@extends('app')

@section('content')
<section class="container">
    
<div class="col-xs-12">


<div class="table-responsive">
<table class="table table-striped">
      <thead>
        <tr>
          <th>Домен</th>
          <th>Информация</th>
          <th>Конфигурация</th>
          <th>Управление</th>
        </tr>
      </thead>
      <tbody>


		@forelse($UserDomain as $key => $Domain)

				@if($Domain['SUSPENDED'] == "no")
					<tr>
				@else
					<tr class="danger">
				@endif

					<th scope="row">
						<p><b>{{ $key }}</b></p>  
						<p><small>{{$Domain['ALIAS']}} </small></p>
					</th>
					<td>
						<p>Диск - {{ $Domain['U_DISK'] }} мб</p>
						<p>Трафик - {{ $Domain['U_BANDWIDTH'] }} мб</p>
						<p>IP - {{ $Domain['IP'] }}  {{ $Domain['IP6'] }}</p>
					</td>
					<td>
					<p>Поддержка Nginx: @if($Domain['PROXY'] == "") Нет @else Да @endif </p>
					<p>Поддержка SSL: @if($Domain['SSL'] == "no") Нет @else Да @endif </p>
					<p>Статистика сайта: @if($Domain['STATS'] == "") Нет @else {{ $Domain['STATS'] }} @endif </p>
					</td>
					<td>
					<p><a href="#"><i class="fa fa-line-chart"></i> Веб-аналитика</a></p>
					<p><a href="#"><i class="fa fa-heartbeat"></i> Просмотреть логи</a></p>
					<p><a href="#"><i class="fa fa-pencil-square-o"></i> Редактировать</a></p>
					<p><a href="#"><i class="fa fa-trash"></i> Удалить</a></p>
					</td>
				</tr>
		@empty
		      <p>Не согдано ни одного домена</p>
		@endforelse


      </tbody>
    </table>
</div>


</div>


</section>

@endsection
