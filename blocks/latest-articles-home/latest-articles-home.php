<?php
/**
 * Latest Articles Home Block template.
 *
 * @param  array  $block  The block settings and attributes.
 */

$articles_category_id = get_field( 'show_latest_articles_from' );
$section_title        = get_field( 'section_title' );
$view_all_label       = get_field( 'view_all_button_label' );

// Article Section - Left
$articles_public = array(
	'posts_per_page' => 1,
	'cat'            => $articles_category_id,
);
$articles_query  = new WP_Query( $articles_public );

// Article Section - Right
$articles_public_3 = array(
	'posts_per_page' => 3,
	'offset'         => 1,
	'cat'            => $articles_category_id,
);
$articles_query_3  = new WP_Query( $articles_public_3 );


?>

<section class="last_articles">
    <div class="container">
        <div class="sec_title">
            <div class="flex">
                <h1><?php echo $section_title; ?></h1>
                <a href="<?php echo get_term_link( $articles_category_id ) ?>" class="btn">
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
		<?php if ( $articles_query->have_posts() ) : while ( $articles_query->have_posts() ) : $articles_query->the_post(); ?>
            <div class="article_item single">
                <a href="<?php the_permalink(); ?>" class="image">
                    <img src="<?php echo gorselImage( get_the_ID() ); ?>" alt="<?php the_title(); ?>">
                </a>
                <div class="details">
                    <a href="<?php the_permalink(); ?>" class="title">
                        <h2><?php the_title(); ?></h2>
                    </a>
                    <p><?php echo mb_substr( wp_strip_all_tags( get_post_field( 'post_content',
							get_the_ID() ) ), 0, 150, 'UTF-8' ); ?>...</p>
                    <h4 class="date"><?php echo get_the_date( 'F j, Y' ); ?></h4>
                </div>
            </div>
		<?php endwhile ?>
		<?php endif ?>
        <ul class="items_list">
			<?php if ( $articles_query_3->have_posts() ) : while ( $articles_query_3->have_posts() ) : $articles_query_3->the_post(); ?>
                <li class="article_item">
                    <a href="<?php the_permalink(); ?>" class="image">
                        <img src="<?php echo gorselImage( get_the_ID() ); ?>" alt="<?php the_title(); ?>">
                    </a>
                    <div class="details">
                        <a href="<?php the_permalink(); ?>" class="title">
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <p><?php echo mb_substr( wp_strip_all_tags( get_post_field( 'post_content',
								get_the_ID() ) ), 0, 150, 'UTF-8' ); ?>...</p>
                        <h4 class="date"><?php echo get_the_date( 'F j, Y' ); ?></h4>
                    </div>
                </li>
			<?php endwhile ?>
			<?php endif ?>
        </ul>
    </div>
</section>
