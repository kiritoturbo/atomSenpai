$(document).ready(function() {
    // INIT
    // loadelement.init();
    _biggerlink();
    // POPUP
    $('.popup-pc .popup-cont').hide();
    $('.popup-pc .popup-hd').click(function() {
        $(this).toggleClass('active');
        $('body').addClass('pop-show');
        $(this).next(".popup-cont").show();
    });
    load_after_footer();
    //MENU OPEN / CLOSE ON MOBILE
    // $('a.menu-btn').click(function() {
    //     if ($(this).hasClass('open')) {
    //         $(this).removeClass('open');
    //         $('body').removeClass('menu-open');
    //         $('.menu-wrapper').removeClass('open');
    //     } else {
    //         $(this).addClass('open')
    //         $('body').addClass('menu-open');
    //         $('.menu-wrapper').addClass('open');
    //     }
    // });
    load_after_header();

    $("div[data=block]").each(function() {
        var loaded = $(this).attr('loaded');
        if (loaded == undefined || loaded == false) {
            var url = domain + $(this).data("get");

            var elememnt = $(this);
            elememnt.removeAttr("data-get");

            $.get(url, function(data, status) {
                console.log("get content: " + status);
                elememnt.html(data);
                elememnt.attr('loaded', true);

                loadelement.loadjsblock();
            });
        }
    });

});

//TOGGLE BOX MOBILE
$(window).on('load', function() {
    var width = $(window).width();
    if (width <= 767) {
        $('.toggle-mb .toggle-cont').hide();
        $('.toggle-mb .toggle-hd').click(function() {
            $(this).toggleClass('active')
            $(this).next().stop().slideToggle()
        })
        $('.toggle-mb.default-open .toggle-hd').trigger('click');
    }
    $(".close-popup,body.pop-show .popup-cont").click(function() {
        $(".popup-cont").hide();
        $(".popup-hd").removeClass("active");
        $('body').removeClass('pop-show');

    });
    if (width <= 767) {
        $('.popup-mb .popup-cont').hide();
        $('.popup-mb .popup-hd').click(function() {
            $(this).toggleClass('active');
            $(this).next(".popup-cont").show();
        });
        // $('a.previouspostslink').text('前へ');
        // $('a.nextpostslink').text('次へ');
    }
    var width = $(window).width();
    if (width < 768) {
        if (jQuery('.js-scrollable').length > 0) {
            new ScrollHint('.js-scrollable', {
                applyToParents: true,
                suggestiveShadow: true,
                i18n: {
                    scrollable: 'スクロールできます'
                }
            });
        }
    }
});

//TOGGLE BOX PC&MB
$(window).on('load', function() {
    $('.news-important.toggle-pc .toggle-cont').show();
    $('.toggle-pc .toggle-cont').hide();
    $('.toggle-pc .toggle-hd').click(function() {
        $(this).toggleClass('active');
        $(this).closest(".toggle-pc").toggleClass("toggle-open");
        $(this).next('.toggle-cont').stop().slideToggle();
        if ($(this).parent().hasClass('slide-toggle')) {
            setTimeout($(this).parent().find('.slide-facility').slick('refresh'), 1000);
        }
    });
    var width = $(window).width();
    if (width > 767) {
        $('.toggle-pc.default-open .toggle-hd').trigger('click');
    }
    // tab
    $(function() {
        //$('.tab-content:first-child').show();
        $('.tab-nav-link').bind('click', function(e) {
            $this = $(this);
            //$tabs = $this.parent().parent().next();
            $target = $($this.data("target"));
            $this.siblings().removeClass('active');
            $this.siblings().find('a').removeClass('active');
            $target.siblings().removeClass('active');
            $this.addClass('active');
            $this.find('a').addClass('active');
            $target.addClass('active');
        });
        $('.tab-nav-link:first-child').trigger('click');
    });
});
$(document).ready(function() {
    // SMOOTHSCROLL
    $("a[href^=\\#]:not(.popup, .tabs-link, .toggle-hd),body.home header .nav-home-scroll a,body.home footer a.footer-home-anchor,body.home .footer-logo a,body.home footer a.footer-link-home").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
            // Store hash
            var hash = this.hash;
            
            if(hash == "#home"){ hash = "#masthead"; }
            console.log(hash);
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 400, function() {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });

        } // End if
    });
});



$(document).ready(function() {

    $('.slide-detail-post').on('init', function(event, slick, direction) {

        // check to see if there are one or less slides
        if (!($('.slide-detail-post .slick-slide').length > 1)) {

            // remove arrows
            $('.slide-detail-post .slick-dots').hide();

        }

    });

    $('.slide-banner-home').slick({
        infinite: true,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
        fade: true,
        dots: false
    });
    $('.box-home-slide-work').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        centerMode: false,
        focusOnSelect: true,
        nextArrow: '<button class="slide-arrow next-arrow"><img alt="next" src="https://www.atomgroup.jp/recruit/assets/images/index/icon-slide-next.svg"></button>',
        prevArrow: '<button class="slide-arrow prev-arrow"><img alt="prev" src="https://www.atomgroup.jp/recruit/assets/images/index/icon-slide-prev.svg"></button>',
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }, ]
    });
    var width = $(window).width();
    if (width < 768) {
        $('.list-recruit-cms .box-list-recruit').hide();
        var recruit = $('#colorselector').find(':selected').val();
        $('#' + recruit).show();
        $('#colorselector').change(function() {
            $('.box-list-recruit').hide();

            $('#' + $(this).val()).show();
            $(this).attr('selected');
        });

    }


    function BlurTextAnimeControl() {
        $('.blurTrigger').each(function() { //blurTriggerというクラス名が
            var elemPos = $(this).offset().top - 50; //要素より、50px上の
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight) {
                $(this).addClass('blur'); // 画面内に入ったらblurというクラス名を追記
            } else {
                $(this).removeClass('blur'); // 画面外に出たらblurというクラス名を外す
            }
        });
    }

    // 画面をスクロールをしたら動かしたい場合の記述
    $(window).scroll(function() {
        BlurTextAnimeControl(); /* アニメーション用の関数を呼ぶ*/
    }); // ここまで画面をスクロールをしたら動かしたい場合の記述

    // 画面が読み込まれたらすぐに動かしたい場合の記述
    $(window).on('load', function() {
        BlurTextAnimeControl(); 
    });
  
})

$(function() {
    var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;
    var pos = 0;
    var header = $('header');
    if (windowwidth > 768) {
        $(window).on('scroll', function() {
            if ($(this).scrollTop() < pos || $(this).scrollTop() < 500) {
                header.removeClass('hide');
            } else {
                header.addClass('hide');
            }
            pos = $(this).scrollTop();
        });
    }
});
var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;

var load_after_header = function() {
    var width = $(window).width();


    $('a.menu-btn').click(function() {
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
            $('body').removeClass('menu-open');
            $('.menu-wrapper').removeClass('open');
            $('.menu-pc-cont').removeClass('open');
            window.onscroll = function() {};
        } else {
            $(this).addClass('open')
            $('body').addClass('menu-open');
            $('.menu-wrapper').addClass('open');
            $('.menu-pc-cont').addClass('open');
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,

                // if any scroll is attempted, set this to the previous value
                window.onscroll = function() {
                    window.scrollTo(scrollLeft, scrollTop);
                };
        }
    });
    $('header .nav-main a:not(.toggle-hd)').click(function() {
        var width = $(window).width();
        if (width <= 767) {
            $('a.menu-btn').trigger('click');
        }
    });

    $(function() {
        $('header a').each(function() {
            href = $(this).attr('href');
            if ($('body').hasClass('subdir')) {
                if (href.startsWith('./'))
                    $(this).attr('href', '.' + href);
            }
        });
        $('header img').each(function() {
            src = $(this).attr('src');
            if ($('body').hasClass('subdir')) {
                if (src.startsWith('./'))
                    $(this).attr('src', '.' + src);
            }
        });
    });

    // left: 37, up: 38, right: 39, down: 40,
    // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
    var keys = {
        37: 1,
        38: 1,
        39: 1,
        40: 1
    };

    function preventDefault(e) {
        e.preventDefault();
    }

    function preventDefaultForScrollKeys(e) {
        if (keys[e.keyCode]) {
            preventDefault(e);
            return false;
        }
    }

    // modern Chrome requires { passive: false } when adding event
    var supportsPassive = false;
    try {
        window.addEventListener(" test ", null, Object.defineProperty({}, 'passive', {
            get: function() {
                supportsPassive = true;
            }
        }));
    } catch (e) {}

    var wheelOpt = supportsPassive ? {
        passive: false
    } : false;
    var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

    // call this to Disable
    function disableScroll() {
        window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
        window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
        window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
        window.addEventListener('keydown', preventDefaultForScrollKeys, false);
    }

    // call this to Enable
    function enableScroll() {
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
        window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
        window.removeEventListener('touchmove', preventDefault, wheelOpt);
        window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
    }

    $(document).ready(function() {
        var width = $(window).width();
        if (width => 767) {
            $('.nav-item a span').hover(function() {
                $(this).closest('li').addClass("active");
            });
            $('.nav-item').on('mouseleave', function() {
                $(this).removeClass('active');
            });
        };
        $(function() {
            var white = $("#control-cl-white"),
                blue = $("#control-cl-blue"),
                yellow = $("#control-cl-yellow"),
                black = $("#control-cl-black"),
                html = $("html"),
                data = localStorage.getItem('color');
            if (data == 'blue') {
                $('.control-cl-item').removeClass('active');
                blue.addClass('active');
                html.removeClass('pageYellow');
                html.removeClass('pageBlack');
                html.addClass('pageBlue');
            } else if (data == 'yellow') {
                $('.control-cl-item').removeClass('active');
                yellow.addClass('active');
                html.removeClass('pageBlue');
                html.removeClass('pageBlack');
                html.addClass('pageYellow');
            } else if (data == 'black') {
                $('.control-cl-item').removeClass('active');
                black.addClass('active');
                html.removeClass('pageBlue');
                html.removeClass('pageYellow');
                html.addClass('pageBlack');
            } else {
                $('.control-cl-item').removeClass('active');
                html.removeClass('pageBlue');
                html.removeClass('pageYellow');
                html.removeClass('pageBlack');
            }
            blue.on("click", function() {
                blue.addClass('active');
                html.removeClass('pageYellow');
                html.removeClass('pageBlack');
                html.addClass('pageBlue');
                localStorage.setItem('color', 'blue');
            });
            yellow.on("click", function() {
                yellow.addClass('active');
                html.removeClass('pageBlue');
                html.removeClass('pageBlack');
                html.addClass('pageYellow');
                localStorage.setItem('color', 'yellow');
            });
            black.on("click", function() {
                $('.control-cl-item').removeClass('active');
                black.addClass('active');
                html.removeClass('pageBlue');
                html.removeClass('pageYellow');
                html.addClass('pageBlack');
                localStorage.setItem('color', 'black');
            });
            white.on("click", function() {
                $('.control-cl-item').removeClass('active');
                html.removeClass('pageBlue');
                html.removeClass('pageYellow');
                html.removeClass('pageBlack');
                localStorage.setItem('color', '');
            });
        });
        $(function() {
            var normal = $("#control-fs-normal"),
                large = $("#control-fs-large"),
                html = $("html"),
                data = localStorage.getItem('fs');
            if (data == 'large') {
                $('.control-fs-item').removeClass('active');
                large.addClass('active');
                html.addClass('pageLarge');
            } else {
                $('.control-fs-item').removeClass('active');
                html.removeClass('pageLarge');
            }
            large.on("click", function() {
                html.addClass('pageLarge');
                large.addClass('active');
                localStorage.setItem('fs', 'large');
            });
            normal.on("click", function() {
                $('.control-fs-item').removeClass('active');
                html.removeClass('pageLarge');
                localStorage.setItem('fs', '');
            });
        });
    });

    // $(document).ready(function() {
    //     // SMOOTHSCROLL
    //     $("body.page-course .nav-course .mega-menu a,body.page-facility .nav-facility .mega-menu a,body.page-service .nav-service .mega-menu a").on('click', function(event) {
    //         url = $(this).attr('href');
    //         // Make sure this.hash has a value before overriding default behavior
    //         if (url.indexOf('#') > 0) {
    //             // Prevent default anchor click behavior
    //             event.preventDefault();
    //             // Store hash
    //             var hash = url.substr(url.indexOf('#'));
    //             // Using jQuery's animate() method to add smooth page scroll
    //             // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    //             $('html, body').animate({
    //                 scrollTop: $(hash).offset().top
    //             }, 400, function() {
    //                 // Add hash (#) to URL when done scrolling (default click behavior)
    //                 window.location.hash = hash;
    //             });
    //         } // End if
    //     });
    // });

    $(document).ready(function() {
        $('.header-main.anim.fade').addClass('is-animated');
    });

    

    //TOGGLE BOX MOBILE
    $(window).on('load', function() {
        var width = $(window).width();
        if (width <= 767) {
            $('.popup-mb .popup-cont').hide();
            $('.popup-mb .popup-hd').click(function() {
                $(this).toggleClass('active');
                $(this).next(".popup-cont").show();
            });
        }
    });
};

var load_after_footer = function() {
    var btn = $("#go-top");

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass("show");

            $(".footer-stick").addClass("show");
        } else {
            btn.removeClass("show");

            $(".footer-stick").removeClass("show");
        }
    });

    btn.on("click", function(e) {
        e.preventDefault();

        $("html, body").animate({
                scrollTop: 0,
            },
            "300"
        );
    });

    
};


var load_after_block = function() {

    setTimeout(function() {
        var width = $(window).width();
        if (width <= 767) {
            $('.slide-work-sm').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                arrows: true,
                centerMode: false,
                focusOnSelect: true,
                nextArrow: '<button class="slide-arrow next-arrow"><img alt="next" src="https://www.atomgroup.jp/recruit/assets/images/index/icon-slide-next.svg"></button>',
                prevArrow: '<button class="slide-arrow prev-arrow"><img alt="prev" src="https://www.atomgroup.jp/recruit/assets/images/index/icon-slide-prev.svg"></button>',
            });
        }
       
    }, 200);

    $(function() {
        $('.tab-content:first-child').show();
        $('.tab-nav-link-sm').bind('click', function(e) {
            $this = $(this);
            $tabs = $this.parent().parent().next();
            $target = $($this.data("target")); // get the target from data attribute
            $this.siblings().removeClass('active');
            $this.siblings().find('a').removeClass('active');
            $target.siblings().css("display", "none");
            $this.addClass('active');
            $this.find('a').addClass('active');
            $target.fadeIn("fast");
        });
        $('.tab-nav-link:first-child').trigger('click');
    });

    _biggerlink();
}

var _biggerlink = function() {
    //BIGGERLINK
    (function($) {
        $.fn.biggerlink = function(options) {
            var settings = { biggerclass: 'bl-bigger', hoverclass: 'bl-hover', hoverclass2: 'bl-hover2', clickableclass: 'bl-hot', otherstriggermaster: true, follow: 'auto' };
            if (options) { $.extend(settings, options); }
            $(this).filter(function() { return $('a', this).length > 0; }).addClass(settings.clickableclass).css('cursor', 'pointer').each(function(i) {
                var big = $(this).data('biggerlink', { hovered: false, focused: false, hovered2: false, focused2: false });
                var links = { all: $('a', this), big: $(this), master: $('a:first', this).data('biggerlink', { status: 'master' }).addClass(settings.biggerclass), other: $('a', this).not($('a:first', this)).data('biggerlink', { status: 'other' }) };
                $('a', this).andSelf().each(function() {
                    var newdata = $.extend($(this).data('biggerlink'), links);
                    $(this).data('biggerlink', newdata);
                });
                var thistitle = big.attr('title');
                var newtitle = big.data('biggerlink').master.attr('title');
                if (newtitle && !thistitle) { big.attr('title', newtitle); }
                big.mouseover(function(event) {
                    window.status = $(this).data('biggerlink').master.get(0).href;
                    $(this).addClass(settings.hoverclass);
                    $(this).data('biggerlink').hovered = true;
                }).mouseout(function(event) {
                    window.status = '';
                    if (!$(this).data('biggerlink').focused) { $(this).removeClass(settings.hoverclass); }
                    $(this).data('biggerlink').hovered = false;
                }).bind('click', function(event) {
                    if (!$(event.target).closest('a').length) {
                        $(this).data('biggerlink').master.trigger({ type: 'click', source: 'biggerlink' });
                        event.stopPropagation();
                    }
                });
                links.all.bind('focus', function() {
                    $(this).data('biggerlink').big.addClass(settings.hoverclass);
                    $(this).data('biggerlink').big.data('biggerlink').focused = true;
                }).bind('blur', function() {
                    if (!$(this).data('biggerlink').big.data('biggerlink').hovered) { $(this).data('biggerlink').big.removeClass(settings.hoverclass); }
                    $(this).data('biggerlink').big.data('biggerlink').focused = false;
                });
                links.master.bind('click', function(event) {
                    if (event.source == 'biggerlink') {
                        if (settings.follow === true || settings.follow == 'auto' && event.result !== false) { window.location = $(this).attr('href'); } else { event.stopPropagation(); }
                    }
                });
                if (settings.otherstriggermaster) {
                    links.other.addClass(settings.biggerclass).bind('click', function(event) {
                        $(this).data('biggerlink').master.trigger({ type: 'click', source: 'biggerlink' });
                        event.preventDefault();
                        event.stopPropagation();
                    });
                } else {
                    links.other.bind('focus', function() {
                        $(this).data('biggerlink').big.addClass(settings.hoverclass2);
                        $(this).data('biggerlink').big.data('biggerlink').focused2 = true;
                    }).bind('blur', function() {
                        if (!$(this).data('biggerlink').big.data('biggerlink').hovered2) { $(this).data('biggerlink').big.removeClass(settings.hoverclass2); }
                        $(this).data('biggerlink').big.data('biggerlink').focused2 = false;
                    }).bind('mouseover', function(event) {
                        $(this).data('biggerlink').big.addClass(settings.hoverclass2);
                        $(this).data('biggerlink').big.data('biggerlink').hovered2 = true;
                        event.stopPropagation();
                    }).bind('mouseout', function(event) {
                        if (!$(this).data('biggerlink').big.data('biggerlink').focused2) { $(this).data('biggerlink').big.removeClass(settings.hoverclass2); }
                        $(this).data('biggerlink').big.data('biggerlink').hovered2 = false;
                        event.stopPropagation();
                    });
                    if (!links.other.attr('title')) { links.other.attr('title', ''); }
                }
            });
            return this;
        };
    })(jQuery);

    jQuery(function() {
        $('.biggerlink a[target="_blank"]').click(function() {
            window.open(this.href);
            return false;
        });
        jQuery('.biggerlink').biggerlink({ otherstriggermaster: false });
    });
}
$(document).mouseup(function(e) 
{
    var container = $(".popup-cont-inner");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        $(this).find('.close-popup').trigger('click');
    }
});