<!--  FOOTER  -->
<footer class="footer col-xs-12">
  <p class="copyright">© Copyright CloudMe, все права защищены. </p>
</footer>
<!--  END OF FOOTER  -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>






<!-- Процесс регистрации-->

<script>
    $(document).ready(function () {
        //Проверка дополнительных опций в создании домена в разделе WEB


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
            var issetVal = currVal.indexOf("{{(!is_null(Auth::user())) ? Auth::user()->nickname : '' }}");
            if (issetVal == '-1') {
                var needle = "{{(!is_null(Auth::user())) ? Auth::user()->nickname : '' }}" + "_" + currVal;
                $(input).val(needle);
            }
        }

        //Функция-Генератор случайного пароля
        function randWD() {
            return Math.random().toString(36).slice(2, 2 + Math.max(1, Math.min(10, 10)));
        }

        //Добавление случайного пароля в инпут
        $(".genPass").click(function () {
            var genPas = randWD().toUpperCase();
            $(this).parent().next('input').val(genPas);
            return false;
        });
        //Добавление префикса для юзера фтп
        $(".ftp_usr").blur(function () {
            addPrefix($(this));
        });


        //Добаваление префикса для БД когда она добаляется
        $("input[name='v_database']").blur(function () {
            addPrefix($(this));
        });
        //Добаваление префикса для БД когда она добаляется
        $("input[name='v_dbuser']").blur(function() {
            addPrefix($(this));
        });

        //Анимация показа форма добавления БД
        $("#show-add-bd").click(function(){
            var obj = $("#add-shadow");
            var attrExpande = $("#show-add-bd").attr("aria-expanded");
            var heiForm = $("#add-bd");

            if(!heiForm.hasClass('collapsing')){
                if(attrExpande == 'false'){
                    $(".btn" ,obj).attr('disabled',true);
                    obj.addClass('add-opacity');
                }else{
                    $(".btn" ,obj).attr('disabled',false);
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


        //Проба
        $('form').submit(function () {
            $('body').addClass('add-opacity');
            $('#wath').addClass('circle');
            // $('body').addClass('modal-open');
        });



    });
</script>







</body>
</html>
