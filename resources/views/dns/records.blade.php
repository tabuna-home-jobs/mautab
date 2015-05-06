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

                                    <div class="col-xs-2 btn-group pull-right" role="group" aria-label="...">
                                    <button type="button" class="btn btn-default"><i class="fa fa-pencil-square-o"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </div>
                                </div>
                    @endforeach


            </div>


        </div>


    </section>

@endsection
