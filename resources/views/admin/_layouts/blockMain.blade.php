@extends('admin')

@section('content')

    <div class="app-content-full">

        <div class="hbox hbox-auto-xs hbox-auto-sm bg-light">

            <!-- column -->
            <div class="col w b-r">
                <div class="vbox">
                    <div class="row-row">
                        <div class="cell scrollable hover">
                            <div class="cell-inner">
                                <div class="list-group no-radius no-border no-bg m-b-none">
                                    <li class="list-group-item b-b text-center" tabindex="0">Типы:</li>


                                    @foreach($Types as $value)

                                        <a href="{{route('admin.block.index',['type'=>$value->id])}}"
                                           class="list-group-item m-l hover-anchor b-a" tabindex="0">
                                            <span class="pull-right text-muted hover-action" role="button" tabindex="0"><i
                                                        class="fa fa-eye"></i></span>
                                            <span class="block m-l-n">{{$value->name}}</span>
                                        </a>

                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col bg-white-only">
                <div class="vbox">

                    <div class="row-row">
                        <div class="cell">
                            <div class="cell-inner">
                                <div class="wrapper-lg">

                                    @yield('sub-content')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /column -->
        </div>
    </div>

@endsection