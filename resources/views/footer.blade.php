<!-- footer -->
<footer id="footer">\
    <div class="bg-light dk">
        <div class="container">
            <div class="row padder-v m-t">
                <div class="col-xs-8">
                    <ul class="list-inline">
                        <li><a href="#">Скидки</a></li>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">API</a></li>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">Работа</a></li>
                    </ul>
                </div>
                <div class="col-xs-4 text-right">
                    Mautab &copy; 2015
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->

<!--<script src="/theme/bower_components/jquery/dist/jquery.min.js"></script>

<script src="/theme/bower_components/bootstrap/dist/js/bootstrap.js"></script>
-->

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

                    $("#ifnowrapper .alert-success").css("display","block");
                    $("#fadeBody").css('display','none');

                },
                complete: function () {
                    //Удаляем уведомление
                    setTimeout(function(){
                        $("#ifnowrapper .alert-success").slideUp('slow');
                    }, 4000);
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
            var strHtml = '<div class="ftp-groupz"><div class="form-group"><label>FTP#' + num + '<a href="#" class="del-current-ftp"><small>Удалить</small></a></label>            </div><div class="form-group"><label>Аккаунт</label><div><small>Префикс {{(!is_null(Auth::User())) ? Auth::User()->nickname : '' }}_ будет автоматически добавлен к названию аккаунта</small></div><input type="hidden" class="v-ftp-user-is-new" name="v_ftp_user[' + num + '][is_new]" value="1"/><input type="hidden" class="v-ftp-user-is-new" name="v_ftp_user[' + num + '][is_old]" value="0"/><input type="text" name="v_ftp_user[' + num + '][v_ftp_user]" class="form-control ftp_usr" value="" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$"/></div><div class="form-group"><label>Пароль / <a href="#" class="genPass">сгенерировать</a></label>            <input type="text" name="v_ftp_user[' + num + '][v_ftp_password]" id="ftppas" class="form-control" value=""/></div><div class="form-group"><label>Path</label><input type="text" name="v_ftp_user[' + num + '][v_ftp_path]" class="form-control" value=""/></div>';

            elem.before('<span class="wrapperAdddFtp">'+strHtml+'</span>');
        }

        $('body').on('click', '#addFtps', function () {
            //Получаем количество элементов FTP
            var countElems = $(".ftp-groupz").length;
            //Добавляем новый с порядковым номером +1
            clickAddFtp($(this), countElems + 1);
            $(".wrapperAdddFtp .ftp-groupz").slideDown('slow');
            return false;
        });

        //Удаление ненужного фтп
        $('body').on('click', '.del-current-ftp', function () {


            var obj = $(this);
            var rapentObj = $(obj).parent().parent().parent().parent();

            var csrf = $("input[name='_token']").val();
            var ddom = $("input[name='domain']").val();
            var ftpUser = $(".ftp_usr_namen", rapentObj).val();

            $('html, body').animate({scrollTop:0}, 'slow');

            //Включаем прелодер
            $("#fadeBody").css('display','block');

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
