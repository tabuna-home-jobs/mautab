//Функция добавления ответа во вьюху
function addNewMessage(obj) {

    var strokeResponse = "<li class='list-group-item clearfix hotBlock'>";
    strokeResponse += "<span class='clear'>";
    strokeResponse += "<span class='text-black'>" + obj.nickname + "</span>";
    strokeResponse += "<small class='text-muted clear'>" + obj.message + "</small>";
    strokeResponse += "</span>";
    strokeResponse += "</li>";

    $("#bodyChat").prepend(strokeResponse);
    $('.hotBlock').show('drop', {direction: "up", easing: "easeInOutQuint"}, 500);


    //Скрытые формы юзера (закрытие темы)
    if (obj.complete == 1) {

        var themeClose = '<div class="alert-danger alert hotBlock hotalert closeTheme">';
        themeClose += 'Тема закрыта';
        themeClose += '</div>';

        $("#commentform").hide('drop', {direction: "left", easing: "easeInBack"}, 500, function () {
            $(this).remove();
            $(".mess-window").html(themeClose);
            $(".closeTheme").show('drop', {direction: "right", easing: "easeInOutBack"}, 1000);
        });
        //Появление формы у юзера (открытие темы)
    } else if (obj.complete == 0) {


        //Проверяем есть ли такая форма и если есть то ненадо добавлять эту
        if (!$("#commentform").length > 0) {
            var formCommunicate = '<form id="commentform" class="hotBlock">';
            formCommunicate += '<div class="input-group">';
            formCommunicate += '<input name="message" type="text" placeholder="Сообщение" class="form-control input-sm btn-rounded">';
            formCommunicate += '<span class="input-group-btn">';
            formCommunicate += '<button class="btn btn-default btn-sm btn-rounded" id="subAnwerUser">'
            formCommunicate += '<i class="fa fa-paper-plane-o"></i>';
            formCommunicate += '</button>';
            formCommunicate += '</span>';
            formCommunicate += '</div>';
            formCommunicate += '<input type="hidden" name="interview" value="1">';
            formCommunicate += '<input type="hidden" value="' + obj.tikets_id + '" name="tikets_id">';
            formCommunicate += '</form>';


            $('.closeTheme').hide('drop', {direction: "left", easing: "easeInBack"}, 500, function () {
                $(this).remove();
                $(".mess-window").html(formCommunicate);
                $("#commentform").show('drop', {direction: "right", easing: "easeInOutBack"}, 1000);
            });
            //mess-window
        }

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
$("body").on('click', '#subAnwerUser', function () {

    //Берем данные
    var mess = $("#commentform input[name='message']").val();
    var tiket_id = $("#commentform input[name='tikets_id']").val();
    var interview = $("#commentform input[name='interview']").val();


    if (mess.length < 3) {
        $(".errormess").show('drop', {direction: "up", easing: "easeOutCirc"}, 1000, function () {
            $(this).addClass('in');
        });
        return false;
    } else {

        //Обнуляем поля в форме
        $("#commentform input[name='message']").val('');

        //Формируем данные
        var data = JSON.stringify({
            "message": mess,
            "tikets_id": tiket_id,
            "interview": interview
        });

        //Отправляем данные
        conn.send(data);

        return false;
    }
});
$("#cloz").click(function () {
    $('.errormess').hide('drop', {direction: "up"}, 1000, function () {
        $(this).removeClass('in');
    });
});

