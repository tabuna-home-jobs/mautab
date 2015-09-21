var uiLoad = uiLoad || {};

(function ($, $document, uiLoad) {
    "use strict";

    var loaded = [],
        promise = false,
        deferred = $.Deferred();

    /**
     * Chain loads the given sources
     * @param srcs array, script or css
     * @returns {*} Promise that will be resolved once the sources has been loaded.
     */
    uiLoad.load = function (srcs) {
        srcs = $.isArray(srcs) ? srcs : srcs.split(/\s+/);
        if (!promise) {
            promise = deferred.promise();
        }

        $.each(srcs, function (index, src) {
            promise = promise.then(function () {
                return src.indexOf('.css') >= 0 ? loadCSS(src) : loadScript(src);
            });
        });
        deferred.resolve();
        return promise;
    };

    /**
     * Dynamically loads the given script
     * @param src The url of the script to load dynamically
     * @returns {*} Promise that will be resolved once the script has been loaded.
     */
    var loadScript = function (src) {
        if (loaded[src]) return loaded[src].promise();

        var deferred = $.Deferred();
        var script = $document.createElement('script');
        script.src = src;
        script.onload = function (e) {
            deferred.resolve(e);
        };
        script.onerror = function (e) {
            deferred.reject(e);
        };
        $document.body.appendChild(script);
        loaded[src] = deferred;

        return deferred.promise();
    };

    /**
     * Dynamically loads the given CSS file
     * @param href The url of the CSS to load dynamically
     * @returns {*} Promise that will be resolved once the CSS file has been loaded.
     */
    var loadCSS = function (href) {
        if (loaded[href]) return loaded[href].promise();

        var deferred = $.Deferred();
        var style = $document.createElement('link');
        style.rel = 'stylesheet';
        style.type = 'text/css';
        style.href = href;
        style.onload = function (e) {
            deferred.resolve(e);
        };
        style.onerror = function (e) {
            deferred.reject(e);
        };
        $document.head.appendChild(style);
        loaded[href] = deferred;

        return deferred.promise();
    }

})(jQuery, document, uiLoad);

// lazyload config

var jp_config = {
    easyPieChart: ['/theme/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js'],
    sparkline: ['/theme/bower_components/jquery.sparkline/dist/jquery.sparkline.retina.js'],
    plot: ['/theme/bower_components/flot/jquery.flot.js',
        '/theme/bower_components/flot/jquery.flot.pie.js',
        '/theme/bower_components/flot/jquery.flot.resize.js',
        '/theme/bower_components/flot.tooltip/js/jquery.flot.tooltip.js',
        '/theme/bower_components/flot.orderbars/js/jquery.flot.orderBars.js',
        '/theme/bower_components/flot-spline/js/jquery.flot.spline.js'],
    moment: ['/theme/bower_components/moment/moment.js'],
    screenfull: ['/theme/bower_components/screenfull/dist/screenfull.min.js'],
    slimScroll: ['/theme/bower_components/slimscroll/jquery.slimscroll.min.js'],
    sortable: ['/theme/bower_components/html5sortable/jquery.sortable.js'],
    nestable: ['/theme/bower_components/nestable/jquery.nestable.js',
        '/theme/bower_components/nestable/jquery.nestable.css'],
    filestyle: ['/theme/bower_components/bootstrap-filestyle/src/bootstrap-filestyle.js'],
    slider: ['/theme/bower_components/bootstrap-slider/bootstrap-slider.js',
        '/theme/bower_components/bootstrap-slider/bootstrap-slider.css'],
    chosen: ['/theme/bower_components/chosen/chosen.jquery.min.js',
        '/theme/bower_components/bootstrap-chosen/bootstrap-chosen.css'],
    TouchSpin: ['/theme/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js',
        '/theme/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css'],
    wysiwyg: ['/theme/bower_components/bootstrap-wysiwyg/bootstrap-wysiwyg.js',
        '/theme/bower_components/bootstrap-wysiwyg/external/jquery.hotkeys.js'],
    dataTable: ['/theme/bower_components/datatables/media/js/jquery.dataTables.min.js',
        '/theme/bower_components/plugins/integration/bootstrap/3/dataTables.bootstrap.js',
        '/theme/bower_components/plugins/integration/bootstrap/3/dataTables.bootstrap.css'],
    vectorMap: ['/theme/bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.min.js',
        '/theme/bower_components/bower-jvectormap/jquery-jvectormap-world-mill-en.js',
        '/theme/bower_components/bower-jvectormap/jquery-jvectormap-us-aea-en.js',
        '/theme/bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.css'],
    footable: ['/theme/bower_components/footable/dist/footable.all.min.js',
        '/theme/bower_components/footable/css/footable.core.css'],
    fullcalendar: ['/theme/bower_components/moment/moment.js',
        '/theme/bower_components/fullcalendar/dist/fullcalendar.min.js',
        '/theme/bower_components/fullcalendar/dist/fullcalendar.css',
        '/theme/bower_components/fullcalendar/dist/fullcalendar.theme.css'],
    daterangepicker: ['/theme/bower_components/moment/moment.js',
        '/theme/bower_components/bootstrap-daterangepicker/daterangepicker.js',
        '/theme/bower_components/bootstrap-daterangepicker/daterangepicker-bs3.css'],
    tagsinput: ['/theme/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js',
        '/theme/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'],
    webAdd: ['/theme/jsController/user/web/index.js'],
    tiketSocketConn: ['/theme/jsController/user/tikets/index.js'],
    adminTiketIndex: ['/theme/jsController/admin/tikets/index.js'],
    adminTiketView: ['/theme/jsController/admin/tikets/viewer.js'],
    userTiketView: ['/theme/jsController/user/tikets/viewer.js']

};

+function ($) {

    $(function () {

        $("[ui-jq]").each(function () {
            var self = $(this);
            var options = eval('[' + self.attr('ui-options') + ']');

            if ($.isPlainObject(options[0])) {
                options[0] = $.extend({}, options[0]);
            }

            uiLoad.load(jp_config[self.attr('ui-jq')]).then(function () {
                self[self.attr('ui-jq')].apply(self, options);
            });
        });

    });
}(jQuery);
+function ($) {

    $(function () {

        // nav
        $(document).on('click', '[ui-nav] a', function (e) {
            var $this = $(e.target), $active;
            $this.is('a') || ($this = $this.closest('a'));

            $active = $this.parent().siblings(".active");
            $active && $active.toggleClass('active').find('> ul:visible').slideUp(200);

            ($this.parent().hasClass('active') && $this.next().slideUp(200)) || $this.next().slideDown(200);
            $this.parent().toggleClass('active');

            $this.next().is('ul') && e.preventDefault();
        });

    });
}(jQuery);
+function ($) {

    $(function () {

        $(document).on('click', '[ui-toggle]', function (e) {
            e.preventDefault();
            var $this = $(e.target);
            $this.attr('ui-toggle') || ($this = $this.closest('[ui-toggle]'));
            var $target = $($this.attr('target')) || $this;
            $target.toggleClass($this.attr('ui-toggle'));
        });

    });
}(jQuery);
//# sourceMappingURL=app.js.map