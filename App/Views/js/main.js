// start read
$(document).ready(function () {
    $('#cuon').click(function () {
        $('body,html').animate(
            {scrollTop: 0}, 600);
        return false;
    })

    $(window).scroll(function () {
        if ($(window).scrollTop() == 0) {
            $('#cuon').stop(false, true).fadeOut(300);
        } else {
            $('#cuon').stop(false, true).fadeIn(300);
        }
        //  list-social
        if ($(window).scrollTop() == 0) {
            $('#list-social').stop(false, true).fadeIn(300);
        } else {
            $('#list-social').stop(false, true).fadeOut(300);
        }

    });
});


// end read