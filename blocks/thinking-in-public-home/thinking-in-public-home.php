<?php
/**
 * Thinking in Public Home Block template.
 *
 * @param  array  $block  The block settings and attributes.
 */

$thinking_in_public_category_id = get_field( 'show_latest_articles_from' );
$section_title                  = get_field( 'section_title' );
$view_all_label                 = get_field( 'view_all_button_label' );

// Article Section - Left
$thinking_in_public       = array(
	'posts_per_page' => 1,
	'cat'            => $thinking_in_public_category_id,
);
$thinking_in_public_query = new WP_Query( $thinking_in_public );

// Article Section - Right
$thinking_in_public_4       = array(
	'posts_per_page' => 4,
	'offset'         => 1,
	'cat'            => $thinking_in_public_category_id,
);
$thinking_in_public_query_4 = new WP_Query( $thinking_in_public_4 );

?>

<section class="thinking-in-public blogs_list">
    <div class="container">
        <div class="sec_title">
            <div class="flex">
                <h1><?php echo $section_title; ?></h1>
                <a href="<?php echo get_term_link( $thinking_in_public_category_id ) ?>" class="btn view-all-btn">
                    <span><?php echo $view_all_label; ?></span>
                    <svg width="24" viewBox="0 0 700 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M496.667 33.3334L666.667 200L496.667 366.667" stroke="currentColor"
                              stroke-width="66.6667" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M33.3333 200H590" stroke="currentColor" stroke-width="66.6667"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="wrapper">
            <div class="left">
				<?php if ( $thinking_in_public_query->have_posts() ) : while ( $thinking_in_public_query->have_posts() ) : $thinking_in_public_query->the_post(); ?>
                    <div class="article_item">
                        <a href="<?php the_permalink(); ?>" class="image">
                            <img src="<?php echo get_image_or_fallback( get_the_ID() ); ?>" alt="<?php the_title(); ?>">
                        </a>
                        <div class="details">
                            <h2>
                                <a href="<?php the_permalink(); ?>" class="<?php the_title(); ?>">
									<?php the_title(); ?>
                                </a>
                            </h2>
                            <h4><?php echo get_the_date( 'F j, Y' ); ?></h4>
                        </div>
                    </div>
                    <div class="audio_box">
                        <div class="audio-player"
                             data-file="<?php echo get_field( 'media_file', get_the_ID() ); ?>">
                        </div>
                    </div>
				<?php endwhile ?>
				<?php endif ?>
            </div>
            <div class="right">
                <ul class="blog_items">

					<?php if ( $thinking_in_public_query_4->have_posts() ) : while ( $thinking_in_public_query_4->have_posts() ) : $thinking_in_public_query_4->the_post(); ?>
                        <li class="item">
                            <a href="<?php the_permalink(); ?>" class="inner">
                                <h4><?php echo get_the_date( 'F j, Y' ); ?></h4>
                                <p><?php the_title(); ?></p>
                            </a>
                        </li>
					<?php endwhile ?>
					<?php endif ?>
                </ul>
            </div>
        </div>
    </div>
</section>
