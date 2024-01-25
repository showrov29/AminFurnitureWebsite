
(function ($) {
    "use strict";
    var $window = $(window);
    $('#preloader').fadeOut('normall', function () {
        $(this).remove();
    });
    $window.on('scroll', function () {
        var scroll = $window.scrollTop();
        if (scroll <= 50) {
            $("header").removeClass("scrollHeader").addClass("fixedHeader");
        } else {
            $("header").removeClass("fixedHeader").addClass("scrollHeader");
        }
    });
    $window.on('scroll', function () {
        if ($(this).scrollTop() > 500) {
            $(".scroll-to-top").fadeIn(400);
        } else {
            $(".scroll-to-top").fadeOut(400);
        }
    });
    $(".scroll-to-top").on('click', function (event) {
        event.preventDefault();
        $("html, body").animate({
            scrollTop: 0
        }, 600);
    });
    var pageSection = $(".parallax,.bg-img");
    pageSection.each(function (indx) {
        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });
    $('.story-video').magnificPopup({
        delegate: '.video',
        type: 'iframe'
    });
    $('.popup-youtube').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
    $('.select-departments').on('click', function () {
        if ($('.select-departments .dropdown').hasClass('current')) {
            $('.select-departments .dropdown').removeClass('current');
        } else {
            $('.select-departments .dropdown').removeClass('current');
            $('.select-departments .dropdown').addClass('current');
        }
    });
    var resizeTimer;
    $window.on('resize', function (e) {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            if ($window.width() > 991) {
                $('.categories .shop-category').show();
            } else {
                $('.categories .shop-category').hide();
            }
        }, 250);
    });
    $('.collapse-sm').on('click', function () {
        $('.categories .shop-category').slideToggle();
        if ($(this).hasClass('current')) {
            $(this).removeClass('current');
        } else {
            $(this).removeClass('current');
            $(this).addClass('current');
        }
    });
    $window.resize(function (event) {
        setTimeout(function () {
            SetResizeContent();
        }, 500);
        event.preventDefault();
    });

    function fullScreenHeight() {
        var element = $(".full-screen");
        var $minheight = $window.height();
        element.css('min-height', $minheight);
    }

    function ScreenFixedHeight() {
        var $headerHeight = $("header").height();
        var element = $(".screen-height");
        var $screenheight = $window.height() - $headerHeight;
        element.css('height', $screenheight);
    }

    function SetResizeContent() {
        fullScreenHeight();
        ScreenFixedHeight();
    }
    SetResizeContent();
    $(document).ready(function () {
        if ($("#chBar").length !== 0) {
            var chBar = document.getElementById("chBar");
            var chartData = {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    data: [350, 365, 425, 475, 525, 575, 625, 675, 725, 775, 825, 875, ],
                    backgroundColor: ['rgba(28, 51, 65,0.8)', 'rgba(0, 135, 115,0.8)', 'rgba(107, 185, 131,0.8)', 'rgba(242, 201, 117,0.8)', 'rgba(237, 99, 83,0.8)', 'rgba(242, 190, 84,0.8)', 'rgba(240, 217, 207,0.8)', 'rgba(135, 174, 180,0.8)', 'rgba(21, 62, 92,0.8)', 'rgba(237, 85, 96,0.8)', 'rgba(201, 223, 241,0.8)', 'rgba(240, 217, 207,0.9)'],
                }, ]
            };
            if (chBar) {
                new Chart(chBar, {
                    type: 'bar',
                    data: chartData,
                    options: {
                        scales: {
                            xAxes: [{
                                barPercentage: 0.5,
                                categoryPercentage: 1
                            }],
                            yAxes: [{
                                ticks: {
                                    beginAtZero: false
                                }
                            }]
                        },
                        legend: {
                            display: false
                        }
                    }
                });
            }
        }
        if ($("#myPieChart").length !== 0) {
            var ctx = document.getElementById('myPieChart').getContext('2d');
            var myPieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Red", "Blue", "Yellow", "Green"],
                    datasets: [{
                        data: [10, 15, 20, 30],
                        backgroundColor: ['rgba(255, 99, 132, 0.8)', 'rgba(54, 162, 235, 0.8)', 'rgba(255, 206, 86, 0.8)', 'rgba(75, 192, 192, 0.8)'],
                    }],
                }
            });
        }
        $('#testmonials-carousel').owlCarousel({
            loop: false,
            responsiveClass: true,
            nav: true,
            dots: false,
            margin: 0,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
        $('#testmonials-style2').owlCarousel({
            loop: true,
            responsiveClass: true,
            nav: true,
            dots: false,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                    margin: 10,
                },
                768: {
                    items: 2,
                    margin: 15,
                },
                992: {
                    items: 2,
                    margin: 40,
                }
            }
        });
        $('.testimonial-style3').owlCarousel({
            loop: false,
            responsiveClass: true,
            nav: false,
            dots: true,
            margin: 0,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
        $('.testmonial-style5').owlCarousel({
            loop: true,
            responsiveClass: true,
            nav: true,
            dots: false,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                    margin: 10,
                },
                768: {
                    items: 2,
                    margin: 15,
                },
                992: {
                    items: 2,
                    margin: 40,
                }
            }
        });
        $('.team .owl-carousel').owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            nav: false,
            autoplay: true,
            smartSpeed: 500,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                700: {
                    items: 2,
                    margin: 15
                },
                1000: {
                    items: 4
                }
            }
        });
        $('.project-single-two .owl-carousel').owlCarousel({
            loop: false,
            nav: false,
            responsiveClass: true,
            dots: false,
            margin: 15,
            responsive: {
                0: {
                    items: 1,
                    margin: 15,
                },
                576: {
                    items: 2,
                    margin: 20,
                },
                992: {
                    items: 3,
                    margin: 25
                },
                1200: {
                    items: 4,
                    margin: 30
                }
            }
        });
        $('#services-carousel').owlCarousel({
            loop: true,
            responsiveClass: true,
            dots: false,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                },
                768: {
                    items: 2,
                    margin: 0,
                },
                992: {
                    items: 3,
                    margin: 0,
                }
            }
        });
        $('#blog-grid').owlCarousel({
            loop: true,
            dots: false,
            nav: false,
            autoplay: true,
            autoplayTimeout: 2500,
            responsiveClass: true,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                },
                768: {
                    items: 2,
                    margin: 0,
                },
                992: {
                    items: 3,
                    margin: 0,
                }
            }
        });
        $('.carousel-style2 .owl-carousel').owlCarousel({
            loop: true,
            dots: false,
            nav: true,
            navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
            autoplay: true,
            autoplayTimeout: 5000,
            responsiveClass: true,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                },
                768: {
                    items: 2,
                    margin: 20,
                },
                992: {
                    items: 2,
                    margin: 30,
                },
                1200: {
                    items: 3,
                    margin: 30,
                }
            }
        });
        $('.carousel-style3 .owl-carousel').owlCarousel({
            loop: true,
            dots: false,
            nav: false,
            autoplay: true,
            smartSpeed: 800,
            autoplayTimeout: 5000,
            responsiveClass: true,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                },
                768: {
                    items: 2,
                    margin: 20,
                },
                992: {
                    items: 2,
                    margin: 30,
                },
                1200: {
                    items: 3,
                    margin: 30,
                }
            }
        });
        $('.carousel-style4 .owl-carousel').owlCarousel({
            loop: true,
            dots: false,
            nav: true,
            navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
            autoplay: true,
            autoplayTimeout: 5000,
            responsiveClass: true,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                },
                481: {
                    items: 2,
                    margin: 5,
                },
                500: {
                    items: 2,
                    margin: 20,
                },
                992: {
                    items: 3,
                    margin: 30,
                },
                1200: {
                    items: 4,
                    margin: 30,
                }
            }
        });
        $('#service-grids').owlCarousel({
            loop: true,
            dots: false,
            nav: false,
            autoplay: true,
            autoplayTimeout: 2500,
            responsiveClass: true,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                },
                768: {
                    items: 2,
                    margin: 20,
                },
                992: {
                    items: 3,
                    margin: 30,
                }
            }
        });
        $(".home-business-slider").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            smartSpeed: 800,
            nav: true,
            dots: false,
            navText: ['<span class="fas fa-chevron-left"></span>', '<span class="fas fa-chevron-right"></span>'],
            responsive: {
                0: {
                    nav: false
                },
                768: {
                    nav: true
                }
            }
        });
        $('#clients').owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            responsiveClass: true,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 2,
                    margin: 20
                },
                768: {
                    items: 3,
                    margin: 40,
                },
                992: {
                    items: 4,
                    margin: 60,
                },
                1200: {
                    items: 5,
                    margin: 80,
                }
            }
        });
        $('#project-single').owlCarousel({
            loop: false,
            nav: false,
            responsiveClass: true,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 15,
                },
                600: {
                    items: 2,
                    margin: 15,
                },
                1000: {
                    items: 3,
                    margin: 15
                }
            }
        });
        $('.slider-fade .owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            autoplay: true,
            smartSpeed: 500,
            mouseDrag: false,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut'
        });
        $('.services-grids').owlCarousel({
            loop: false,
            nav: false,
            responsiveClass: true,
            dots: false,
            autoplay: true,
            smartSpeed: 500,
            mouseDrag: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 15,
                    mouseDrag: true
                },
                768: {
                    items: 2,
                    margin: 20,
                    mouseDrag: true
                },
                1200: {
                    items: 3,
                    margin: 25,
                    mouseDrag: false
                }
            }
        });
        $('.owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            margin: 0,
            autoplay: true,
            smartSpeed: 500
        });
        var owl = $('.slider-fade');
        owl.on('changed.owl.carousel', function (event) {
            var item = event.item.index - 2;
            $('h3').removeClass('animated fadeInUp');
            $('h1').removeClass('animated fadeInUp');
            $('p').removeClass('animated fadeInUp');
            $('.butn').removeClass('animated fadeInUp');
            $('.owl-item').not('.cloned').eq(item).find('h3').addClass('animated fadeInUp');
            $('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated fadeInUp');
            $('.owl-item').not('.cloned').eq(item).find('p').addClass('animated fadeInUp');
            $('.owl-item').not('.cloned').eq(item).find('.butn').addClass('animated fadeInUp');
        });
        if ($("#rev_slider_1").length !== 0) {
            var tpj = jQuery;
            var revapi1;
            tpj(document).ready(function () {
                if (tpj("#rev_slider_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_1");
                } else {
                    revapi1 = tpj("#rev_slider_1").show().revolution({
                        sliderType: "standard",
                        sliderLayout: "fullwidth",
                        dottedOverlay: "none",
                        delay: 9000,
                        spinner: "spinner4",
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                enable: false,
                                style: 'metis',
                                rtl: false,
                                hide_onleave: true,
                                hide_onmobile: true,
                                hide_under: 0,
                                hide_over: 9999,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                tmp: '<div class="tp-title-wrap"> <div class="tp-arr-imgholder"></div> </div>',
                                left: {
                                    container: 'slider',
                                    h_align: 'left',
                                    v_align: 'center',
                                    h_offset: 20,
                                    v_offset: 0
                                },
                                right: {
                                    container: 'slider',
                                    h_align: 'right',
                                    v_align: 'center',
                                    h_offset: 20,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: false,
                                hide_onmobile: false,
                                hide_under: 300,
                                style: "hermes",
                                hide_onleave: false,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 30,
                                space: 8
                            },
                        },
                        responsiveLevels: [1240, 1024, 767, 480],
                        gridwidth: [1170, 1170, 767, 480],
                        gridheight: [700, 700, 600, 600],
                        lazyType: "none",
                        shadow: 0,
                        shuffle: "off",
                        autoHeight: "off",
                    });
                }
            });
        }
        if ($("#rev_slider_2").length !== 0) {
            var tpj = jQuery;
            var revapi2;
            tpj(document).ready(function () {
                if (tpj("#rev_slider_2").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_2");
                } else {
                    revapi2 = tpj("#rev_slider_2").show().revolution({
                        sliderType: "standard",
                        sliderLayout: "fullwidth",
                        dottedOverlay: "none",
                        delay: 9000,
                        spinner: "spinner4",
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                enable: true,
                                style: 'metis',
                                tmp: '',
                                rtl: false,
                                hide_onleave: true,
                                hide_onmobile: true,
                                hide_under: 0,
                                hide_over: 9999,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                left: {
                                    container: 'slider',
                                    h_align: 'left',
                                    v_align: 'center',
                                    h_offset: 20,
                                    v_offset: 0
                                },
                                right: {
                                    container: 'slider',
                                    h_align: 'right',
                                    v_align: 'center',
                                    h_offset: 20,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: false,
                            },
                        },
                        responsiveLevels: [1240, 1024, 767, 480],
                        gridwidth: [1170, 1170, 767, 480],
                        gridheight: [700, 700, 600, 600],
                        lazyType: "none",
                        shadow: 0,
                        shuffle: "off",
                        autoHeight: "off",
                    });
                }
            });
        }
        if ($("#rev_slider_video").length !== 0) {
            var tpj = jQuery;
            var revapi3;
            tpj(document).ready(function () {
                if (tpj("#rev_slider_video").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_video");
                } else {
                    revapi3 = tpj("#rev_slider_video").show().revolution({
                        sliderType: "standard",
                        sliderLayout: "fullwidth",
                        dottedOverlay: "none",
                        delay: 9000,
                        spinner: "spinner4",
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                enable: false
                            },
                            bullets: {
                                enable: false
                            },
                        },
                        responsiveLevels: [1240, 1024, 767, 480],
                        gridwidth: [1170, 1170, 767, 480],
                        gridheight: [700, 700, 600, 600],
                        lazyType: "none",
                        shadow: 0,
                        shuffle: "off",
                        autoHeight: "off",
                    });
                }
            });
        }
        if ($("#rev_slider_3").length !== 0) {
            var tpj = jQuery;
            var revapi4;
            tpj(document).ready(function () {
                if (tpj("#rev_slider_3").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_3");
                } else {
                    revapi4 = tpj("#rev_slider_3").show().revolution({
                        sliderLayout: "fullscreen",
                        delay: 12000,
                        responsiveLevels: [4096, 1024, 778, 420],
                        gridwidth: [1170, 1024, 778, 410],
                        gridheight: 600,
                        hideThumbs: 10,
                        fullScreenAutoWidth: "on",
                        fullScreenOffsetContainer: ".rev-offset",
                        navigation: {
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                enable: true,
                                style: "hermes",
                                tmp: '<div class="tp-arr-allwrapper"> <div class="tp-arr-imgholder"></div> <div class="tp-arr-titleholder">{{title}}</div> </div>',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 0,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 0,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                style: "",
                                enable: false,
                                hide_onmobile: false,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                hide_under: 0,
                                hide_over: 9999,
                                direction: "horizontal",
                                space: 12,
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 30,
                                tmp: ''
                            },
                        },
                        parallax: {
                            type: "scroll",
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85],
                            origo: "enterpoint",
                            speed: 400,
                            bgparallax: "on",
                            disable_onmobile: "on"
                        },
                        spinner: "spinner4"
                    });
                }
            });
        }
        if ($("#rev_slider_4").length !== 0) {
            var tpj = jQuery;
            var revapi5;
            tpj(document).ready(function () {
                if (tpj("#rev_slider_4").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_4");
                } else {
                    revapi5 = tpj("#rev_slider_4").show().revolution({
                        sliderLayout: "fullscreen",
                        delay: 12000,
                        responsiveLevels: [4096, 1024, 778, 420],
                        gridwidth: [1170, 1024, 778, 410],
                        gridheight: 600,
                        hideThumbs: 10,
                        fullScreenAutoWidth: "on",
                        fullScreenOffsetContainer: "",
                        navigation: {
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                enable: false,
                                style: "hermes",
                                tmp: '<div class="tp-arr-allwrapper"> <div class="tp-arr-imgholder"></div> <div class="tp-arr-titleholder">{{title}}</div> </div>',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 0,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 0,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                style: "",
                                enable: true,
                                hide_onmobile: false,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                hide_under: 0,
                                hide_over: 9999,
                                direction: "vertical",
                                space: 18,
                                h_align: "right",
                                v_align: "center",
                                h_offset: 40,
                                v_offset: 0,
                                tmp: ''
                            },
                        },
                        parallax: {
                            type: "scroll",
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85],
                            origo: "enterpoint",
                            speed: 400,
                            bgparallax: "on",
                            disable_onmobile: "on"
                        },
                        spinner: "spinner4"
                    });
                }
            });
        }
        if ($("#rev_slider_5").length !== 0) {
            var tpj = jQuery;
            var revapi5;
            tpj(document).ready(function () {
                if (tpj("#rev_slider_5").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_5");
                } else {
                    revapi5 = tpj("#rev_slider_5").show().revolution({
                        sliderLayout: "fullscreen",
                        delay: 12000,
                        responsiveLevels: [4096, 1024, 778, 420],
                        gridwidth: [1170, 1024, 778, 410],
                        gridheight: 600,
                        hideThumbs: 10,
                        fullScreenAutoWidth: "on",
                        fullScreenOffsetContainer: "header",
                        navigation: {
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                enable: false,
                                style: "hermes",
                                tmp: '<div class="tp-arr-allwrapper"> <div class="tp-arr-imgholder"></div> <div class="tp-arr-titleholder">{{title}}</div> </div>',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 0,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 0,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                style: "",
                                enable: true,
                                hide_onmobile: false,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                hide_under: 0,
                                hide_over: 9999,
                                direction: "vertical",
                                space: 18,
                                h_align: "right",
                                v_align: "center",
                                h_offset: 40,
                                v_offset: 0,
                                tmp: ''
                            },
                        },
                        spinner: "spinner4"
                    });
                }
            });
        }
        if ($(".horizontaltab").length !== 0) {
            $('.horizontaltab').easyResponsiveTabs({
                type: 'default',
                width: 'auto',
                fit: true,
                tabidentify: 'hor_1',
                activate: function (event) {
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        }
        if ($(".childverticaltab").length !== 0) {
            $('.childverticaltab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true,
                tabidentify: 'ver_1',
                activetab_bg: '#fff',
                inactive_bg: '#F5F5F5',
                active_border_color: '#c1c1c1',
                active_content_border_color: '#c1c1c1'
            });
        }
        if ($(".verticaltab").length !== 0) {
            $('.verticaltab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true,
                closed: 'accordion',
                tabidentify: 'hor_1',
                activate: function (event) {
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo2');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        }
        $('.countup').counterUp({
            delay: 25,
            time: 2000
        });
        if ($(".countdown").length !== 0) {
            var tpj = jQuery;
            var countdown;
            tpj(document).ready(function () {
                if (tpj(".countdown").countdown == undefined) {
                    revslider_showDoubleJqueryError(".countdown");
                } else {
                    countdown = tpj(".countdown").show().countdown({
                        date: "01 Jan 2021 00:01:00",
                        format: "on"
                    });
                }
            });
        }
        if ($(".datepicker").length !== 0) {
            $('.datepicker').datepicker({
                format: 'mm/dd/yyyy',
                startDate: '-3d'
            })
        }
    });
    $window.on("load", function () {
        $('.single-img').magnificPopup({
            delegate: '.popimg',
            type: 'image'
        });
        $('.gallery').magnificPopup({
            delegate: '.popimg',
            type: 'image',
            gallery: {
                enabled: true
            }
        });
        var $gallery = $('.gallery').isotope({});
        $('.filtering').on('click', 'span', function () {
            var filterValue = $(this).attr('data-filter');
            $gallery.isotope({
                filter: filterValue
            });
        });
        $('.filtering').on('click', 'span', function () {
            $(this).addClass('active').siblings().removeClass('active');
        });
        $window.stellar();
    });
})(jQuery);
