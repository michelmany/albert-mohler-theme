<?php
get_header();

the_content();
?>
    <main>


        <div class="googleAds">
            <img src="<?php bloginfo( 'template_url' ) ?>/assets/images/800x100.svg" alt="">
        </div>


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
                                <p>Dr. Mohler serves as president of The Southern Baptist Theological Seminary — the flagship school of the Southern Baptist Convention and one of the largest seminaries in the world. He has written nine books and authored thousands of articles on a wide range of topics.</p>
                            </div>
                        </div>
                    </div>
				<?php endwhile ?>
				<?php endif ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>