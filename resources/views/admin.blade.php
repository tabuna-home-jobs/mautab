<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MauTab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>


    <link rel="stylesheet" href="/theme/bower_components/animate.css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="/theme/bower_components/font-awesome/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="{{asset('/build/css/app.css')}}" type="text/css"/>


</head>

<div class="app app-header-fixed  app-aside-fixed ">


    <header id="header" class="app-header navbar" role="menu">
        <!-- navbar header -->
        <div class="navbar-header bg-dark">
            <button class="pull-right visible-xs dk" ui-toggle="show" target=".navbar-collapse">
                <i class="glyphicon glyphicon-cog"></i>
            </button>
            <button class="pull-right visible-xs" ui-toggle="off-screen" target=".app-aside" ui-scroll="app">
                <i class="glyphicon glyphicon-align-justify"></i>
            </button>
            <!-- brand -->
            <a href="/" class="navbar-brand text-lt">
                <i class="fa fa-server"></i>
                <span class="hidden-folded m-l-xs">Mautab</span>
            </a>
            <!-- / brand -->
        </div>
        <!-- / navbar header -->

        <!-- navbar collapse -->
        <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">
            <!-- buttons -->
            <div class="nav navbar-nav hidden-xs">
                <a href="#" class="btn no-shadow navbar-btn" ui-toggle="app-aside-folded" target=".app">
                    <i class="fa fa-dedent fa-fw text"></i>
                    <i class="fa fa-indent fa-fw text-active"></i>
                </a>
                <a href="#" class="btn no-shadow navbar-btn" ui-toggle="show" target="#aside-user">
                    <i class="fa fa-users fa-fw"></i>
                </a>
            </div>
            <!-- / buttons -->

            <!-- link and dropdown -->
            <ul class="nav navbar-nav hidden-sm">
                <li class="dropdown pos-stc">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <span>Mega</span>
                        <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu wrapper w-full bg-white">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="m-l-xs m-t-xs m-b-xs font-bold">Pages <span
                                            class="badge badge-sm bg-success">10</span></div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <ul class="list-unstyled l-h-2x">
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Profile</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Post</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Search</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Invoice</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6">
                                        <ul class="list-unstyled l-h-2x">
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Price</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Lock
                                                    screen</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign
                                                    in</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign
                                                    up</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 b-l b-light">
                                <div class="m-l-xs m-t-xs m-b-xs font-bold">UI Kits <span
                                            class="label label-sm bg-primary">12</span></div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <ul class="list-unstyled l-h-2x">
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Buttons</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Icons
                                                    <span class="badge badge-sm bg-warning">1000+</span></a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Grid</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Widgets</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6">
                                        <ul class="list-unstyled l-h-2x">
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Bootstap</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sortable</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Portlet</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Timeline</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 b-l b-light">
                                <div class="m-l-xs m-t-xs m-b-sm font-bold">Analysis</div>
                                <div class="text-center">
                                    <div class="inline">
                                        <div ui-jq="easyPieChart" ui-options="{
                          percent: 65,
                          lineWidth: 50,
                          trackColor: '#e8eff0',
                          barColor: '#23b7e5',
                          scaleColor: false,
                          size: 100,
                          rotate: 90,
                          lineCap: 'butt',
                          animate: 2000
                        }" class="easyPieChart" style="width: 100px; height: 100px; line-height: 100px;">
                                            <canvas width="100" height="100"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
                        <span translate="header.navbar.new.NEW">New</span> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#" translate="header.navbar.new.PROJECT">Projects</a></li>
                        <li>
                            <a href="">
                                <span class="badge bg-info pull-right">5</span>
                                <span translate="header.navbar.new.TASK">Task</span>
                            </a>
                        </li>
                        <li><a href="" translate="header.navbar.new.USER">User</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="">
                                <span class="badge bg-danger pull-right">4</span>
                                <span translate="header.navbar.new.EMAIL">Email</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- / link and dropdown -->

            <!-- search form -->
            <form class="navbar-form navbar-form-sm navbar-left shift" ui-shift="prependTo"
                  data-target=".navbar-collapse" role="search" ng-controller="TypeaheadDemoCtrl">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" ng-model="selected"
                               typeahead="state for state in states | filter:$viewValue | limitTo:8"
                               class="form-control input-sm bg-light no-border rounded padder"
                               placeholder="Search projects...">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light rounded"><i class="fa fa-search"></i></button>
              </span>
                    </div>
                </div>
            </form>
            <!-- / search form -->

            <!-- nabar right -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="fa fa-send fa-fw"></i>
                        <span class="visible-xs-inline">Notifications</span>
                        <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
                    </a>
                    <!-- dropdown -->
                    <div class="dropdown-menu w-xl animated fadeInUp">
                        <div class="panel bg-white">
                            <div class="panel-heading b-light bg-light">
                                <strong>You have <span>2</span> notifications</strong>
                            </div>
                            <div class="list-group">
                                <a href="" class="media list-group-item">
                    <span class="pull-left thumb-sm">
                      <img src="/images/testimonials/testimonial8.jpg" alt="..." class="img-circle">
                    </span>
                    <span class="media-body block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                                </a>
                                <a href="" class="media list-group-item">
                    <span class="media-body block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                                </a>
                            </div>
                            <div class="panel-footer text-sm">
                                <a href="" class="pull-right"><i class="fa fa-cog"></i></a>
                                <a href="#notes" data-toggle="class:show animated fadeInRight">See all the
                                    notifications</a>
                            </div>
                        </div>
                    </div>
                    <!-- / dropdown -->
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle clear">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="/images/testimonials/testimonial8.jpg" alt="...">
                <i class="on md b-white bottom"></i>
              </span>
                        <span class="hidden-sm hidden-md">{{Auth::user()->first_name}}</span> <b class="caret"></b>
                    </a>
                    <!-- dropdown -->
                    <ul class="dropdown-menu animated fadeInRight w">
                        <li class="wrapper b-b m-b-sm bg-light m-t-n-xs">
                            <div>
                                <p>300mb of 500mb used</p>
                            </div>
                            <div class="progress progress-xs m-b-none dker">
                                <div class="progress-bar progress-bar-info" data-toggle="tooltip"
                                     data-original-title="50%" style="width: 50%"></div>
                            </div>
                        </li>
                        <li>
                            <a href="">
                                <span class="badge bg-danger pull-right">30%</span>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li>
                            <a ui-sref="app.page.profile">Profile</a>
                        </li>
                        <li>
                            <a ui-sref="app.docs">
                                <span class="label bg-info pull-right">new</span>
                                Help
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/auth/logout">Выйти</a>
                        </li>
                    </ul>
                    <!-- / dropdown -->
                </li>
            </ul>
            <!-- / navbar right -->
        </div>
        <!-- / navbar collapse -->
    </header>

    <!-- aside -->
    <aside id="aside" class="app-aside hidden-xs bg-dark">
        <div class="aside-wrap">
            <div class="navi-wrap">
                <!-- user -->
                <div class="clearfix hidden-xs text-center hide" id="aside-user">
                    <div class="dropdown wrapper">
                        <a href="app.page.profile">
                <span class="thumb-lg w-auto-folded avatar m-t-sm">
                  <img src="img/a0.jpg" class="img-full" alt="...">
                </span>
                        </a>
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt">John.Smith</strong>
                    <b class="caret"></b>
                  </span>
                  <span class="text-muted text-xs block">Art Director</span>
                </span>
                        </a>
                        <!-- dropdown -->
                        <ul class="dropdown-menu animated fadeInRight w hidden-folded">
                            <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
                                <span class="arrow top hidden-folded arrow-info"></span>

                                <div>
                                    <p>300mb of 500mb used</p>
                                </div>
                                <div class="progress progress-xs m-b-none dker">
                                    <div class="progress-bar bg-white" data-toggle="tooltip" data-original-title="50%"
                                         style="width: 50%"></div>
                                </div>
                            </li>
                            <li>
                                <a href>Settings</a>
                            </li>
                            <li>
                                <a href="page_profile.html">Profile</a>
                            </li>
                            <li>
                                <a href>
                                    <span class="badge bg-danger pull-right">3</span>
                                    Notifications
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="page_signin.html">Logout</a>
                            </li>
                        </ul>
                        <!-- / dropdown -->
                    </div>
                    <div class="line dk hidden-folded"></div>
                </div>
                <!-- / user -->


                <!-- nav -->
                <nav ui-nav class="navi clearfix">

                    <ul class="nav">


                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span>Главное</span>
                        </li>


                        <li class="{{Active::route('admin..*')}}">
                            <a href="{{route('admin..index')}}">
                                <i class="fa fa-line-chart text-primary-dker"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>


                        <li class="{{Active::route('admin.users.*')}}">
                            <a href="{{route('admin.users.index')}}">
                                <i class="fa fa-users"></i>
                                <span>Пользователи</span>
                            </a>
                        </li>


                        <li class="line dk"></li>

                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span>Хостинг</span>
                        </li>


                        <li class="{{Active::route(['admin.server.*','admin.serverstats.*'])}}">
                            <a href="{{route('admin.server.index')}}">
                                <i class="fa fa-server"></i>
                                <span>Сервер</span>
                            </a>
                        </li>


                        <li class="{{Active::route('admin.package.*')}}">
                            <a href="{{route('admin.package.index')}}">
                                <i class="fa fa-cubes text-success"></i>
                                <span>Тарифы</span>
                            </a>
                        </li>

                        <li class="{{Active::route('admin.cms.*')}}">
                            <a href="{{route('admin.cms.index')}}">
                                <i class="fa fa-wordpress icon text-primary"></i>
                                <span>Support CMS</span>
                            </a>
                        </li>


                        <li class="line dk"></li>

                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span>Компоненты</span>
                        </li>
                        <li>
                            <a href="#" class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                                <i class="glyphicon glyphicon-th"></i>
                                <span>Контент</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                <li class="nav-sub-header">
                                    <a href="">
                                        <span>Контент</span>
                                    </a>
                                </li>
                                <li class="{{Active::route('admin.pages.*')}}">
                                    <a href="{{route('admin.pages.index')}}">
                                        <span>Страницы</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layout_fullwidth.html">
                                        <span>Full width</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layout_boxed.html">
                                        <span>Boxed layout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="mail.html">
                                <i class="glyphicon glyphicon-envelope icon"></i>
                                <span>Email рассылка</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.tikets.index')}}">
                                <i class="fa fa-question text-info"></i>
                                <span>Тикеты</span>
                            </a>
                        </li>


                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span>Navigation</span>
                        </li>
                        <li>
                            <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                                <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
                                <span class="font-bold">Dashboard</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                <li class="nav-sub-header">
                                    <a href>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        <span>Dashboard v1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard.html">
                                        <b class="label bg-info pull-right">N</b>
                                        <span>Dashboard v2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="mail.html">
                                <b class="badge bg-info pull-right">9</b>
                                <i class="glyphicon glyphicon-envelope icon text-info-lter"></i>
                                <span class="font-bold">Email</span>
                            </a>
                        </li>
                        <li class="line dk"></li>

                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span>Components</span>
                        </li>
                        <li>
                            <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                                <b class="badge bg-info pull-right">3</b>
                                <i class="glyphicon glyphicon-th"></i>
                                <span>Layout</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                <li class="nav-sub-header">
                                    <a href>
                                        <span>Layout</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layout_app.html">
                                        <span>Application</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layout_fullwidth.html">
                                        <span>Full width</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layout_boxed.html">
                                        <span>Boxed layout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                                <i class="glyphicon glyphicon-briefcase icon"></i>
                                <span>UI Kits</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                <li class="nav-sub-header">
                                    <a href>
                                        <span>UI Kits</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_button.html">
                                        <span>Buttons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_icon.html">
                                        <b class="badge bg-info pull-right">3</b>
                                        <span>Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_grid.html">
                                        <span>Grid</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_widget.html">
                                        <b class="badge bg-success pull-right">13</b>
                                        <span>Widgets</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_sortable.html">
                                        <span>Sortable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_portlet.html">
                                        <span>Portlet</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_timeline.html">
                                        <span>Timeline</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_jvectormap.html">
                                        <span>Vector Map</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                                <b class="label bg-primary pull-right">2</b>
                                <i class="glyphicon glyphicon-list"></i>
                                <span>Table</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                <li class="nav-sub-header">
                                    <a href>
                                        <span>Table</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="table_static.html">
                                        <span>Table static</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="table_datatable.html">
                                        <span>Datatable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="table_footable.html">
                                        <span>Footable</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                                <i class="glyphicon glyphicon-edit"></i>
                                <span>Form</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                <li class="nav-sub-header">
                                    <a href>
                                        <span>Form</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form_element.html">
                                        <span>Form elements</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="ui_chart.html">
                                <i class="glyphicon glyphicon-signal"></i>
                                <span>Chart</span>
                            </a>
                        </li>
                        <li>
                            <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                                <i class="glyphicon glyphicon-file icon"></i>
                                <span>Pages</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                <li class="nav-sub-header">
                                    <a href>
                                        <span>Pages</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_profile.html">
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_post.html">
                                        <span>Post</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_search.html">
                                        <span>Search</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_invoice.html">
                                        <span>Invoice</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_price.html">
                                        <span>Price</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_lockme.html">
                                        <span>Lock screen</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_signin.html">
                                        <span>Signin</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_signup.html">
                                        <span>Signup</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_forgotpwd.html">
                                        <span>Forgot password</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_404.html">
                                        <span>404</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="line dk hidden-folded"></li>

                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span>Your Stuff</span>
                        </li>
                        <li>
                            <a href="page_profile.html">
                                <i class="icon-user icon text-success-lter"></i>
                                <b class="badge bg-success pull-right">30%</b>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href>
                                <i class="icon-question icon"></i>
                                <span>Documents</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- nav -->

                <!-- aside footer -->
                <div class="wrapper m-t">
                    <div class="text-center-folded">
                        <span class="pull-right pull-none-folded">60%</span>
                        <span class="hidden-folded">Milestone</span>
                    </div>
                    <div class="progress progress-xxs m-t-sm dk">
                        <div class="progress-bar progress-bar-info" style="width: 60%;">
                        </div>
                    </div>
                    <div class="text-center-folded">
                        <span class="pull-right pull-none-folded">35%</span>
                        <span class="hidden-folded">Release</span>
                    </div>
                    <div class="progress progress-xxs m-t-sm dk">
                        <div class="progress-bar progress-bar-primary" style="width: 35%;">
                        </div>
                    </div>
                </div>
                <!-- / aside footer -->
            </div>
        </div>
    </aside>
    <!-- / aside -->


    <!-- content -->
    <div id="content" class="app-content" role="main">

        @if (Session::has('good'))
            <div class="alert notification alert-success text-center container">
                <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span
                            aria-hidden="true">×</span></button>
                {{Session::get('good')}}
            </div>
        @endif
        @if (Session::has('danger'))
            <div class="alert notification alert-danger text-center container">
                <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span
                            aria-hidden="true">×</span></button>
                {{Session::get('danger')}}
            </div>
        @endif
        @if (count($errors) > 0)
            <div class="alert notification alert-danger container">
                <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span
                            aria-hidden="true">×</span></button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif




        @yield('content')

    </div>
    <!-- /content -->
</div>


<footer id="footer" class="app-footer" role="footer">
    <div class="wrapper b-t bg-light">
        <span class="pull-right">2.0.1 <a href="" ui-scroll="app" class="m-l-sm text-muted"><i
                        class="fa fa-long-arrow-up"></i></a></span>
        © 2015 Copyright.
    </div>
</footer>


<script src="{{asset('/build/js/app.js')}}" type="text/javascript"></script>


<!--  TinyMCE -->
<script src="{{asset('/dist/plugins/tinymce/tinymce.min.js')}}" type="text/javascript"></script>

<!-- Процесс регистрации-->

<script type="text/javascript">
    $(document).ready(function () {

        //Выбор всех чекбоксов в группах
        $('#check-all-group').click(function () {
            if (this.checked) {
                $('.permissGroup input:checkbox').each(function () {
                    this.checked = true;
                });
            } else {
                $('.permissGroup input:checkbox').each(function () {
                    this.checked = false;
                });
            }
        });

        //Выбор всех чекбоксов в правах
        $('#check-all').click(function () {
            if (this.checked) {
                $('.premissionCheckbox input:checkbox').each(function () {
                    this.checked = true;
                });
            } else {
                $('.premissionCheckbox input:checkbox').each(function () {
                    this.checked = false;
                });
            }
        });


        //Удаление фтп
        function deleteFtp(csrf, ddom, ftpUser) {

            $.ajax({
                url: '/ftp/destroy',
                type: 'DELETE',
                data: {domain: ddom, ftpUser: ftpUser},
                beforeSend: function (request) {
                    request.setRequestHeader('X-CSRF-Token', csrf);
                    $('body').addClass('add-opacity');
                    $('#wath').addClass('load');
                },
                success: function (res) {
                    alert('Удаление прошло успешно');
                },
                complete: function () {
                    $('body').removeClass('add-opacity');
                    $('#wath').removeClass('load');
                },
                error: function () {
                    alert('Ошибка при удалении');
                }
            });
        }

        //Добавить алиас после ввода домена
        /*
         $('input[name="v_domain"]').blur(function(){
         var currVal = $(this).val();
         var checkSimbl = currVal.indexOf(".") + 1;
         if(checkSimbl != 0){
         var arrVal = currVal.split(".");

         var domain = arrVal[1];


         var correctDomain = "www." + domain;
         (arrVal[2]) ? correctDomain += "." + arrVal[2] : correctDomain;
         $("textarea[name='v_aliases']").val(correctDomain);
         }else{
         var correctDomain = "www." + currVal;
         $("textarea[name='v_aliases']").val(correctDomain);
         }
         });*/

        //Функция добавления FTP
        function clickAddFtp(elem, num) {
            //Форма нового FTP
            var strHtml = '<div class="ftp-groupz"><div class="form-group"><label>FTP#' + num + '<a href="#" class="del-current-ftp"><small>Удалить</small></a></label>            </div><div class="form-group"><label>Аккаунт</label><div><small>Префикс {{(!is_null(Auth::User())) ? Auth::User()->nickname : '' }}_ будет автоматически добавлен к названию аккаунта</small></div><input type="hidden" class="v-ftp-user-is-new" name="v_ftp_user[' + num + '][is_new]" value="1"/><input type="hidden" class="v-ftp-user-is-new" name="v_ftp_user[' + num + '][is_old]" value="0"/><input type="text" name="v_ftp_user[' + num + '][v_ftp_user]" class="form-control ftp_usr" value="" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$"/></div><div class="form-group"><label>Пароль / <a href="#" class="genPass">сгенерировать</a></label>            <input type="text" name="v_ftp_user[' + num + '][v_ftp_password]" id="ftppas" class="form-control" value=""/></div><div class="form-group"><label>Path</label><input type="text" name="v_ftp_user[' + num + '][v_ftp_path]" class="form-control" value=""/></div>            <div class="form-group"><label>Отправить данные FTP аккаунта по адресу</label><input type="text" name="v_ftp_user[' + num + '][v_ftp_email]" class="form-control" value=""/></div</div>';

            elem.before(strHtml);
        }

        $('body').on('click', '#addFtps', function () {
            //Получаем количество элементов FTP
            var countElems = $(".ftp-groupz").length;
            //Добавляем новый с порядковым номером +1
            clickAddFtp($(this), countElems + 1);
            return false;
        });

        //Удаление ненужного фтп
        $('body').on('click', '.del-current-ftp', function () {


            var obj = $(this);
            var rapentObj = $(obj).parent().parent().parent().parent();

            var csrf = $("input[name='_token']").val();
            var ddom = $("input[name='domain']").val();
            var ftpUser = $(".ftp_usr_namen", rapentObj).val();


            deleteFtp(csrf, ddom, ftpUser);

            rapentObj.empty();
            return false;
        });


        //Проверка нужен ли дополнительный фтп
        $('input[name="v_ftp"]').change(function () {
            if ($(this).prop("checked")) {
                $(".add-ftp").slideDown(500, function () {
                    $('input', this).attr('disabled', false);
                });
            } else {
                $(".add-ftp").slideUp(500, function () {
                    $('input', this).attr('disabled', true);
                });
            }
        });

        //Проверка нужна ли поддержка nginx
        $('input[name="v_proxy"]').change(function () {
            //Если чекед то показываем текстарею
            if ($(this).prop("checked")) {
                $(".supp-niginx").slideDown(300, function () {
                    $(' textarea', this).attr('disabled', false);
                });
            } else {
                $(".supp-niginx").slideUp(300, function () {
                    $(' textarea', this).attr('disabled', true);
                });
            }
        });
        //Функция добавления префикса текущего юзера
        function addPrefix(input) {
            var currVal = $(input).val();
            var issetVal = currVal.indexOf("{{(!is_null(Auth::User())) ? Auth::User()->nickname : '' }}");
            if (issetVal == '-1') {
                var needle = "{{(!is_null(Auth::User())) ? Auth::User()->nickname : '' }}" + "_" + currVal;
                $(input).val(needle);
            }
        }

        //Функция-Генератор случайного пароля
        function randWD() {
            return Math.random().toString(36).slice(2, 2 + Math.max(1, Math.min(10, 10)));
        }

        //Добавление случайного пароля в инпут
        $('body').on('click', '.genPass', function () {
            var genPas = randWD().toUpperCase();
            $(this).parent().next('input').val(genPas);
            return false;
        });
        //Добавление префикса для юзера фтп
        $('body').on('blur', '.ftp_usr', function () {
            addPrefix($(this));
        });


        //Добаваление префикса для БД когда она добаляется
        $("input[name='v_database']").blur(function () {
            addPrefix($(this));
        });
        //Добаваление префикса для БД когда она добаляется
        $("input[name='v_dbuser']").blur(function () {
            addPrefix($(this));
        });

        //Анимация показа форма добавления БД
        $("#show-add-bd").click(function () {
            var obj = $("#add-shadow");
            var attrExpande = $("#show-add-bd").attr("aria-expanded");
            var heiForm = $("#add-bd");

            if (!heiForm.hasClass('collapsing')) {
                if (attrExpande == 'false') {
                    $(".btn", obj).attr('disabled', true);
                    obj.addClass('add-opacity');
                } else {
                    $(".btn", obj).attr('disabled', false);
                    obj.removeClass('add-opacity');
                }
            }
        });

        var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                    $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('active').addClass('btn-default');
                $item.addClass('active');
                allWells.hide();
                $target.show();
                //$target.find('input:eq(0)').focus();
            }
        });


        //Проба загрузки
        $('form').submit(function () {
            $('body').addClass('add-opacity');
            $('#wath').addClass('load');
        });


        // Для wysing редактора

        //Визуальный редактор
        $(function () {
            tinymce.init({
                theme: "modern",
                skin: 'light',
                language: 'ru',
                selector: "textarea.textareaedit",
                extended_valid_elements: "img[class=img-responsive|!src|border:0|alt|title|width|height|style]",
                plugins: "image,code,link,preview,hr,media,responsivefilemanager",
                toolbar: "styleselect | fontsizeselect   | bullist numlist outdent indent | link image media  | preview code | more  ",
                menu: "false",
                statusbar: false,
                setup: function (editor) {
                    editor.addButton('more', {
                        text: 'Превью',
                        onclick: function () {
                            editor.insertContent('<!--more-->');
                        }
                    });
                },

                external_filemanager_path: "/dist/filemanager/",
                filemanager_title: "Файловый менеджер",
                external_plugins: {"filemanager": "/dist/filemanager/plugin.min.js"}
            });
        });
    });


</script>
</body>
</html>
