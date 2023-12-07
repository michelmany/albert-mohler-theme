<?php
/*
 * Template Name: Books Archive Page
 */

get_header();

$featured_book = get_field( 'featured_book' );

$books = array(
	'post_type'      => 'book-detail',
	'post__not_in'   => array( $featured_book->ID ),
	'posts_per_page' => - 1,
);
$books_query = new WP_Query( $books );
?>

    <main>
        <section class="single_article books-page">
            <div class="container">
                <div class="breadcrumb">Home / <?php the_title(); ?></div>

                <div class="article_content">
                    <div class="row w-100 mb-3">
                        <div class="col-lg-12 ps-lg-3 ps-xxl-0">
                            <div class="main_content">
                                <h1 class="title">
									<?php the_title(); ?>
                                </h1>
                                <div class="featured-book-hero">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="mb-4">
                                                <img src="<?php echo get_field( 'book_cover', $featured_book->ID ); ?>"
                                                     alt="<?php echo get_the_title( $featured_book->ID ); ?>"
                                                     class="featured-book-cover"
                                                >
                                            </div>
                                            <div class="book-external-links d-flex flex-column gap-3">
												<?php if ( ! empty( get_field( 'amazon_link',
													$featured_book->ID ) ) ) : ?>
                                                    <a href="<?php echo get_field( 'amazon_link',
														$featured_book->ID ) ?>"
                                                       class="btn dark_border btn_sm">Amazon</a>
												<?php endif; ?>
												<?php if ( ! empty( get_field( 'barnes_noble_link',
													$featured_book->ID ) ) ) : ?>
                                                    <a href="<?php echo get_field( 'barnes_noble_link',
														$featured_book->ID ) ?>"
                                                       class="btn dark_border btn_sm">Barnes & Noble</a>
												<?php endif; ?>
												<?php if ( ! empty( get_field( 'southern_bookstore_link',
													$featured_book->ID ) ) ) : ?>
                                                    <a href="<?php echo get_field( 'southern_bookstore_link',
														$featured_book->ID ) ?>" class="btn dark_border btn_sm">The
                                                        Bookstore
                                                        at Southern</a>
												<?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="mt-5 mt-md-0">
                                                <h2 class="fs-2 fw-bold">
                                                    <?php echo get_the_title( $featured_book->ID ); ?>
                                                </h2>
                                                <h4 class="fs-5 fst-normal">
                                                    <?php echo get_field( 'book_subtitle', $featured_book->ID ); ?>
                                                </h4>
                                                <div class="mt-5">
                                                    <?php echo get_the_content( null, false, $featured_book ); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-1500">
                <div class="books-items py-5 mt-5">
                    <div class="row row-gap-5">
						<?php if ( $books_query->have_posts() ) : while ( $books_query->have_posts() ) : $books_query->the_post(); ?>
                            <div class="col-12 col-xl-6">
                                <div class="row">
                                    <div class="col-5 col-md-3 pe-xxl-4">
                                        <img src="<?php echo get_field( 'book_thumbnail', get_the_ID() ) ?>"
                                             alt="<?php echo get_the_title( get_the_ID() ); ?>"
                                             class="mb-3 mb-md-0">
                                    </div>
                                    <div class="col-7 col-md-9 pt-md-2">
                                        <div class="book-item-details">
                                            <h2 class="fs-3 fw-bold mb-1">
                                                <a href="<?php echo get_permalink(); ?>">
													<?php the_title(); ?>
                                                </a>
                                            </h2>
                                            <h4 class="fs-6 fst-normal">
												<?php echo get_field( 'book_subtitle', get_the_ID() ); ?>
                                            </h4>
                                            <div class="book-external-links d-flex flex-column flex-md-row gap-3 mt-4">
												<?php if ( ! empty( get_field( 'amazon_link', get_the_ID() ) ) ) : ?>
                                                    <a href="<?php echo get_field( 'amazon_link', get_the_ID() ) ?>"
                                                       class="btn dark_border btn_sm">Amazon</a>
												<?php endif; ?>
												<?php if ( ! empty( get_field( 'barnes_noble_link',
													get_the_ID() ) ) ) : ?>
                                                    <a href="<?php echo get_field( 'barnes_noble_link',
														get_the_ID() ) ?>"
                                                       class="btn dark_border btn_sm">Barnes & Noble</a>
												<?php endif; ?>
												<?php if ( ! empty( get_field( 'southern_bookstore_link',
													get_the_ID() ) ) ) : ?>
                                                    <a href="<?php echo get_field( 'southern_bookstore_link',
														get_the_ID() ) ?>" class="btn dark_border btn_sm">The Bookstore
                                                        at Southern</a>
												<?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						<?php endwhile ?>
						<?php endif ?>
                    </div>
                </div>
            </div>
        </section>
		<?php get_template_part( 'template-parts/internal-pages-bottom-widgets' ) ?>
    </main>

<?php
get_footer();