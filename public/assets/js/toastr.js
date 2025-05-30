!(function (e, t) {
    if ("object" == typeof exports && "object" == typeof module)
        module.exports = t(require("jQuery"));
    else if ("function" == typeof define && define.amd) define(["jQuery"], t);
    else {
        var n = "object" == typeof exports ? t(require("jQuery")) : t(e.jQuery);
        for (var o in n) ("object" == typeof exports ? exports : e)[o] = n[o];
    }
})(self, function (e) {
    return (function () {
        var t = {
                8901: function (e, t, n) {
                    var o, s;
                    n.amdD,
                        (o = [n(1145)]),
                        void 0 ===
                            (s = function (e) {
                                return (function () {
                                    var t,
                                        n,
                                        o,
                                        s = 0,
                                        i = {
                                            clear: function (n, o) {
                                                var s = u();
                                                t || r(s),
                                                    a(n, s, o) ||
                                                        (function (n) {
                                                            for (
                                                                var o =
                                                                        t.children(),
                                                                    s =
                                                                        o.length -
                                                                        1;
                                                                s >= 0;
                                                                s--
                                                            )
                                                                a(e(o[s]), n);
                                                        })(s);
                                            },
                                            remove: function (n) {
                                                var o = u();
                                                t || r(o),
                                                    n &&
                                                    0 === e(":focus", n).length
                                                        ? d(n)
                                                        : t.children().length &&
                                                          t.remove();
                                            },
                                            error: function (e, t, n) {
                                                return l({
                                                    type: "error",
                                                    iconClass:
                                                        u().iconClasses.error,
                                                    message: e,
                                                    optionsOverride: n,
                                                    title: t,
                                                });
                                            },
                                            getContainer: r,
                                            info: function (e, t, n) {
                                                return l({
                                                    type: "info",
                                                    iconClass:
                                                        u().iconClasses.info,
                                                    message: e,
                                                    optionsOverride: n,
                                                    title: t,
                                                });
                                            },
                                            options: {},
                                            subscribe: function (e) {
                                                n = e;
                                            },
                                            success: function (e, t, n) {
                                                return l({
                                                    type: "success",
                                                    iconClass:
                                                        u().iconClasses.success,
                                                    message: e,
                                                    optionsOverride: n,
                                                    title: t,
                                                });
                                            },
                                            version: "2.1.4",
                                            warning: function (e, t, n) {
                                                return l({
                                                    type: "warning",
                                                    iconClass:
                                                        u().iconClasses.warning,
                                                    message: e,
                                                    optionsOverride: n,
                                                    title: t,
                                                });
                                            },
                                        };
                                    return i;
                                    function r(n, o) {
                                        return (
                                            n || (n = u()),
                                            (t = e("#" + n.containerId))
                                                .length ||
                                                (o &&
                                                    (t = (function (n) {
                                                        return (
                                                            (t = e("<div/>")
                                                                .attr(
                                                                    "id",
                                                                    n.containerId
                                                                )
                                                                .addClass(
                                                                    n.positionClass
                                                                )).appendTo(
                                                                e(n.target)
                                                            ),
                                                            t
                                                        );
                                                    })(n))),
                                            t
                                        );
                                    }
                                    function a(t, n, o) {
                                        var s = !(!o || !o.force) && o.force;
                                        return !(
                                            !t ||
                                            (!s &&
                                                0 !== e(":focus", t).length) ||
                                            (t[n.hideMethod]({
                                                duration: n.hideDuration,
                                                easing: n.hideEasing,
                                                complete: function () {
                                                    d(t);
                                                },
                                            }),
                                            0)
                                        );
                                    }
                                    function c(e) {
                                        n && n(e);
                                    }
                                    function l(n) {
                                        var i = u(),
                                            a = n.iconClass || i.iconClass;
                                        if (
                                            (void 0 !== n.optionsOverride &&
                                                ((i = e.extend(
                                                    i,
                                                    n.optionsOverride
                                                )),
                                                (a =
                                                    n.optionsOverride
                                                        .iconClass || a)),
                                            !(function (e, t) {
                                                if (e.preventDuplicates) {
                                                    if (t.message === o)
                                                        return !0;
                                                    o = t.message;
                                                }
                                                return !1;
                                            })(i, n))
                                        ) {
                                            s++, (t = r(i, !0));
                                            var l = null,
                                                p = e("<div/>"),
                                                f = e("<div/>"),
                                                m = e("<div/>"),
                                                g = e("<div/>"),
                                                v = e(i.closeHtml),
                                                h = {
                                                    intervalId: null,
                                                    hideEta: null,
                                                    maxHideTime: null,
                                                },
                                                C = {
                                                    toastId: s,
                                                    state: "visible",
                                                    startTime: new Date(),
                                                    options: i,
                                                    map: n,
                                                };
                                            return (
                                                n.iconClass &&
                                                    p
                                                        .addClass(i.toastClass)
                                                        .addClass(a),
                                                (function () {
                                                    if (n.title) {
                                                        var e = n.title;
                                                        i.escapeHtml &&
                                                            (e = b(n.title)),
                                                            f
                                                                .append(e)
                                                                .addClass(
                                                                    i.titleClass
                                                                ),
                                                            p.append(f);
                                                    }
                                                })(),
                                                (function () {
                                                    if (n.message) {
                                                        var e = n.message;
                                                        i.escapeHtml &&
                                                            (e = b(n.message)),
                                                            m
                                                                .append(e)
                                                                .addClass(
                                                                    i.messageClass
                                                                ),
                                                            p.append(m);
                                                    }
                                                })(),
                                                i.closeButton &&
                                                    (v
                                                        .addClass(i.closeClass)
                                                        .attr("role", "button"),
                                                    p.prepend(v)),
                                                i.progressBar &&
                                                    (g.addClass(
                                                        i.progressClass
                                                    ),
                                                    p.prepend(g)),
                                                i.rtl && p.addClass("rtl"),
                                                i.newestOnTop
                                                    ? t.prepend(p)
                                                    : t.append(p),
                                                (function () {
                                                    var e = "";
                                                    switch (n.iconClass) {
                                                        case "toast-success":
                                                        case "toast-info":
                                                            e = "polite";
                                                            break;
                                                        default:
                                                            e = "assertive";
                                                    }
                                                    p.attr("aria-live", e);
                                                })(),
                                                p.hide(),
                                                p[i.showMethod]({
                                                    duration: i.showDuration,
                                                    easing: i.showEasing,
                                                    complete: i.onShown,
                                                }),
                                                i.timeOut > 0 &&
                                                    ((l = setTimeout(
                                                        w,
                                                        i.timeOut
                                                    )),
                                                    (h.maxHideTime = parseFloat(
                                                        i.timeOut
                                                    )),
                                                    (h.hideEta =
                                                        new Date().getTime() +
                                                        h.maxHideTime),
                                                    i.progressBar &&
                                                        (h.intervalId =
                                                            setInterval(
                                                                function () {
                                                                    var e =
                                                                        ((h.hideEta -
                                                                            new Date().getTime()) /
                                                                            h.maxHideTime) *
                                                                        100;
                                                                    g.width(
                                                                        e + "%"
                                                                    );
                                                                },
                                                                10
                                                            ))),
                                                i.closeOnHover &&
                                                    p.hover(
                                                        function () {
                                                            clearTimeout(l),
                                                                (h.hideEta = 0),
                                                                p
                                                                    .stop(
                                                                        !0,
                                                                        !0
                                                                    )
                                                                    [
                                                                        i
                                                                            .showMethod
                                                                    ]({
                                                                        duration:
                                                                            i.showDuration,
                                                                        easing: i.showEasing,
                                                                    });
                                                        },
                                                        function () {
                                                            (i.timeOut > 0 ||
                                                                i.extendedTimeOut >
                                                                    0) &&
                                                                ((l =
                                                                    setTimeout(
                                                                        w,
                                                                        i.extendedTimeOut
                                                                    )),
                                                                (h.maxHideTime =
                                                                    parseFloat(
                                                                        i.extendedTimeOut
                                                                    )),
                                                                (h.hideEta =
                                                                    new Date().getTime() +
                                                                    h.maxHideTime));
                                                        }
                                                    ),
                                                !i.onclick &&
                                                    i.tapToDismiss &&
                                                    p.click(w),
                                                i.closeButton &&
                                                    v &&
                                                    v.click(function (e) {
                                                        e.stopPropagation
                                                            ? e.stopPropagation()
                                                            : void 0 !==
                                                                  e.cancelBubble &&
                                                              !0 !==
                                                                  e.cancelBubble &&
                                                              (e.cancelBubble =
                                                                  !0),
                                                            i.onCloseClick &&
                                                                i.onCloseClick(
                                                                    e
                                                                ),
                                                            w(!0);
                                                    }),
                                                i.onclick &&
                                                    p.click(function (e) {
                                                        i.onclick(e), w();
                                                    }),
                                                c(C),
                                                i.debug &&
                                                    console &&
                                                    console.log(C),
                                                p
                                            );
                                        }
                                        function b(e) {
                                            return (
                                                null == e && (e = ""),
                                                e
                                                    .replace(/&/g, "&amp;")
                                                    .replace(/"/g, "&quot;")
                                                    .replace(/'/g, "&#39;")
                                                    .replace(/</g, "&lt;")
                                                    .replace(/>/g, "&gt;")
                                            );
                                        }
                                        function w(t) {
                                            var n =
                                                    t && !1 !== i.closeMethod
                                                        ? i.closeMethod
                                                        : i.hideMethod,
                                                o =
                                                    t && !1 !== i.closeDuration
                                                        ? i.closeDuration
                                                        : i.hideDuration,
                                                s =
                                                    t && !1 !== i.closeEasing
                                                        ? i.closeEasing
                                                        : i.hideEasing;
                                            if (!e(":focus", p).length || t)
                                                return (
                                                    clearTimeout(h.intervalId),
                                                    p[n]({
                                                        duration: o,
                                                        easing: s,
                                                        complete: function () {
                                                            d(p),
                                                                clearTimeout(l),
                                                                i.onHidden &&
                                                                    "hidden" !==
                                                                        C.state &&
                                                                    i.onHidden(),
                                                                (C.state =
                                                                    "hidden"),
                                                                (C.endTime =
                                                                    new Date()),
                                                                c(C);
                                                        },
                                                    })
                                                );
                                        }
                                    }
                                    function u() {
                                        return e.extend(
                                            {},
                                            {
                                                tapToDismiss: !0,
                                                toastClass: "toast",
                                                containerId: "toast-container",
                                                debug: !1,
                                                showMethod: "fadeIn",
                                                showDuration: 300,
                                                showEasing: "swing",
                                                onShown: void 0,
                                                hideMethod: "fadeOut",
                                                hideDuration: 1e3,
                                                hideEasing: "swing",
                                                onHidden: void 0,
                                                closeMethod: !1,
                                                closeDuration: !1,
                                                closeEasing: !1,
                                                closeOnHover: !0,
                                                extendedTimeOut: 1e3,
                                                iconClasses: {
                                                    error: "toast-error",
                                                    info: "toast-info",
                                                    success: "toast-success",
                                                    warning: "toast-warning",
                                                },
                                                iconClass: "toast-info",
                                                positionClass:
                                                    "toast-top-right",
                                                timeOut: 5e3,
                                                titleClass: "toast-title",
                                                messageClass: "toast-message",
                                                escapeHtml: !1,
                                                target: "body",
                                                closeHtml:
                                                    '<button type="button">&times;</button>',
                                                closeClass:
                                                    "toast-close-button",
                                                newestOnTop: !0,
                                                preventDuplicates: !1,
                                                progressBar: !1,
                                                progressClass: "toast-progress",
                                                rtl: !1,
                                            },
                                            i.options
                                        );
                                    }
                                    function d(e) {
                                        t || (t = r()),
                                            e.is(":visible") ||
                                                (e.remove(),
                                                (e = null),
                                                0 === t.children().length &&
                                                    (t.remove(), (o = void 0)));
                                    }
                                })();
                            }.apply(t, o)) || (e.exports = s);
                },
                1145: function (t) {
                    "use strict";
                    t.exports = e;
                },
            },
            n = {};
        function o(e) {
            var s = n[e];
            if (void 0 !== s) return s.exports;
            var i = (n[e] = { exports: {} });
            return t[e](i, i.exports, o), i.exports;
        }
        (o.amdD = function () {
            throw new Error("define cannot be used indirect");
        }),
            (o.n = function (e) {
                var t =
                    e && e.__esModule
                        ? function () {
                              return e.default;
                          }
                        : function () {
                              return e;
                          };
                return o.d(t, { a: t }), t;
            }),
            (o.d = function (e, t) {
                for (var n in t)
                    o.o(t, n) &&
                        !o.o(e, n) &&
                        Object.defineProperty(e, n, {
                            enumerable: !0,
                            get: t[n],
                        });
            }),
            (o.o = function (e, t) {
                return Object.prototype.hasOwnProperty.call(e, t);
            }),
            (o.r = function (e) {
                "undefined" != typeof Symbol &&
                    Symbol.toStringTag &&
                    Object.defineProperty(e, Symbol.toStringTag, {
                        value: "Module",
                    }),
                    Object.defineProperty(e, "__esModule", { value: !0 });
            });
        var s = {};
        return (
            (function () {
                "use strict";
                o.r(s),
                    o.d(s, {
                        toastr: function () {
                            return t.a;
                        },
                    });
                var e = o(8901),
                    t = o.n(e);
                try {
                    window.toastr = t();
                } catch (e) {}
            })(),
            s
        );
    })();
});
