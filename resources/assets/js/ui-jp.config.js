// lazyload config

var jp_config = {
    easyPieChart: ['/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js'],
    sparkline: ['/bower_components/jquery.sparkline/dist/jquery.sparkline.retina.js'],
    plot: ['/bower_components/flot/jquery.flot.js',
        '/bower_components/flot/jquery.flot.pie.js',
        '/bower_components/flot/jquery.flot.resize.js',
        '/bower_components/flot.tooltip/js/jquery.flot.tooltip.js',
        '/bower_components/flot.orderbars/js/jquery.flot.orderBars.js',
        '/bower_components/flot-spline/js/jquery.flot.spline.js'],
    moment: ['/bower_components/moment/moment.js'],
    screenfull: ['/bower_components/screenfull/dist/screenfull.min.js'],
    slimScroll: ['/bower_components/slimscroll/jquery.slimscroll.min.js'],
    sortable: ['/bower_components/html5sortable/jquery.sortable.js'],
    nestable: ['/bower_components/nestable/jquery.nestable.js',
        '/bower_components/nestable/jquery.nestable.css'],
    filestyle: ['/bower_components/bootstrap-filestyle/src/bootstrap-filestyle.js'],
    slider: ['/bower_components/bootstrap-slider/bootstrap-slider.js',
        '/bower_components/bootstrap-slider/bootstrap-slider.css'],


    chosen: ['/bower_components/chosen/chosen.jquery.min.js',
        '/build/js/plugins/chosen/bootstrap-chosen.css',
        '/build/js/plugins/chosen/chosen.js'],


    TouchSpin: ['/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js',
        '/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css'],
    wysiwyg: ['/bower_components/bootstrap-wysiwyg/bootstrap-wysiwyg.js',
        '/bower_components/bootstrap-wysiwyg/external/jquery.hotkeys.js'],
    dataTable: ['/bower_components/datatables/media/js/jquery.dataTables.min.js',
        '/bower_components/plugins/integration/bootstrap/3/dataTables.bootstrap.js',
        '/bower_components/plugins/integration/bootstrap/3/dataTables.bootstrap.css'],
    vectorMap: ['/bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.min.js',
        '/bower_components/bower-jvectormap/jquery-jvectormap-world-mill-en.js',
        '/bower_components/bower-jvectormap/jquery-jvectormap-us-aea-en.js',
        '/bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.css'],
    footable: ['/bower_components/footable/dist/footable.all.min.js',
        '/bower_components/footable/css/footable.core.css'],
    fullcalendar: ['/bower_components/moment/moment.js',
        '/bower_components/fullcalendar/dist/fullcalendar.min.js',
        '/bower_components/fullcalendar/dist/fullcalendar.css',
        '/bower_components/fullcalendar/dist/fullcalendar.theme.css'],
    daterangepicker: ['/bower_components/moment/moment.js',
        '/bower_components/bootstrap-daterangepicker/daterangepicker.js',
        '/bower_components/bootstrap-daterangepicker/daterangepicker-bs3.css'],
    tagsinput: ['/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js',
        '/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'],

    prism: ['/bower_components/prism/prism.js'],

    tinymce: ['/bower_components/tinymce/tinymce.min.js',
        '/build/js/plugins/tinymce/tinymce.js'],


    dropzone:[
        '/bower_components/dropzone/dist/min/dropzone.min.css',
        '/bower_components/dropzone/dist/min/basic.min.css',
        '/bower_components/dropzone/dist/min/dropzone.min.js',
        '/build/js/plugins/dropzone/dropzone.js'
    ],

    datetimepicker:[
        '/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
        '/bower_components/moment/min/moment.min.js',
        '/bower_components/moment/min/locales.min.js',
        '/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
        '/build/js/plugins/datetimepicker/datetimepicker.js'
    ],


    fileuploadz: [
        '/bower_components/blueimp-file-upload/js/vendor/jquery.ui.widget.js',
        '/bower_components/blueimp-tmpl/js/tmpl.min.js',
        '/bower_components/blueimp-load-image/js/load-image.all.min.js',
        '/bower_components/blueimp-canvas-to-blob/js/canvas-to-blob.min.js',
        '/bower_components/blueimp-file-upload/js/jquery.fileupload.js',
        '/bower_components/blueimp-file-upload/js/cors/jquery.postmessage-transport.js',
        '/bower_components/blueimp-file-upload/js/jquery.iframe-transport.js',
        '/bower_components/blueimp-file-upload/js/jquery.fileupload-process.js',
        '/bower_components/blueimp-file-upload/js/jquery.fileupload-image.js',
        '/bower_components/blueimp-file-upload/js/jquery.fileupload-audio.js',
        '/bower_components/blueimp-file-upload/js/jquery.fileupload-video.js',
        '/bower_components/blueimp-file-upload/js/jquery.fileupload-validate.js',
        '/bower_components/blueimp-file-upload/js/jquery.fileupload-ui.js',
        '/bower_components/blueimp-file-upload/js/cors/jquery.xdr-transport.js',
        '/bower_components/blueimp-file-upload/css/jquery.fileupload.css',
        '/bower_components/blueimp-file-upload/css/jquery.fileupload-ui.css',
        '/bower_components/blueimp-file-upload/css/jquery.fileupload-noscript.css',
        '/bower_components/blueimp-file-upload/css/jquery.fileupload-ui-noscript.css',
        '/build/js/controller/admin/media/index.js'],


    webAdd: ['/build/js/controller/user/web/index.js'],
    tiketSocketConn: ['/build/js/controller/user/tikets/index.js'],
    adminTiketIndex: ['/build/js/controller/admin/tikets/index.js'],
    adminTiketView: ['/build/js/controller/admin/tikets/viewer.js',
        '/bower_components/jquery-ui/jquery-ui.js'],
    userTiketView: ['/build/js/controller/user/tikets/viewer.js',
        '/bower_components/jquery-ui/jquery-ui.js'],

    wizard: ['/build/js/controller/components/wizard.js'],
    dnsIndex: ['/build/js/controller/user/dns/index.js'],
    ibdexBd: ['/build/js/controller/user/bd/index.js'],
    ibdexMedia: ['/build/js/controller/admin/media/index.js']



};
