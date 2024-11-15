(function($) {

    $(document).ready(function() {
        console.log('variables', window.variables.templateUrl);

        $('.site_header .toggle, .mobile_menu .close_btn').click(function() {
            $('.mobile_menu').toggleClass('opened');
            $('.nav_menu, body, html').toggleClass('opened');
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

        const headerNavbar = document.querySelector('.header-nav');
        const scrollWatcher = document.createElement('div');

        scrollWatcher.setAttribute('data-scroll-watcher', '');
        headerNavbar.before(scrollWatcher);

        const navObserver = new IntersectionObserver((entries) => {
            headerNavbar.classList.toggle('sticking', !entries[0].isIntersecting);
        });

        navObserver.observe(scrollWatcher);

        const controls = [
            'play',
            'current-time',
            'progress',
            'duration',
            'rewind',
        ];

        const options = {
            controls,
            iconUrl: `${window.variables.templateUrl}/assets/vendor/plyr.svg`,
        };

        const players = Array.from(document.querySelectorAll('.js-player')).map((p) => {
            const plyrId = p.dataset.plyrId;
            const player = new Plyr(p, options);

            player.on('ready', (event) => {
                const instance = event.detail.plyr;

                $(`.tm_audio_${plyrId} .item`).click(function() {
                    instance.currentTime = $(this).data('seekTo');
                    instance.play();
                });
            });
        });
    });

})(window.jQuery);


