/**
 * Template Name: Medilab - v2.0.0
 * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
!(function($) {
    "use strict";

    // // Preloader
    // $(window).on('load', function() {
    //     if ($('#preloader').length) {
    //         $('#preloader').delay(8).fadeOut('slow', function() {
    //             $(this).remove();
    //         });
    //     }
    // });

    /* 1. Proloder */
    $(window).on("load", function() {
        $("#preloader-active")
            .delay(450)
            .fadeOut("slow");
        $("body")
            .delay(450)
            .css({
                overflow: "visible"
            });
        console.log("Juan Pablo Gutiérrez Q.");
    });

    // Smooth scroll for the navigation menu and links with .scrollto classes
    var scrolltoOffset = $("#header").outerHeight() - 1;
    $(document).on("click", ".nav-menu a, .mobile-nav a, .scrollto", function(
        e
    ) {
        if (
            location.pathname.replace(/^\//, "") ==
                this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            if (target.length) {
                e.preventDefault();

                var scrollto = target.offset().top - scrolltoOffset;

                if ($(this).attr("href") == "#header") {
                    scrollto = 0;
                }

                $("html, body").animate(
                    {
                        scrollTop: scrollto
                    },
                    1500,
                    "easeInOutExpo"
                );

                if ($(this).parents(".nav-menu, .mobile-nav").length) {
                    $(".nav-menu .active, .mobile-nav .active").removeClass(
                        "active"
                    );
                    $(this)
                        .closest("li")
                        .addClass("active");
                }

                if ($("body").hasClass("mobile-nav-active")) {
                    $("body").removeClass("mobile-nav-active");
                    $(".mobile-nav-toggle i").toggleClass(
                        "icofont-navigation-menu icofont-close"
                    );
                    $(".mobile-nav-overly").fadeOut();
                }
                return false;
            }
        }
    });

    // Activate smooth scroll on page load with hash links in the url
    $(document).ready(function() {
        if (window.location.hash) {
            var initial_nav = window.location.hash;
            if ($(initial_nav).length) {
                var scrollto = $(initial_nav).offset().top - scrolltoOffset;
                $("html, body").animate(
                    {
                        scrollTop: scrollto
                    },
                    1500,
                    "easeInOutExpo"
                );
            }
        }
    });
    // Intro carousel
    var heroCarousel = $("#heroCarousel");
    var heroCarouselIndicators = $("#hero-carousel-indicators");
    heroCarousel
        .find(".carousel-inner")
        .children(".carousel-item")
        .each(function(index) {
            index === 0
                ? heroCarouselIndicators.append(
                      "<li data-target='#heroCarousel' data-slide-to='" +
                          index +
                          "' class='active'></li>"
                  )
                : heroCarouselIndicators.append(
                      "<li data-target='#heroCarousel' data-slide-to='" +
                          index +
                          "'></li>"
                  );
        });
    // resitration_Form
    $(document).ready(function() {
        $(".popup-with-form").magnificPopup({
            type: "inline",
            preloader: false,
            focus: "#name",

            // When elemened is focused, some mobile browsers in some cases zoom in
            // It looks not nice, so we disable it:
            callbacks: {
                beforeOpen: function() {
                    if ($(window).width() < 700) {
                        this.st.focus = false;
                    } else {
                        this.st.focus = "#name";
                    }
                }
            }
        });
    });
    // Navigation active state on scroll
    var nav_sections = $("section");
    var main_nav = $(".nav-menu, .mobile-nav");

    $(window).on("scroll", function() {
        var cur_pos = $(this).scrollTop() + 200;

        nav_sections.each(function() {
            var top = $(this).offset().top,
                bottom = top + $(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                if (cur_pos <= bottom) {
                    main_nav.find("li").removeClass("active");
                }
                main_nav
                    .find('a[href="#' + $(this).attr("id") + '"]')
                    .parent("li")
                    .addClass("active");
            }
            if (cur_pos < 300) {
                $(
                    ".nav-menu ul:first li:first, .mobile-menu ul:first li:first"
                ).addClass("active");
            }
        });
    });
    var width = 100,
        perfData = window.performance.timing, // The PerformanceTiming interface represents timing-related performance information for the given page.
        EstimatedTime = -(perfData.loadEventEnd - perfData.navigationStart),
        time = parseInt((EstimatedTime / 1000) % 60) * 100;

    // Percentage Increment Animation
    var PercentageID = $("#percent1"),
        start = 0,
        end = 100,
        durataion = time;
    animateValue(PercentageID, start, end, durataion);

    function animateValue(id, start, end, duration) {
        var range = end - start,
            current = start,
            increment = end > start ? 1 : -1,
            stepTime = Math.abs(Math.floor(duration / range)),
            obj = $(id);

        var timer = setInterval(function() {
            current += increment;
            $(obj).text(current + "%");
            $("#bar1").css("width", current + "%");
            //obj.innerHTML = current;
            if (current == end) {
                clearInterval(timer);
            }
        }, stepTime);
    }

    // Fading Out Loadbar on Finised
    setTimeout(function() {
        $(".pre-loader").fadeOut(300);
    }, time);
    // Navigation active state on scroll
    var nav_sections = $("section");
    var main_nav = $(".nav-menu, .mobile-nav");

    $(window).on("scroll", function() {
        var cur_pos = $(this).scrollTop() + 200;

        nav_sections.each(function() {
            var top = $(this).offset().top,
                bottom = top + $(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                if (cur_pos <= bottom) {
                    main_nav.find("li").removeClass("active");
                }
                main_nav
                    .find('a[href="#' + $(this).attr("id") + '"]')
                    .parent("li")
                    .addClass("active");
            }
            if (cur_pos < 300) {
                $(
                    ".nav-menu ul:first li:first, .mobile-nav ul:first li:first"
                ).addClass("active");
            }
        });
    });

    // Mobile Navigation
    if ($(".nav-menu").length) {
        var $mobile_nav = $(".nav-menu")
            .clone()
            .prop({
                class: "mobile-nav d-lg-none"
            });
        $("body").append($mobile_nav);
        $("body").prepend(
            '<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>'
        );
        $("body").append('<div class="mobile-nav-overly"></div>');

        $(document).on("click", ".mobile-nav-toggle", function(e) {
            $("body").toggleClass("mobile-nav-active");
            $(".mobile-nav-toggle i").toggleClass(
                "icofont-navigation-menu icofont-close"
            );
            $(".mobile-nav-overly").toggle();
        });

        $(document).on("click", ".mobile-nav .drop-down > a", function(e) {
            e.preventDefault();
            $(this)
                .next()
                .slideToggle(300);
            $(this)
                .parent()
                .toggleClass("active");
        });

        $(document).click(function(e) {
            var container = $(".mobile-nav, .mobile-nav-toggle");
            if (
                !container.is(e.target) &&
                container.has(e.target).length === 0
            ) {
                if ($("body").hasClass("mobile-nav-active")) {
                    $("body").removeClass("mobile-nav-active");
                    $(".mobile-nav-toggle i").toggleClass(
                        "icofont-navigation-menu icofont-close"
                    );
                    $(".mobile-nav-overly").fadeOut();
                }
            }
        });
    } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
        $(".mobile-nav, .mobile-nav-toggle").hide();
    }
    // Toggle .header-scrolled class to #header when page is scrolled
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $("#header").addClass("header-scrolled");
            $("#topbar").addClass("topbar-scrolled");
        } else {
            $("#header").removeClass("header-scrolled");
            $("#topbar").removeClass("topbar-scrolled");
        }
    });

    if ($(window).scrollTop() > 100) {
        $("#header").addClass("header-scrolled");
        $("#topbar").addClass("topbar-scrolled");
    }
    // Back to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });

    $(".back-to-top").click(function() {
        $("html, body").animate(
            {
                scrollTop: 0
            },
            1500,
            "easeInOutExpo"
        );
        return false;
    });

    // jQuery counterUp
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 1000
    });

    // Testimonials carousel (uses the Owl Carousel library)
    $(".testimonials-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            900: {
                items: 2
            }
        }
    });

    // Initiate the venobox plugin
    $(document).ready(function() {
        $(".venobox").venobox();
    });

    // Initiate the datepicker plugin
    $(document).ready(function() {
        $(".datepicker").datepicker({
            autoclose: true
        });
    });
})(jQuery);
