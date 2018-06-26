//JS
jQuery(function($) {

    $('.slider1').slick({
        dots:true,
        autoplay:true,
        autoplaySpeed:5000
    });

    $('.slider2').slick({
        autoplay:true,
        autoplaySpeed:500,
        slidesToShow:6,
        slidesToScroll:1,
        speed:600,
    });

});