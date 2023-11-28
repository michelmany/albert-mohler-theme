<main>
    <section class="top_article">
        <div class="container">             
            <?php if ($post_1->have_posts()) : while ($post_1->have_posts()) : $post_1->the_post(); ?>                          
            <div class="wrapper">
                <div class="col_6">
                    <div class="image">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo gorselImage(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                        </a>
                    </div>
                </div>
                <div class="col_6">
                    <div class="content">
                        <h4><?php single_cat_title(); ?></h4>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
                        <p><?php echo mb_substr(wp_strip_all_tags(get_post_field('post_content', get_the_ID())), 0, 150, 'UTF-8'); ?>...</p>
                        <h4><?php echo get_the_date( 'F j, Y' ); ?></h4>
                    </div>
                </div>
            </div>
            <?php endwhile ?>
            <?php endif ?>
        </div>
    </section>
    <section class="last_articles" style="margin-top: 100px;">
        <div class="container">
            <div class="sec_title">
                <div class="flex">
                    <h1>Latest <?php single_cat_title(); ?></h1>                    
                </div>
            </div>
            <ul class="items_list" style="padding-top: 0;">
                <?php if ($post_3->have_posts()) : while ($post_3->have_posts()) : $post_3->the_post(); ?>                  
                <li class="article_item">
                    <a href="<?php the_permalink(); ?>" class="image">
                        <img src="<?php echo gorselImage(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                    </a>
                    <div class="details">
                        <h4 class="country">United States</h4>
                        <a href="" class="title">
                            <h2><?php the_title();?></h2>
                        </a>
                        <p><?php echo mb_substr(wp_strip_all_tags(get_post_field('post_content', get_the_ID())), 0, 150, 'UTF-8'); ?>...</p>
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
              <?php if ($post_brif->have_posts()) : while ($post_brif->have_posts()) : $post_brif->the_post(); ?>
                <div class="article_item single">
                    <div class="image">                        
                        <a href="<?php the_permalink(); ?>" >
                           <img  src="<?php echo gorselImage(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                        </a>
                    </div>
                   
                    <div class="details">
                        <h4 class="country">United States</h4>
                        <a href="<?php the_permalink(); ?>" class=" <?php the_title(); ?> ">
                            <h2> <?php the_title(); ?> 
                            </h2>
                        </a>
                        <p><?php echo mb_substr(wp_strip_all_tags(get_the_content()), 0, 250, 'UTF-8'); ?>...</p>
                        <h4 class="date"><?php echo get_the_date( 'F j, Y' ); ?></h4>
                    </div>
                </div>
                <?php endwhile ?>
                <?php endif ?>
            </div>            
        </div>
    </section>
     <?php include 'pagination.php'; ?>
    <section class="sub_footer">
        <div class="container">
            <div class="col_12">
                <div class="sec_title">
                    <div class="flex">
                        <h1>Topics</h1>
                    </div>
                </div>
                <?php $terms = get_terms( array(
                    'taxonomy'   => 'category',
                    'hide_empty' => true,
                ) );?>
                <div class="items">
                    <div class="block">
                        <ul>
                            <?php foreach ($terms as $term): ?>
                            <li>
                                <a href="<?php echo get_term_link($term->term_id);?>"><?php echo $term->name;?></a>
                            </li>                                    
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>            
    </section>
</main>