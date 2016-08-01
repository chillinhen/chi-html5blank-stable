(function ($, root, undefined) {

    $(function () {
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
        
        // toggle
        $('.toggle').click(function(){
            $(this).toggleClass('show');
            $('.banner-img, .banner-text').toggleClass('shrink');
        });

    });

})(jQuery, this);
