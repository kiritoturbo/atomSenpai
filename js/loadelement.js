if (window.location.hostname == "comotec.ne.jp") {
    var domain = 'https://comotec.ne.jp/test_space/test/taiyosekiyu/';
} else {
    var domain = window.location.origin + '/';
}

loadelement = {
    init: function() {
        loadelement.header();
        loadelement.footer();
        // loadelement.loading();

        loadelement.slide();
        loadelement.blockcms();
    },

    header: function() {
        $("Header").each(function() {
            var elememnt = $(this);
            $.get(domain + "elements/header.html", function(data, status) {
                elememnt.html(data);

                var width = $(window).width();
                if (width > 767) {
                    $(".dropdown > a").on('click', function(event) {
                        event.preventDefault();
                    });
                    $('.dropdown').hover(
                        function() {
                            $(this).children('.sub-menu').slideDown();
                        },
                        function() {
                            $(this).children('.sub-menu').slideUp();
                        }
                    );
                }

                setTimeout(function() {
                    load_after_header();
                }, 100);
            });
        });
    },


    slide: function() {
        $(".flickity").each(function() {
            var options = $(this).data('flickity-options');
            $(this).flickity(options);
        });
    },

    footer: function() {
        $("Footer").each(function() {
            var elememnt = $(this);
            $.get(domain + "elements/footer.html", function(data, status) {
                elememnt.html(data);

                setTimeout(function() {
                    load_after_footer();
                }, 100);
            });
        });
    },

    loading: function() {
        var _this = $('#loading');
        $.get(domain + "elements/loading.html", function(data) {
            _this.html(data);
            $("#loading .loading-inner").animate({
                opacity: 1,
            }, 3000, function() {
                // Animation complete.
            });
        });
    },

    blockcms: function() {
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
    },

    loadjsblock: function() {
        var all_block = true;
        $("div[data=block]").each(function() {
            var loaded = $(this).attr('loaded');
            if (loaded == undefined || loaded == false) {
                all_block = false;
            }
        });

        if (all_block == true) {
            load_after_block();
        }
    },
}