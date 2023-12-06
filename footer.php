<footer class="site_footer">
    <div class="foot_top">
        <div class="container">
            <div class="social-media">

                <div class="social-media">
                    <ul>
                        <li>
                            <a href="<?php echo get_field('social_x_twitter_url', 'option'); ?>" class="btn-transform-hover">
                                <svg width="34" height="31" viewBox="0 0 34 31" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.3516 0.875H31.2734L20.4453 13.3203L33.2422 30.125H23.2578L15.3828 19.9297L6.45312 30.125H1.46094L13.0625 16.9062L0.828125 0.875H11.0938L18.125 10.2266L26.3516 0.875ZM24.5938 27.1719H27.3359L9.61719 3.6875H6.66406L24.5938 27.1719Z"
                                          fill="#ffffff"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_field('social_facebook_url', 'option'); ?>" class="btn-transform-hover">
                                <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M28.125 0.75C29.9531 0.75 31.5 2.29688 31.5 4.125V28.875C31.5 30.7734 29.9531 32.25 28.125 32.25H18.4219V21.5625H22.5L23.2734 16.5H18.4219V13.2656C18.4219 11.8594 19.125 10.5234 21.3047 10.5234H23.4844V6.23438C23.4844 6.23438 21.5156 5.88281 19.5469 5.88281C15.6094 5.88281 13.0078 8.34375 13.0078 12.7031V16.5H8.57812V21.5625H13.0078V32.25H3.375C1.47656 32.25 0 30.7734 0 28.875V4.125C0 2.29688 1.47656 0.75 3.375 0.75H28.125Z"
                                          fill="#ffffff"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_field('social_instagram_url', 'option'); ?>" class="btn-transform-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" viewBox="0 0 448 512">
                                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                                          fill="#ffffff"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
    <div class="foot_main">
        <div class="container">
            <div class="wrapper">
                <div class="footer-navigation">
                    <div class="footer-menu">
						<?php if ( is_active_sidebar( 'footer-1' ) ) {
							dynamic_sidebar( 'footer-1' );
						} ?>
                    </div>
                    <div class="footer-menu">
						<?php if ( is_active_sidebar( 'footer-2' ) ) {
							dynamic_sidebar( 'footer-2' );
						} ?>
                    </div>
                    <div class="footer-menu">
						<?php if ( is_active_sidebar( 'footer-3' ) ) {
							dynamic_sidebar( 'footer-3' );
						} ?>
                    </div>
                </div>
                <div class="newsletter">
					<?php if ( is_active_sidebar( 'footer-4' ) ) {
						dynamic_sidebar( 'footer-4' );
					} ?>
                </div>
            </div>
        </div>
    </div>
    <div class="foot_bottom">
        <div class="container">
            <p><?php echo get_field( 'copyright', 'option' ); ?></p>
        </div>
    </div>
</footer>

<script type="text/javascript">

    (function($) {
        $.fn.audioPlayer = function() {


            return this.each(function(options) {

                var $this = $(this),
                    settings = $.extend({
                        file: '/this/is/the/audio/file.mp3',
                    }, options);

                if ($this.data('file')) {
                    settings.file = ($this).data('file');
                }

                var audioPlayerMarkup = '<div class="play_btn"><div id="start" data-play="" class="control-icon icon_start"><svg width="38" height="39" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M38 19.75C38 30.2891 29.4648 38.75 19 38.75C8.46094 38.75 0 30.2891 0 19.75C0 9.28516 8.46094 0.75 19 0.75C29.4648 0.75 38 9.28516 38 19.75ZM13.0625 13.2188V26.2812C13.0625 26.9492 13.3594 27.543 13.9531 27.8398C14.4727 28.2109 15.2148 28.1367 15.7344 27.8398L26.4219 21.3086C26.9414 21.0117 27.3125 20.418 27.3125 19.75C27.3125 19.1562 26.9414 18.5625 26.4219 18.2656L15.7344 11.7344C15.2148 11.3633 14.4727 11.3633 13.9531 11.7344C13.3594 12.0312 13.0625 12.625 13.0625 13.2188Z" fill="currentColor"></path>                                            </svg>                                        </div>                                        <div data-pause="" class="icon_stop control-icon pause" id="pause">                                            <svg width="38" height="39" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg">                                                <path d="M38 19.75C38 30.2891 29.4648 38.75 19 38.75C8.46094 38.75 0 30.2891 0 19.75C0 9.28516 8.46094 0.75 19 0.75C29.4648 0.75 38 9.28516 38 19.75ZM13.0625 13.2188V26.2812C13.0625 26.9492 13.3594 27.543 13.9531 27.8398C14.4727 28.2109 15.2148 28.1367 15.7344 27.8398L26.4219 21.3086C26.9414 21.0117 27.3125 20.418 27.3125 19.75C27.3125 19.1562 26.9414 18.5625 26.4219 18.2656L15.7344 11.7344C15.2148 11.3633 14.4727 11.3633 13.9531 11.7344C13.3594 12.0312 13.0625 12.625 13.0625 13.2188Z" fill="currentColor"></path>                                                <rect x="5" y="5" width="29" height="29" rx="14.5" fill="currentColor"></rect>                                                <rect x="12.25" y="9.53125" width="4.53125" height="19.9375" rx="1" fill="white"></rect>                                                <rect x="21.3125" y="9.53125" width="4.53125" height="19.9375" rx="1" fill="white"></rect>                                            </svg>                                        </div>                                    </div></svg></span> <span data-elapsed class="audio-time">00:00</span><div class="indicator-container"><div class="indicator-bar-empty"><div class="indicator-bar-full"></div></div><div data-playhead class="playhead"></div></div><span data-duration class="audio-time">0:00</span>     <button type="button" class="reset_btn">        <svg width="23" height="23" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" stroke-width="3" stroke="currentColor" fill="none"><polyline points="9.57 15.41 12.17 24.05 20.81 21.44" stroke-linecap="round"/><path d="M26.93,41.41V23a.09.09,0,0,0-.16-.07s-2.58,3.69-4.17,4.78" stroke-linecap="round"/><rect x="32.19" y="22.52" width="11.41" height="18.89" rx="5.7"/><path d="M12.14,23.94a21.91,21.91,0,1,1-.91,13.25" stroke-linecap="round" /></svg></button>';
                $this.prepend(audioPlayerMarkup);
                $this.prepend('<audio></audio>');
                var audioFile = $this.children('audio').get(0);
                audioFile.setAttribute('src', settings.file);
                audioFile.setAttribute('preload', 'meta');
                audioFile.setAttribute('volume', '0.8');

                console.log($this);
                console.log('file:', audioFile);

                //indicator-bar changes color to indicate percentage loaded
                audioFile.addEventListener('progress', function() {
                    if (audioFile.duration > 0) {
                        $this.find('.indicator-bar-full').css('width', function() {
                            var totalBuffered = audioFile.buffered.end(audioFile.buffered.length - 1);
                            var percentLoaded = parseInt(((totalBuffered / audioFile.duration) * 100), 10) + '%';
                            return percentLoaded;
                        });
                    }
                });


                //is audioFile sufficiently buffered?
                audioFile.addEventListener('canplay', function() {
                    console.log(settings.file + ' sufficiently loaded.');

                    var m = Math.floor(audioFile.duration / 60);
                    var s = Math.floor(audioFile.duration % 60);

                    if (s < 10) {
                        s = '0' + s;
                    }

                    $this.find('span[data-duration]').text(m + ':' + s);
                });

                //Play function
                $this.find('[data-play]').on('click', function() {
                    audioFile.play();
                    console.log('play clicked');
                    console.log(audioFile.currentTime);
                });

				<?php if (is_front_page()): // home audio ?>
				<?php
				$home_article = array(
					'posts_per_page' => 1,
					'cat'            => 43,
				);
				$home_article_query = new WP_Query( $home_article );?>
				<?php if ($home_article_query->have_posts()) : while ($home_article_query->have_posts()) : $home_article_query->the_post();
				?>
				<?php if( have_rows( 'briefing_segments' ) ): ?>
				<?php $x = 1; while( have_rows( 'briefing_segments' ) ): the_row(); ?>
                $('.tm_audio_<?php echo get_the_ID(); ?> .article_parts a.time-<?php echo $x; ?>').on('click', function() {
                    audioFile.currentTime = $('.tm_audio_<?php echo get_the_ID(); ?> .article_parts a.time-<?php echo $x; ?>').attr('data-time-<?php echo $x; ?>');
                });
				<?php  $x ++; endwhile; ?>
				<?php endif; ?>
				<?php endwhile ?>
				<?php endif ?>

				<?php elseif(is_singular()): // other page audio ?>

				<?php if( have_rows( 'briefing_segments' ) ): ?>
				<?php $x = 1; while( have_rows( 'briefing_segments' ) ): the_row(); ?>
                $('.tm_audio_<?php echo get_the_ID(); ?> .article_parts a.time-<?php echo $x; ?>').on('click', function() {
                    audioFile.currentTime = $('.tm_audio_<?php echo get_the_ID(); ?> .article_parts a.time-<?php echo $x; ?>').attr('data-time-<?php echo $x; ?>');
                });
				<?php  $x ++; endwhile; ?>
				<?php endif; ?>

				<?php elseif(is_category( 43 )): // category ?>

				<?php
				$postar_1 = array(
					'posts_per_page' => 1,
					'cat'            => 43,
				);
				$post_1 = new WP_Query( $postar_1 );?>
				<?php if ($post_1->have_posts()) : while ($post_1->have_posts()) : $post_1->the_post();
				?>
				<?php if( have_rows( 'briefing_segments' ) ): ?>
				<?php $x = 1; while( have_rows( 'briefing_segments' ) ): the_row(); ?>
                $('.tm_audio_<?php echo get_the_ID(); ?> .article_parts a.time-<?php echo $x; ?>').on('click', function() {
                    audioFile.currentTime = $('.tm_audio_<?php echo get_the_ID(); ?> .article_parts a.time-<?php echo $x; ?>').attr('data-time-<?php echo $x; ?>');
                });
				<?php  $x ++; endwhile; ?>
				<?php endif; ?>
				<?php endwhile ?>
				<?php endif ?>

				<?php endif ?>

                //Pause function
                $this.find('[data-pause]').on('click', function() {
                    audioFile.pause();
                });

                var $playHead = $this.find('div[data-playhead]'),
                    $elapsedSpan = $this.find('span[data-elapsed]');

                // //Playhead tracks with timeupdate
                audioFile.addEventListener('timeupdate', function() {
                    $playHead.css('margin-left', function() {
                        var progressPercentage = parseInt(((audioFile.currentTime / audioFile.duration) * 100), 10) + '%';
                        return progressPercentage;
                    });

                    var m = Math.floor(audioFile.currentTime / 60);
                    var s = Math.floor(audioFile.currentTime % 60);

                    if (m < 10) {
                        m = '0' + m;
                    }

                    if (s < 10) {
                        s = '0' + s;
                    }

                    $elapsedSpan.text(m + ':' + s);
                });


                // Using the reset btn to playback 10 seconds:
                $this.find('.reset_btn').click(function() {
                    audioFile.currentTime = audioFile.currentTime - 10;
                });

                // $this.find(".reset_btn").click(function () {
                //     audioFile.load();
                //     $(this).parent().find('div[data-playhead]').css( { "margin-left" : "0"} )
                // });

                //Clicking indicator-bar moves playhead and updates current time
                $this.find('.indicator-container').on('click', function(event) {
                    var clickLocation = (event.pageX - $(this).offset().left) / (this).offsetWidth;
                    audioFile.currentTime = clickLocation * audioFile.duration;
                });

                //Dragging the playhead updates current time
                $playHead.on('mousedown', function(event) {

                    $(this).parent().addClass('draggable');
                    $(this).parent().on('mousemove', function(event) {
                        var clickLocation = (event.pageX - $(this).offset().left) / (this).offsetWidth;
                        audioFile.currentTime = clickLocation * audioFile.duration;
                    });

                    $(document).on('mouseup', function() {
                        $playHead.parent().off('mousemove');
                    });

                });

                //Fallback order: HTML5, then Flash, then "you can download the MP3"
            });
        };

        $('.audio-player').audioPlayer();

        $('.audio_box .play_btn').click(function() {
            $(this).toggleClass('active');
        });
    })(jQuery);

</script>
<?php wp_footer(); ?>
</body>
</html>