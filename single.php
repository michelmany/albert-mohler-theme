<?php get_header() ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main>
        <section class="single_article">
            <div class="container">
                <div class="article_image">
                    <img src="<?php echo gorselImage( get_the_ID() ); ?>">
                </div>

                <div class="breadcrump">Home / <?php the_title(); ?></div>

                <div class="article_content">
                    <div class="sidebar-widgets-wrapper d-none d-lg-block">
						<?php get_template_part( 'template-parts/about-the-author-widget', '' ); ?>
						<?php if ( is_active_sidebar( 'internal-pages-left-sidebar' ) ) {
							dynamic_sidebar( 'internal-pages-left-sidebar' );
						} ?>
                    </div>

                    <div class="main_content">
                        <h1 class="title">
                            <?php the_title(); ?>
                        </h1>
                        <div class="top">
                            <h4 class="date"><?php echo get_the_date( 'F j, Y' ); ?></h4>
                            <div class="socialMeda">
                                <a href="">
                                    <svg width="34" height="31" viewBox="0 0 34 31" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M26.3516 0.875H31.2734L20.4453 13.3203L33.2422 30.125H23.2578L15.3828 19.9297L6.45312 30.125H1.46094L13.0625 16.9062L0.828125 0.875H11.0938L18.125 10.2266L26.3516 0.875ZM24.5938 27.1719H27.3359L9.61719 3.6875H6.66406L24.5938 27.1719Z"
                                                fill="#022A42"/>
                                    </svg>
                                </a>
                                <a href="">
                                    <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M28.125 0.75C29.9531 0.75 31.5 2.29688 31.5 4.125V28.875C31.5 30.7734 29.9531 32.25 28.125 32.25H18.4219V21.5625H22.5L23.2734 16.5H18.4219V13.2656C18.4219 11.8594 19.125 10.5234 21.3047 10.5234H23.4844V6.23438C23.4844 6.23438 21.5156 5.88281 19.5469 5.88281C15.6094 5.88281 13.0078 8.34375 13.0078 12.7031V16.5H8.57812V21.5625H13.0078V32.25H3.375C1.47656 32.25 0 30.7734 0 28.875V4.125C0 2.29688 1.47656 0.75 3.375 0.75H28.125Z"
                                                fill="#022A42"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
						<?php if ( get_field( 'media_youtube', get_the_ID() ) ): ?>
                            <iframe width="100%" height="550"
                                    src="https://www.youtube.com/embed/<?php echo get_field( 'media_youtube',
								        get_the_ID() ) ?>"
                                    title="<?php the_title(); ?>" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            <br>
						<?php endif ?>
						<?php if ( get_field( 'enclosure', get_the_ID() ) ): ?>
                            <div class="audio_box">
                                <div class="audio-player audio_<?php echo get_the_ID(); ?>"
                                     data-file="<?php echo get_field( 'enclosure', get_the_ID() ); ?>">
                                </div>
                            </div>
						<?php endif ?>
						<?php if ( have_rows( 'briefing_segments' ) ): ?>
                            <div class="tm_audio_<?php echo get_the_ID(); ?>">
                                <div class="article_parts">
									<?php
									$x = 1;
									while ( have_rows( 'briefing_segments' ) ): the_row(); ?>
                                        <a class="item time-<?php echo $x; ?>"
                                           data-time-<?php echo $x; ?>="<?php the_sub_field( 'startTime' ); ?>">
                                            <h3>PART <?php echo ConverToRoman( $x ); ?> </h3>
                                            <p><?php the_sub_field( 'title' ); ?></p>
                                        </a>
										<?php $x ++; endwhile; ?>
                                </div>
                            </div>
						<?php endif; ?>
						<?php if ( get_field( 'show_transcript_link', get_the_ID() ) == true ): ?>
                            <div class="article_parts">
								<?php if ( have_rows( 'briefing_segments' ) ): ?>
									<?php
									$x = 1;
									while ( have_rows( 'briefing_segments' ) ): the_row(); ?>
                                        <h3 style="padding: 0 0 10px 0">PART <?php echo ConverToRoman( $x ); ?></h3>
                                        <hr>
                                        <h1 style="padding: 10px 0"><strong><?php the_sub_field( 'title' ); ?></strong>
                                        </h1>
                                        <hr>
                                        <div>
                                            <h6><?php the_sub_field( 'description' ); ?></h6>
                                            <p><?php the_sub_field( 'transcript' ); ?></p>
                                        </div>
                                        <br><br>
										<?php $x ++; endwhile; ?>
								<?php endif; ?>
                            </div>
						<?php endif ?>

						<?php if ( get_field( 'transcript', get_the_ID() ) ): ?>
                            <p style="padding: 15px 0;"><?php echo get_field( 'transcript', get_the_ID() ) ?></p>
						<?php endif ?>


						<?php the_content(); ?>
                        <div class="bottom">
                            <div class="sign">
                                <img src="<?php bloginfo( 'template_url' ) ?>/assets/images/sign.png" width="376"
                                     alt="">
                            </div>
                            <p><?php echo get_field( 'transcript_footer', get_the_ID() ) ?></p>
                        </div>
                    </div>

                    <div class="sidebar-widgets-wrapper d-block d-lg-none">
						<?php get_template_part( 'template-parts/about-the-author-widget', '' ); ?>
						<?php if ( is_active_sidebar( 'internal-pages-left-sidebar' ) ) {
							dynamic_sidebar( 'internal-pages-left-sidebar' );
						} ?>
                    </div>
                </div>
            </div>

        </section>

		<?php get_template_part( 'template-parts/internal-pages-bottom-widgets' ) ?>
    </main>
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?>