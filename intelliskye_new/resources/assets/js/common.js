$(document).ready(function () {
    $('.animated').addClass('activated');

    $( "#whatwedobutton" ).click(function() {
        $('#whatwedo').addClass('activated');

    });

    $( "#whatwedo" ).click(function() {
        $('#whatwedo').removeClass('activated');
    });

    $( "#emponebutton" ).click(function() {
        $('.pull-out-container').removeClass('activated');
        $('.image').removeClass('activated');
        $('#empone').addClass('activated');
        $('#emponebutton').addClass('activated');


    });

    $( "#empone" ).click(function() {
        $('.pull-out-container').removeClass('activated');
        $('.image').removeClass('activated');
        $('#empone').removeClass('activated');
        $('#emponebutton').removeClass('activated');

    });

    $( "#emptwobutton" ).click(function() {
        $('.pull-out-container').removeClass('activated');
        $('.image').removeClass('activated');
        $('#emptwo').addClass('activated');
        $('#emptwobutton').addClass('activated');

    });

    $( "#emptwo" ).click(function() {
        $('.pull-out-container').removeClass('activated');
        $('.image').removeClass('activated');
        $('#emptwo').removeClass('activated');
        $('#emptwobutton').removeClass('activated');
    });

    $( "#empthreebutton" ).click(function() {
        $('.pull-out-container').removeClass('activated');
        $('.image').removeClass('activated');
        $('#empthree').addClass('activated');
        $('#empthreebutton').addClass('activated');

    });

    $( "#empthree" ).click(function() {
        $('.pull-out-container').removeClass('activated');
        $('.image').removeClass('activated');
        $('#empthree').removeClass('activated');
        $('#empthreebutton').removeClass('activated');
    });
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

