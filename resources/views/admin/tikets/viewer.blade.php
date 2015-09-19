@extends('admin')

@section('content')


	<div class="panel panel-default" ui-jq="adminTiketView">
		<div class="bg-light lter b-b wrapper-md">
			<h1 class="m-n font-thin h3">Тикет #{{$tiket->id}}</h1>
		</div>
		<div class="panel-body">

			<div class="col-md-8">
				<h3 class="text-center">{{$tiket->title}}</h3>

				<p>
					{{$tiket->message}}
				</p>

				<div class="clearfix"></div>
				<ul id="messages">
					@foreach($tiket->subtiket as $val)

						<li>{{$val->message}}</li>

					@endforeach
				</ul>
			</div>





			<div class="col-md-4">
				<h2>Ответь этому сосунку</h2>

				<form id="answerTiket">
					<div class="form-group">
						<label>Сообщение</label>
						<textarea name="message" cols="5" rows="15" class="form-control"></textarea>
					</div>
					<input type="hidden" value="{{$tiket->id}}" name="tikets_id">
					<div class="col-sm-4">
						<button class="btn btn-primary" id="submitTicket">Ответить</button>
					</div>
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-4 close-title">Закрыть:</div>
							<div class="col-sm-8">
								<label class="i-switch bg-success m-t-xs m-r">
									<input type="radio" name="complete" value="1">
									<i></i>
								</label>
								<label class="i-switch bg-danger m-t-xs m-r">
									<input type="radio" name="complete" value="" checked="">
									<i></i>
								</label>
							</div>
						</div>
					</div>
				</form>
			</div>

		</div>

		</div>





@endsection
