@extends('app')

@section('content')
    <section class="container">

        <div class="col-xs-12">

            <div class="wrap-b row">
                <div class="row wrapp-dom-list-name">
                    <div class="col-md-11 name-dom-list text-center">{{$domain}}</div>
                    <div class="col-md-1 text-right add-dom">
                            <a aria-controls="collapseExample" aria-expanded="false" href="#add-dns" data-toggle="collapse" id="show-add-bd">
                                <i class="fa fa-plus"></i>
                            </a>
                    </div>
                </div>


                    @foreach($records as $key => $record)

                        @if($record['SUSPENDED'] == 'no')
                        <div class="stick row">
                        @else
                                <div class="danger stick row">
                                @endif
                                    <div class="col-xs-1" id=" {{$record['ID']}}">{{$record['RECORD']}}</div>
                                    <div class="col-xs-1">{{$record['TYPE']}}</div>
                                    <div class="col-xs-1">{{$record['PRIORITY']}}</div>
                                    <div class="col-xs-4"> {{substr($record['VALUE'],0,30)}}</div>
                                    <div class="col-xs-3">{{$record['DATE']}} : {{$record['TIME']}}</div>

                                    <div class="btn-group pull-right" role="group" aria-label="...">
                                        <a href="{{URL::route('records.edit', $record['ID'])}}" class="btn btn-default">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#Modal-{{$record['ID']}}"
                                           class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>


                                    <!-- Modal -->
                                    <div class="modal fade" id="Modal-{{$record['ID']}}" tabindex="-1" role="dialog"
                                         aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Удалить Задание ?</h4>
                                                </div>
                                                <div class="modal-body">
                                                    Вы действительно хотите удалить {{$record['RECORD']}}
                                                    - {{$record['VALUE']}}
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{URL::route('records.destroy')}}" method="post">
                                                        <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Нет
                                                        </button>
                                                        <button type="submit" class="button-small">Да</button>
                                                        <input type="hidden" name="v_record_id"
                                                               value="{{$record['ID']}}"/>
                                                        <input type="hidden" name="v_domain" value="{{$domain}}"/>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                    @endforeach


            </div>


        </div>


    </section>

@endsection
