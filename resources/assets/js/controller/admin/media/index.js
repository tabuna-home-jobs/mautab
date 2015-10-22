//Вызываем загрузку файла
$('.upthis').click(function () {

    $("#uploadthis").click();

});
//По выбору файла отправляем форму с ним
$("#uploadthis").change(function () {

    $("#sendFile").submit();

});

//Выбор файла
$("#addFile").click(function(){

    $(".hide-item input").click();

});


$(function () {
    $('#fileupload').fileupload({
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .bar').css(
                'width',
                progress + '%'
            );
        },
        dataType: 'json',
        add: function (e, data) {

            data.context = $('.btn.start span').text('Upload')
                //.appendTo(document.body)
                .click(function () {
                    data.context = $('div.proc').text('Uploading...').replaceAll($(this));
                    data.submit();
                });
        },
        done: function (e, data) {
            alert('hey!');
            data.context.text('Upload finished.');
        }
    });
});

