//JS
jQuery(function($) {

    $('.slider1').slick({
        dots:true,
        //autoplay:true,
        autoplaySpeed:15000,
        speed:2000,
        //nextArrow: '<i class="far fa-caret-circle-right"></i>',
        //prevArrow: '<i class="far fa-caret-circle-left"></i>'
    });

    $('.slider2').slick({
        autoplay:true,
        autoplaySpeed:4000,
        slidesToShow:6,
        slidesToScroll:1,
        speed:2000
    });

    $('.slider3').slick({
        dots:true,
        autoplay:true,
        autoplaySpeed:15000,
        speed:2000,
        slidesToScroll:1,
        slidesToShow:1,
    });

});