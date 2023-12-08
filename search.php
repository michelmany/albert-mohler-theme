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
                            <div class="d-flex align-items-center justify-content-between">
                                <?php echo facetwp_display( 'selections' ); ?>
                                <?php echo do_shortcode( '[facetwp facet="sort_by"]' ); ?>
                            </div>
                        </div>

                        <div class="facetwp-template">
							<?php
							if ( $my_query->have_posts() ) :
								while ( $my_query->have_posts() ) :
									$my_query->the_post();
									?>
                                    <div class="article_item single">
<!--                                        <a href="--><?php //the_permalink(); ?><!--" class="image">-->
<!--                                            <img src="--><?php //echo get_image_or_fallback( get_the_ID() ); ?><!--"-->
<!--                                                 alt="--><?php //the_title(); ?><!--">-->
<!--                                        </a>-->
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
        <section>
            <div class="container">
                <div class="pagi">
                    <?php echo do_shortcode('[facetwp facet="pager_"]') ?>
                </div>
            </div>
        </section>

		<?php get_template_part( 'template-parts/pagination' ) ?>
		<?php get_template_part( 'template-parts/internal-pages-bottom-widgets' ) ?>
    </main>
<?php get_footer() ?>