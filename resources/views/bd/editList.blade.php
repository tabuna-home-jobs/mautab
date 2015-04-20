@extends('app')

@section('content')
    <section class="container">

        <div class="col-xs-12">

            <div class="table-responsive">


                    @if(!empty($BdList))
                        @foreach($BdList as $nameBd => $bd)
                            <form>
                                <input type="text" value="{{$nameBd}}" />
                                <input type="text" value="{{$bd['HOST']}}" />
                            </form>
                        @endforeach
                            @else
                                <div>Нет данных</div>
                            @endif

            </div>


        </div>


    </section>

@endsection
