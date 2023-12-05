<?php
/*
 * Template Name: Full Width No Sidebar
 */
get_header();
?>

    <main>
        <section class="single_article">
            <div class="container">
                <div class="breadcrumb">Home / <?php the_title(); ?></div>
                <div class="article_content">
                    <div class="row w-100">
                        <div class="col-lg-12">
                            <div class="main_content">
                                <h1 class="title">
									<?php the_title(); ?>
                                </h1>
                                <div class="top">
                                    <div class="social-media-pages ms-lg-auto">
                                        <?php get_template_part( 'template-parts/share-social-icons' ) ?>
                                    </div>
                                </div>
								<?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<?php get_template_part( 'template-parts/internal-pages-bottom-widgets' ) ?>
    </main>

<?php

get_footer();