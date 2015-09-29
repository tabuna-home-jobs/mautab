//Функция добавления ответа во вьюху пользователя
function addNewMessage(obj){
    //Формируем дом эелемент
    var strokeResponse = "<tr class='hotBlock'>";
    strokeResponse += "<td>"+obj.tiketid+"</td>";
    strokeResponse += "<td>"+obj.title+"</td>";
    strokeResponse += "<td>considered</td>";
    strokeResponse += "<td><a href='tikets/"+obj.tiketid+"'>View</a></td>";
    strokeResponse += "</tr>";

    $("#ticketBody").prepend(strokeResponse);
    $('tr.hotBlock').show('slow');
}

//Создаем подключение
var conn = new WebSocket('ws://localhost:8990');
//Обозначаем подключение
conn.onopen = function (e) {

};

//Получаем сообщение с того конца провода
conn.onmessage = function (e) {
    //Парсим ответ
    var parseObj = JSON.parse(e.data);

    //Отдаем в функцию объект
    addNewMessage(parseObj);
};


//Обрабатываем клик по кнопке формы
$("body").on('click','#submitTicket',function(){
    var obj = $(this);
    var parentForm = obj.parent();

    //Получаем все данные отправляемого тикета
    var tiketTitle = $("input[name='title']",parentForm).val();
    var messTitle = $("textarea[name='message']",parentForm).val();

    //Обнуляем inputы
    $("input[name='title']",parentForm).val('');
    $("textarea[name='message']",parentForm).val('');

    //Формируем данные
    var mess = JSON.stringify({
        "title"   : tiketTitle,
        "message" : messTitle
    });


    //Отправляем данные
    conn.send(mess);

    return false;
});
