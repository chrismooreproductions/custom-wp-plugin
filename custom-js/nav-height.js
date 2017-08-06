(function($) {

    var navheight = $('nav').outerHeight();
    var footheight = $('footer').outerHeight();
    var bodyheight = $(window).height() - footheight - navheight;
    $('main').css('min-height', bodyheight);
    $('#right-sidebar').css('min-height', bodyheight);
    $('main').css('margin-top', navheight);
    $('#right-sidebar').css('margin-top', navheight);
    $('main').css('margin-bottom', footheight + 20);
    $('#right-sidebar').css('margin-bottom', footheight + 20);

    window.onresize = function() {
        var navheight = $('nav').outerHeight();
        var footheight = $('footer').outerHeight();
        var bodyheight = $(window).height() - footheight - navheight;
        $('main').css('min-height', bodyheight);
        $('main').css('margin-top', navheight);
        $('main').css('margin-bottom', footheight);
    }

})( jQuery );
