$(document).ready(function () {
    $('a[href="#toggle-search"], .navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn[type="reset"]').on('click', function(event) {
        event.preventDefault();
        $('.navbar-bootsnipp .bootsnipp-search .input-group > input').val('');
        $('.navbar-bootsnipp .bootsnipp-search').toggleClass('open');
        $('a[href="#toggle-search"]').closest('li').toggleClass('active');

        if ($('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
            /* I think .focus dosen't like css animations, set timeout to make sure input gets focus */
            setTimeout(function() {
                $('.navbar-bootsnipp .bootsnipp-search .form-control').focus();
            }, 100);
        }
    });
    $('a[href="#toggle-search"], .navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn[type="reset"]').on('click', function(event) {
        event.preventDefault();
        $('.navbar-bootsnipp .bootsnipp-search .input-group > input').val('');
        $('.navbar-bootsnipp .bootsnipp-search').toggleClass('open');
        $('a[href="#toggle-search"]').closest('li').toggleClass('active');

        if ($('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
            /* I think .focus dosen't like css animations, set timeout to make sure input gets focus */
            setTimeout(function() {
                $('.navbar-bootsnipp .bootsnipp-search .form-control').focus();
            }, 100);
        }
    });
});

