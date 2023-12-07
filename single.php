<?php

get_header();

$media_file = get_field( 'media_file', get_the_ID() );
$media_youtube = get_field( 'media_youtube', get_the_ID() );
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main>
        <section class="single_article">
            <div class="container">
                <div class="article_image">
                    <img src="<?php echo gorselImage( get_the_ID() ); ?>">
                </div>

                <div class="breadcrumb">Home / <?php the_title(); ?></div>

                <div class="article_content">
                    <div class="row w-100">
                        <div class="col-lg-4 col-xl-3 pe-lg-3 pe-xxl-0">
                            <div class="sidebar-widgets-wrapper d-none d-lg-block">
								<?php get_template_part( 'template-parts/about-the-author-widget', '' ); ?>
								<?php if ( is_active_sidebar( 'internal-pages-left-sidebar' ) ) {
									dynamic_sidebar( 'internal-pages-left-sidebar' );
								} ?>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-9 ps-lg-3 ps-xxl-0">
                            <div class="main_content">
                                <h1 class="title">
									<?php the_title(); ?>
                                </h1>

                                <div class="top">
                                    <div class="social-media-pages ms-lg-auto">
										<?php if ( ! empty( $media_file ) ) : ?>
                                            <div class="download-mp3-btn-wrapper ms-lg-auto me-4">
                                                <a class="btn dark_border btn_sm" href="<?php echo $media_file; ?>"
                                                   download target="_blank">Download MP3</a>
                                            </div>
										<?php endif; ?>
										<?php get_template_part( 'template-parts/share-social-icons' ) ?>
                                    </div>
                                </div>
								<?php if ( ! empty( $media_file ) ) : ?>
                                    <div class="audio_box mb-3">
                                        <div class="audio-player audio_<?php echo get_the_ID(); ?>"
                                             data-file="<?php echo get_field( 'media_file', get_the_ID() ); ?>">
                                        </div>
                                    </div>
								<?php endif; ?>
								<?php if ( ! empty( $media_youtube ) ) : ?>
                                    <div class="mb-4">
                                        <iframe
                                                class="video"
                                                src="https://www.youtube.com/embed/<?php echo get_field( 'media_youtube',
													get_the_ID() ) ?>"
                                                title="<?php the_title(); ?>" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
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
								<?php if ( ! empty( get_field( 'show_transcript_link', get_the_ID() ) ) ): ?>
									<?php if ( have_rows( 'briefing_segments' ) ): ?>
                                        <div class="article_parts">
											<?php
											$x = 1;
											while ( have_rows( 'briefing_segments' ) ): the_row(); ?>
                                                <h3 style="padding: 0 0 10px 0">
                                                    PART <?php echo ConverToRoman( $x ); ?></h3>
                                                <hr>
                                                <h1 style="padding: 10px 0">
                                                    <strong><?php the_sub_field( 'title' ); ?></strong>
                                                </h1>
                                                <hr>
                                                <div>
                                                    <h6><?php the_sub_field( 'description' ); ?></h6>
                                                    <p><?php the_sub_field( 'transcript' ); ?></p>
                                                </div>
                                                <br><br>
												<?php $x ++; endwhile; ?>
                                        </div>
									<?php endif; ?>
								<?php endif ?>

								<?php if ( ! empty( get_field( 'transcript', get_the_ID() ) ) ): ?>
                                    <div class="py-5">
										<?php echo get_field( 'transcript', get_the_ID() ) ?>
                                    </div>
								<?php endif ?>

								<?php the_content(); ?>

                                <div class="bottom">
									<?php if ( in_category( [ 'the-briefing', 'articles' ] ) ) : ?>
										<?php get_template_part( 'template-parts/article-sign' ) ?>
									<?php endif; ?>
                                </div>
                            </div>
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