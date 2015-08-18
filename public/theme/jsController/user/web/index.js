//Модалка для удаления
/**
 *
 * @param name - имя элемента которы надо удалить
 * @param route - используемый роут Например: (/hosting/web/destroy)
 * @param id - id записи с которой происходят манипуляции удаления
 *
 */
function delModal(name, route, id) {

    //csfr
    var csrf = $('meta[name="csrf-token"]').attr('content');

    var valueName = name;
    //Обрабатываем выходящее значение
    var key = name.replace('.', '');
    //Формируем модалку
    var modalka = ' <div class="modal fade" id="Modal-' + key + '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">Удалить ' + valueName + ' ?</h4></div><div class="modal-body">Вы действительно хотите удалить ' + valueName + '</div><div class="modal-footer"><form action="' + route + '" method="post"><button type="button" class="btn btn-default" data-dismiss="modal">Нет</button><button type="submit" class="btn btn-danger">Да</button><input type="hidden" name="v_domain" value="' + valueName + '"/><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="v_record_id" value="' + id + '" ><input type="hidden" name="_token" value="' + csrf + '"></form></div></div></div></div>';

    //Добавляем модалку в дом дерево
    $('footer').append(modalka);
    //Вызываем модалку
    $('#Modal-' + key).modal();
    //По зыкрытию нашей модалки удаляем её из дома
    $('#Modal-' + key).on('hidden.bs.modal', function () {
        $('#Modal-' + key).remove();
    });

    return false;
}

//Добавляем алиас в textarea
$("input[name='v_domain']").blur(function(){
    var obj = $(this);
    //Шаблон проверки домена
    var pattern = /^([0-9a-z]([0-9a-z\-])*[0-9a-z]\.)+[0-9a-z\-]{1,8}$/i;
    var currentValue = obj.val();
    if(pattern.exec(currentValue) != null){
        //Если нормальный дмоен то добавляем его в texarea
        if(currentValue.indexOf('www') != -1){
            //Если написал с www то срежим эти противные буквы
            var stripVal = currentValue.replace('www','');
            $("textarea[name='v_aliases']").text(stripVal);
        }else{
            //Иначе оставим как есть
            $("textarea[name='v_aliases']").text(currentValue);
        }
    }else{
        alert('фуфло твой домен');
    }


});
