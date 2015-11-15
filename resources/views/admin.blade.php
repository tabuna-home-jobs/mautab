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
    <link href='http://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700,800&subset=latin,cyrillic'
          rel='stylesheet'
          type='text/css'>


    <link rel="stylesheet" href="{{asset('/build/css/app.css')}}" type="text/css"/>


</head>

<div class="app app-header-fixed app-aside-fixed">


    <header id="header" class="app-header navbar" role="menu">
        <!-- navbar header -->
        <div class="navbar-header bg-black">
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


                <li class="{{Active::route('admin.category.*')}}">
                    <a href="{{route('admin.category.index')}}">
                        <span class="hidden-sm hidden-md"><i class="fa fa-briefcase icon"></i></span>
                        <span class="visible-xs-inline">Категории</span>
                    </a>
                </li>


                <li class="{{Active::route('admin.type.*')}}">
                    <a href="{{route('admin.type.index')}}">
                        <span class="hidden-sm hidden-md"><i class="fa fa-wrench"></i></span>
                        <span class="visible-xs-inline">Типы</span>
                    </a>
                </li>


                <li class="#">
                    <a href="#">
                        <span class="hidden-sm hidden-md"><i class="fa fa-tags"></i></span>
                        <span class="visible-xs-inline">База тегов</span>
                    </a>
                </li>


                <li class="{{Active::route('admin.language.*')}}">
                    <a href="{{route('admin.language.index')}}">
                        <span class="hidden-sm hidden-md"><i class="fa fa-language"></i></span>
                        <span class="visible-xs-inline">Локализация</span>
                    </a>
                </li>


                <li class="{{Active::route('admin.roles.*')}}">
                    <a href="{{route('admin.roles.index')}}">
                        <span class="hidden-sm hidden-md"><i class="fa fa-lock"></i></span>
                        <span class="visible-xs-inline">Роли</span>
                    </a>
                </li>


                <li class="{{Active::route('admin.settings.*')}}">
                    <a href="{{route('admin.settings.index')}}">
                        <span class="hidden-sm hidden-md"><i class="fa fa-cog icon"></i></span>
                        <span class="visible-xs-inline">Настроки</span>
                    </a>
                </li>


                <li>
                    <a href="/auth/logout">
                        <span class="hidden-sm hidden-md"><i class="fa fa-sign-out"></i> </span>
                        <span class="visible-xs-inline">Выйти</span>

                    </a>
                </li>


                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="fa fa-bell fa-fw"></i>
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
                    <span class="media-body">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                                </a>
                                <a href="" class="media list-group-item">
                    <span class="media-body">
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
            </ul>
            <!-- / navbar right -->
        </div>
        <!-- / navbar collapse -->
    </header>

    <!-- aside -->
    <aside id="aside" class="app-aside hidden-xs bg-dark  dk">
        <div class="aside-wrap">
            <div class="navi-wrap">
                <!-- nav -->
                <nav ui-nav="" class="navi clearfix">
                    <!-- list -->
                    <ul class="nav">
                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span>Главное</span>
                        </li>


                        @foreach($dashboardMenu->left as $key => $item)
                            <li class="{{Active::route($item['active'])}}">
                                <a href="{{route($item['url'])}}">
                                    <i class="{{$item['icon']}}"></i>
                                    <span>{{$key}}</span>
                            </a>
                        </li>
                        @endforeach

                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span>Компоненты</span>
                        </li>


                        <li class="{{Active::route(['admin.server.*','admin.serverstats.*'])}}">
                            <a href="{{route('admin.server.index')}}">
                                <i class="fa fa-server"></i>
                                <span>Сервер</span>
                            </a>
                        </li>


                        <li class="{{Active::route('admin.package.*')}}">
                            <a href="{{route('admin.package.index')}}">
                                <i class="fa fa-credit-card text-success"></i>
                                <span>Тарифы</span>
                            </a>
                        </li>

                        <li class="{{Active::route('admin.cms.*')}}">
                            <a href="{{route('admin.cms.index')}}">
                                <i class="fa fa-wordpress icon text-primary"></i>
                                <span>Support CMS</span>
                            </a>
                        </li>

                        <li class="{{Active::route('admin.tikets.*')}}">
                            <a href="{{route('admin.tikets.index')}}">
                                <i class="fa fa-question text-info"></i>
                                <span>Тикеты</span>
                            </a>
                        </li>
                        <li class="{{Active::route('admin.media.*')}}">
                            <a href="{{route('admin.media.index')}}">
                                <i class="fa fa-picture-o text-yelllow"></i>
                                <span>Медиа</span>
                            </a>
                        </li>


                    </ul>
                    <!-- / list -->
                </nav>
                <!-- nav -->
            </div>


            <div class="app-aside-footer">

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
            <div class="alert notification alert-success text-center container ">
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


    <footer id="footer" class="app-footer" role="footer">
        <div class="wrapper b-t bg-light">
            <span class="pull-right">2.0.3 <a href="" ui-scroll="app" class="m-l-sm text-muted"><i
                            class="fa fa-long-arrow-up"></i></a></span>
            © 2015 Copyright.
        </div>
    </footer>


</div>


<script src="{{asset('/build/js/app.js')}}" type="text/javascript"></script>

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

    });


</script>
</body>
</html>
