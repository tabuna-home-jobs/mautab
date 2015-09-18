
//Отправляем форму
$("#submitTicket").click(function(){

    var mess = $("#answerTiket textarea[name='message']").val();
    var close = $("#answerTiket input[name='close']:checked").val();

    alert(close);
    return false;
});
