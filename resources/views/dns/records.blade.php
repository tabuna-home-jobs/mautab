@extends('app')

@section('content')
    <section class="container">

        <div class="col-xs-12">

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th colspan="5">{{$domain}}</th>
                        <th>
                            <a aria-controls="collapseExample" aria-expanded="false" href="#add-dns" data-toggle="collapse" id="show-add-bd">
                                <i class="fa fa-plus"></i>
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach($records as $key => $record)

                        @if($record['SUSPENDED'] == 'no')
                            <tr>
                        @else
                            <tr class="danger">
                                @endif
                                <td id=" {{$record['ID']}}">{{$record['RECORD']}}</td>
                            <td>{{$record['TYPE']}}</td>
                            <td>{{$record['PRIORITY']}}</td>
                                <td> {{substr($record['VALUE'],0,30)}}</td>
                                <td>{{$record['DATE']}} : {{$record['TIME']}}</td>
                            <td>
                                <div class="btn-group pull-right" role="group" aria-label="...">
                                    <button type="button" class="btn btn-default"><i class="fa fa-pencil-square-o"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>


        </div>


    </section>

@endsection
