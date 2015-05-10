@extends('admin')

@section('content')

    <section class="container">

        <div class="col-md-12" id="add-shadow">

            <div class=" table-responsive">
                <table class="table table-condensed table-hover table-striped">
                    <tbody>
                    @foreach($Users as $key => $User)
                        <tr>
                            <td>{{$User->id}}</td>
                            <td>{{$User->nickname}}</td>
                            <td>{{$User->email}}</td>
                            <td>{{$User->balans}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    {!! $Users->render(); !!}
                </table>

            </div>


        </div>
    </section>

@endsection
