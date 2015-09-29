//Функция добавления ответа во вьюху
function addNewMessage(obj){

    console.log(obj);
    //Формируем дом элемент
    var strokeResponse = "<tr class='hotBlock'>";
    strokeResponse += "<td>"+obj.tiketid+"</td>";
    strokeResponse += "<td><a href='tikets/"+obj.tiketid+"'>"+obj.title+"</a></td>";
    strokeResponse += "<td>"+obj.message.substr(0,100)+"</td>";
    strokeResponse += "</tr>";

    $("#ticketBody").prepend(strokeResponse);
    $('tr.hotBlock').show('slow');

}

//Создаем подключение
var conn = new WebSocket('ws://mautab.com:8990');
//Обозначаем подключение
conn.onopen = function (e) {
    console.log('Админ подключился!!!');
};
//Получаем сообщение с того конца провода
conn.onmessage = function (e) {
    //Парсим ответ
    var parseObj = JSON.parse(e.data);

    //Отдаем в функцию объект
    addNewMessage(parseObj);
};

