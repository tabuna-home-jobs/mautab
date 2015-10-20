//Вызываем загрузку файла
$('.upthis').click(function () {

    $("#uploadthis").click();

});
//По выбору файла отправляем форму с ним
$("#uploadthis").change(function () {

    $("#sendFile").submit();

});


$(function () {
    $('#fileupload').fileupload({
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo(document.body);
            });
        }
    });
});

