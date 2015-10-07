@extends('admin')

@section('content')


    <div class="hbox hbox-auto-xs hbox-auto-sm">
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


        <div class="col w-md bg-white-only b-l bg-auto no-border-xs">
            <div class="nav-tabs-alt">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="">
                        <a data-target="#tab-1" role="tab" data-toggle="tab" aria-expanded="false">
                            <i class="glyphicon glyphicon-user text-md text-muted wrapper-sm"></i>
                        </a>
                    </li>
                    <li class="">
                        <a data-target="#tab-2" role="tab" data-toggle="tab" aria-expanded="false">
                            <i class="glyphicon glyphicon-comment text-md text-muted wrapper-sm"></i>
                        </a>
                    </li>
                    <li class="active">
                        <a data-target="#tab-3" role="tab" data-toggle="tab" aria-expanded="true">
                            <i class="glyphicon glyphicon-transfer text-md text-muted wrapper-sm"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane" id="tab-1">
                    <div class="wrapper-md">
                        <div class="m-b-sm text-md">Who to follow</div>
                        <ul class="list-group no-bg no-borders pull-in">
                            <li class="list-group-item">
                                <a herf="" class="pull-left thumb-sm avatar m-r">
                                    <img src="img/a4.jpg" alt="..." class="img-circle">
                                    <i class="on b-white bottom"></i>
                                </a>

                                <div class="clear">
                                    <div><a href="">Chris Fox</a></div>
                                    <small class="text-muted">Designer, Blogger</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <a herf="" class="pull-left thumb-sm avatar m-r">
                                    <img src="img/a5.jpg" alt="..." class="img-circle">
                                    <i class="on b-white bottom"></i>
                                </a>

                                <div class="clear">
                                    <div><a href="">Mogen Polish</a></div>
                                    <small class="text-muted">Writter, Mag Editor</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <a herf="" class="pull-left thumb-sm avatar m-r">
                                    <img src="img/a6.jpg" alt="..." class="img-circle">
                                    <i class="busy b-white bottom"></i>
                                </a>

                                <div class="clear">
                                    <div><a href="">Joge Lucky</a></div>
                                    <small class="text-muted">Art director, Movie Cut</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <a herf="" class="pull-left thumb-sm avatar m-r">
                                    <img src="img/a7.jpg" alt="..." class="img-circle">
                                    <i class="away b-white bottom"></i>
                                </a>

                                <div class="clear">
                                    <div><a href="">Folisise Chosielie</a></div>
                                    <small class="text-muted">Musician, Player</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <a herf="" class="pull-left thumb-sm avatar m-r">
                                    <img src="img/a8.jpg" alt="..." class="img-circle">
                                    <i class="away b-white bottom"></i>
                                </a>

                                <div class="clear">
                                    <div><a href="">Aron Gonzalez</a></div>
                                    <small class="text-muted">Designer</small>
                                </div>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="" class="btn btn-sm btn-primary padder-md m-b">More Connections</a>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane tab-2" id="tab-2">
                    <div class="wrapper-md">
                        <div class="m-b-sm text-md">Chat</div>
                        <ul class="list-group no-borders pull-in auto">
                            <li class="list-group-item">
                            <span class="pull-left thumb-sm m-r"><img src="img/a1.jpg" alt="..."
                                                                      class="img-circle"></span>
                                <a href="#" class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i
                                            class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>

                                <div class="clear">
                                    <div><a href="">Chris Fox</a></div>
                                    <small class="text-muted">about 2 minutes ago</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <span class="pull-left thumb-sm m-r"><img src="img/a2.jpg" alt="..."
                                                                      class="img-circle"></span>
                                <a href="#" class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i
                                            class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>

                                <div class="clear">
                                    <div><a href="">Amanda Conlan</a></div>
                                    <small class="text-muted">about 2 hours ago</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <span class="pull-left thumb-sm m-r"><img src="img/a3.jpg" alt="..."
                                                                      class="img-circle"></span>
                                <a href="" class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i
                                            class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>

                                <div class="clear">
                                    <div><a href="">Dan Doorack</a></div>
                                    <small class="text-muted">3 days ago</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <span class="pull-left thumb-sm m-r"><img src="img/a4.jpg" alt="..."
                                                                      class="img-circle"></span>
                                <a href="" class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i
                                            class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>

                                <div class="clear">
                                    <div><a href="">Lauren Taylor</a></div>
                                    <small class="text-muted">about 2 minutes ago</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane tab-3 active" id="tab-3">
                    <div class="wrapper-md">
                        <div class="m-b-sm text-md">Transaction</div>
                        <ul class="list-group list-group-sm list-group-sp list-group-alt auto m-t">
                            <li class="list-group-item">
                                <span class="text-muted">Transfer to Jacob at 3:00 pm</span>
                                <span class="block text-md text-info">B 15,000.00</span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-muted">Got from Mike at 1:00 pm</span>
                                <span class="block text-md text-primary">B 23,000.00</span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-muted">Sponsored ORG at 9:00 am</span>
                                <span class="block text-md text-warning">B 3,000.00</span>
                            </li>
                            <li class="list-group-item">
                                <span class="text-muted">Send to Jacob at 8:00 am</span>
                                <span class="block text-md">B 11,000.00</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- aside right -->
            <div class="app-aside-right pos-fix no-padder w-md w-auto-xs bg-white b-l animated fadeInRight hide">
                <div class="vbox">
                    <div class="wrapper b-b b-t b-light m-b">
                        <a href="" class="pull-right text-muted text-md" ui-toggle-class="show"
                           target=".app-aside-right"><i class="icon-close"></i></a>
                        Chat
                    </div>
                    <div class="row-row">
                        <div class="cell">
                            <div class="cell-inner padder">
                                <!-- chat list -->
                                <div class="m-b">
                                    <a href="" class="pull-left thumb-xs avatar"><img src="img/a2.jpg" alt="..."></a>

                                    <div class="clear">
                                        <div class="pos-rlt wrapper-sm b b-light r m-l-sm">
                                            <span class="arrow left pull-up"></span>

                                            <p class="m-b-none">Hi John, What's up...</p>
                                        </div>
                                        <small class="text-muted m-l-sm"><i class="fa fa-ok text-success"></i> 2 minutes
                                            ago
                                        </small>
                                    </div>
                                </div>
                                <div class="m-b">
                                    <a href="" class="pull-right thumb-xs avatar"><img src="img/a3.jpg"
                                                                                       class="img-circle" alt="..."></a>

                                    <div class="clear">
                                        <div class="pos-rlt wrapper-sm bg-light r m-r-sm">
                                            <span class="arrow right pull-up arrow-light"></span>

                                            <p class="m-b-none">Lorem ipsum dolor :)</p>
                                        </div>
                                        <small class="text-muted">1 minutes ago</small>
                                    </div>
                                </div>
                                <div class="m-b">
                                    <a href="" class="pull-left thumb-xs avatar"><img src="img/a2.jpg" alt="..."></a>

                                    <div class="clear">
                                        <div class="pos-rlt wrapper-sm b b-light r m-l-sm">
                                            <span class="arrow left pull-up"></span>

                                            <p class="m-b-none">Great!</p>
                                        </div>
                                        <small class="text-muted m-l-sm"><i class="fa fa-ok text-success"></i>Just Now
                                        </small>
                                    </div>
                                </div>
                                <!-- / chat list -->
                            </div>
                        </div>
                    </div>
                    <div class="wrapper m-t b-t b-light">
                        <form class="m-b-none">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Say something">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">SEND</button>
            </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- / aside right -->

        </div>


    </div>




@endsection