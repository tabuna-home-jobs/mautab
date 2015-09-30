//Функция добавления ответа во вьюху
function addNewMessage(obj){

    var strokeResponse = "<li class='list-group-item clearfix hotBlock'>";
    strokeResponse += "<span class='clear'>";
    strokeResponse += "<span>"+obj.nickname+"</span>";
    strokeResponse += "<small class='text-muted clear'>"+obj.message+"</small>";
    strokeResponse += "</span>";
    strokeResponse += "</li>";

    $("#messages").prepend(strokeResponse);
    $('.hotBlock').show('slide',{direction:"up", easing: "easeOutCirc"},500);


}

//Создаем подключение
var conn = new WebSocket('ws://localhost:8990');
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

//Делаем текстовую переключалку для кнопки
$("body").on('click','input[name="complete"]', function(){
    var obj = $(this);
    var currVal = obj.val();
    var statusInterview = $(".close-title");

    if(currVal == 1){
        statusInterview.html('Закрыто');
    }else{
        statusInterview.html('Открыто');
    }
});
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
