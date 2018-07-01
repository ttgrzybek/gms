//JS
jQuery(function($) {

    $('.slider1').slick({
        dots:true,
        //autoplay:true,
        autoplaySpeed:5000,
        speed:2500,
        //nextArrow: '<i class="far fa-caret-circle-right"></i>',
        //prevArrow: '<i class="far fa-caret-circle-left"></i>'
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
        autoplay:true,
        slidesToScroll:1,
        slidesToShow:1,
    });

});