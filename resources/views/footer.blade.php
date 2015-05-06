<!--  FOOTER  -->
<footer class="col-xs-12">
  <p class="copyright">© Copyright CloudMe, все права защищены. </p>
</footer>
<!--  END OF FOOTER  -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>







<!-- Процесс регистрации-->

<script>
    $(document).ready(function () {

        //Добаваление префикса для БД когда она добаляется
        $("input[name='v_database']").blur(function() {
            var currVal = $(this).val();
            var issetVal = currVal.indexOf("{{(!is_null(Auth::user())) ? Auth::user()->nickname : '' }}");
            if (issetVal == '-1') {
                var needle = "{{(!is_null(Auth::user())) ? Auth::user()->nickname : '' }}" + "_" + currVal;
                $(this).val(needle);
            }
        });
        //Добаваление префикса для БД когда она добаляется
        $("input[name='v_dbuser']").blur(function() {
            var currVal = $(this).val();
            var issetVal = currVal.indexOf("{{(!is_null(Auth::user())) ? Auth::user()->nickname : '' }}");
            if (issetVal == '-1') {
                var needle = "{{(!is_null(Auth::user())) ? Auth::user()->nickname : '' }}" + "_" + currVal;
                $(this).val(needle);
            }
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


    });
</script>







</body>
</html>
