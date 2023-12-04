<?php
/*
 * Template Name: Search Page
 */
get_header();

$args = [
	"post_type"      => [ "post" ],
	"posts_per_page" => 10,
	"facetwp"        => true,
	"post_status"    => [
		"publish",
	],
	"orderby"        => [
		"date" => "DESC",
	],
];
$my_query = new WP_Query( $args );
?>
    <main>
        <section class="result">
            <div class="container">
                <div class="wrapper">
                    <div class="aside">


                        <div class="block filter-head">
                            <div class="head"
                                 style="display: flex; align-items: center; justify-content: space-between;">
                                <h4>Filter</h4>
                                <div class="block butons">
                                    <a class="btn dark_border"
                                       href="/site-search/">Clear</a>
                                </div>
                            </div>
                        </div>


                        <div class="block">
							<?php echo do_shortcode( '[facetwp facet="resources"]' ); ?>
							<?php echo do_shortcode( '[facetwp facet="topics"]' ); ?>
							<?php echo do_shortcode( '[facetwp facet="bible"]' ); ?>
							<?php echo do_shortcode( '[facetwp facet="format"]' ); ?>
                        </div>

                    </div>

                    <div class="main_content">
                        <div class="head">
                            <div class="search_text">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M23.7656 22.7344C24.0469 23.0156 24.0469 23.5312 23.7656 23.8125C23.625 23.9531 23.4375 24 23.25 24C23.0156 24 22.8281 23.9531 22.6406 23.8125L16.0312 17.1562C14.2969 18.6562 12.0938 19.5 9.70312 19.5C4.35938 19.5 0 15.1406 0 9.75C0 4.40625 4.3125 0 9.70312 0C15.0469 0 19.4531 4.40625 19.4531 9.75C19.4531 12.1875 18.6094 14.3906 17.1094 16.125L23.7656 22.7344ZM9.75 18C14.2969 18 18 14.3438 18 9.75C18 5.20312 14.2969 1.5 9.75 1.5C5.15625 1.5 1.5 5.20312 1.5 9.75C1.5 14.2969 5.15625 18 9.75 18Z"
                                            fill="#022A42"/>
                                </svg>
								<?php echo do_shortcode( '[facetwp facet="keywords"]' ); ?>
                            </div>
							<?php echo facetwp_display( 'selections' ); ?>
                        </div>

                        <div class="facetwp-template">
							<?php
							if ( $my_query->have_posts() ) :
								while ( $my_query->have_posts() ) :
									$my_query->the_post();
									?>
                                    <div class="article_item single">
                                        <a href="<?php the_permalink(); ?>" class="image">
                                            <img src="<?php echo gorselImage( get_the_ID() ); ?>"
                                                 alt="<?php the_title(); ?>">
                                        </a>
                                        <div class="details">
                                            <h2>
                                                <a href="<?php the_permalink(); ?>" class="title">
													<?php the_title(); ?>
                                                </a>
                                            </h2>
											<?php if ( get_post_field( 'post_content', get_the_ID() ) ) : ?>
                                                <p>
													<?php echo mb_substr( wp_strip_all_tags( get_post_field( 'post_content',
														get_the_ID() ) ), 0, 150, 'UTF-8' ); ?>...
                                                </p>
											<?php endif; ?>
                                            <h4 class="date"><?php echo get_the_date( 'F j, Y' ); ?></h4>
                                        </div>
                                    </div>
								<?php
								endwhile;
							else :
								_e( 'Sorry, no posts matched your criteria.' );
							endif;
							wp_reset_postdata();
							?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
		<?php get_template_part( 'template-parts/pagination' ) ?>
		<?php get_template_part( 'template-parts/internal-pages-bottom-widgets' ) ?>
    </main>
<?php get_footer() ?>