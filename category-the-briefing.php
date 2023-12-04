<?php
get_header();

$category = get_category( get_query_var( 'cat' ) );
$cat_id   = $category->cat_ID;

$sticky = get_option( 'sticky_posts' );

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
if ( $category->cat_ID == $the_briefing_id ) {
	$offset = 1;
} else {
	$offset = 4;
}

$ppp         = 10;
$page_offset = $offset + ( ( $paged - 1 ) * $ppp );

$postar_1 = array(
	'posts_per_page' => 1,
	'cat'            => $cat_id,
);
$post_1   = new WP_Query( $postar_1 );

$postar_3 = array(
	'posts_per_page' => 3,
	'cat'            => $cat_id,
	'offset'         => 1,
);
$post_3   = new WP_Query( $postar_3 );

$postar_brif = array(
	'cat'            => $cat_id,
	'offset'         => $page_offset,
	'posts_per_page' => $ppp,
	'paged'          => $paged,
);
$post_brif   = new WP_Query( $postar_brif );

$postar_all = array(
	'cat'            => $cat_id,
	'offset'         => $page_offset,
	'posts_per_page' => $ppp,
	'paged'          => $paged,
);
$post_all   = new WP_Query( $postar_all );
?>

<main>
    <section class="briefing">
        <div class="container">
            <?php if ($post_1->have_posts()) : while ($post_1->have_posts()) : $post_1->the_post(); ?>
            <div class="blog_item">
                <div class="main_image">
                    <a href="<?php the_permalink();?>" class="image">
                       <img src="<?php echo gorselImage(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                    </a>
                </div>
                <h1 class="title"><?php the_title();?></h1>
                <div class="audio_box">
                                <div class="audio-player audio_<?php echo get_the_ID(); ?>"
                                    data-file="<?php echo get_field('media_file', get_the_ID()); ?>">
                                </div>
                            </div>
				<div class="article_parts" class="tm_audio_<?php echo get_the_ID(); ?>">

					<?php if( have_rows('briefing_segments') ): ?>
					<div class="tm_audio_<?php echo get_the_ID(); ?>">
						<div class="article_parts" >
							<?php
							$x = 1;
							while( have_rows('briefing_segments') ): the_row(); ?>
							<a class="item time-<?php echo $x; ?>" data-time-<?php echo $x; ?>="<?php  the_sub_field('startTime'); ?>">
								<h3>PART <?php echo ConverToRoman($x); ?> </h3>
								<p><?php the_sub_field('title'); ?></p>
							</a>
							<?php  $x++; endwhile; ?>
						</div>
					</div>
					<?php endif; ?>

				</div>
                <div class="bottom">
                    <a href="<?php the_permalink();?>" class="btn">View the Transcript <svg width="7" viewBox="0 0 268 468"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M34 34L234 234L34 434" stroke="currentColor" stroke-width="66.6667"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <?php endwhile ?>
            <?php endif ?>
            <div class="past_episodes">
                <div class="sec_title">
                    <div class="flex">
                        <h1>Past Episodes</h1>
                    </div>
                </div>
                <div class="blog_items">
                    <?php if ($post_brif->have_posts()) : while ($post_brif->have_posts()) : $post_brif->the_post(); ?>
                    <div class="blog_item">
                        <div class="details">
                            <h2 class="breafing-post-title">
                                <a href="<?php the_permalink();?>">
                                    <?php the_title();?>
                                </a>
                            </h2>
                            <?php if( have_rows('briefing_segments') ): ?>
                            <?php while( have_rows('briefing_segments') ): the_row(); ?>
                               <p><?php the_sub_field('title'); ?></p>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </section>
	<?php get_template_part( 'template-parts/pagination' ) ?>
	<?php get_template_part( 'template-parts/internal-pages-bottom-widgets' ) ?>
</main>


<?php get_footer(); ?>
