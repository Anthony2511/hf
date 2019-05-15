(function ($) {
    $('.nav__button').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('menu-unfolded');
        $('body').toggleClass('with-menu');
    });
})(jQuery);