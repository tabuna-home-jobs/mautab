//Функция добавления ответа во вьюху
function addNewMessage(obj){

    var strokeResponse = "<li class='list-group-item clearfix hotBlock'>";
    strokeResponse += "<span class='clear'>";
    strokeResponse += "<span>"+obj.nickname+"</span>";
    strokeResponse += "<small class='text-muted clear'>"+obj.message+"</small>";
    strokeResponse += "</span>";
    strokeResponse += "</li>";

    $("#messages").prepend(strokeResponse);
    $('.hotBlock').show('slow');


}

//Создаем подключение
var conn = new WebSocket('ws://localhost:8990/socket/admin/tikets');
//Обозначаем подключение
conn.onopen = function (e) {
    console.log('Админ вступил в беседу');
};
//Получаем сообщение с того конца провода
conn.onmessage = function (e) {
    //Парсим ответ
    var parseObj = JSON.parse(e.data);

    //Отдаем в функцию объект
    addNewMessage(parseObj);
};

//Отправляем форму
$("body").on('click','#submitTicket', function(){

    //Берем данные
    var mess = $("#answerTiket textarea[name='message']").val();
    var close = $("#answerTiket input[name='complete']:checked").val();
    var tiket_id = $("#answerTiket input[name='tikets_id']").val();

    //Обнуляем поля в форме
    $("#answerTiket textarea[name='message']").val('');
    $("#answerTiket input[name='complete']:checked").val('');

    //Формируем данные
    var data = JSON.stringify({
        "message"   : mess,
        "complete" : close,
        "tikets_id" : tiket_id
    });

    //Отправляем данные
    conn.send(data);

    return false;
});
