(function ($, root, undefined) {

    $(function () {
        // responsive
        $(window).bind("resize", resizeWindow);
        function resizeWindow(e) {
            var newWindowWidth = $(window).width();

            // If width width is below 600px, switch to the mobile stylesheet
            if (newWindowWidth < 600) {
                // alles für smartphones

            } else {

            }

        }
        //alert('hallo');
        $('.titles .flexslider').flexslider({
            animation: "fade"
        });

        $('#recommends.flexslider').flexslider({
            animation: "slide",
            slideshow: "false",
            touch: "true",
            startAt: 1
        });
        //$('#recommends').removeClass('flexslider').children('ul').removeClass('slides');

        // toggle
        $('.toggle').click(function () {
            //alert('hallo');
            $(this).toggleClass('show');
            $('.banner-img, .banner-text').toggleClass('shrink');
        });
        //Sticky Navbar
        var stickyNavTop = $('body > header').offset().top;

        var stickyNav = function () {
            var scrollTop = $(window).scrollTop();

            if (scrollTop > stickyNavTop) {
                $('body > .wrapper > header').addClass('sticky');
            } else {
                $('body > .wrapper > header').removeClass('sticky');
            }
        };

        stickyNav();
        $(window).scroll(stickyNav);

    });

})(jQuery, this);
