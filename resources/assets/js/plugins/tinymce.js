//Визуальный редактор
$(function () {
    tinymce.init({
        theme: "modern",
        skin: 'light',
        language: 'ru',
        selector: "textarea.tinymce",
        extended_valid_elements: "img[class=img-responsive|!src|border:0|alt|title|width|height|style]",
        plugins: "image,code,link,preview,hr,media,responsivefilemanager",
        toolbar: "styleselect | fontsizeselect   | bullist numlist outdent indent | link image media  | preview code | more  ",
        menu: "false",
        statusbar: false,
        setup: function (editor) {
            editor.addButton('more', {
                text: 'Превью',
                onclick: function () {
                    editor.insertContent('<!--more-->');
                }
            });
        },

        external_filemanager_path: "/dist/filemanager/",
        filemanager_title: "Файловый менеджер",
        external_plugins: {"filemanager": "/dist/filemanager/plugin.min.js"}
    });
});
