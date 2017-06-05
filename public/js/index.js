(function($) {
    var App = { init: function() {
        App.ConfigureMenuBtn();
        App.ConfigSlider();
        App.HideMessageFormContact();
        App.ChangeLanguage();
    },
        ConfigureMenuBtn: function() {

            var stateControl = 0;

            $('.btn-menu').click( function() {
                $('body').toggleClass('body-overflow');

                if (stateControl === 0) {
                    $('.btn-menu').addClass('btn-menu-active');
                    stateControl = 1;
                } else {
                    $('.btn-menu').removeClass('btn-menu-active');
                    stateControl = 0;
                }

                $('.mobil-menu-container').slideToggle();
            });

            $(window).resize(function() {
                $('body').removeClass('body-overflow');
                $('.btn-menu').removeClass('btn-menu-active').
                stateControl = 0;
                $('.mobil-menu-container').slideUp();
            });
        },

        ConfigSlider: function() {
            $('.slider-ajna').slick({
                dots: false,
                infinite: true,
                speed: 900,
                autoplay: true,
                autoplaySpeed: 6000,
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: false,
                arrows: false
            });
        },

        HideMessageFormContact: function () {
            $( ".error-contact div" ).on( "click", function() {
                $('.error-contact').fadeOut();
            });
        },

        ChangeLanguage: function () {
            $("#lang, #lang-mobile").on("change", function() {
                this.form.submit();
            });
        }
    };

    $(function(){
        App.init();
        $(window).resize();
    });

})(jQuery);