function delModal(name, route, id) {

    //csfr
    var csrf = $('meta[name="csrf-token"]').attr('content');

    var valueName = name;
    //Обрабатываем выходящее значение
    var key = name.replace(/\./g, '');


    //Формируем модалку
    var modalka = ' <div class="modal fade" id="Modal-' + key + '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> ';
    modalka += '<div class="modal-dialog"> ';
    modalka += '<div class="modal-content"> ';
    modalka += '<div class="modal-header"> ';
    modalka += '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
    modalka += '<span aria-hidden="true">&times;</span>';
    modalka += '</button> ';
    modalka += '<h4 class="modal-title" id="myModalLabel">Удалить ' + valueName + ' ?</h4>';
    modalka += '</div>';
    modalka += '<div class="modal-body">Вы действительно хотите удалить ' + valueName + '</div>';
    modalka += '<div class="modal-footer">';
    modalka += '<form action="' + route + '" method="post">';
    modalka += '<button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>';
    modalka += '<button type="submit" class="btn btn-danger">Да</button>';
    modalka += '<input type="hidden" name="v_domain" value="' + valueName + '"/>';
    modalka += '<input type="hidden" name="_method" value="DELETE">';
    modalka += '<input type="hidden" name="v_record_id" value="' + id + '" ><input type="hidden" name="_token" value="' + csrf + '">';
    modalka += '</form>';
    modalka += '</div>';
    modalka += '</div>';
    modalka += '</div>';
    modalka += '</div>';

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
