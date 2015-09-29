//Функция добавления ответа во вьюху
function addNewMessage(obj){

    var strokeResponse = "<li class='list-group-item clearfix hotBlock'>";
    strokeResponse += "<span class='clear'>";
    strokeResponse += "<span>"+obj.nickname+"</span>";
    strokeResponse += "<small class='text-muted clear'>"+obj.message+"</small>";
    strokeResponse += "</span>";
    strokeResponse += "</li>";

    $("#bodyChat").prepend(strokeResponse);
    $('.hotBlock').show('slow');


     if(obj.complete == 1){

         var themeClose = '<div class="alert-danger alert hotBlock">';
         themeClose += 'Тема закрыта';
         themeClose += '</div>';

         $("#commentform").hide('1000', function(){
             $(this).remove();
             $(".panel-footer").html(themeClose);
             $(".alert").show('1000');
         });
     }

}

//Создаем подключение
var conn = new WebSocket('ws://mautab.com:8990');
//Обозначаем подключение
conn.onopen = function (e) {
    console.log('Пользователь вступил в беседу');
};
//Получаем сообщение с того конца провода
conn.onmessage = function (e) {

    //Парсим ответ
    var parseObj = JSON.parse(e.data);

    //Отдаем в функцию объект
    addNewMessage(parseObj);
};

//Отправляем форму
$("body").on('click','#subAnwerUser', function(){

    //Берем данные
    var mess = $("#commentform input[name='message']").val();
    var tiket_id = $("#commentform input[name='tikets_id']").val();
    var interview = $("#commentform input[name='interview']").val();

    //Обнуляем поля в форме
    $("#commentform input[name='message']").val('');


    //Формируем данные
    var data = JSON.stringify({
        "message"   : mess,
        "tikets_id" : tiket_id,
        "interview" : interview
    });


    //Отправляем данные
    conn.send(data);

    return false;
});
