<main>
    <section class="briefing">
        <div class="container">
            <?php if ($post_1->have_posts()) : while ($post_1->have_posts()) : $post_1->the_post(); ?>            
            <div class="blog_item">
                <div class="main_image">
                    <a href="<?php the_permalink();?>" class="image">
                       <img src="<?php echo gorselImage(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                    </a>
                </div>
                <h1 class="title"><?php the_title();?></h1>
                <div class="audio_box">
                                <div class="audio-player audio_<?php echo get_the_ID(); ?>"
                                    data-file="<?php echo get_field('enclosure', get_the_ID()); ?>">
                                </div>
                            </div>
				<div class="article_parts" class="tm_audio_<?php echo get_the_ID(); ?>">

					<?php if( have_rows('briefing_segments') ): ?>
					<div class="tm_audio_<?php echo get_the_ID(); ?>">
						<div class="article_parts" >                        
							<?php 
							$x = 1;
							while( have_rows('briefing_segments') ): the_row(); ?>                                     
							<a class="item time-<?php echo $x; ?>" data-time-<?php echo $x; ?>="<?php  the_sub_field('startTime'); ?>">
								<h3>PART <?php echo ConverToRoman($x); ?> </h3>
								<p><?php the_sub_field('title'); ?></p>
							</a>                                                                                               
							<?php  $x++; endwhile; ?>
						</div>                            
					</div>
					<?php endif; ?>  

				</div>
                <div class="bottom">
                    <a href="<?php the_permalink();?>" class="btn">View the Transcript <svg width="7" viewBox="0 0 268 468"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M34 34L234 234L34 434" stroke="currentColor" stroke-width="66.6667"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <?php endwhile ?>
            <?php endif ?>
            <div class="past_episodes">
                <div class="sec_title">
                    <div class="flex">
                        <h1>Past Episodes</h1>                        
                    </div>
                </div>
                <div class="blog_items">
                    <?php if ($post_brif->have_posts()) : while ($post_brif->have_posts()) : $post_brif->the_post(); ?> 
                    <div class="blog_item">
                        <div class="details">
                            <h3 class="date"><?php echo get_the_date( 'M d, Y' ); ?></h3>
                            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            <?php if( have_rows('briefing_segments') ): ?>
                            <?php while( have_rows('briefing_segments') ): the_row(); ?>                               
                               <a href="<?php the_permalink();?>"><p style="margin-bottom: 10px"><?php the_sub_field('title'); ?></p></a>
                            <?php endwhile; ?>
                            <?php endif; ?>                             
                            <h4 class="tag" style="margin-top: 15px"><?php echo get_the_tag_list( '<ul><li>', '</li><li>', '</li></ul>' ); ?></h4>
                        </div>
                    </div>
                    <?php endwhile ?>
                    <?php endif ?>
                </div>
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