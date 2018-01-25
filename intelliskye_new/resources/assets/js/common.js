$(document).ready(function () {
    $('.animated').addClass('activated');
});

//action when scrolled
$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 50) {
        $('.keep-menu').addClass('fixed');
        $('.keep-menu').addClass('box-shadow');



    } else {


        $('.keep-menu').removeClass('fixed');
        $('.keep-menu').removeClass('box-shadow');

    }
});


$(document).ready(function() {
    $('header .menu__toggle').on('click', function() {
        $('.mobile__menu').toggleClass('show__menu');
        $('.mobile__menu.show__menu').fadeIn(400);

    });
    $('.mobile__menu .close').on('click', function() {
        $('.mobile__menu').removeClass('show__menu');
    });

});