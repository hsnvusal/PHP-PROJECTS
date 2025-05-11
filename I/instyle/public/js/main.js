(function ($) {
    $(document).ready(function () {

        $(".filter-button-menu").click(function () {
            $("body").toggleClass("filter-mobile");
            $(".page-header-filter").toggleClass("active");
        })
        $(".button-filter-close").click(function () {
            $("body").removeClass("filter-mobile");
            $(".page-header-filter").removeClass("active");
        })
        $(".comments-card-body span").click(function () {
            $(this).parent().children(".comments-card-body p").toggleClass("active");
        })
        $(".wrapper .tab").click(function () {
            $(".wrapper .tab").removeClass("active").eq($(this).index()).addClass("active");
            $(".tab_item").hide().eq($(this).index()).fadeIn()
        }).eq(0).addClass("active");


        $('.address-input').click(function () {
            let name = $(this).attr('name');
            let self = $(this);
            [].filter.call($(`input[name=${name}]`), function (ele) {
                return self[0] !== $(ele)[0];
            }).forEach(function (otherEle) {
                $(otherEle).removeAttr('data-check');
            });

            if ($(this).attr('data-check')) {
                $(this).prop("checked", false);
                $(this).removeAttr('data-check');
            } else {
                $(this).attr("data-check", "hey");
            }
        });

        $(".tab").click(function () {
            setTimeout(function () {
                swiper1.update();
            }, 100);
        })
        $(".header-menu-button").click(function () {
            $(this).toggleClass("active");
            $(".menu-popup").toggleClass("active");
            $(".layer-menu").toggleClass("active");
            $("body").toggleClass("active");
        })
        $(document).click(function (e) {
            e.stopPropagation();
            var container = $(".menu-popup, .header-menu-button");
            if (container.has(e.target).length === 0) {
                $(".menu-popup").removeClass("active");
                $(".header-menu-button").removeClass("active");
                $(".layer-menu").removeClass("active")
                $("body").removeClass("active");
            }
        });

        $(".menu-popup .tab-menu").click(function () {
            $(".menu-popup .tab-menu").removeClass("active").eq($(this).index()).addClass("active");
            $(".menu-tab_item").hide().eq($(this).index()).fadeIn()
        }).eq(0).addClass("active");

        // lang
        $(".lang-head").click(function () {
            $(".lang-body").slideToggle("fast");
            $(this).toggleClass("active");
        })
        $(document).click(function (e) {
            e.stopPropagation();
            var container = $(".lang");
            if (container.has(e.target).length === 0) {
                $(".lang-head").removeClass("active");
                $(".lang-body").slideUp("fast")
            }
        });
        $(".search-menu").click(function () {
            $(this).toggleClass("active");
            $(".search-popup").toggleClass("active");
        })
        $(document).click(function (e) {
            e.stopPropagation();
            var container = $(".search-menu, .search-popup");
            if (container.has(e.target).length === 0) {
                $(".search-menu").removeClass("active");
                $(".search-popup").removeClass("active")
            }
        });
        // click
        $(".user-button").click(function () {
            $(this).toggleClass("active");
            $(".user-popup").toggleClass("active")
        })
        $(document).click(function (e) {
            e.stopPropagation();
            var container = $(".user-popup, .user-button");
            if (container.has(e.target).length === 0) {
                $(".user-button").removeClass("active");
                $(".user-popup").removeClass("active")
            }
        });
        // popup
        success = () => {
            $(".popup-1").addClass("active");
            $("body").addClass("active");
        };
        error = () => {
            $(".popup-2").addClass("active");
            $("body").addClass("active");
        };

        addLocation = () => {
            $(".popup-3").addClass("active");
            $("body").addClass("active");
        }

        addcomment = () => {
            $(".popup-4").addClass("active");
            $("body").addClass("active");
        }

        $(".popup-close").click(function () {
            $(".popup").removeClass("active")
            $("body").removeClass("active");
        })

        // address card more button
        $(".address-card-more-button").click(function () {
            $(".address-card-settings").removeClass("active");
            $(this).parent().parent().children(".address-card-settings").toggleClass("active");
        })
        $(document).click(function (e) {
            e.stopPropagation();
            var container = $(".address-card");
            if (container.has(e.target).length === 0) {
                $(".address-card-settings").removeClass("active");
            }
        });
        $(".order-card-header").click(function () {
            $('.order-card-header').not($(this)).removeClass('active');
            $(".order-card-body").not($(this).next()).slideUp();
            $(this).toggleClass("active");
            $(this).parent().children('.order-card-body').slideToggle();
        })
        $('.increase').click(function () {
            if ($(this).prev().val()) {
                $(this).prev().val(+$(this).prev().val() + 1);
            }
        });
        $('.decrease').click(function () {
            if ($(this).next().val() > 1) {
                if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
            }
        });
        // products filter
        $(".filter-button button").click(function () {
            $('.filter-button button').not($(this)).removeClass('active');
            $(".products-filter").not($(this).next()).removeClass("active");
            $(this).toggleClass("active")
            // $('.filter-button button').toggleClass("mobactive");
            // $(".products-filter").toggleClass("mobactive");
            $(this).parent().children(".products-filter").toggleClass("active");
        })
        $(document).click(function (e) {
            e.stopPropagation();
            var container = $(".filter-button");
            if (container.has(e.target).length === 0) {
                $(".filter-button button").removeClass("active");
                $(".products-filter").removeClass("active");
            }
        });
        // product inner right accordion
        $(".product-detail-accordion-header").click(function () {
            $('.product-detail-accordion-header').not($(this)).removeClass('active');
            $(".product-detail-accordion-body").not($(this).next()).slideUp();
            $(this).toggleClass("active")
            $(this).parent().children('.product-detail-accordion-body').slideToggle();
        })
        // product inner left accordion
        $(".product-accordion-header").click(function () {
            $('.product-accordion-header').not($(this)).removeClass('active');
            $('.product-accordion-body').not($(this).next()).slideUp();
            $(this).toggleClass("active")
            $(this).parent().children('.product-accordion-body').slideToggle();
        })
        $(".password-icon").click(function () {

            if ($("#password").attr("type") == "password") {
                $("#password").attr("type", "text");
            } else {
                $("#password").attr("type", "password");
            }
        });

        var swiper6 = new Swiper(".product-carosuel", {
            slidesPerView: 3,
            loop: true,
            spaceBetween: 0,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                459: {
                    slidesPerView: 1,
                },
                767: {
                    slidesPerView: 2,
                },
                991: {
                    slidesPerView: 3,
                },
            }
        });
        // homepage swiper

        var swiper5 = new Swiper(".mySwiper7", {
            slidesPerView: 1,
            pagination: {
                el: ".swiper-pagination",
            },
        });

        // homepage category

        var swiper2 = new Swiper(".mySwiper2", {
            slidesPerView: 5.5,
            spaceBetween: 20,
            breakpoints: {
                320: {
                    slidesPerView: 1.6,
                    spaceBetweenSlides: 20
                },
                459: {
                    slidesPerView: 2.2,
                    spaceBetweenSlides: 20
                },
                767: {
                    slidesPerView: 3.5,
                    spaceBetweenSlides: 20
                },
                991: {
                    slidesPerView: 5.5,
                    spaceBetweenSlides: 20
                }
            }

        });

        var swiper1 = new Swiper(".mySwiper3", {
            slidesPerView: 5.5,
            spaceBetween: 20,
            breakpoints: {
                320: {
                    slidesPerView: 1.6,
                    spaceBetweenSlides: 20
                },
                459: {
                    slidesPerView: 2.2,
                    spaceBetweenSlides: 20
                },
                767: {
                    slidesPerView: 3.5,
                    spaceBetweenSlides: 20
                },
                991: {
                    slidesPerView: 5.5,
                    spaceBetweenSlides: 20
                }
            }
        });
        // brand
        var swiper = new Swiper(".mySwiper4", {
            slidesPerView: 6.4,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                320: {
                    slidesPerView: 2.2,
                    spaceBetweenSlides: 20
                },
                459: {
                    slidesPerView: 3.2,
                    spaceBetweenSlides: 20
                },
                767: {
                    slidesPerView: 4.5,
                    spaceBetweenSlides: 20
                },
                991: {
                    slidesPerView: 5.5,
                    spaceBetweenSlides: 20
                },
                1199: {
                    slidesPerView: 6.5,
                    spaceBetweenSlides: 20
                }
            }


        });
        // products
        var swiper4 = new Swiper(".mySwiper5", {
            slidesPerView: 3,
            spaceBetween: 20,
            navigation: {
                prevEl: ".button-prev",
                nextEl: ".button-next",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1.2,
                    spaceBetweenSlides: 20
                },
                459: {
                    slidesPerView: 2.2,
                    spaceBetweenSlides: 20
                },
                767: {
                    slidesPerView: 3,
                    spaceBetweenSlides: 20
                },

            }
        });
        var $range = $(".js-range-slider"),
            $from = $(".from"),
            $to = $(".to"),
            range,
            min = $range.data('min'),
            max = $range.data('max'),
            from,
            to;

        var updateValues = function () {
            $from.prop("value", from);
            $to.prop("value", to);
        };

        $range.ionRangeSlider({
            onChange: function (data) {
                from = data.from;
                to = data.to;
                updateValues();
            }
        });

        range = $range.data("ionRangeSlider");
        var updateRange = function () {
            range.update({
                from: from,
                to: to
            });
        };

        $from.on("input", function () {
            from = +$(this).prop("value");
            if (from < min) {
                from = min;
            }
            if (from > to) {
                from = to;
            }
            updateValues();
            updateRange();
        });

        $to.on("input", function () {
            to = +$(this).prop("value");
            if (to > max) {
                to = max;
            }
            if (to < from) {
                to = from;
            }
            updateValues();
            updateRange();
        });

    });
})(jQuery);