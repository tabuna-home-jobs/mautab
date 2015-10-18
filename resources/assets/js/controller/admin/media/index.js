//Вызываем загрузку файла
$('.upthis').click(function () {

    $("#uploadthis").click();

});
//По выбору файла отправляем форму с ним
$("#uploadthis").change(function () {

    $("#sendFile").submit();

});
