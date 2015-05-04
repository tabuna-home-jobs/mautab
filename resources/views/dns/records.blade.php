@extends('app')

@section('content')
    <section class="container">

        <div class="col-xs-12">

            <div class="table-responsive">
                <table class="table table-striped">

                    <tbody>


                    @foreach($records as $key => $record)

                        <tr>
                            <th scope="row">
                                {{$record['ID']}}
                            </th>
                            <td>{{$record['RECORD']}}</td>
                            <td>{{$record['TYPE']}}</td>
                            <td>{{$record['PRIORITY']}}</td>
                            <td>{{$record['VALUE']}}</td>
                            <td>{{$record['TIME']}}</td>
                            <td>{{$record['DATE']}}</td>
                            <td>{{$record['SUSPENDED']}}</td>

                            <td>
                                <p><a href="#"><i class="fa fa-pencil-square-o"></i> Редактировать</a></p>

                                <p><a href="#"><i class="fa fa-trash"></i> Удалить</a></p>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>


        </div>


    </section>

@endsection
