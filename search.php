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
$search_query = new WP_Query( $args );
?>
    <main>
        <section class="result">
            <div class="container">
                <div class="wrapper">

                    <div class="mb-4 w-100">
                        <button class="facetwp-flyout-open btn dark_border d-lg-none w-100 w-lg-auto">Select Filters
                        </button>
                    </div>

                    <div class="aside d-none d-lg-block">
                        <div class="block filter-head">
                            <div class="head d-flex align-items-center justify-content-between">
                                <h4>Filter</h4>

                                <div class="block butons">
                                    <a class="btn dark_border"
                                       href="/site-search/">Clear</a>
                                </div>
                            </div>
                        </div>

                        <div class="block">
							<?php echo do_shortcode( '[facetwp facet="published_date"]' ); ?>
							<?php echo do_shortcode( '[facetwp facet="resources"]' ); ?>
							<?php echo do_shortcode( '[facetwp facet="topics"]' ); ?>
							<?php echo do_shortcode( '[facetwp facet="bible"]' ); ?>
							<?php echo do_shortcode( '[facetwp facet="format"]' ); ?>
                        </div>

                    </div>

                    <div class="main_content">
                        <div class="head">
                            <div class="search_text d-flex justify-content-between">
								<?php echo do_shortcode( '[facetwp facet="keywords"]' ); ?>

                            </div>
                            <div class="d-flex align-items-center justify-content-between d-none d-lg-flex">
								<?php echo facetwp_display( 'selections' ); ?>
								<?php echo do_shortcode( '[facetwp facet="sort_by"]' ); ?>
                            </div>
                        </div>

                        <div class="facetwp-template">
							<?php
							if ( $search_query->have_posts() ) :
								while ( $search_query->have_posts() ) :
									$search_query->the_post();
									?>
                                    <div class="article_item single">
                                        <div class="details">
                                            <h2>
                                                <a href="<?php the_permalink(); ?>" class="title">
													<?php the_title(); ?>
                                                </a>
                                            </h2>
											<?php if ( ! empty( get_post_field( 'post_content', get_the_ID() ) ) ) : ?>
                                                <p>
													<?php echo mb_substr( wp_strip_all_tags( get_post_field( 'post_content',
														get_the_ID() ) ), 0, 300, 'UTF-8' ); ?>...
                                                </p>
											<?php endif; ?>

											<?php if ( in_category( 'the-briefing' ) ) : ?>
                                                <p>
													<?php
													$transcript = get_field( 'briefing_segments' )[0];

													echo mb_substr( wp_strip_all_tags( $transcript['transcript'] ), 0,
														302, 'UTF-8' ); ?>...
                                                </p>
											<?php endif; ?>


                                            <h4 class="date"><?php echo get_the_date( 'F j, Y' ); ?></h4>

											<?php
											$cats = get_post_categories_obj( get_the_ID() );

											if ( $cats ) : ?>
                                                <div class="d-flex gap-2 flex-wrap align-items-center mt-5">
                                                    <p class="fs-6 me-2 mb-0 fw-bold">Topics:</p>
													<?php foreach ( $cats as $index => $cat ) : ?>
                                                        <a
                                                                href="<?php echo $cat['url']; ?>"
                                                                class="btn dark_border btn_sm me-2">
															<?php echo $cat['name']; ?>
                                                        </a>
													<?php endforeach; ?>
                                                </div>
											<?php endif; ?>
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
        <section>
            <div class="container">
                <div class="pagi">
					<?php echo do_shortcode( '[facetwp facet="pager_"]' ) ?>
                </div>
            </div>
        </section>

		<?php get_template_part( 'template-parts/pagination' ) ?>
		<?php get_template_part( 'template-parts/internal-pages-bottom-widgets' ) ?>
    </main>
<?php get_footer() ?>