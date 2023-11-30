<?php
/**
 * Speaking and Teaching Home Block template.
 *
 * @param  array  $block  The block settings and attributes.
 */

$speaking_and_teaching_category_id = get_field( 'show_latest_articles_from' );
$section_title                     = get_field( 'section_title' );
$view_all_label                    = get_field( 'view_all_button_label' );

$sermons_and_speeches_public = array(
	'posts_per_page' => 1,
	'cat'            => $speaking_and_teaching_category_id,
);
$sermons_and_speeches_query  = new WP_Query( $sermons_and_speeches_public );

$sermons_and_speeches_public_4 = array(
	'posts_per_page' => 4,
	'offset'         => 1,
	'cat'            => $speaking_and_teaching_category_id,
);
$sermons_and_speeches_query_4  = new WP_Query( $sermons_and_speeches_public_4 );

?>

<section class="blogs_list speaking-teaching">
    <div class="container">
        <div class="sec_title">
            <div class="flex">
                <h1><?php echo $section_title; ?></h1>
                <a href="<?php echo get_term_link( $speaking_and_teaching_category_id ) ?>" class="btn view-all-btn">
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
				<?php if ( $sermons_and_speeches_query->have_posts() ) : while ( $sermons_and_speeches_query->have_posts() ) : $sermons_and_speeches_query->the_post(); ?>
                    <div class="article_item">
                        <a href="<?php the_permalink(); ?>" class="image">
                            <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/<?php echo get_field( 'media_youtube',
								        get_the_ID() ) ?>"
                                    title="<?php the_title(); ?>" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                        </a>
                        <div class="details">

                            <h2>
                                <a href="<?php the_permalink(); ?>" class="title">
									<?php the_title(); ?>
                                </a>
                            </h2>

                            <h4><?php echo get_the_date( 'F j, Y' ); ?></h4>
                        </div>
                    </div>
				<?php endwhile ?>
				<?php endif ?>
            </div>
            <div class="right">
                <ul class="blog_items">
					<?php if ( $sermons_and_speeches_query_4->have_posts() ) : while ( $sermons_and_speeches_query_4->have_posts() ) : $sermons_and_speeches_query_4->the_post(); ?>
                        <li class="item">
                            <a href="<?php the_permalink(); ?>" class="image">
                                <iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/<?php echo get_field( 'media_youtube',
									        get_the_ID() ) ?>"
                                        title="<?php the_title(); ?>" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                            </a>
                            <div class="details">
                                <h4><?php echo get_the_date( 'F j, Y' ); ?></h4>

                                <h2>
                                    <a href="<?php the_permalink(); ?>" class="title">
										<?php the_title(); ?>
                                    </a>
                                </h2>
                            </div>
                        </li>
					<?php endwhile ?>
					<?php endif ?>
                </ul>
            </div>
        </div>
    </div>
</section>
