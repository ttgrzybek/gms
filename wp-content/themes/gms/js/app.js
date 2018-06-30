//JS
jQuery(function($) {

    $('.slider1').slick({
        dots:true,
        autoplay:true,
        autoplaySpeed:5000,
        speed:2500
    });

    $('.slider2').slick({
        autoplay:true,
        autoplaySpeed:2500,
        slidesToShow:6,
        slidesToScroll:1,
        speed:2500
    });

    $('.slider3').slick({
        dots:true,
        //autoplay:true,
        //autoplaySpeed:5000,
        slidesToScroll:1,
        slidesToShow:1,
    });

});