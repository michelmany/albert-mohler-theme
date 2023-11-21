  <div style="clear: both;"></div>
  <footer class="site_footer">
        <div class="foot_top">
            <div class="container">
                <div class="socialMedia">
                    <?php 
                    wp_nav_menu(
                      array(
                        'container' => 'ul',
                        'theme_location'=>'social_menu',
                      )
                    ); 
                  ?>                      
                </div>
            </div>
        </div>
        <div class="foot_main">
            <div class="container">
                <div class="wrapper">
                    <div class="menu">
                        <div class="footer-menu"><?php if(is_active_sidebar('footer-1')){ dynamic_sidebar('footer-1'); }?></div>
                        <div class="footer-menu"><?php if(is_active_sidebar('footer-2')){ dynamic_sidebar('footer-2'); }?></div>
                        <div class="footer-menu"><?php if(is_active_sidebar('footer-3')){ dynamic_sidebar('footer-3'); }?></div>
                    </div>
                    <div class="newsletter">
                        <?php if(is_active_sidebar('footer-4')){ dynamic_sidebar('footer-4'); }?>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="foot_bottom">
            <div class="container">
                <p>copyright <?php echo date("Y");?>, <?php bloginfo('description') ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="<?php bloginfo('template_url') ?>/assets/js/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url') ?>/assets/js/app.js"></script>
    <script type="text/javascript">
        
          (function ($) {
                $.fn.audioPlayer = function () {


                    return this.each(function (options) {

                        var $this = $(this),
                            settings = $.extend({
                                file: "/this/is/the/audio/file.mp3"
                            }, options);

                        if ($this.data('file')) {
                            settings.file = ($this).data('file');
                        }

                        var audioPlayerMarkup = '<div class="play_btn">                                        <div id="start" data-play="" class="control-icon icon_start">                                            <svg width="38" height="39" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg">                                                <path d="M38 19.75C38 30.2891 29.4648 38.75 19 38.75C8.46094 38.75 0 30.2891 0 19.75C0 9.28516 8.46094 0.75 19 0.75C29.4648 0.75 38 9.28516 38 19.75ZM13.0625 13.2188V26.2812C13.0625 26.9492 13.3594 27.543 13.9531 27.8398C14.4727 28.2109 15.2148 28.1367 15.7344 27.8398L26.4219 21.3086C26.9414 21.0117 27.3125 20.418 27.3125 19.75C27.3125 19.1562 26.9414 18.5625 26.4219 18.2656L15.7344 11.7344C15.2148 11.3633 14.4727 11.3633 13.9531 11.7344C13.3594 12.0312 13.0625 12.625 13.0625 13.2188Z" fill="currentColor"></path>                                            </svg>                                        </div>                                        <div data-pause="" class="icon_stop control-icon pause" id="pause">                                            <svg width="38" height="39" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg">                                                <path d="M38 19.75C38 30.2891 29.4648 38.75 19 38.75C8.46094 38.75 0 30.2891 0 19.75C0 9.28516 8.46094 0.75 19 0.75C29.4648 0.75 38 9.28516 38 19.75ZM13.0625 13.2188V26.2812C13.0625 26.9492 13.3594 27.543 13.9531 27.8398C14.4727 28.2109 15.2148 28.1367 15.7344 27.8398L26.4219 21.3086C26.9414 21.0117 27.3125 20.418 27.3125 19.75C27.3125 19.1562 26.9414 18.5625 26.4219 18.2656L15.7344 11.7344C15.2148 11.3633 14.4727 11.3633 13.9531 11.7344C13.3594 12.0312 13.0625 12.625 13.0625 13.2188Z" fill="currentColor"></path>                                                <rect x="5" y="5" width="29" height="29" rx="14.5" fill="currentColor"></rect>                                                <rect x="12.25" y="9.53125" width="4.53125" height="19.9375" rx="1" fill="white"></rect>                                                <rect x="21.3125" y="9.53125" width="4.53125" height="19.9375" rx="1" fill="white"></rect>                                            </svg>                                        </div>                                    </div></svg></span> <span data-elapsed class="audio-time">00:00</span><div class="indicator-container"><div class="indicator-bar-empty"><div class="indicator-bar-full"></div></div><div data-playhead class="playhead"></div></div><span data-duration class="audio-time">0:00</span>     <button type="button" class="reset_btn">        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">            <path                d="M1.875 0.75C2.48438 0.75 3 1.26562 3 1.875V6.70312C4.82812 3.5625 8.25 1.54688 12 1.54688C17.7656 1.54688 22.5 6.23438 22.5 12C22.5 17.8125 17.7656 22.5 12 22.5C9.51562 22.5 7.125 21.6562 5.25 20.1094C4.78125 19.6875 4.73438 18.9844 5.10938 18.5156C5.53125 18.0469 6.23438 17.9531 6.70312 18.375C8.15625 19.5938 10.0312 20.25 12 20.25C16.5469 20.25 20.25 16.5938 20.25 12C20.25 7.45312 16.5469 3.75 12 3.75C8.85938 3.75 6.04688 5.57812 4.64062 8.25H9.375C9.98438 8.25 10.5 8.76562 10.5 9.375C10.5 10.0312 9.98438 10.5 9.375 10.5H1.875C1.21875 10.5 0.75 10.0312 0.75 9.375V1.875C0.75 1.26562 1.21875 0.75 1.875 0.75Z"                fill="#022A42" />        </svg>    </button>';
                        $this.prepend(audioPlayerMarkup);
                        $this.prepend('<audio></audio>');
                        var audioFile = $this.children('audio').get(0);
                        audioFile.setAttribute('src', settings.file);
                        audioFile.setAttribute('preload', 'meta');
                        audioFile.setAttribute('volume', '0.8');

                        console.log($this);
                        console.log('file:', audioFile);

                        //indicator-bar changes color to indicate percentage loaded
                        audioFile.addEventListener('progress', function () {
                            if (audioFile.duration > 0) {
                                $this.find('.indicator-bar-full').css('width', function () {
                                    var totalBuffered = audioFile.buffered.end(audioFile.buffered.length - 1);
                                    var percentLoaded = parseInt(((totalBuffered / audioFile.duration) * 100), 10) + '%';
                                    return percentLoaded;
                                });
                            }
                        });



                        //is audioFile sufficiently buffered?
                        audioFile.addEventListener('canplay', function () {
                            console.log(settings.file + ' sufficiently loaded.');

                            var m = Math.floor(audioFile.duration / 60);
                            var s = Math.floor(audioFile.duration % 60);

                            if (s < 10) {
                                s = '0' + s;
                            }

                            $this.find('span[data-duration]').text(m + ':' + s);
                        });

                        //Play function
                        $this.find('[data-play]').on('click', function () {
                            audioFile.play();
                            console.log('play clicked');
                            console.log(audioFile.currentTime);
                        });

                        <?php if (is_front_page()): // home audio ?>
                            <?php 
                            $home_article = array(                       
                                'posts_per_page' => 1, 
                                'cat'=> 43,                    
                            );
                            $home_article_query = new WP_Query($home_article);?>
                            <?php if ($home_article_query->have_posts()) : while ($home_article_query->have_posts()) : $home_article_query->the_post(); 
                            ?>  
                                <?php if( have_rows('briefing_segments') ): ?>
                                <?php $x = 1; while( have_rows('briefing_segments') ): the_row(); ?>    
                                    $('.tm_audio_<?php echo get_the_ID(); ?> .article_parts a.time-<?php echo $x; ?>').on('click', function () {                            
                                        audioFile.currentTime = $('.tm_audio_<?php echo get_the_ID(); ?> .article_parts a.time-<?php echo $x; ?>').attr('data-time-<?php echo $x; ?>');                  
                                    });                        
                                <?php  $x++; endwhile; ?>                        
                                <?php endif; ?> 
                            <?php endwhile ?>
                            <?php endif ?>
                            
                        <?php elseif(is_singular()): // other page audio ?>

                            <?php if( have_rows('briefing_segments') ): ?>
                            <?php $x = 1; while( have_rows('briefing_segments') ): the_row(); ?>    
                                $('.tm_audio_<?php echo get_the_ID(); ?> .article_parts a.time-<?php echo $x; ?>').on('click', function () {                            
                                    audioFile.currentTime = $('.tm_audio_<?php echo get_the_ID(); ?> .article_parts a.time-<?php echo $x; ?>').attr('data-time-<?php echo $x; ?>');                  
                                });                        
                            <?php  $x++; endwhile; ?>                        
                            <?php endif; ?> 
						
						<?php elseif(is_category(43)): // category ?>
						
						<?php 
						$postar_1 = array(                       
							'posts_per_page' => 1,
							'cat'=> 43,                        
						);
						$post_1 = new WP_Query($postar_1);?>
                            <?php if ($post_1->have_posts()) : while ($post_1->have_posts()) : $post_1->the_post(); 
                            ?>  
                                <?php if( have_rows('briefing_segments') ): ?>
                                <?php $x = 1; while( have_rows('briefing_segments') ): the_row(); ?>    
                                    $('.tm_audio_<?php echo get_the_ID(); ?> .article_parts a.time-<?php echo $x; ?>').on('click', function () {                            
                                        audioFile.currentTime = $('.tm_audio_<?php echo get_the_ID(); ?> .article_parts a.time-<?php echo $x; ?>').attr('data-time-<?php echo $x; ?>');                  
                                    });                        
                                <?php  $x++; endwhile; ?>                        
                                <?php endif; ?> 
                            <?php endwhile ?>
                            <?php endif ?>

                        <?php endif ?>
           
                        //Pause function
                        $this.find('[data-pause]').on('click', function () {
                            audioFile.pause();
                        });

                        var $playHead = $this.find('div[data-playhead]'),
                            $elapsedSpan = $this.find('span[data-elapsed]');

                        // //Playhead tracks with timeupdate
                        audioFile.addEventListener('timeupdate', function () {
                            $playHead.css('margin-left', function () {
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
                        // 


                        $this.find(".reset_btn").click(function () {
                            audioFile.load();
                            $(this).parent().find('div[data-playhead]').css( { "margin-left" : "0"} )
                        });
                        //Clicking indicator-bar moves playhead and updates current time
                        $this.find('.indicator-container').on('click', function (event) {
                            var clickLocation = (event.pageX - $(this).offset().left) / (this).offsetWidth;
                            audioFile.currentTime = clickLocation * audioFile.duration;
                        });

                        //Dragging the playhead updates current time
                        $playHead.on('mousedown', function (event) {

                            $(this).parent().addClass('draggable');
                            $(this).parent().on('mousemove', function (event) {
                                var clickLocation = (event.pageX - $(this).offset().left) / (this).offsetWidth;
                                audioFile.currentTime = clickLocation * audioFile.duration;
                            });

                            $(document).on('mouseup', function () {
                                $playHead.parent().off('mousemove');
                            });

                        });

                        //Fallback order: HTML5, then Flash, then "you can download the MP3"
                    });
                };

            })(jQuery);

            $('.audio-player').audioPlayer();

            $('.audio_box .play_btn').click(function () {
                $(this).toggleClass('active');
            });
    </script>
    <?php wp_footer(); ?>
</body>
</html>