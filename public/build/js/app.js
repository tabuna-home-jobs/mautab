var uiLoad = uiLoad || {};
!function (e, t, o) {
    "use strict";
    var s = [], n = !1, r = e.Deferred();
    o.load = function (t) {
        return t = e.isArray(t) ? t : t.split(/\s+/), n || (n = r.promise()), e.each(t, function (e, t) {
            n = n.then(function () {
                return t.indexOf(".css") >= 0 ? i(t) : a(t)
            })
        }), r.resolve(), n
    };
    var a = function (o) {
        if (s[o])return s[o].promise();
        var n = e.Deferred(), r = t.createElement("script");
        return r.src = o, r.onload = function (e) {
            n.resolve(e)
        }, r.onerror = function (e) {
            n.reject(e)
        }, t.body.appendChild(r), s[o] = n, n.promise()
    }, i = function (o) {
        if (s[o])return s[o].promise();
        var n = e.Deferred(), r = t.createElement("link");
        return r.rel = "stylesheet", r.type = "text/css", r.href = o, r.onload = function (e) {
            n.resolve(e)
        }, r.onerror = function (e) {
            n.reject(e)
        }, t.head.appendChild(r), s[o] = n, n.promise()
    }
}(jQuery, document, uiLoad);
var jp_config = {
    easyPieChart: ["/theme/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"],
    sparkline: ["/theme/bower_components/jquery.sparkline/dist/jquery.sparkline.retina.js"],
    plot: ["/theme/bower_components/flot/jquery.flot.js", "/theme/bower_components/flot/jquery.flot.pie.js", "/theme/bower_components/flot/jquery.flot.resize.js", "/theme/bower_components/flot.tooltip/js/jquery.flot.tooltip.js", "/theme/bower_components/flot.orderbars/js/jquery.flot.orderBars.js", "/theme/bower_components/flot-spline/js/jquery.flot.spline.js"],
    moment: ["/theme/bower_components/moment/moment.js"],
    screenfull: ["/theme/bower_components/screenfull/dist/screenfull.min.js"],
    slimScroll: ["/theme/bower_components/slimscroll/jquery.slimscroll.min.js"],
    sortable: ["/theme/bower_components/html5sortable/jquery.sortable.js"],
    nestable: ["/theme/bower_components/nestable/jquery.nestable.js", "/theme/bower_components/nestable/jquery.nestable.css"],
    filestyle: ["/theme/bower_components/bootstrap-filestyle/src/bootstrap-filestyle.js"],
    slider: ["/theme/bower_components/bootstrap-slider/bootstrap-slider.js", "/theme/bower_components/bootstrap-slider/bootstrap-slider.css"],
    chosen: ["/theme/bower_components/chosen/chosen.jquery.min.js", "/theme/bower_components/bootstrap-chosen/bootstrap-chosen.css"],
    TouchSpin: ["/theme/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js", "/theme/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css"],
    wysiwyg: ["/theme/bower_components/bootstrap-wysiwyg/bootstrap-wysiwyg.js", "/theme/bower_components/bootstrap-wysiwyg/external/jquery.hotkeys.js"],
    dataTable: ["/theme/bower_components/datatables/media/js/jquery.dataTables.min.js", "/theme/bower_components/plugins/integration/bootstrap/3/dataTables.bootstrap.js", "/theme/bower_components/plugins/integration/bootstrap/3/dataTables.bootstrap.css"],
    vectorMap: ["/theme/bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.min.js", "/theme/bower_components/bower-jvectormap/jquery-jvectormap-world-mill-en.js", "/theme/bower_components/bower-jvectormap/jquery-jvectormap-us-aea-en.js", "/theme/bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.css"],
    footable: ["/theme/bower_components/footable/dist/footable.all.min.js", "/theme/bower_components/footable/css/footable.core.css"],
    fullcalendar: ["/theme/bower_components/moment/moment.js", "/theme/bower_components/fullcalendar/dist/fullcalendar.min.js", "/theme/bower_components/fullcalendar/dist/fullcalendar.css", "/theme/bower_components/fullcalendar/dist/fullcalendar.theme.css"],
    daterangepicker: ["/theme/bower_components/moment/moment.js", "/theme/bower_components/bootstrap-daterangepicker/daterangepicker.js", "/theme/bower_components/bootstrap-daterangepicker/daterangepicker-bs3.css"],
    tagsinput: ["/theme/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js", "/theme/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css"],
    webAdd: ["/theme/jsController/user/web/index.js"]
};
+function ($) {
    $(function () {
        $("[ui-jq]").each(function () {
            var self = $(this), options = eval("[" + self.attr("ui-options") + "]");
            $.isPlainObject(options[0]) && (options[0] = $.extend({}, options[0])), uiLoad.load(jp_config[self.attr("ui-jq")]).then(function () {
                self[self.attr("ui-jq")].apply(self, options)
            })
        })
    })
}(jQuery), +function (e) {
    e(function () {
        e(document).on("click", "[ui-nav] a", function (t) {
            var o, s = e(t.target);
            s.is("a") || (s = s.closest("a")), o = s.parent().siblings(".active"), o && o.toggleClass("active").find("> ul:visible").slideUp(200), s.parent().hasClass("active") && s.next().slideUp(200) || s.next().slideDown(200), s.parent().toggleClass("active"), s.next().is("ul") && t.preventDefault()
        })
    })
}(jQuery), +function (e) {
    e(function () {
        e(document).on("click", "[ui-toggle]", function (t) {
            t.preventDefault();
            var o = e(t.target);
            o.attr("ui-toggle") || (o = o.closest("[ui-toggle]"));
            var s = e(o.attr("target")) || o;
            s.toggleClass(o.attr("ui-toggle"))
        })
    })
}(jQuery);
//# sourceMappingURL=app.js.map