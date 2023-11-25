<?php
get_header();

the_content();
?>
    <main>


        <div class="googleAds">
            <img src="<?php bloginfo( 'template_url' ) ?>/assets/images/800x100.svg" alt="">
        </div>
        <section class="blogs_list thinking-in-public">
            <div class="container">
                <div class="sec_title">
                    <div class="flex">
                        <h1><?php echo get_term( $thinking_in_public_id )->name; ?></h1>
                        <a href="<?php echo get_term_link( $thinking_in_public_id ) ?>" class="btn">
                            <span>View All</span>
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
                                    <img src="<?php echo gorselImage( get_the_ID() ); ?>" alt="<?php the_title(); ?>">
                                </a>
                                <div class="details">
                                    <a href="<?php the_permalink(); ?>" class="<?php the_title(); ?>">
                                        <h2><?php the_title(); ?></h2>
                                    </a>
                                    <h4><?php echo get_the_date( 'l, F j, Y' ); ?></h4>
                                </div>
                            </div>
                            <div class="audio_box">
                                <div class="audio-player"
                                     data-file="<?php echo get_field( 'enclosure', get_the_ID() ); ?>">
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
                                        <h4><?php echo get_the_date( 'M d, Y' ); ?></h4>
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
        <section class="last_articles">
            <div class="container">
                <div class="sec_title">
                    <div class="flex">
                        <h1>Latest <?php echo get_term( $articles_id )->name; ?></h1>
                        <a href="<?php echo get_term_link( $articles_id ) ?>" class="btn">
                            <span>View All</span>
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
                            <h4 class="country"> United States</h4>
                            <a href="" class="title">
                                <h2><?php the_title(); ?></h2>
                            </a>
                            <p><?php echo mb_substr( wp_strip_all_tags( get_post_field( 'post_content',
									get_the_ID() ) ), 0, 150, 'UTF-8' ); ?>...</p>
                            <h4 class="date"><?php echo get_the_date( 'M d, Y' ); ?></h4>
                        </div>
                    </div>
				<?php endwhile ?>
				<?php endif ?>
                <ul class="items_list">
					<?php if ( $articles_query_4->have_posts() ) : while ( $articles_query_4->have_posts() ) : $articles_query_4->the_post(); ?>
                        <li class="article_item">
                            <a href="<?php the_permalink(); ?>" class="image">
                                <img src="<?php echo gorselImage( get_the_ID() ); ?>" alt="<?php the_title(); ?>">
                            </a>
                            <div class="details">
                                <h4 class="country"> United States</h4>
                                <a href="<?php the_permalink(); ?>" class="title">
                                    <h2><?php the_title(); ?></h2>
                                </a>
                                <p><?php echo mb_substr( wp_strip_all_tags( get_post_field( 'post_content',
										get_the_ID() ) ), 0, 150, 'UTF-8' ); ?>...</p>
                                <h4 class="date"><?php echo get_the_date( 'M d, Y' ); ?></h4>
                            </div>
                        </li>
					<?php endwhile ?>
					<?php endif ?>
                </ul>
            </div>
        </section>
        <section class="blogs_list speaking-teaching">
            <div class="container">
                <div class="sec_title">
                    <div class="flex">
                        <h1>Speaking & Teaching</h1>
                        <a href="<?php echo get_term_link( $articles_id ) ?>" class="btn">
                            <span>View All</span>
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
                                    <a href="<?php the_permalink(); ?>" class="title">
                                        <h2><?php the_title(); ?></h2>
                                    </a>
                                    <h4><?php echo get_the_date( 'l, F j, Y' ); ?></h4>
                                </div>
                            </div>
                            <div class="audio_box">
                                <div class="audio-player"
                                     data-file="<?php echo get_field( 'enclosure', get_the_ID() ) ?>">
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
                                        <h4><?php echo get_the_date( 'M d, Y' ); ?></h4>
                                        <a href="<?php the_permalink(); ?>" class="title">
                                            <h2><?php the_title(); ?></h2>
                                        </a>
                                    </div>
                                </li>
							<?php endwhile ?>
							<?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="ask_anything">
            <div class="container">
                <div class="wrapper">
                    <div class="col">
                        <div class="sec_title">
                            <div class="flex">
                                <h1>Ask Anything</h1>
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
                                    <a href="<?php the_permalink(); ?>" class="<?php the_title(); ?>">
                                        <h2><?php the_title(); ?></h2>
                                    </a>
                                    <h4><?php echo get_the_date( 'l, F j, Y' ); ?></h4>
                                </div>
                            </div>
                            <div class="audio_box">
                                <div class="audio-player"
                                     data-file="<?php echo get_field( 'enclosure', get_the_ID() ) ?>">
                                </div>
                            </div>
                            <div class="view-more-btn">
                                <a href="/category/ask-anything/" class="btn gold btn_sm">View More</a>
                            </div>
						<?php endwhile ?>
						<?php endif ?>
                    </div>
                    <div class="col">
                        <div class="sec_title">
                            <div class="flex">
                                <h1>Featured Book</h1>
                                <a href="<?php echo get_term_link( $book_id ) ?>" class="btn">Explore All Books
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
                            <div class="book_item">
                                <div class="image">
                                    <a href="<?php the_permalink(); ?>" class="image">
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/image-6.png'; ?>"
                                             alt="<?php the_title(); ?>">
                                    </a>
                                </div>
                                <div class="details">
                                    <h3>Tell Me the Stories of Jesus</h3>
                                    <p> The explosive power of Jesus’ parables</p>
                                    <a href="<?php the_permalink(); ?>" class="btn red">Purchase
                                        <svg width="16" viewBox="0 0 468 268" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M434 34L234 234L34 34" stroke="white" stroke-width="66.6667"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
						<?php endwhile ?>
						<?php endif ?>
                    </div>
                </div>
            </div>
        </section>
        <div class="googleAds">
            <img src="<?php bloginfo( 'template_url' ) ?>/assets/images/800x100.svg" alt="">
        </div>
        <section class="about">
            <div class="container">
				<?php if ( $about_query->have_posts() ) : while ( $about_query->have_posts() ) : $about_query->the_post(); ?>
                    <div class="sec_title">
                        <div class="flex">
                            <h1><?php the_title(); ?> R. Albert Mohler, Jr.</h1>
                            <a href="<?php the_permalink(); ?>" class="btn">Read more
                                <svg width="24" viewBox="0 0 700 400" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M496.667 33.3334L666.667 200L496.667 366.667" stroke="currentColor"
                                          stroke-width="66.6667" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                    <path d="M33.3333 200H590" stroke="currentColor" stroke-width="66.6667"
                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="col">
                            <div class="image">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/mohler-about.jpg'; ?>"
                                         alt="<?php the_title(); ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="content">
                                <h4>R. Albert Mohler, Jr.</h4>
                                <p><?php echo mb_substr( wp_strip_all_tags( get_post_field( 'post_content',
										get_the_ID() ) ), 0, 350, 'UTF-8' ); ?>...</p>
                            </div>
                        </div>
                    </div>
				<?php endwhile ?>
				<?php endif ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>