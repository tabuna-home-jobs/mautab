@extends('app')

@section('content')



<div class="container">
		<div class="col-xs-12">
			<h2 class="text-center">{{Lang::get('tikets.Tickets')}}</h2>

			<p>Тикеты - внутрисистемные сообщения, которые позволяют вам оперативно общаться со службой поддержки. </p>
		</div>









  		<div class="col-md-8 table-responsive">
				<table  class="table table-condensed table-hover table-striped">
				   <thead>
					   	<tr>
						    <th>Номер</th>
						    <th>Заголовок</th>
						    <th>Статус</th>
						    <th>Управление</th>
					   </tr>
				   </thead>
				    <tbody>
					@foreach ($Tikets as $Tiket)
					     <tr>
						     <td>{{ $Tiket->id }}</td>
						     <td>{{ $Tiket->title }}</td>
                 <td>@if (!$Tiket->complete)
                    Рассматриваеться
                   @else
                    Решено
                   @endif
                 </td>
                             <td><a href="/tikets/{{ $Tiket->id }}">Просмотреть</a></td>
					     </tr>
					@endforeach
					</tbody>
				</table>
		</div>


			<div class="col-md-4">
				<h2>Напиши и будет решено</h2>

                <form action="/tikets" method="POST">
				 	<div class="form-group">
						<label>Заголовок</label>
						<input type="text" name="title" class="form-control">
					</div>
					<div class="form-group">
						<label>Описание</label>
						<textarea name="message" cols="5" class="form-control"></textarea>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="submit" class="button-full" value="Войти">
				</form>
			</div>


  
          
 </div>
@endsection






