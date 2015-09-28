@extends('admin')

@section('content')


    <div class="col">
        <!-- main header -->
        <div class="bg-light lter b-b wrapper-md">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h1 class="m-n font-thin h3 text-black">Dashboard</h1>
                    <small class="text-muted">Welcome to angulr application</small>
                </div>
            </div>
        </div>
        <!-- / main header -->
        <div class="wrapper-md">
            <!-- stats -->
            <div class="row">
                <div class="col-md-5">
                    <div class="row row-sm text-center">
                        <div class="col-xs-6">
                            <div class="panel padder-v item">
                                <div class="h1 text-info font-thin h1">521</div>
                                <span class="text-muted text-xs">New items</span>

                                <div class="top text-right w-full">
                                    <i class="fa fa-caret-down text-warning m-r-sm"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <a href="" class="block panel padder-v bg-primary item">
                                <span class="text-white font-thin h1 block">930</span>
                                <span class="text-muted text-xs">Uploads</span>
                <span class="bottom text-right w-full">
                  <i class="fa fa-cloud-upload text-muted m-r-sm"></i>
                </span>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a href="" class="block panel padder-v bg-info item">
                                <span class="text-white font-thin h1 block">432</span>
                                <span class="text-muted text-xs">Comments</span>
                <span class="top text-left">
                  <i class="fa fa-caret-up text-warning m-l-sm"></i>
                </span>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <div class="panel padder-v item">
                                <div class="font-thin h1">129</div>
                                <span class="text-muted text-xs">Feeds</span>

                                <div class="bottom text-left">
                                    <i class="fa fa-caret-up text-warning m-l-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="panel wrapper">

                        </div>
                    </div>
                </div>
            </div>
            <!-- / stats -->


        </div>
    </div>









@endsection