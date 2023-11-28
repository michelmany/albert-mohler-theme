(function($) {

    $(document).ready(function() {

        $('.site_header .toggle, .mobile_menu .close_btn').click(function() {
            $('.mobile_menu').toggleClass('opened');
            $('.nav_menu').toggleClass('opened');
            $('.site_header .toggle').toggleClass('opened');
        });

        $('.mobile_menu .menu .dropdown .nav_link').click(function(e) {
            $(this).next().toggleClass('opened');
            return false;
        });

        $('.mobile_menu .menu .back_btn').click(function(e) {
            $(this).parent().removeClass('opened');
        });

        $(document).click(function(event) {
            if (!$(event.target).closest('.site_header .toggle, .mobile_menu .inner').length) {
                $('body').find('.mobile_menu .inner').parent().removeClass('opened');
                $('.site_header .toggle').removeClass('opened');
            }
        });

        $('.result .head .tags .tag .close_btn').click(function() {
            $(this).parent().hide();
        });

        $('.search_bar > .btn').click(function() {
            $(this).toggleClass('active');
            $(this).parent().find('.bar').toggleClass('opened');
        });
    });

})(window.jQuery);