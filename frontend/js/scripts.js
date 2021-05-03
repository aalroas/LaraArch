//   all ------------------
function initTheside() {
        "use strict";
        $(window).on("load", function() {
            firstLoad();
        });
        function firstLoad() {
            TweenMax.to($(".loader2"), 0.9, {
                force3D: true,
                bottom: "100%",
                ease: Expo.easeInOut,
                onComplete: function() {
                    initpageloadAnimation();
                }
            });
            var chdpt = $(".content-holder").data("pagetitle");
            $(".horizonral-subtitle strong").text(chdpt);
        }
        //   Background image ------------------
        var a = $(".bg");
        a.each(function(a) {
            if ($(this).attr("data-bg")) $(this).css("background-image", "url(" + $(this).data("bg") + ")");
        });
        //   clone ------------------
        $.fn.duplicate = function(a, b) {
            var c = [];
            for (var d = 0; d < a; d++) $.merge(c, this.clone(b).get());
            return this.pushStack(c);
        };
        $("<div class='container full-height'></div>").appendTo(".sec-lines");
        $("<div class='line-item'></div>").duplicate(5).appendTo(".sec-lines .container");
        //   sliders ------------------
        if ($(".multi-slideshow_1").length > 0) {
            var ms1 = new Swiper(".multi-slideshow_1 .swiper-container", {
                preloadImages: false,
                loop: true,
                speed: 1400,
                spaceBetween: 0,
                effect: "slide",
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false
                },
            });
            var ms2 = new Swiper(".multi-slideshow_2 .swiper-container", {
                preloadImages: false,
                loop: true,
                speed: 1400,
                spaceBetween: 0,
                direction: "vertical",
                effect: "slide",
            });
            var ms3 = new Swiper(".multi-slideshow_3 .swiper-container", {
                preloadImages: false,
                loop: true,
                speed: 1400,
                spaceBetween: 0,
                effect: "slide",
            });
            ms1.controller.control = ms2;
            ms2.controller.control = ms1;
            ms2.controller.control = ms3;
            ms3.controller.control = ms2;
        }
        if ($(".multi-slideshow_fs").length > 0) {
            var ms1 = new Swiper(".multi-slideshow_fs .swiper-container", {
                preloadImages: false,
                loop: true,
                speed: 1400,
                spaceBetween: 0,
                effect: "fade",
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false
                },
            });
        }
        if ($(".home-half-slider").length > 0) {
            var j = new Swiper(".fs-gallery-wrap .swiper-container", {
                preloadImages: false,
                loop: true,
                grabCursor: true,
                centeredSlides: false,
                resistance: true,
                resistanceRatio: 0.6,
                speed: 1400,
                spaceBetween: 0,
                parallax: false,
                effect: "slide",
                mousewheel: true,
                pagination: {
                    el: '.hero-slider-wrap_pagination',
                    clickable: true,
                },
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                },
                navigation: {
                    nextEl: '.hero-slider-button-next',
                    prevEl: '.hero-slider-button-prev',
                },
            });
            j.on('slideChange', function() {
                var csli = j.realIndex + 1,
                    curnum = $('#current');
                TweenMax.to(curnum, 0.2, {
                    force3D: true,
                    y: -10,
                    opacity: 0,
                    ease: Power2.easeOut,
                    onComplete: function() {
                        TweenMax.to(curnum, 0.1, {
                            force3D: true,
                            y: 10
                        });
                        curnum.html('0' + csli);
                    }
                });
                TweenMax.to(curnum, 0.2, {
                    force3D: true,
                    y: 0,
                    delay: 0.3,
                    opacity: 1,
                    ease: Power2.easeOut
                });
            });
            kpsc();
            j.on("slideChangeTransitionStart", function() {
                eqwe();
            });
            j.on("slideChangeTransitionEnd", function() {
                kpsc();
            });
            var totalSlides = j.slides.length - 2;
            $('#total').html('0' + totalSlides);
            var imageSwiper = new Swiper(".hero-slider-img .swiper-container", {
                preloadImages: false,
                loop: true,
                resistance: true,
                direction: 'vertical',
                spaceBetween: 10,
                effect: "slide",
            });
            j.controller.control = imageSwiper;
            imageSwiper.controller.control = j;
        }
            function kpsc() {
                $(".slide-progress").css({
                    width: "100%",
                    transition: "width 3000ms"
                });
            }
            function eqwe() {
                $(".slide-progress").css({
                    width: 0,
                    transition: "width 0s"
                });
            }
        if ($(".fs-slider").length > 0) {
            var mouseContr2 = $(".fs-slider").data("mousecontrol2");
            var j3 = new Swiper(".fs-slider .swiper-container", {
                preloadImages: false,
                loop: true,
                grabCursor: true,
                speed: 1400,
                spaceBetween: 0,
                effect: "slide",
                mousewheel: mouseContr2,
                pagination: {
                    el: '.hero-slider-wrap_pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.hero-slider-button-next',
                    prevEl: '.hero-slider-button-prev',
                },
            });
        }
        if ($(".fw-carousel").length > 0) {
            var totalSlides2 = $(".fw-carousel .swiper-slide").length;
            var mouseContr = $(".fw-carousel").data("mousecontrol");
            var j2 = new Swiper(".fw-carousel .swiper-container", {
                preloadImages: false,
                loop: false,
                freeMode: true,
                slidesPerView: 'auto',
                spaceBetween: 0,
                grabCursor: true,
                mousewheel: mouseContr,
                speed: 1400,
                scrollbar: {
                    el: '.hs_init',
                    draggable: true,
                },
                effect: "slide",
                pagination: {
                    el: '.fw-carousel-counter',
                    type: 'fraction',
                    renderFraction: function(currentClass) {
                        return '<span class="' + currentClass + '"></span>' + '  / ' + '<span class="j2total">' + totalSlides2 + '</span>';
                    }
                },
                navigation: {
                    nextEl: '.fw-carousel-button-next',
                    prevEl: '.fw-carousel-button-prev',
                },
            });
        }
        if ($(".grid-carousel ").length > 0) {
            var totalSlides2 = $(".grid-carousel .swiper-slide").length;
            var gridCarusel = new Swiper(".grid-carousel .swiper-container", {
                preloadImages: false,
                loop: true,
                freeMode:false,
                slidesPerView: 3,
                spaceBetween: 0,
                grabCursor: true,
                mousewheel: true,
                speed: 1400,
                effect: "slide",
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                },
                pagination: {
                    el: '.fw-carousel-counter',
                    type: 'fraction',
                    renderFraction: function(currentClass) {
                        return '<span class="' + currentClass + '"></span>' + '  / ' + '<span class="j2total">' + totalSlides2 + '</span>';
                    }
                },
                navigation: {
                    nextEl: '.fw-carousel-button-next',
                    prevEl: '.fw-carousel-button-prev',
                },
				breakpoints: {
					768: {
					  slidesPerView: 2,
					},
					640: {
					  slidesPerView: 1,
					},
				}
            });
            kpsc();
            gridCarusel.on("slideChangeTransitionStart", function() {
                eqwe();
            });
            gridCarusel.on("slideChangeTransitionEnd", function() {
                kpsc();
            });
        }
        if ($(".testilider").length > 0) {
            var j2 = new Swiper(".testilider .swiper-container", {
                preloadImages: false,
                slidesPerView: 2,
                spaceBetween: 20,
                loop: true,
                grabCursor: true,
                mousewheel: false,
                pagination: {
                    el: '.tc-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.ss-slider-next',
                    prevEl: '.ss-slider-prev',
                },
				  breakpoints: {
					640: {
					  slidesPerView: 1,
					},

				  }
            });
        }
        if ($(".single-slider").length > 0) {
            var j2 = new Swiper(".single-slider .swiper-container", {
                preloadImages: false,
                slidesPerView: 1,
                spaceBetween: 0,
                loop: true,
                autoHeight: true,
                grabCursor: true,
                mousewheel: false,
                pagination: {
                    el: '.ss-slider-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.ss-slider-cont-next',
                    prevEl: '.ss-slider-cont-prev',
                },
            });
        }
        //   Isotope------------------
        function inithorizontalPortfolio() {
            if ($("#portfolio_horizontal_container").length) {
                var d = $("#portfolio_horizontal_container");
              d.imagesLoaded(function() {
                    var f = {
                        itemSelector: ".portfolio_item",
                        layoutMode: "packery",
                        packery: {
                            isHorizontal: true,
                            gutter: 0
                        },
                        resizable: true,
                        transformsEnabled: true,
                        transitionDuration: "700ms"
                    };
                    var g = {
                        itemSelector: ".portfolio_item",
                        layoutMode: "packery",
                        packery: {
                            isHorizontal: false,
                            gutter: 0
                        },
                        resizable: true,
                        transformsEnabled: true,
                        transitionDuration: "700ms"
                    };

                     if ($(window).width() < 778) {
                        d.isotope(g);
                        d.isotope("layout");
                        d.removeAttr('style');
                        $(".horizontal-grid-wrap").getNiceScroll().remove();
                    } else {
                        d.isotope(f);
                        d.isotope("layout");
                        $(".horizontal-grid-wrap").niceScroll({
                            cursorwidth: "0px",
                            cursorborder: "none",
                            cursorborderradius: "0px",
                            touchbehavior: true,
                            bouncescroll: false,
                            scrollspeed: 120,
                            mousescrollstep: 90,
                            grabcursorenabled: true,
                            horizrailenabled: true,
                            preservenativescrolling: true,
                            cursordragontouch: true
                        });


                    }

                    $(".gallery-filters").on("click", "a", function(a) {
                        a.preventDefault();
                        var b = $(this).attr("data-filter");
                        d.isotope({
                            filter: b
                        });
                        $(".gallery-filters a").removeClass("gallery-filter-active");
                        $(this).addClass("gallery-filter-active");
                    });
                    d.isotope("on", "layoutComplete", function(a, b) {
                        var b = a.length,
                            numalb = $(".num-album");
                        TweenMax.to(numalb, 0.2, {
                            force3D: true,
                            y: -10,
                            opacity: 0,
                            ease: Power2.easeOut,
                            onComplete: function() {
                                TweenMax.to(numalb, 0.1, {
                                    force3D: true,
                                    y: 10
                                });
                                numalb.html(b);
                            }
                        });
                        TweenMax.to(numalb, 0.2, {
                            force3D: true,
                            y: 0,
                            delay: 0.3,
                            opacity: 1,
                            ease: Power2.easeOut
                        });
                    });
                    var j = $(".portfolio_item").length;
                    $(".all-album , .num-album").html(j);
                	});
            }
        }
        inithorizontalPortfolio();
        $(".hor-mob-filter_btn").on("click", function() {
            if ($(window).width() < 778) {
                $(".hor-mob-filter .gallery-filters").slideToggle(100);
            }
        });
        function n() {
            if ($(".gallery-items").length) {
                var $grid = $(".gallery-items").isotope({
                    singleMode: true,
                    columnWidth: ".grid-sizer, .grid-sizer-second, .grid-sizer-three",
                    itemSelector: ".gallery-item, .gallery-item-second, .gallery-item-three",
                    resizable: true,
                    transformsEnabled: true,
                    transitionDuration: "700ms"
                });
                $grid.imagesLoaded(function() {
                    $grid.isotope("layout");
                });
                $(".gallery-filters").on("click", "a.gallery-filter", function(b) {
                    b.preventDefault();
                    var c = $(this).attr("data-filter");
                    $grid.isotope({
                        filter: c
                    });
                    $(".gallery-filters a").removeClass("gallery-filter-active");
                    $(this).addClass("gallery-filter-active");
                });
                $grid.isotope("on", "layoutComplete", function(a, b) {
                    var b = a.length,
                        numalb2 = $(".num-album");
                    TweenMax.to(numalb2, 0.2, {
                        force3D: true,
                        y: -10,
                        opacity: 0,
                        ease: Power2.easeOut,
                        onComplete: function() {
                            TweenMax.to(numalb2, 0.1, {
                                force3D: true,
                                y: 10
                            });
                            numalb2.html(b);
                        }
                    });
                    TweenMax.to(numalb2, 0.2, {
                        force3D: true,
                        y: 0,
                        delay: 0.3,
                        opacity: 1,
                        ease: Power2.easeOut
                    });
                });
                var b = $(".gallery-item").length;
                $(".all-album , .num-album").html(b);
            }
        }
        n();
        //   lightGallery------------------
        $(".image-popup").lightGallery({
            selector: "this",
            cssEasing: "cubic-bezier(0.25, 0, 0.25, 1)",
            download: false,
            counter: false
        });
        var o = $(".lightgallery"),
            p = o.data("looped");
        o.lightGallery({
            selector: ".lightgallery a.popup-image",
            cssEasing: "cubic-bezier(0.25, 0, 0.25, 1)",
            download: false,
            loop: false,
            counter: false
        });
        //   accordion ------------------
        $(".accordion a.toggle").on("click", function(a) {
            a.preventDefault();
            $(".accordion a.toggle").removeClass("act-accordion");
            $(this).addClass("act-accordion");
            if ($(this).next('div.accordion-inner').is(':visible')) {
                $(this).next('div.accordion-inner').slideUp();
            } else {
                $(".accordion a.toggle").next('div.accordion-inner').slideUp();
                $(this).next('div.accordion-inner').slideToggle();
            }
        });
        //   appear------------------
        $(".stats").appear(function() {
            $(".num").countTo();
        });
		$(".skillbar-box").appear(function () {
			$(this).find("div.skillbar-bg").each(function () {
				$(this).find(".custom-skillbar").delay(600).animate({
					width: $(this).attr("data-percent")
				}, 1500);
			});
		});
        //   tabs------------------
        $('.tabs-menu').lavaLamp({
            fx: 'easeInOutQuint',
            speed: 600,
            returnDelay: 300,
            autoReturn: true
        });
        $(".tabs-menu a").on("click", function(a) {
            var tcitem = $(".tc_item"),
                tbamDat = $(this).data("tabnum");
            TweenMax.to(tcitem, 0.4, {
                force3D: true,
                y: -20,
                opacity: 0,
                ease: Power2.easeOut,
                onComplete: function() {
                    TweenMax.to(tcitem, 0.2, {
                        force3D: true,
                        y: 50
                    });
                    tcitem.html(tbamDat);
                }
            });
            TweenMax.to(tcitem, 0.4, {
                force3D: true,
                y: 0,
                delay: 0.5,
                opacity: 1,
                ease: Power2.easeOut
            });
            a.preventDefault();
            var b = $(this).attr("href");
            $(".tab-content").not(b).css("display", "none");
            $(b).fadeIn();
        });
        // Share   ------------------
        $(".share-container").share({
            networks: ['facebook', 'pinterest', 'googleplus', 'twitter', 'linkedin']
        });
        var shrcn = $(".share-container"),
            swra = $(".share-wrapper"),
            clsh = $(".close-share-btn"),
            shic = $(".share-icon"),
            ssbtn = $(".showshare");

        function showShare() {
            ssbtn.addClass("uncl-share");
            shrcn.removeClass("isShare");
            TweenMax.to(swra, 0.6, {
                force3D: false,
                width: "350px",
                ease: Expo.easeInOut,
                onComplete: function() {
                    TweenMax.to(clsh, 0.4, {
                        force3D: true,
                        top: "0",
                        opacity: "1"
                    });
                    shic.each(function(a) {
                        var boi = $(this);
                        setTimeout(function() {
                            TweenMax.to(boi, 1.0, {
                                force3D: false,
                                opacity: "1"
                            });
                        }, 130 * a);
                    });
                }
            });
        }
        function hideShare() {
            ssbtn.removeClass("uncl-share");
            shrcn.addClass("isShare");
            TweenMax.to($(".share-icon"), 1.0, {
                force3D: false,
                opacity: "0"
            });
            TweenMax.to(clsh, 0.4, {
                force3D: true,
                top: "-60px",
                opacity: "0",
                onComplete: function() {
                    TweenMax.to(swra, 0.6, {
                        force3D: false,
                        delay: 0.2,
                        width: "0",
                        ease: Expo.easeInOut
                    });
                }
            });
        }
        clsh.on("click", function() {
            hideShare();
        });
        ssbtn.on("click", function() {
            if ($(".share-container").hasClass("isShare")) showShare();
            else hideShare();
        });
		//   Contact form------------------
		$("#contactform").submit(function () {
			var a = $(this).attr("action");
			$("#messagex").slideUp(750, function () {
				$("#messagex").hide();
				$("#submit").attr("disabled", "disabled");
				$.post(
                    a,
                    {
                        name: $("#name").val(),
                        email: $("#email").val(),
                        phone: $("#phone").val(),
                        subject: $("#subject").val(),
                        message: $("#message").val(),
                        lang: $("#lang").val()

                    },
                    function(a) {
                        document.getElementById("messagex").innerHTML = a;
                        $("#messagex").slideDown("slow");
                        $("#submit").removeAttr("disabled");
                        if (null != a.match("success"))
                            $("#contactform").slideDown("slow");
                    }
                );
			});
			return false;
		});
		$("#contactform input, #contactform textarea").keyup(function () {
			$("#messagex").slideUp(1500);
		});
        $('.chosen-select').selectbox();
        //   mailchimp------------------
        $("#subscribe").ajaxChimp({
            language: "eng",
            url: "http://gmail.us20.list-manage.com/subscribe/post?u=7e305c9e186ebc20bf3a39054&id=c74e0b660f"
        });
        $.ajaxChimp.translations.eng = {
            submit: "Submitting...",
            0: '<i class="fa fa-check"></i> We will be in touch soon!',
            1: '<i class="fa fa-warning"></i> You must enter a valid e-mail address.',
            2: '<i class="fa fa-warning"></i> E-mail address is not valid.',
            3: '<i class="fa fa-warning"></i> E-mail address is not valid.',
            4: '<i class="fa fa-warning"></i> E-mail address is not valid.',
            5: '<i class="fa fa-warning"></i> E-mail address is not valid.'
        };

        //   Video------------------
        var v = $(".background-youtube-wrapper").data("vid");
        var f = $(".background-youtube-wrapper").data("mv");
        $(".background-youtube-wrapper").YTPlayer({
            fitToBackground: true,
            videoId: v,
            pauseOnScroll: true,
            mute: f,
            callback: function() {
                var a = $(".background-youtube-wrapper").data("ytPlayer").player;
            }
        });
        var vid = $(".background-vimeo").data("vim");
        $(".background-vimeo").append('<iframe src="//player.vimeo.com/video/' + vid + '?background=1"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>');
        $(".video-holder").height($(".media-container").height());
        if ($(window).width() > 1024) {
            if ($(".video-holder").size() > 0)
                if ($(".media-container").height() / 9 * 16 > $(".media-container").width()) {
                    $(".background-vimeo iframe ").height($(".media-container").height()).width($(".media-container").height() / 9 * 16);
                    $(".background-vimeo iframe ").css({
                        "margin-left": -1 * $("iframe").width() / 2 + "px",
                        top: "-75px",
                        "margin-top": "0px"
                    });
                } else {
                    $(".background-vimeo iframe ").width($(window).width()).height($(window).width() / 16 * 9);
                    $(".background-vimeo iframe ").css({
                        "margin-left": -1 * $("iframe").width() / 2 + "px",
                        "margin-top": -1 * $("iframe").height() / 2 + "px",
                        top: "50%"
                    });
                }
        } else if ($(window).width() < 760) {
            $(".video-holder").height($(".media-container").height());
            $(".background-vimeo iframe ").height($(".media-container").height());
        } else {
            $(".video-holder").height($(".media-container").height());
            $(".background-vimeo iframe ").height($(".media-container").height());
        }
        //   scroll to------------------
        $(".custom-scroll-link").on("click", function() {
            var a = $(".main-header").height();
            if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") || location.hostname === this.hostname) {
                var b = $(this.hash);
                b = b.length ? b : $("[name=" + this.hash.slice(1) + "]");
                if (b.length) {
                    $("html,body").animate({
                        scrollTop: b.offset().top - a
                    }, {
                        queue: false,
                        duration: 1200,
                        easing: "easeInOutExpo"
                    });
                    return false;
                }
            }
        });
        $(".to-top").on("click", function(a) {
            a.preventDefault();
            $("html, body").animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        var $window = $(window);
        $window.on("scroll", function(a) {
            var a = $(document).height();
            var b = $(window).height();
            var c = $(window).scrollTop();
            var d = c / (a - b) * 100;
            $(".progress-bar").css({
                width: d + "%"
            });
        });
        //  Css------------------
        function csselem() {
            $(".height-emulator").css({
                height: $(".fixed-footer").outerHeight(true)
            });
            $(".slideshow-container .slideshow-item").css({
                height: $(".slideshow-container").outerHeight(true)
            });
            $(".half-slider-item").css({
                height: $(".half-slider-wrap").outerHeight(true)
            });
            $(".fs-slider-item").css({
                height: $(".fs-slider-wrap").outerHeight(true)
            });
            $(".ms_item").css({
                height: $(".multi-slideshow_1").outerHeight(true)
            });
            $(".ms_item2").css({
                height: $(".multi-slideshow_2").outerHeight(true)
            });
            $(".ms_item3").css({
                height: $(".multi-slideshow_3").outerHeight(true)
            });
            $(".ms-item_fs").css({
                height: $(".multi-slideshow_fs").outerHeight(true)
            });
            $(".half-slider-img-item").css({
                height: $(".half-slider-img").outerHeight(true)
            });
            $(".horizontal-grid-wrap").css({
                height: $(".content-holder").outerHeight(true) - 62 + "px"
            });
            $(".fixed-column-wrap").css({
                height: $window.outerHeight(true) - 90 + "px"
            });
        $(" #portfolio_horizontal_container .portfolio_item img  ").css({
            height: $(".portfolio_item").outerHeight(true)
        });
        }
        csselem();
        //   css ------------------
        $window.on("resize", function() {
            csselem();
            inithorizontalPortfolio();
        });
        var fcoltop = $(".fixed-column-top");
        fcoltop.on("click", function() {
            $("html, body").animate({
                scrollTop: $('#tabs-container').offset().top - 200 + "px"
            }, 1200);
        });
        //  scrollToFixed------------------
        $(".fixed-column").scrollToFixed({
            minWidth: 1064,
            zIndex: 12,
            marginTop: 120,
            removeOffsets: true,
            limit: function() {
                var a = $(".limit-box").offset().top - $(".fixed-column").outerHeight(true);
                return a;
            },
            preFixed: function() {
                TweenMax.to(fcoltop, 0.6, {
                    force3D: false,
                    right: "0",
                    ease: Expo.easeInOut
                });
            },
            postFixed: function() {
                TweenMax.to(fcoltop, 0.6, {
                    force3D: false,
                    right: "-40px",
                    ease: Expo.easeInOut
                });
            },
            preAbsolute: function() {
                TweenMax.to(fcoltop, 0.6, {
                    force3D: false,
                    right: "0",
                    ease: Expo.easeInOut
                });
            },
        });
        $(".fixed-column-wrap").scrollToFixed({
            minWidth: 1064,
            zIndex: 12,
            marginTop: 90,
            removeOffsets: true,
            limit: function() {
                var a = $(".limit-box").offset().top - $(".fixed-column-wrap").outerHeight(true);
                return a;
            }
        });
        $(".top_fix-filter").scrollToFixed({
            minWidth: 1064,
            zIndex: 12,
            marginTop: 90,
            removeOffsets: true,
            limit: function() {
                var a = $(".limit-box").offset().top - $(".top_fix-filter").outerHeight(true);
                return a;
            }
        });
        var mouse = {
            x: 0,
            y: 0
        };
        var pos = {
            x: 0,
            y: 0
        };
        var ratio = 0.15;
        var active = false;
        var ball = document.querySelector('.element');
        TweenLite.set(ball, {
            xPercent: -50,
            yPercent: -50
        });
        document.addEventListener("mousemove", mouseMove);

        function mouseMove(e) {
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            mouse.x = e.pageX;
            mouse.y = e.pageY - scrollTop;
        }
        TweenMax.ticker.addEventListener("tick", updatePosition);

        function updatePosition() {
            if (!active) {
                pos.x += (mouse.x - pos.x) * ratio;
                pos.y += (mouse.y - pos.y) * ratio;
                TweenMax.set(ball, {
                    x: pos.x,
                    y: pos.y
                });
            }
        }
        //  Map------------------
        if ($("#map-single").length > 0) {
            var latlog = $('#map-single').data('latlog'),
				popupTextit =  $('#map-single').data('popuptext'),
                map = L.map('map-single').setView(latlog, 15);
            L.tileLayer('http://{s}.tiles.wmflabs.org/bw-mapnik/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            var greenIcon = L.icon({
                iconUrl: 'frontend/images/marker.png',
                iconSize: [40, 40],
                popupAnchor: [0, -26]
            });
            L.marker(latlog, {
                icon: greenIcon
            }).addTo(map).bindPopup(popupTextit).openPopup();
        }
        //  menu------------------
        $("#menu").menu();
        $(".sliding-menu li a.nav").parent("li").addClass("submen-dec");
        $(".nav-scroll-bar-wrap").niceScroll({
            cursorwidth: "0px",
            cursorborder: "none",
            cursorborderradius: "0px",
        });
        var nbw = $(".nav-button"),
            nhw = $(".nav-holder"),
            nho = $(".nav-overlay");

        function showMenu() {
            nho.fadeIn(500);


            TweenMax.to(nhw, 0.6, {
                force3D: false,
                right: "0",
                ease: Expo.easeInOut
            });
            nhw.removeClass("but-hol");
            nbw.addClass("cmenu");
        }

        function hideMenu() {
            TweenMax.to(nhw, 0.6, {
                force3D: false,
                right: "-500px",
                ease: Expo.easeInOut
            });
            nhw.addClass("but-hol");
            nbw.removeClass("cmenu");
            nho.fadeOut(500);
        }
        nbw.on("click", function() {
            if (nhw.hasClass("but-hol")) showMenu();
            else hideMenu();
        });
        nho.on("click", function() {
            hideMenu();
        });
        //   hero parallax hover ------------------
        var $one = $(".mm-parallax"),
            browserPrefix = "",
            usrAg = navigator.userAgent;
        if (usrAg.indexOf("Chrome") > -1 || usrAg.indexOf("Safari") > -1) browserPrefix = "-webkit-";
        else if (usrAg.indexOf("Opera") > -1) browserPrefix = "-o";
        else if (usrAg.indexOf("Firefox") > -1) browserPrefix = "-moz-";
        else if (usrAg.indexOf("MSIE") > -1) browserPrefix = "-ms-";
        $(window).mousemove(function(a) {
            var b = Math.ceil(window.innerWidth / 1.5),
                c = Math.ceil(window.innerHeight / 1.5),
                d = a.pageX - b,
                e = a.pageY - c,
                f = e / c,
                g = -(d / b),
                h = Math.sqrt(Math.pow(f, 2) + Math.pow(g, 2)),
                i = 10 * h;
            $one.css(browserPrefix + "transform", "rotate3d(" + f + ", " + g + ", 0, " + i + "deg)");
        });
    }
    //   Parallax ------------------
function initparallax() {
    var a = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return a.Android() || a.BlackBerry() || a.iOS() || a.Opera() || a.Windows();
        }
    };
    trueMobile = a.any();
    if (null === trueMobile) {
        var b = new Scrollax();
        b.reload();
        b.init();
        var dotsCanvas = {
            init: function() {
                var $blocks = $('[data-dots]');
                $blocks.each(function() {
                    var $block = $(this);
                    var block = $block[0];
                    var $canvas = $("<canvas/>").appendTo($block);
                    var canvas = $canvas[0];
                    var width = $block.width();
                    var height = $block.height();
                    var ctx = canvas.getContext('2d');
                    ctx.width = width;
                    ctx.height = height;
                    var devicePixelRatio = window.devicePixelRatio || 1,
                        backingStoreRatio = ctx.webkitBackingStorePixelRatio || ctx.mozBackingStorePixelRatio || ctx.msBackingStorePixelRatio || ctx.oBackingStorePixelRatio || ctx.backingStorePixelRatio || 1;
                    var ratio = devicePixelRatio / backingStoreRatio;
                    canvas.width = width * ratio;
                    canvas.height = height * ratio;
                    ctx.scale(ratio, ratio);
                    var mouseX = undefined;
                    var mouseY = undefined;

                    function Circle(x, y) {
                        this.x = x;
                        this.y = y;
                        this.distance = 10;
                        this.radians = 0;
                        this.draw = function() {
                            ctx.beginPath();
                            ctx.strokeStyle = 'rgba(151, 151, 151, .3)';
                            ctx.moveTo(this.x + 3, this.y);
                            ctx.lineTo(this.x + 3, this.y + 6);
                            ctx.moveTo(this.x, this.y + 3);
                            ctx.lineTo(this.x + 6, this.y + 3);
                            ctx.stroke();
                        };
                        this.update = function() {
                            if (mouseX > -1) {
                                var k1 = mouseY - y;
                                var k2 = mouseX - x;
                                var tan = k1 / k2;
                                var yrad = Math.atan(tan);
                                if (mouseX < x) {
                                    yrad = Math.PI - Math.atan(-tan);
                                }
                                this.x = x + Math.cos(yrad) * this.distance;
                                this.y = y + Math.sin(yrad) * this.distance;
                            }
                            this.draw();
                        };
                    };
                    var circlesArray = [];
                    var gutter = 40;
                    var countW = Math.floor(width / gutter);
                    var countH = Math.floor(height / gutter);
                    var len = countW * countH;
                    for (var i = 0; i < countH; i++) {
                        for (var t = 0; t < countW; t++) {
                            var x = gutter * t;
                            var y = gutter * i;
                            circlesArray.push(new Circle(x, y));
                        }
                    }
                    var loop = function() {
                        ctx.clearRect(0, 0, ctx.width, ctx.height);
                        for (var i = 0; i < circlesArray.length; i++) {
                            circlesArray[i].update();
                        }
                    };
                    document.addEventListener('mousemove', function(e) {
                        var parentOffset = $(canvas).parent().offset();
                        var relX = e.pageX - parentOffset.left;
                        var relY = e.pageY - parentOffset.top;
                        mouseX = relX;
                        mouseY = relY;
                        ctx.clearRect(0, 0, ctx.width, ctx.height);
                        for (var i = 0; i < circlesArray.length; i++) {
                            circlesArray[i].update();
                        }
                        loop();
                    });
                    loop();
                });
            }
        };
        window.requestAnimationFrame = (function() {
            return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function(callback) {
                window.setTimeout(callback, 1000 / 60);
            };
        })();
        window.cancelAnimationFrame = (function() {
            return window.cancelAnimationFrame || window.webkitCancelAnimationFrame || window.mozCancelAnimationFrame || function(timPtr) {
                window.clearTimeout(timPtr);
            };
        })();
        dotsCanvas.init();
    }
    if (trueMobile) $(".bgvid , .background-vimeo , .background-youtube-wrapper  , .gallery__dots").remove();
}
function initpageloadAnimation() {
    TweenMax.to($(".pr-bg"), 0.6, {
        force3D: true,
        left: "100%",
        ease: Expo.easeInOut
    });
    setTimeout(function() {
        $(".bot-element").each(function(a) {
            var b = $(this),
                bp = $(".hlaf-slider-pag .swiper-pagination-bullet");
            setTimeout(function() {
                TweenMax.to(b, 1.2, {
                    force3D: true,
                    bottom: "0",
                    ease: Expo.easeInOut
                });
            }, 230 * a);
        });
        $(".hlaf-slider-pag .swiper-pagination-bullet").each(function(ac) {
            var bp = $(this);
            setTimeout(function() {
                TweenMax.to(bp, 0.8, {
                    force3D: true,
                    opacity: "1",
                    top: "0",
                    ease: Expo.easeInOut
                });
            }, 130 * ac);
        });
        TweenMax.to($(".scroll-nav-wrap"), 0.8, {
            force3D: true,
            delay: 0.3,
            left: "0",
            ease: Expo.easeInOut
        });
        TweenMax.to($(".first-tile_load"), 1.2, {
            force3D: true,
            delay: 0.4,
            y: 0,
            opacity: "1",
            ease: Power2.easeOut
        });
    }, 400);
}
//   load animation------------------
function contentAnimShow() {
    TweenMax.to($(".horizonral-subtitle strong"), 0.9, {
        force3D: true,
        y: -100,
        opacity: 0,
        delay: 0.7,
        ease: Power2.easeOut,
        onComplete: function() {
            TweenMax.to($(".horizonral-subtitle strong"), 0.1, {
                force3D: true,
                y: 100
            });
        }
    });
    $(".lg-backdrop , .lg-outer").remove();
    $(".nav-button").removeClass("cmenu");
    $(".showshare").removeClass("uncl-share");
    $(".page-load").fadeIn(1);
    TweenMax.to($(".page-load_bg2"), 0.8, {
        force3D: true,
        right: "0",
        ease: Expo.easeInOut
    });
    TweenMax.to($(".page-load_bg"), 0.9, {
        force3D: true,
        right: "0",
        delay: 0.1,
        ease: Expo.easeInOut
    });
    setTimeout(function() {
        $("html, body").animate({
            scrollTop: 0
        }, {
            queue: true,
            duration: 10,
        });
    }, 1000);
}
function contentAnimHide() {
        var chdpt = $(".content-holder").data("pagetitle");
        $(".horizonral-subtitle strong").text(chdpt);
        TweenMax.to($(".horizonral-subtitle strong"), 0.9, {
            force3D: true,
            y: 0,
            opacity: 1,
            delay: 0.8,
            ease: Power2.easeOut
        });
        setTimeout(function() {
            initpageloadAnimation();
        }, 1000);
        TweenMax.to($(".page-load_bg"), 0.8, {
            force3D: true,
            left: "100%",
            ease: Expo.easeInOut
        });
        TweenMax.to($(".page-load_bg2"), 0.9, {
            force3D: true,
            left: "100%",
            delay: 0.1,
            ease: Expo.easeInOut,
            onComplete: function() {
                setTimeout(function() {
                    $(".page-load").fadeOut(1);
                    TweenMax.to($(".page-load_bg2 , .page-load_bg"), 0.0, {
                        force3D: true,
                        left: "0",
                        right: "100%"
                    });
                }, 10);
            }
        });
    }
    $("<div class='page-load'><div class='page-load_bg'><div class='loader loader_each'><span></span></div></div><div class='page-load_bg2'></div></div>").appendTo("#main");
//   Init Ajax------------------
$(function() {
    $.coretemp({
        reloadbox: "#wrapper",
        outDuration: 700,
        inDuration: 200
    });
    readyFunctions();
    $(document).on({
        ksctbCallback: function() {
            readyFunctions();
        }
    });
});
//   Init All Functions------------------
function readyFunctions() {
    initTheside();
    initparallax();
}
