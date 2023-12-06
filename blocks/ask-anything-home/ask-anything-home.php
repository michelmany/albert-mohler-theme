<?php
/**
 * Latest Articles Home Block template.
 *
 * @param  array  $block  The block settings and attributes.
 */

$ask_anything_category_id = get_field( 'show_latest_articles_from' );
$section_title = get_field( 'section_title' );
$view_all_label = get_field( 'view_all_button_label' );
$featured_book_button_label = get_field( 'featured_book_button_label' );
$featured_book_button_link = get_field( 'featured_book_button_link' );

$book_id = 4;

// Article Section - Left
$ask_anything = array(
	'posts_per_page' => 1,
	'cat'            => $ask_anything_category_id,
);
$ask_anything_query = new WP_Query( $ask_anything );

$book = array(
	'posts_per_page' => 1,
	'cat'            => $book_id,
);
$book_query = new WP_Query( $book );

?>

<section class="ask-anything">
    <div class="container">
        <div class="wrapper">
            <div class="col col-12 col-lg-6">
                <div class="sec_title">
                    <div class="flex">
                        <h1><?php echo $section_title; ?></h1>
                        <a href="<?php echo get_term_link( $ask_anything_category_id ) ?>" class="btn view-all-btn">
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
				<?php if ( $ask_anything_query->have_posts() ) : while ( $ask_anything_query->have_posts() ) : $ask_anything_query->the_post(); ?>
                    <div class="article_item">
                        <a href="" class="image">
                            <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/<?php echo get_field( 'media_youtube',
								        get_the_ID() ) ?>"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                        </a>
                        <div class="details">
                            <h2>
                                <a href="<?php the_permalink(); ?>" class="<?php the_title(); ?>">
									<?php the_title(); ?>
                                </a>
                            </h2>
                            <h4><?php echo get_the_date( 'l, F j, Y' ); ?></h4>
                        </div>
                    </div>

				<?php endwhile ?>
				<?php endif ?>
            </div>
            <div class="col col-12 col-lg-6">
                <div class="sec_title">
                    <div class="flex">
                        <h1>Featured Book</h1>
                        <a href="<?php echo get_term_link( $book_id ) ?>" class="btn view-all-btn">
                            <span>View All</span>
                            <svg width="24" viewBox="0 0 700 400"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M496.667 33.3334L666.667 200L496.667 366.667" stroke="currentColor"
                                      stroke-width="66.6667" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path d="M33.3333 200H590" stroke="currentColor" stroke-width="66.6667"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </div>
                </div>
				<?php if ( $book_query->have_posts() ) : while ( $book_query->have_posts() ) : $book_query->the_post(); ?>
                    <div class="book-item row align-items-center">
                        <div class="col-6 col-md-5">
                            <div class="image">
                                <a href="<?php the_permalink(); ?>" class="image">
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/image-6.png'; ?>"
                                         alt="<?php the_title(); ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-7">
                            <div class="details">
                                <h3>
                                    <a href="#">
                                        Tell Me the Stories of Jesus
                                    </a>
                                </h3>
                                <p> The explosive power of Jesus’ parables</p>
                                <a href="<?php echo $featured_book_button_link; ?>" class="btn red">
									<?php echo $featured_book_button_label; ?>
                                </a>
                            </div>
                        </div>
                    </div>
				<?php endwhile ?>
				<?php endif ?>
            </div>
        </div>
    </div>
</section>