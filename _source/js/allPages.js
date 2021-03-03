// init base functions
$(window).on('load', function () {
    scrollDirection();
    initGettersAndSetters();
    changeTouchClickText();
});
$(window).on('hashchange', function (a) {
    initGettersAndSetters();
});

// init AOS
if (is.not.ie()) {
    AOS.init();
} else {
    $('*').removeAttr("data-aos");
}

// l
if ($('.l-nav').length) {
    var isActive = 'is-active';
    var navEl = {
        scrollInit: 0,
        scrollClassScrolled: 99,
        scrollClassMiddle: 600,
        body: $('body'),
        nav: $('.l-nav'),
        navHidden: $('.l-navHidden'),
        hamburguer: $('.l-nav .c-hamburguer'),
        contentHero: $('.l-nav__contentHero'),
        mask: $('.l-navHidden__mask')
    };

    function checkResponsiveMode() {
        var resultCheck;
        var displayCheck = navEl.hamburguer.css('display');
        if (displayCheck !== 'none') {
            resultCheck = 'is-responsive';
            navEl.nav.removeClass('is-desktop');
            navEl.nav.addClass('is-responsive');
        } else {
            resultCheck = 'is-desktop';
            navEl.nav.removeClass('is-responsive');
            navEl.nav.addClass('is-desktop');
        }
        return resultCheck;
    }

    function closeAllNavElements() {
        $('.c-subMenu').removeClass('is-active');
        navEl.hamburguer.removeClass(isActive);
    }
    function disableOverflow() {
        navEl.body.addClass('u-overflowBlocked');
    }
    function enableOverflow() {
        navEl.body.removeClass('u-overflowBlocked');
    }


    // RESPONSIVE MENU
    // - open
    navEl.hamburguer.on('click', function() {
        navEl.navHidden.addClass(isActive);
        disableOverflow();
    });
    navEl.mask.on('click', function() {
        navEl.navHidden.removeClass(isActive);
        navEl.hamburguer.removeClass(isActive);
        enableOverflow();
    });


    // SCROLL CHANGES
    $(window).on('load', function(event) {
        checkResponsiveMode();
        var scrollBody = $(this).scrollTop();
        if (scrollBody > 1) {
            navEl.nav.addClass('is-scrolled');
        } else {
            navEl.nav.removeClass('is-scrolled');
        }
    });
    $(window).on('scroll', function() {
        var scrollBody = $(this).scrollTop();
        // scroll up to 99
        if (scrollBody > navEl.scrollClassScrolled) {
            navEl.nav.addClass('is-scrolled');
        } else {
            navEl.nav.removeClass('is-scrolled');
        }
        // middle class
        if (scrollBody > navEl.scrollClassMiddle) {
            navEl.nav.addClass('is-hidden');
            navEl.nav.addClass('is-middle');
        } else {
            navEl.nav.removeClass('is-hidden');
            navEl.nav.removeClass('is-middle');
        }
        // scroll up or down
        if (scrollBody < navEl.scrollInit) {
            navEl.nav.removeClass('is-hidden');
            navEl.nav.addClass('is-scrolledUp');
            navEl.nav.removeClass('is-scrolledDown');
        } else {
            navEl.nav.removeClass('is-scrolledUp');
            navEl.nav.addClass('is-scrolledDown');
        }
        // close menus on hidden nav
        if(navEl.nav.hasClass('is-hidden')) {
            closeAllNavElements();
        }
        // reference var
        navEl.scrollInit = scrollBody;
    });

}
if ($('.l-headerHome').length) {
    $('.js-scrollContent').on('click', function(e) {
        e.preventDefault();
        var finalDestiny = 'main';
        goToSection__scroll(finalDestiny, 70, 70, 800, 5);
    });
}
if ($('.l-fixedSocial').length) {
    $(window).on('scroll', function () {stickyPosition('.l-fixedSocial', 10, get__navHeight() + 10);});
    $(window).on('load', function () {stickyPosition('.l-fixedSocial', 10, get__navHeight() + 10);});
}

// s
if ($('.s-callStructure').length) {
    $(window).on('load', function() {
        setTimeout(function () {
            var swiper__headerHome = new Swiper('.s-callStructure__swiper > .swiper-container', {
                speed: 400,
                spaceBetween: 0,
                loop: true,
                navigation: {
                    nextEl: '.s-callStructure__swiper .swiper-button-next',
                    prevEl: '.s-callStructure__swiper .swiper-button-prev',
                },
                effect: 'cube',
                cubeEffect: {
                    slideShadows: true,
                    shadow: true,
                    shadowOffset: 10,
                    shadowScale: 0.65,
                },
            });
        }, 50);

    });
}
if ($('.s-installations').length) {
    $(window).on('load', function() {
        setTimeout(function () {
            var swiper__headerHome = new Swiper('.s-installations__swiper > .swiper-container', {
                speed: 400,
                spaceBetween: 0,
                loop: true,
                autoHeight: true,
                navigation: {
                    nextEl: '.s-installations__swiper .swiper-button-next',
                    prevEl: '.s-installations__swiper .swiper-button-prev',
                }
            });
        }, 50);
    });
}
if ($('.s-benefits').length) {
    $(window).on('load', function() {
        setTimeout(function () {
            var swiper__headerHome = new Swiper('.s-benefits__swiper > .swiper-container', {
                speed: 400,
                spaceBetween: 0,
                slidesPerView: 4,
                loop: true,
                navigation: {
                    nextEl: '.s-benefits__swiper .swiper-button-next',
                    prevEl: '.s-benefits__swiper .swiper-button-prev',
                },
                breakpoints: {
                    630: {
                        slidesPerView: 1,
                    },
                    830: {
                        slidesPerView: 2,
                    },
                    1130: {
                        slidesPerView: 3,
                    }
                }
            });
        }, 50);
    });
}
if ($('.s-extraInfos').length) {
    $(window).on('load', function() {
        setTimeout(function () {
            var swiper__headerHome = new Swiper('.s-extraInfos__swiper > .swiper-container', {
                speed: 400,
                spaceBetween: 0,
                slidesPerView: 2,
                navigation: {
                    nextEl: '.s-extraInfos__swiper .swiper-button-next',
                    prevEl: '.s-extraInfos__swiper .swiper-button-prev',
                },
                breakpoints: {
                    1030: {
                        slidesPerView: 1,
                    }
                }
            });
        }, 50);
    });
}
if ($('.s-beVoluntary').length) {
    var swiper__thumbs = new Swiper('.swiper__thumbs', {
        spaceBetween: 0,
        slidesPerView: 7,
        loop: true,
        freeMode: true,
        loopedSlides: 5, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        navigation: {
            nextEl: '.swiper__thumbs .swiper-button-next',
            prevEl: '.swiper__thumbs .swiper-button-prev',
        },
        breakpoints: {
            350: {
                slidesPerView: 2,
            },
            410: {
                slidesPerView: 3,
            },
            600: {
                slidesPerView: 4,
            },
            760: {
                slidesPerView: 3,
            },
            830: {
                slidesPerView: 4,
            },
            1230: {
                slidesPerView: 5,
            }
        }
    });
    var swiper__big = new Swiper('.swiper__big', {
        spaceBetween: 0,
        loop: true,
        autoHeight: true,
        loopedSlides: 5, //looped slides should be the same
        thumbs: {
            swiper: swiper__thumbs,
        },
    });
}
if ($('.s-contact').length) {
    $('.js-selectEstado').on('change', function() {
       let thisSelectedOption = $(this).val();
       console.log(thisSelectedOption)
       if ((thisSelectedOption === '') || (thisSelectedOption === 'Selecione')) {
           $('.js-selectCidade').closest('li').addClass('u-dnone');
       } else {
           $('.js-selectCidade').closest('li').removeClass('u-dnone');
       }
    });
}

// m
if ($('.m-defaultModal').length) {
    // open
    $('.js-openModal').on('click', function(e) {
        e.preventDefault;
        let thisModal = $(this).attr('href');
        $(thisModal).addClass('is-active');
        $('body').addClass('u-overflowBlocked');
    });

    // close
    $('.js-closeModal').on('click', function(e) {
        e.preventDefault;
        $('.m-defaultModal').removeClass('is-active');
        $('body').removeClass('u-overflowBlocked');
        window.location.hash = '#_';
    });

    // open by hash
    $(window).on('load hashchange', function() {
        if (window.location.hash) {
            if (($(window.location.hash).length) && ($(window.location.hash).hasClass('m-defaultModal'))) {
                $('body').addClass('u-overflowBlocked');
                $(window.location.hash).addClass('is-active');
            } else {
                $('body').removeClass('u-overflowBlocked');
                $(window.location.hash).removeClass('is-active');
            }
        }
    });
}