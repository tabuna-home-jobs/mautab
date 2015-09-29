//Функция добавления ответа во вьюху
function addNewMessage(obj){

    var strokeResponse = "<li class='list-group-item clearfix hotBlock'>";
    strokeResponse += "<span class='clear'>";
    strokeResponse += "<span class='text-black'>"+obj.nickname+"</span>";
    strokeResponse += "<small class='text-muted clear'>"+obj.message+"</small>";
    strokeResponse += "</span>";
    strokeResponse += "</li>";

    $("#bodyChat").prepend(strokeResponse);
    $('.hotBlock').show('slow');

    //Скрытые формы юзера (закрытие темы)
     if(obj.complete == 1){

         var themeClose = '<div class="alert-danger alert hotBlock">';
         themeClose += 'Тема закрыта';
         themeClose += '</div>';

         $("#commentform").hide('drop',{direction:"up"},500, function(){
             $(this).remove();
             $(".mess-window").html(themeClose);
             $(".alert").show('drop',{direction:"up",easing:'easeOutBounce'},1000);
         });
     //Появление формы у юзера (открытие темы)
     }else if(obj.complete == 0){

         var formCommunicate = '<form id="commentform" class="hotBlock">';
             formCommunicate += '<div class="form-group">';
             formCommunicate += '<label>Сообщение</label>';
             formCommunicate += '<textarea name="message" cols="5" rows="5" class="form-control"></textarea>'
             formCommunicate += '</div>';
             formCommunicate += '<input type="hidden" value="'+obj.tikets_id+'" name="tikets_id">';
             formCommunicate += '<input type="hidden" name="interview" value="1">';
             formCommunicate += '<div class="col-sm-4">';
             formCommunicate += '<button class="btn btn-primary" id="subAnwerUser">Ответить</button>'
             formCommunicate += '</div>';
             formCommunicate += '</form>';

         $('div.alert').hide('drop', {direction:"up"}, 500, function(){
             $(this).remove();
             $(".mess-window").html(formCommunicate);
             $("#commentform").show('drop',{direction: "up", easing: "easeOutBounce"}, 1000);
         });
        //mess-window

     }

}

//Создаем подключение
var conn = new WebSocket('ws://localhost:8990');
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
    var mess = $("#commentform textarea[name='message']").val();
    var tiket_id = $("#commentform input[name='tikets_id']").val();
    var interview = $("#commentform input[name='interview']").val();

    //Обнуляем поля в форме
    $("#commentform textarea[name='message']").val('');


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
