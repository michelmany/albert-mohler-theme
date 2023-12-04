<main>
    <section class="top_article">
        <div class="container">
			<?php if ( $post_1->have_posts() ) : while ( $post_1->have_posts() ) : $post_1->the_post(); ?>
                <div class="row">
                    <div class="col-6">
                        <div class="image">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo gorselImage( get_the_ID() ); ?>" alt="<?php the_title(); ?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <div class="content p-xl-4">
                            <h4><?php single_cat_title(); ?></h4>
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <p><?php echo mb_substr( wp_strip_all_tags( get_post_field( 'post_content',
									get_the_ID() ) ), 0, 150, 'UTF-8' ); ?>...</p>
                            <h4><?php echo get_the_date( 'F j, Y' ); ?></h4>
                        </div>
                    </div>
                </div>
			<?php endwhile ?>
			<?php endif ?>
        </div>
    </section>
    <section class="last_articles">
        <div class="container">
            <div class="sec_title">
                <div class="flex">
                    <h1>Latest <?php single_cat_title(); ?></h1>
                </div>
            </div>
            <ul class="items_list" style="padding-top: 0;">
				<?php if ( $post_3->have_posts() ) : while ( $post_3->have_posts() ) : $post_3->the_post(); ?>
                    <li class="article_item">
                        <a href="<?php the_permalink(); ?>" class="image">
                            <img src="<?php echo gorselImage( get_the_ID() ); ?>" alt="<?php the_title(); ?>">
                        </a>
                        <div class="details">
                            <h4 class="country">United States</h4>
                            <h2>
                                <a href="<?php the_permalink(); ?>" class="title">
									<?php the_title(); ?>
                                </a>
                            </h2>
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
    <section class="last_articles article_archives">
        <div class="container">
            <div class="sec_title">
                <div class="flex">
                    <h1><?php single_cat_title(); ?> Archives</h1>
                </div>
            </div>
            <div class="article_items">
				<?php if ( $post_all->have_posts() ) : while ( $post_all->have_posts() ) : $post_all->the_post(); ?>
                    <div class="article_item single">
                        <a href="<?php the_permalink(); ?>" class="image">
                            <img src="<?php echo '' . get_bloginfo( 'stylesheet_directory' ) . '/assets/images/image.png'; ?>"
                                 alt=" <?php the_title(); ?> ">
                        </a>

                        <div class="details">
                            <h4 class="country">United States</h4>
                            <h2>
                                <a href="<?php the_permalink(); ?>" class=" <?php the_title(); ?> ">
									<?php the_title(); ?>
                                </a>
                            </h2>
                            <p><?php echo mb_substr( wp_strip_all_tags( get_the_content() ), 0, 150, 'UTF-8' ); ?>
                                ...</p>
                            <h4 class="date"><?php echo get_the_date( 'F j, Y' ); ?></h4>
                        </div>
                    </div>
				<?php endwhile ?>
				<?php endif ?>
            </div>
        </div>
    </section>
	<?php get_template_part( 'template-parts/pagination' ) ?>
	<?php get_template_part( 'template-parts/internal-pages-bottom-widgets' ) ?>
</main>