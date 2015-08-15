@extends('app')
@section('content')






    <div class="panel panel-default">
        <div class="panel-heading font-bold">{{$Tiket->title}}</div>
        <div class="panel-body">


            <blockquote class="col-xs-12">
                <p>{{$Tiket->message}}</p>
            </blockquote>


            <div class="panel">


                <ul class="list-group list-group-lg no-bg auto">


                    @foreach ($subTiket as $Tik)
                        <li class="list-group-item clearfix">
                    <span class="clear">
              <span>Chris Fox</span>
              <small class="text-muted clear">{{$Tik->message}}</small>
            </span>
                        </li>


                    @endforeach


                </ul>
                <div class="clearfix panel-footer">
                    <form action="{{URL::route('tikets.update',$Tiket->id)}}" method="POST" id="commentform">


                        <div class="input-group">
                            <input name="message" type="text" placeholder="Сообщение" class="form-control input-sm btn-rounded">
            <span class="input-group-btn">
              <button class="btn btn-default btn-sm btn-rounded" type="submit"><i class="fa fa-paper-plane-o"></i></button>
            </span>
                </div>


                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>
        </div>
    </div>

    </div>
    </div>



    </div>
@endsection






