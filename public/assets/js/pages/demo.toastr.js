!(function (c) {
    "use strict";
    function t() {}
    (t.prototype.send = function (t, o, i, e, n, a, s, r) {
        t = {
            heading: t,
            text: o,
            position: i,
            loaderBg: e,
            icon: n,
            hideAfter: (a = a || 3e3),
            stack: (s = s || 1),
        };
        (t.showHideTransition = r || "fade"),
            c.toast().reset("all"),
            c.toast(t);
    }),
        (c.NotificationApp = new t()),
        (c.NotificationApp.Constructor = t),
        c("#toastr-one").on("click", function (t) {
            c.NotificationApp.send(
                "Heads up!",
                "This alert needs your attention, but it is not super important.",
                "top-right",
                "rgba(0,0,0,0.2)",
                "info"
            );
        }),
        c("#toastr-two").on("click", function (t) {
            c.NotificationApp.send(
                "Heads up!",
                "Check below fields please.",
                "top-center",
                "rgba(0,0,0,0.2)",
                "warning"
            );
        }),
        c("#toastr-three").on("click", function (t) {
            c.NotificationApp.send(
                "Well Done!",
                "You successfully read this important alert message",
                "bottom-right",
                "rgba(0,0,0,0.2)",
                "success"
            );
        }),
        c("#toastr-four").on("click", function (t) {
            c.NotificationApp.send(
                "Oh snap!",
                "Change a few things up and try submitting again.",
                "bottom-left",
                "rgba(0,0,0,0.2)",
                "error"
            );
        }),
        c("#toastr-five").on("click", function (t) {
            c.NotificationApp.send(
                "How to contribute?",
                [
                    "Fork the repository",
                    "Improve/extend the functionality",
                    "Create a pull request",
                ],
                "top-right",
                "rgba(0,0,0,0.2)",
                "info"
            );
        }),
        c("#toastr-six").on("click", function (t) {
            c.NotificationApp.send(
                "Can I add <em>icons</em>?",
                "Yes! check this <a href='https://github.com/kamranahmedse/jquery-toast-plugin/commits/master'>update</a>.",
                "top-right",
                "rgba(0,0,0,0.2)",
                "info",
                !1
            );
        }),
        c("#toastr-seven").on("click", function (t) {
            c.NotificationApp.send(
                "",
                "Set the `hideAfter` property to false and the toast will become sticky.",
                "top-right",
                "rgba(0,0,0,0.2)",
                "success"
            );
        }),
        c("#toastr-eight").on("click", function (t) {
            c.NotificationApp.send(
                "",
                "Set the `showHideTransition` property to fade|plain|slide to achieve different transitions.",
                "top-right",
                "rgba(0,0,0,0.2)",
                "info",
                3e3,
                1,
                "fade"
            );
        });
})(window.jQuery);
