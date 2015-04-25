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
        $("#delete-bd").click(function(){

        });
        $("input[name='v_database']").blur(function() {
            var currVal = $(this).val();
            var needle = "{{(!is_null(Auth::user())) ? Auth::user()->nickname : '' }}" + "_" + currVal;
            $(this).val(needle);
        });
        $("input[name='v_dbuser']").blur(function() {
            var currVal = $(this).val();
            var needle = "{{(!is_null(Auth::user())) ? Auth::user()->nickname : '' }}" + "_" + currVal;
            $(this).val(needle);
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

        allNextBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

            $(".form-group").removeClass("has-error");
            for(var i=0; i<curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.active').trigger('click');
    });
</script>







</body>
</html>
