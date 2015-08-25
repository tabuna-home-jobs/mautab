@extends('admin')

@section('content')

    <div class="app-content-full h-full no-top-0">

        <div class="hbox hbox-auto-xs hbox-auto-sm bg-light">

            <!-- column -->
            <div class="col w b-r">
                <div class="vbox">
                    <div class="row-row">
                        <div class="cell scrollable hover">
                            <div class="cell-inner">
                                <div class="list-group no-radius no-border no-bg m-b-none">
                                    <li class="list-group-item b-b" tabindex="0">Тарифы:</li>


                                    @foreach($Package as $key => $value)

                                        <a href="{{route('admin.package.edit',$value)}}"
                                           class="list-group-item m-l hover-anchor b-a" tabindex="0">
                                            <span class="pull-right text-muted hover-action" role="button" tabindex="0"><i
                                                        class="fa fa-times"></i></span>
                                            <span class="block m-l-n">{{$key}}</span>
                                        </a>

                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper b-t">
                        <span tooltip="Double click to Edit" class="pull-right text-muted inline wrapper-xs m-r-sm"><i
                                    class="fa fa-question"></i></span>
                        <a href="{{route('admin.package.create')}}" class="btn btn-sm btn-default" tabindex="0"><i
                                    class="fa fa-plus fa-fw m-r-xs"></i> Новый тариф</a>
                    </div>
                </div>
            </div>


            <div class="col bg-white-only">
                <div class="vbox">

                    <div class="row-row">
                        <div class="cell">
                            <div class="cell-inner">
                                <div class="wrapper-lg">

                                    <!-- fields -->
                                    <div class="form-horizontal">


                                    </div>
                                    <!-- / fields -->
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