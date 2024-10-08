function initMenu() {
    "use strict";
    var e = jQuery,
        t = e("body"),
        i = "#main-menu";
    e(i).find(".parent > a .open-sub, .megamenu .title .open-sub").remove(),
        e(i)
            .find(".parent > a, .megamenu .title")
            .append('<span class="open-sub"></span>'),
        e(i).on("click", ".open-sub", function (t) {
            t.preventDefault();
            var i = e(this).closest("li, .box");
            if (e(i).hasClass("active"))
                e(i).children().last().slideUp(150), e(i).removeClass("active");
            else {
                var n = e(this)
                    .closest("li, .box")
                    .parent("ul, .sub-list")
                    .children("li, .box");
                e(n).is(".active") &&
                    e(n).removeClass("active").children("ul").slideUp(150),
                    e(i).children().last().slideDown(150),
                    e(i).addClass("active");
            }
        }),
        e(i)
            .find(".parent > a")
            .click(function (i) {
                if (
                    t.width() > 979 &&
                    navigator.userAgent.match(/iPad|iPhone|Android/i)
                ) {
                    var n = e(this);
                    n.parent().hasClass("open")
                        ? (n.parent().removeClass("open"), i.preventDefault())
                        : (i.preventDefault(), n.parent().addClass("open"));
                }
            });
}
function initMagnPopup() {
    $("#inline-popups").magnificPopup({
        delegate: "a",
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = this.st.el.attr("data-effect");
            },
        },
        midClick: !0,
    }),
        $(".lightbox").magnificPopup({
            type: "image",
            mainClass: "mfp-3d-unfold",
            removalDelay: 500,
            callbacks: {
                beforeOpen: function () {
                    this.st.image.markup = this.st.image.markup.replace(
                        "mfp-figure",
                        "mfp-figure mfp-with-anim"
                    );
                },
            },
            closeOnContentClick: !0,
            midClick: !0,
        }),
        $("a.hinge").magnificPopup({
            mainClass: "mfp-with-fade",
            removalDelay: 1e3,
            callbacks: {
                beforeClose: function () {
                    this.content.addClass("hinge");
                },
                close: function () {
                    this.content.removeClass("hinge");
                },
            },
            midClick: !0,
        }),
        $(".popup-gallery").magnificPopup({
            delegate: "a",
            type: "image",
            tLoading: "Loading image #%curr%...",
            mainClass: "mfp-3d-unfold",
            removalDelay: 500,
            callbacks: {
                beforeOpen: function () {
                    this.st.image.markup = this.st.image.markup.replace(
                        "mfp-figure",
                        "mfp-figure mfp-with-anim"
                    );
                },
            },
            gallery: { enabled: !0, navigateByImgClick: !0, preload: [0, 1] },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            },
        }),
        $(".popup-gallery2").magnificPopup({
            delegate: "a",
            type: "image",
            tLoading: "Loading image #%curr%...",
            mainClass: "mfp-3d-unfold",
            removalDelay: 500,
            callbacks: {
                beforeOpen: function () {
                    this.st.image.markup = this.st.image.markup.replace(
                        "mfp-figure",
                        "mfp-figure mfp-with-anim"
                    );
                },
            },
            gallery: { enabled: !0, navigateByImgClick: !0, preload: [0, 1] },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            },
        }),
        $(".popup-multi-gallery").each(function () {
            $(this).magnificPopup({
                delegate: "a",
                type: "image",
                gallery: { enabled: !0 },
            });
        }),
        $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: !1,
            fixedContentPos: !1,
        });
}
function initAffixCheck() {
    "use strict";
    var e = $("#nav");
    e.affix({ offset: { top: 1 } }),
        windowT.width() < 1025 &&
            (windowT.off(".affix"),
            e
                .removeData("bs.affix")
                .removeClass("affix affix-top affix-bottom"));
}
function initWow() {
    var e = new WOW({ mobile: !1 });
    e.init();
}
function initCounters() {
    $(".count-number").appear(function () {
        var e = $(this);
        e.countTo({ from: 0, to: e.html(), speed: 1300, refreshInterval: 60 });
    });
}
function initWorkFilter() {
    var e = 0,
        t = $("#items-grid");
    !(function (i) {
        "use strict";
        var n;
        (n = t.hasClass("masonry") ? "masonry" : "fitRows"),
            t.imagesLoaded(function () {
                t.isotope({ itemSelector: ".mix", layoutMode: n, filter: e });
            }),
            i(".filter").click(function () {
                return (
                    i(".filter").removeClass("active"),
                    i(this).addClass("active"),
                    (e = i(this).attr("data-filter")),
                    t.isotope({
                        itemSelector: ".mix",
                        layoutMode: n,
                        filter: e,
                    }),
                    !1
                );
            });
    })(jQuery);
}
function initImgHeight() {
    !(function (e) {
        e(".js-height-fullscr").height(e(window).height());
    })(jQuery);
}
function initMasonry() {
    !(function (e) {
        e(".masonry").imagesLoaded(function () {
            e(".masonry").masonry();
        });
    })(jQuery);
}
function initMap() {
    !(function () {
        if (gmMapDiv.length) {
            var e =
                (gmMapDiv.attr("data-address"), gmMapDiv.attr("data-address"));
            gmMapDiv.gmap3({
                action: "init",
                marker: {
                    address: e,
                    options: { icon: "images/loc-marker.png" },
                },
                map: {
                    options: {
                        zoom: 18,
                        zoomControl: !0,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.SMALL,
                        },
                        mapTypeControl: !1,
                        scaleControl: !1,
                        scrollwheel: !1,
                        streetViewControl: !1,
                        draggable: !0,
                        styles: [
                            {
                                stylers: [
                                    { invert_lightness: !0 },
                                    { saturation: -100 },
                                    { lightness: 10 },
                                ],
                            },
                        ],
                    },
                },
            });
        }
    })(jQuery);
}
function initPageSliders() {
    !(function (e) {
        "use strict";
        e(".fullwidth-slider").owlCarousel({
            slideSpeed: 350,
            singleItem: !0,
            navigation: !0,
            navigationText: [
                "<span class='icon icon-arrows-left'></span>",
                "<i class='icon icon-arrows-right'></span>",
            ],
        }),
            e("#owl-clients").owlCarousel({
                autoPlay: 6e3,
                items: 5,
                itemsDesktop: [1199, 4],
                itemsDesktopSmall: [768, 3],
                itemsTablet: [480, 2],
                itemsMobile: !1,
                pagination: !1,
                paginationNumbers: !1,
            }),
            e(".owl-clients-auto").owlCarousel({
                autoPlay: 5e3,
                items: 5,
                itemsDesktop: [1e3, 4],
                itemsDesktopSmall: [900, 3],
                itemsTablet: [470, 1],
                itemsMobile: !1,
                pagination: !1,
                paginationNumbers: !1,
            }),
            e(".owl-clients-no-auto").owlCarousel({
                items: 5,
                itemsDesktop: [1e3, 4],
                itemsDesktopSmall: [900, 3],
                itemsTablet: [470, 1],
                itemsMobile: !1,
                pagination: !0,
                paginationNumbers: !1,
            }),
            e(".owl-3items-nav").owlCarousel({
                items: 4,
                itemsDesktop: [1e3, 3],
                itemsDesktopSmall: [900, 2],
                itemsTablet: [470, 1],
                itemsMobile: !1,
                pagination: !1,
                paginationNumbers: !1,
                navigation: !0,
                navigationText: [
                    "<span class='icon icon-arrows-left'></span>",
                    "<i class='icon icon-arrows-right'></span>",
                ],
                rewindNav: !0,
                scrollPerPage: !1,
            }),
            e(".owl-clients-nav").owlCarousel({
                items: 5,
                itemsDesktop: [1e3, 4],
                itemsDesktopSmall: [900, 3],
                itemsTablet: [470, 1],
                itemsMobile: !1,
                pagination: !1,
                paginationNumbers: !1,
                navigation: !0,
                navigationText: [
                    "<span class='icon icon-arrows-left'></span>",
                    "<i class='icon icon-arrows-right'></span>",
                ],
                rewindNav: !0,
                scrollPerPage: !1,
            }),
            e(".owl-1-pag").owlCarousel({
                items: 1,
                itemsDesktop: [1e3, 1],
                itemsDesktopSmall: [900, 1],
                itemsTablet: [470, 1],
                itemsMobile: !1,
                pagination: !0,
                paginationNumbers: !1,
            }),
            e(".owl-1-pag-auto").owlCarousel({
                autoPlay: 5e3,
                items: 1,
                itemsDesktop: [1e3, 1],
                itemsDesktopSmall: [900, 1],
                itemsTablet: [470, 1],
                itemsMobile: !1,
                pagination: !0,
                paginationNumbers: !1,
            });
        var t = e(".fullwidth-slideshow").data("owlCarousel");
        if (
            (e(document.documentElement).keyup(function (e) {
                37 == e.keyCode ? t.prev() : 39 == e.keyCode && t.next();
            }),
            e(".owl-carousel").lenth)
        ) {
            var t = e(".owl-carousel").data("owlCarousel");
            t.reinit();
        }
    })(jQuery);
}
function register(e) {
    $.ajax({
        type: e.attr("method"),
        url: e.attr("action"),
        data: e.serialize(),
        cache: !1,
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        error: function () {
            $("#notification_container").html(
                '<div id="nl-alert-container"  class="alert alert-info alert-dismissible fade in bounceIn" role="alert" ><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Could not connect to server. Please try again later.</div>'
            );
        },
        success: function (e) {
            if ("success" != e.result) {
                var t = e.msg;
                $("#notification_container").html(
                    '<div id="nl-alert-container"  class="alert alert-info alert-dismissible fade in bounceIn" role="alert" ><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>' +
                        t +
                        "</div>"
                );
            } else {
                var t = e.msg;
                $("#notification_container").html(
                    '<div id="nl-alert-container"  class="alert alert-info alert-dismissible fade in bounceIn" role="alert" ><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>' +
                        t +
                        "</div>"
                );
            }
        },
    });
}
$(document).ready(function () {
    "use strict";
    function e(e) {
        "close" == e
            ? ($(".cd-search").removeClass("is-visible"),
              $(".cd-search-trigger").removeClass("search-is-visible"),
              $(".cd-overlay").removeClass("search-is-visible"))
            : ($(".cd-search").toggleClass("is-visible"),
              $(".cd-search-trigger").toggleClass("search-is-visible"),
              $(".cd-overlay").toggleClass("search-is-visible"),
              windowT.width() > t &&
                  $(".cd-search").hasClass("is-visible") &&
                  $(".cd-search").find('input[type="search"]').focus(),
              $(".cd-search").hasClass("is-visible")
                  ? $(".cd-overlay").addClass("is-visible")
                  : $(".cd-overlay").removeClass("is-visible"));
    }
    var t = 1170;
    $(".cd-search-trigger").on("click", function (t) {
        t.preventDefault(), e();
    }),
        $(".equal-height").equalHeights(),
        $("#back-top").hide(),
        $(function () {
            windowT.scroll(function () {
                $(this).scrollTop() > 100
                    ? $("#back-top").fadeIn()
                    : $("#back-top").fadeOut();
            }),
                $("#back-top a").click(function () {
                    return $("body,html").animate({ scrollTop: 0 }, 600), !1;
                });
        }),
        $(".toggle-view-custom li").click(function () {
            var e = $(this).children("div.panel");
            e.is(":hidden")
                ? (e.slideDown("10"),
                  $(this)
                      .children(".ui-accordion-header")
                      .addClass("ui-accordion-header-active"))
                : (e.slideUp("10"),
                  $(this)
                      .children(".ui-accordion-header")
                      .removeClass("ui-accordion-header-active"));
        }),
        $('a.smooth-scroll[href^="#"]').on("click", function (e) {
            var t = $($(this).attr("href"));
            t.length &&
                (e.preventDefault(),
                $("html, body").animate({ scrollTop: t.offset().top }, 600));
        }),
        0 == mobileDetect &&
            ($(".opacity-scroll2").length &&
                windowT.on("scroll", function () {
                    $(".opacity-scroll2").css("opacity", function () {
                        return (
                            1 - (windowT.scrollTop() / windowT.height()) * 1.5
                        );
                    });
                }),
            $(".parallax-section").length &&
                $.stellar({ horizontalScrolling: !1 })),
        $(".skillbar").appear(function () {
            $(".skillbar").each(function () {
                $(this)
                    .find(".skillbar-bar")
                    .animate({ width: $(this).attr("data-percent") }, 2e3);
            });
        }),
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        }),
        $(function () {
            $('[data-toggle="popover"]').popover();
        });
    var i = $(".accordion > dd").hide();
    i.first().slideDown("easeOutExpo"),
        $(".accordion > dt > a").first().addClass("active"),
        $(".accordion > dt > a").click(function () {
            var e = $(this).parent().next("dd");
            return (
                $(".accordion > dt > a").removeClass("active"),
                $(this).addClass("active"),
                i.not(e).slideUp("easeInExpo"),
                $(this).parent().next().slideDown("easeOutExpo"),
                !1
            );
        }),
        $(".toggle > dd").hide(),
        $(".toggle > dt > a").click(function () {
            if ($(this).hasClass("active"))
                $(this).parent().next().slideUp("easeOutExpo"),
                    $(this).removeClass("active");
            else {
                {
                    $(this).parent().next("dd");
                }
                $(this).addClass("active"),
                    $(this).parent().next().slideDown("easeOutExpo");
            }
            return !1;
        }),
        initMenu(),
        initMagnPopup(),
        initAffixCheck(),
        initCounters(),
        initMap(),
        initPageSliders(),
        initImgHeight(),
        $("#items-grid").length && initWorkFilter(),
        $(".masonry").length && initMasonry(),
        $(".wow").length && initWow(),
        windowT.resize(function () {
            $(".equal-height").css("height", "auto").equalHeights(),
                initAffixCheck(),
                initImgHeight();
        });
});
var htmlT = $("html"),
    windowT = $(window),
    ieDetect = !1,
    mobileDetect = !1,
    ua = window.navigator.userAgent,
    old_ie = ua.indexOf("MSIE "),
    new_ie = ua.indexOf("Trident/");
/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(
    navigator.userAgent
)
    ? ((mobileDetect = !0), htmlT.addClass("mobile"))
    : htmlT.addClass("no-mobile"),
    (old_ie > -1 || new_ie > -1) && (ieDetect = !0),
    $("body").imagesLoaded(function () {
        $("#spin-loader").fadeOut(),
            $("#loader-overflow").delay(200).fadeOut("slow");
    });
var gmMapDiv = $("#google-map");
$(function () {
    "use strict";
    var e = $("#mc-embedded-subscribe-form");
    $("#mc-embedded-subscribe").on("click", function (t) {
        t && t.preventDefault(), register(e);
    });
}),
    function () {
        var e,
            t,
            i,
            n,
            o,
            a = function (e, t) {
                return function () {
                    return e.apply(t, arguments);
                };
            },
            s =
                [].indexOf ||
                function (e) {
                    for (var t = 0, i = this.length; i > t; t++)
                        if (t in this && this[t] === e) return t;
                    return -1;
                };
        (t = (function () {
            function e() {}
            return (
                (e.prototype.extend = function (e, t) {
                    var i, n;
                    for (i in t) (n = t[i]), null == e[i] && (e[i] = n);
                    return e;
                }),
                (e.prototype.isMobile = function (e) {
                    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
                        e
                    );
                }),
                (e.prototype.createEvent = function (e, t, i, n) {
                    var o;
                    return (
                        null == t && (t = !1),
                        null == i && (i = !1),
                        null == n && (n = null),
                        null != document.createEvent
                            ? ((o = document.createEvent("CustomEvent")),
                              o.initCustomEvent(e, t, i, n))
                            : null != document.createEventObject
                            ? ((o = document.createEventObject()),
                              (o.eventType = e))
                            : (o.eventName = e),
                        o
                    );
                }),
                (e.prototype.emitEvent = function (e, t) {
                    return null != e.dispatchEvent
                        ? e.dispatchEvent(t)
                        : t in (null != e)
                        ? e[t]()
                        : "on" + t in (null != e)
                        ? e["on" + t]()
                        : void 0;
                }),
                (e.prototype.addEvent = function (e, t, i) {
                    return null != e.addEventListener
                        ? e.addEventListener(t, i, !1)
                        : null != e.attachEvent
                        ? e.attachEvent("on" + t, i)
                        : (e[t] = i);
                }),
                (e.prototype.removeEvent = function (e, t, i) {
                    return null != e.removeEventListener
                        ? e.removeEventListener(t, i, !1)
                        : null != e.detachEvent
                        ? e.detachEvent("on" + t, i)
                        : delete e[t];
                }),
                (e.prototype.innerHeight = function () {
                    return "innerHeight" in window
                        ? window.innerHeight
                        : document.documentElement.clientHeight;
                }),
                e
            );
        })()),
            (i =
                this.WeakMap ||
                this.MozWeakMap ||
                (i = (function () {
                    function e() {
                        (this.keys = []), (this.values = []);
                    }
                    return (
                        (e.prototype.get = function (e) {
                            var t, i, n, o, a;
                            for (
                                a = this.keys, t = n = 0, o = a.length;
                                o > n;
                                t = ++n
                            )
                                if (((i = a[t]), i === e))
                                    return this.values[t];
                        }),
                        (e.prototype.set = function (e, t) {
                            var i, n, o, a, s;
                            for (
                                s = this.keys, i = o = 0, a = s.length;
                                a > o;
                                i = ++o
                            )
                                if (((n = s[i]), n === e))
                                    return void (this.values[i] = t);
                            return this.keys.push(e), this.values.push(t);
                        }),
                        e
                    );
                })())),
            (e =
                this.MutationObserver ||
                this.WebkitMutationObserver ||
                this.MozMutationObserver ||
                (e = (function () {
                    function e() {
                        "undefined" != typeof console &&
                            null !== console &&
                            console.warn(
                                "MutationObserver is not supported by your browser."
                            ),
                            "undefined" != typeof console &&
                                null !== console &&
                                console.warn(
                                    "WOW.js cannot detect dom mutations, please call .sync() after loading new content."
                                );
                    }
                    return (
                        (e.notSupported = !0),
                        (e.prototype.observe = function () {}),
                        e
                    );
                })())),
            (n =
                this.getComputedStyle ||
                function (e) {
                    return (
                        (this.getPropertyValue = function (t) {
                            var i;
                            return (
                                "float" === t && (t = "styleFloat"),
                                o.test(t) &&
                                    t.replace(o, function (e, t) {
                                        return t.toUpperCase();
                                    }),
                                (null != (i = e.currentStyle)
                                    ? i[t]
                                    : void 0) || null
                            );
                        }),
                        this
                    );
                }),
            (o = /(\-([a-z]){1})/g),
            (this.WOW = (function () {
                function o(e) {
                    null == e && (e = {}),
                        (this.scrollCallback = a(this.scrollCallback, this)),
                        (this.scrollHandler = a(this.scrollHandler, this)),
                        (this.resetAnimation = a(this.resetAnimation, this)),
                        (this.start = a(this.start, this)),
                        (this.scrolled = !0),
                        (this.config = this.util().extend(e, this.defaults)),
                        (this.animationNameCache = new i()),
                        (this.wowEvent = this.util().createEvent(
                            this.config.boxClass
                        ));
                }
                return (
                    (o.prototype.defaults = {
                        boxClass: "wow",
                        animateClass: "animated",
                        offset: 0,
                        mobile: !0,
                        live: !0,
                        callback: null,
                    }),
                    (o.prototype.init = function () {
                        var e;
                        return (
                            (this.element = window.document.documentElement),
                            "interactive" === (e = document.readyState) ||
                            "complete" === e
                                ? this.start()
                                : this.util().addEvent(
                                      document,
                                      "DOMContentLoaded",
                                      this.start
                                  ),
                            (this.finished = [])
                        );
                    }),
                    (o.prototype.start = function () {
                        var t, i, n, o;
                        if (
                            ((this.stopped = !1),
                            (this.boxes = function () {
                                var e, i, n, o;
                                for (
                                    n = this.element.querySelectorAll(
                                        "." + this.config.boxClass
                                    ),
                                        o = [],
                                        e = 0,
                                        i = n.length;
                                    i > e;
                                    e++
                                )
                                    (t = n[e]), o.push(t);
                                return o;
                            }.call(this)),
                            (this.all = function () {
                                var e, i, n, o;
                                for (
                                    n = this.boxes, o = [], e = 0, i = n.length;
                                    i > e;
                                    e++
                                )
                                    (t = n[e]), o.push(t);
                                return o;
                            }.call(this)),
                            this.boxes.length)
                        )
                            if (this.disabled()) this.resetStyle();
                            else
                                for (
                                    o = this.boxes, i = 0, n = o.length;
                                    n > i;
                                    i++
                                )
                                    (t = o[i]), this.applyStyle(t, !0);
                        return (
                            this.disabled() ||
                                (this.util().addEvent(
                                    window,
                                    "scroll",
                                    this.scrollHandler
                                ),
                                this.util().addEvent(
                                    window,
                                    "resize",
                                    this.scrollHandler
                                ),
                                (this.interval = setInterval(
                                    this.scrollCallback,
                                    50
                                ))),
                            this.config.live
                                ? new e(
                                      (function (e) {
                                          return function (t) {
                                              var i, n, o, a, s;
                                              for (
                                                  s = [], i = 0, n = t.length;
                                                  n > i;
                                                  i++
                                              )
                                                  (a = t[i]),
                                                      s.push(
                                                          function () {
                                                              var e, t, i, n;
                                                              for (
                                                                  i =
                                                                      a.addedNodes ||
                                                                      [],
                                                                      n = [],
                                                                      e = 0,
                                                                      t =
                                                                          i.length;
                                                                  t > e;
                                                                  e++
                                                              )
                                                                  (o = i[e]),
                                                                      n.push(
                                                                          this.doSync(
                                                                              o
                                                                          )
                                                                      );
                                                              return n;
                                                          }.call(e)
                                                      );
                                              return s;
                                          };
                                      })(this)
                                  ).observe(document.body, {
                                      childList: !0,
                                      subtree: !0,
                                  })
                                : void 0
                        );
                    }),
                    (o.prototype.stop = function () {
                        return (
                            (this.stopped = !0),
                            this.util().removeEvent(
                                window,
                                "scroll",
                                this.scrollHandler
                            ),
                            this.util().removeEvent(
                                window,
                                "resize",
                                this.scrollHandler
                            ),
                            null != this.interval
                                ? clearInterval(this.interval)
                                : void 0
                        );
                    }),
                    (o.prototype.sync = function () {
                        return e.notSupported
                            ? this.doSync(this.element)
                            : void 0;
                    }),
                    (o.prototype.doSync = function (e) {
                        var t, i, n, o, a;
                        if (
                            (null == e && (e = this.element), 1 === e.nodeType)
                        ) {
                            for (
                                e = e.parentNode || e,
                                    o = e.querySelectorAll(
                                        "." + this.config.boxClass
                                    ),
                                    a = [],
                                    i = 0,
                                    n = o.length;
                                n > i;
                                i++
                            )
                                (t = o[i]),
                                    s.call(this.all, t) < 0
                                        ? (this.boxes.push(t),
                                          this.all.push(t),
                                          this.stopped || this.disabled()
                                              ? this.resetStyle()
                                              : this.applyStyle(t, !0),
                                          a.push((this.scrolled = !0)))
                                        : a.push(void 0);
                            return a;
                        }
                    }),
                    (o.prototype.show = function (e) {
                        return (
                            this.applyStyle(e),
                            (e.className =
                                e.className + " " + this.config.animateClass),
                            null != this.config.callback &&
                                this.config.callback(e),
                            this.util().emitEvent(e, this.wowEvent),
                            this.util().addEvent(
                                e,
                                "animationend",
                                this.resetAnimation
                            ),
                            this.util().addEvent(
                                e,
                                "oanimationend",
                                this.resetAnimation
                            ),
                            this.util().addEvent(
                                e,
                                "webkitAnimationEnd",
                                this.resetAnimation
                            ),
                            this.util().addEvent(
                                e,
                                "MSAnimationEnd",
                                this.resetAnimation
                            ),
                            e
                        );
                    }),
                    (o.prototype.applyStyle = function (e, t) {
                        var i, n, o;
                        return (
                            (n = e.getAttribute("data-wow-duration")),
                            (i = e.getAttribute("data-wow-delay")),
                            (o = e.getAttribute("data-wow-iteration")),
                            this.animate(
                                (function (a) {
                                    return function () {
                                        return a.customStyle(e, t, n, i, o);
                                    };
                                })(this)
                            )
                        );
                    }),
                    (o.prototype.animate = (function () {
                        return "requestAnimationFrame" in window
                            ? function (e) {
                                  return window.requestAnimationFrame(e);
                              }
                            : function (e) {
                                  return e();
                              };
                    })()),
                    (o.prototype.resetStyle = function () {
                        var e, t, i, n, o;
                        for (
                            n = this.boxes, o = [], t = 0, i = n.length;
                            i > t;
                            t++
                        )
                            (e = n[t]),
                                o.push((e.style.visibility = "visible"));
                        return o;
                    }),
                    (o.prototype.resetAnimation = function (e) {
                        var t;
                        return e.type.toLowerCase().indexOf("animationend") >= 0
                            ? ((t = e.target || e.srcElement),
                              (t.className = t.className
                                  .replace(this.config.animateClass, "")
                                  .trim()))
                            : void 0;
                    }),
                    (o.prototype.customStyle = function (e, t, i, n, o) {
                        return (
                            t && this.cacheAnimationName(e),
                            (e.style.visibility = t ? "hidden" : "visible"),
                            i &&
                                this.vendorSet(e.style, {
                                    animationDuration: i,
                                }),
                            n && this.vendorSet(e.style, { animationDelay: n }),
                            o &&
                                this.vendorSet(e.style, {
                                    animationIterationCount: o,
                                }),
                            this.vendorSet(e.style, {
                                animationName: t
                                    ? "none"
                                    : this.cachedAnimationName(e),
                            }),
                            e
                        );
                    }),
                    (o.prototype.vendors = ["moz", "webkit"]),
                    (o.prototype.vendorSet = function (e, t) {
                        var i, n, o, a;
                        n = [];
                        for (i in t)
                            (o = t[i]),
                                (e["" + i] = o),
                                n.push(
                                    function () {
                                        var t, n, s, r;
                                        for (
                                            s = this.vendors,
                                                r = [],
                                                t = 0,
                                                n = s.length;
                                            n > t;
                                            t++
                                        )
                                            (a = s[t]),
                                                r.push(
                                                    (e[
                                                        "" +
                                                            a +
                                                            i
                                                                .charAt(0)
                                                                .toUpperCase() +
                                                            i.substr(1)
                                                    ] = o)
                                                );
                                        return r;
                                    }.call(this)
                                );
                        return n;
                    }),
                    (o.prototype.vendorCSS = function (e, t) {
                        var i, o, a, s, r, l;
                        for (
                            r = n(e),
                                s = r.getPropertyCSSValue(t),
                                a = this.vendors,
                                i = 0,
                                o = a.length;
                            o > i;
                            i++
                        )
                            (l = a[i]),
                                (s =
                                    s ||
                                    r.getPropertyCSSValue("-" + l + "-" + t));
                        return s;
                    }),
                    (o.prototype.animationName = function (e) {
                        var t;
                        try {
                            t = this.vendorCSS(e, "animation-name").cssText;
                        } catch (i) {
                            t = n(e).getPropertyValue("animation-name");
                        }
                        return "none" === t ? "" : t;
                    }),
                    (o.prototype.cacheAnimationName = function (e) {
                        return this.animationNameCache.set(
                            e,
                            this.animationName(e)
                        );
                    }),
                    (o.prototype.cachedAnimationName = function (e) {
                        return this.animationNameCache.get(e);
                    }),
                    (o.prototype.scrollHandler = function () {
                        return (this.scrolled = !0);
                    }),
                    (o.prototype.scrollCallback = function () {
                        var e;
                        return !this.scrolled ||
                            ((this.scrolled = !1),
                            (this.boxes = function () {
                                var t, i, n, o;
                                for (
                                    n = this.boxes, o = [], t = 0, i = n.length;
                                    i > t;
                                    t++
                                )
                                    (e = n[t]),
                                        e &&
                                            (this.isVisible(e)
                                                ? this.show(e)
                                                : o.push(e));
                                return o;
                            }.call(this)),
                            this.boxes.length || this.config.live)
                            ? void 0
                            : this.stop();
                    }),
                    (o.prototype.offsetTop = function (e) {
                        for (var t; void 0 === e.offsetTop; ) e = e.parentNode;
                        for (t = e.offsetTop; (e = e.offsetParent); )
                            t += e.offsetTop;
                        return t;
                    }),
                    (o.prototype.isVisible = function (e) {
                        var t, i, n, o, a;
                        return (
                            (i =
                                e.getAttribute("data-wow-offset") ||
                                this.config.offset),
                            (a = window.pageYOffset),
                            (o =
                                a +
                                Math.min(
                                    this.element.clientHeight,
                                    this.util().innerHeight()
                                ) -
                                i),
                            (n = this.offsetTop(e)),
                            (t = n + e.clientHeight),
                            o >= n && t >= a
                        );
                    }),
                    (o.prototype.util = function () {
                        return null != this._util
                            ? this._util
                            : (this._util = new t());
                    }),
                    (o.prototype.disabled = function () {
                        return (
                            !this.config.mobile &&
                            this.util().isMobile(navigator.userAgent)
                        );
                    }),
                    o
                );
            })());
    }.call(this),
    !(function (e) {
        (e.fn.equalHeights = function () {
            var t = 0,
                i = e(this);
            return (
                i.each(function () {
                    var i = e(this).innerHeight();
                    i > t && (t = i);
                }),
                i.css("height", t)
            );
        }),
            e("[data-equal]").each(function () {
                var t = e(this),
                    i = t.data("equal");
                t.find(i).equalHeights();
            });
    })(jQuery),
    -1 != navigator.appVersion.indexOf("Win") &&
        !(function () {
            function e() {
                var e = !1;
                e && c("keydown", o),
                    b.keyboardSupport && !e && l("keydown", o);
            }
            function t() {
                if (document.body) {
                    var t = document.body,
                        i = document.documentElement,
                        n = window.innerHeight,
                        o = t.scrollHeight;
                    if (
                        (($ = document.compatMode.indexOf("CSS") >= 0 ? i : t),
                        (v = t),
                        e(),
                        (k = !0),
                        top != self)
                    )
                        w = !0;
                    else if (
                        o > n &&
                        (t.offsetHeight <= n || i.offsetHeight <= n) &&
                        ((i.style.height = "auto"), $.offsetHeight <= n)
                    ) {
                        var a = document.createElement("div");
                        (a.style.clear = "both"), t.appendChild(a);
                    }
                    b.fixedBackground ||
                        y ||
                        ((t.style.backgroundAttachment = "scroll"),
                        (i.style.backgroundAttachment = "scroll"));
                }
            }
            function i(e, t, i, n) {
                if ((n || (n = 1e3), d(t, i), 1 != b.accelerationMax)) {
                    var o = +new Date(),
                        a = o - M;
                    if (a < b.accelerationDelta) {
                        var s = (1 + 30 / a) / 2;
                        s > 1 &&
                            ((s = Math.min(s, b.accelerationMax)),
                            (t *= s),
                            (i *= s));
                    }
                    M = +new Date();
                }
                if (
                    (D.push({
                        x: t,
                        y: i,
                        lastX: 0 > t ? 0.99 : -0.99,
                        lastY: 0 > i ? 0.99 : -0.99,
                        start: +new Date(),
                    }),
                    !E)
                ) {
                    var r = e === document.body,
                        l = function () {
                            for (
                                var o = +new Date(), a = 0, s = 0, c = 0;
                                c < D.length;
                                c++
                            ) {
                                var u = D[c],
                                    d = o - u.start,
                                    p = d >= b.animationTime,
                                    h = p ? 1 : d / b.animationTime;
                                b.pulseAlgorithm && (h = f(h));
                                var m = (u.x * h - u.lastX) >> 0,
                                    v = (u.y * h - u.lastY) >> 0;
                                (a += m),
                                    (s += v),
                                    (u.lastX += m),
                                    (u.lastY += v),
                                    p && (D.splice(c, 1), c--);
                            }
                            r
                                ? window.scrollBy(a, s)
                                : (a && (e.scrollLeft += a),
                                  s && (e.scrollTop += s)),
                                t || i || (D = []),
                                D.length
                                    ? N(l, e, n / b.frameRate + 1)
                                    : (E = !1);
                        };
                    N(l, e, 0), (E = !0);
                }
            }
            function n(e) {
                k || t();
                var n = e.target,
                    o = r(n);
                if (
                    !o ||
                    e.defaultPrevented ||
                    u(v, "embed") ||
                    (u(n, "embed") && /\.pdf/i.test(n.src))
                )
                    return !0;
                var a = e.wheelDeltaX || 0,
                    s = e.wheelDeltaY || 0;
                return (
                    a || s || (s = e.wheelDelta || 0),
                    !b.touchpadSupport && p(s)
                        ? !0
                        : (Math.abs(a) > 1.2 && (a *= b.stepSize / 120),
                          Math.abs(s) > 1.2 && (s *= b.stepSize / 120),
                          i(o, -a, -s),
                          void e.preventDefault())
                );
            }
            function o(e) {
                var t = e.target,
                    n =
                        e.ctrlKey ||
                        e.altKey ||
                        e.metaKey ||
                        (e.shiftKey && e.keyCode !== S.spacebar);
                if (
                    /input|textarea|select|embed/i.test(t.nodeName) ||
                    t.isContentEditable ||
                    e.defaultPrevented ||
                    n
                )
                    return !0;
                if (u(t, "button") && e.keyCode === S.spacebar) return !0;
                var o,
                    a = 0,
                    s = 0,
                    l = r(v),
                    c = l.clientHeight;
                switch (
                    (l == document.body && (c = window.innerHeight), e.keyCode)
                ) {
                    case S.up:
                        s = -b.arrowScroll;
                        break;
                    case S.down:
                        s = b.arrowScroll;
                        break;
                    case S.spacebar:
                        (o = e.shiftKey ? 1 : -1), (s = -o * c * 0.9);
                        break;
                    case S.pageup:
                        s = 0.9 * -c;
                        break;
                    case S.pagedown:
                        s = 0.9 * c;
                        break;
                    case S.home:
                        s = -l.scrollTop;
                        break;
                    case S.end:
                        var d = l.scrollHeight - l.scrollTop - c;
                        s = d > 0 ? d + 10 : 0;
                        break;
                    case S.left:
                        a = -b.arrowScroll;
                        break;
                    case S.right:
                        a = b.arrowScroll;
                        break;
                    default:
                        return !0;
                }
                i(l, a, s), e.preventDefault();
            }
            function a(e) {
                v = e.target;
            }
            function s(e, t) {
                for (var i = e.length; i--; ) T[H(e[i])] = t;
                return t;
            }
            function r(e) {
                var t = [],
                    i = $.scrollHeight;
                do {
                    var n = T[H(e)];
                    if (n) return s(t, n);
                    if ((t.push(e), i === e.scrollHeight)) {
                        if (!w || $.clientHeight + 10 < i)
                            return s(t, document.body);
                    } else if (
                        e.clientHeight + 10 < e.scrollHeight &&
                        ((overflow = getComputedStyle(e, "").getPropertyValue(
                            "overflow-y"
                        )),
                        "scroll" === overflow || "auto" === overflow)
                    )
                        return s(t, e);
                } while ((e = e.parentNode));
            }
            function l(e, t, i) {
                window.addEventListener(e, t, i || !1);
            }
            function c(e, t, i) {
                window.removeEventListener(e, t, i || !1);
            }
            function u(e, t) {
                return (e.nodeName || "").toLowerCase() === t.toLowerCase();
            }
            function d(e, t) {
                (e = e > 0 ? 1 : -1),
                    (t = t > 0 ? 1 : -1),
                    (C.x !== e || C.y !== t) &&
                        ((C.x = e), (C.y = t), (D = []), (M = 0));
            }
            function p(e) {
                if (e) {
                    (e = Math.abs(e)), x.push(e), x.shift(), clearTimeout(A);
                    var t = x[0] == x[1] && x[1] == x[2],
                        i = h(x[0], 120) && h(x[1], 120) && h(x[2], 120);
                    return !(t || i);
                }
            }
            function h(e, t) {
                return Math.floor(e / t) == e / t;
            }
            function m(e) {
                var t, i, n;
                return (
                    (e *= b.pulseScale),
                    1 > e
                        ? (t = e - (1 - Math.exp(-e)))
                        : ((i = Math.exp(-1)),
                          (e -= 1),
                          (n = 1 - Math.exp(-e)),
                          (t = i + n * (1 - i))),
                    t * b.pulseNormalize
                );
            }
            function f(e) {
                return e >= 1
                    ? 1
                    : 0 >= e
                    ? 0
                    : (1 == b.pulseNormalize && (b.pulseNormalize /= m(1)),
                      m(e));
            }
            var v,
                g = {
                    frameRate: 150,
                    animationTime: 500,
                    stepSize: 150,
                    pulseAlgorithm: !0,
                    pulseScale: 6,
                    pulseNormalize: 1,
                    accelerationDelta: 20,
                    accelerationMax: 1,
                    keyboardSupport: !0,
                    arrowScroll: 50,
                    touchpadSupport: !0,
                    fixedBackground: !0,
                    excluded: "",
                },
                b = g,
                y = !1,
                w = !1,
                C = { x: 0, y: 0 },
                k = !1,
                $ = document.documentElement,
                x = [120, 120, 120],
                S = {
                    left: 37,
                    up: 38,
                    right: 39,
                    down: 40,
                    spacebar: 32,
                    pageup: 33,
                    pagedown: 34,
                    end: 35,
                    home: 36,
                },
                b = g,
                D = [],
                E = !1,
                M = +new Date(),
                T = {};
            setInterval(function () {
                T = {};
            }, 1e4);
            var A,
                H = (function () {
                    var e = 0;
                    return function (t) {
                        return t.uniqueID || (t.uniqueID = e++);
                    };
                })(),
                N = (function () {
                    return (
                        window.requestAnimationFrame ||
                        window.webkitRequestAnimationFrame ||
                        function (e, t, i) {
                            window.setTimeout(e, i || 1e3 / 60);
                        }
                    );
                })(),
                P = /chrome/i.test(window.navigator.userAgent),
                O = "onmousewheel" in document;
            O && P && (l("mousedown", a), l("mousewheel", n), l("load", t));
        })();
