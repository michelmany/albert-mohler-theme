<?php
/**
 * Template Name: About Page Template
 */
get_header();

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main>
        <section class="single_article">
            <div class="container">
                <div class="article_image">
                    <img src="<?php echo gorselImage( get_the_ID() ); ?>">
                </div>
                <div class="breadcrump">Home / <?php the_title(); ?></div>
                <div class="article_content">
                    <div class="sidebar-widgets-wrapper">
						<?php if ( is_active_sidebar( 'about-page-widget' ) ) {
							dynamic_sidebar( 'about-page-widget' );
						} ?>

						<?php if ( is_active_sidebar( 'internal-pages-left-sidebar' ) ) {
							dynamic_sidebar( 'internal-pages-left-sidebar' );
						} ?>
                    </div>

                    <div class="main_content">
                        <h1 class="title"><?php the_title(); ?></h1>
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
						<?php the_content(); ?>
                        <div class="bottom">
                            <div class="sign">
                                <img src="<?php bloginfo( 'template_url' ) ?>/assets/images/sign.png" width="376"
                                     alt="">
                            </div>
                            <p>I am always glad to hear from readers. Write me using the contact form. Follow regular
                                updates on Twitter at @albertmohler.
                                Subscribe via email for daily Briefings and more (unsubscribe at any time).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sub_footer">
            <div class="container">
                <div class="col_12">
                    <div class="sec_title">
                        <div class="flex">
                            <h1>Topics</h1>
                        </div>
                    </div>
					<?php $terms = get_terms( array(
						'taxonomy'   => 'category',
						'hide_empty' => false,
					) ); ?>
                    <div class="items">
                        <div class="block">
                            <ul>
								<?php foreach ( $terms as $term ): ?>
                                    <li>
                                        <a href="<?php echo get_term_link( $term->term_id ); ?>"><?php echo $term->name; ?></a>
                                    </li>
								<?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section
    </main>
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?>