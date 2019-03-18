import $ from 'jquery'

$(document).ready(function () {
    $('#btn-go__to__top').fadeOut();
    $(window).scroll(function () {
        if($(this).scrollTop() > 1000) {
            $('#btn-go__to__top').fadeIn();
        } else {
            $('#btn-go__to__top').fadeOut();
        }
    });

    $('#btn-go__to__top').click(function () {
        $('html, body').animate({scrollTop : 0},800);
    })
});