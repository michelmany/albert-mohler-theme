<?php get_header(); 


?>
<main>
    <section class="hero">
        <div class="container">
            <div class="wrapper">
                <div class="left">                	
					<?php if ($home_article_query->have_posts()) : while ($home_article_query->have_posts()) : $home_article_query->the_post(); 
						$category = get_the_terms(get_the_ID(), 'category'); 
					?>					 				
                    <div class="article_item">
                        <a href="<?php the_permalink();?>" class="image">
                            <img src="<?php echo gorselImage(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                            <div class="icon">
                                <svg width="96" viewBox="0 0 144 200" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M90.2469 186.04C85.8034 188.574 82.2974 190.745 79.5567 192.443C78.2894 193.228 77.1858 193.912 76.2288 194.483C72.9951 196.413 71.5567 196.964 70.3945 196.991C69.2862 197.016 67.9175 196.571 64.8143 194.72C63.549 193.965 62.0981 193.045 60.333 191.925C59.9962 191.711 59.6479 191.49 59.2872 191.262C57.0556 189.848 54.4038 188.181 51.2042 186.264C38.2165 178.463 26.1525 167.73 14.0434 156.944L14.043 156.943L14.016 156.919L14.0133 156.917C6.33124 150.088 2.83355 140.043 3.00608 126.577C3.4083 98.3149 3.30985 70.0194 3.21153 41.7639C3.17306 30.7071 3.13461 19.6564 3.12619 8.61616V3H137.687H140.687V8.69739L138.006 128.938M90.2469 186.04L91.7327 188.646L90.2455 186.041L90.2469 186.04ZM90.2469 186.04C104.9 177.676 118.637 167.448 130.084 153.122M130.084 153.122L130.083 153.124M130.084 153.122C135.391 146.473 138.091 138.934 138.006 128.938M138.006 128.938C138.006 128.938 138.006 128.94 138.006 128.942"
                                        stroke="white" stroke-width="4" />
                                    <path
                                        d="M68.6562 111.562H87.875C89.9139 111.562 91.8692 110.753 93.3109 109.311C94.7526 107.869 95.5625 105.914 95.5625 103.875V100.031H84.0312C83.0118 100.031 82.0341 99.6263 81.3133 98.9054C80.5925 98.1846 80.1875 97.2069 80.1875 96.1875C80.1875 95.1681 80.5925 94.1904 81.3133 93.4696C82.0341 92.7487 83.0118 92.3438 84.0312 92.3438H95.5625V80.8125H84.0312C83.0118 80.8125 82.0341 80.4075 81.3133 79.6867C80.5925 78.9658 80.1875 77.9882 80.1875 76.9688C80.1875 75.9493 80.5925 74.9717 81.3133 74.2508C82.0341 73.53 83.0118 73.125 84.0312 73.125H95.5625V61.5938H84.0312C83.0118 61.5938 82.0341 61.1888 81.3133 60.4679C80.5925 59.7471 80.1875 58.7694 80.1875 57.75C80.1875 56.7306 80.5925 55.7529 81.3133 55.0321C82.0341 54.3112 83.0118 53.9062 84.0312 53.9062H95.5625V50.0625C95.5625 48.0236 94.7526 46.0683 93.3109 44.6266C91.8692 43.1849 89.9139 42.375 87.875 42.375H57.125C55.0861 42.375 53.1308 43.1849 51.6891 44.6266C50.2474 46.0683 49.4375 48.0236 49.4375 50.0625V53.9062H60.9688C61.9882 53.9062 62.9658 54.3112 63.6867 55.0321C64.4075 55.7529 64.8125 56.7306 64.8125 57.75C64.8125 58.7694 64.4075 59.7471 63.6867 60.4679C62.9658 61.1888 61.9882 61.5938 60.9688 61.5938H49.4375V73.125H60.9688C61.9882 73.125 62.9658 73.53 63.6867 74.2508C64.4075 74.9717 64.8125 75.9493 64.8125 76.9688C64.8125 77.9882 64.4075 78.9658 63.6867 79.6867C62.9658 80.4075 61.9882 80.8125 60.9688 80.8125H49.4375V92.3438H60.9688C61.9882 92.3438 62.9658 92.7487 63.6867 93.4696C64.4075 94.1904 64.8125 95.1681 64.8125 96.1875C64.8125 97.2069 64.4075 98.1846 63.6867 98.9054C62.9658 99.6263 61.9882 100.031 60.9688 100.031H49.4375V103.875C49.4375 105.914 50.2474 107.869 51.6891 109.311C53.1308 110.753 55.0861 111.562 57.125 111.562H68.6562ZM76.3438 119.25V134.625H99.4062C100.426 134.625 101.403 135.03 102.124 135.751C102.845 136.472 103.25 137.449 103.25 138.469C103.25 139.488 102.845 140.466 102.124 141.187C101.403 141.908 100.426 142.312 99.4062 142.312H45.5938C44.5743 142.312 43.5967 141.908 42.8758 141.187C42.155 140.466 41.75 139.488 41.75 138.469C41.75 137.449 42.155 136.472 42.8758 135.751C43.5967 135.03 44.5743 134.625 45.5938 134.625H68.6562V119.25H57.125C53.0473 119.25 49.1366 117.63 46.2532 114.747C43.3699 111.863 41.75 107.953 41.75 103.875V50.0625C41.75 45.9848 43.3699 42.0741 46.2532 39.1907C49.1366 36.3074 53.0473 34.6875 57.125 34.6875H87.875C91.9527 34.6875 95.8634 36.3074 98.7468 39.1907C101.63 42.0741 103.25 45.9848 103.25 50.0625V103.875C103.25 107.953 101.63 111.863 98.7468 114.747C95.8634 117.63 91.9527 119.25 87.875 119.25H76.3438Z"
                                        fill="white" />
                                </svg>
                            </div>
                        </a>
                        <div class="details">
                            <a href="<?php the_permalink();?>" class="title">
                                <h1><?php the_title(); ?></h1>
                            </a>
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
                                <a href="<?php echo get_term_link($the_briefing_id); ?>" class="btn archive_btn">The Briefing Archives <svg width="7" viewBox="0 0 268 468"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M34 34L234 234L34 434" stroke="currentColor" stroke-width="66.6667"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile ?>
					<?php endif ?>
                </div>
                <div class="right">
					<?php if($thinking_in_public_query->have_posts()) : while($thinking_in_public_query->have_posts()) : $thinking_in_public_query->the_post(); 
						$category = get_the_terms(get_the_ID(), 'category'); 
					?>					
                    <div class="article_item">
                        <a href="<?php the_permalink();?>" class="image">
                            <img src="<?php echo gorselImage(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                            <div class="icon">
                                <svg width="43" viewBox="0 0 141 200" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_496_761)">
                                        <path
                                            d="M90.2469 186.04C85.8034 188.574 82.2974 190.745 79.5567 192.443C78.2894 193.228 77.1858 193.912 76.2288 194.483C72.9951 196.413 71.5567 196.964 70.3945 196.991C69.2862 197.016 67.9175 196.571 64.8143 194.72C63.549 193.965 62.0981 193.045 60.333 191.925C59.9962 191.711 59.6479 191.49 59.2872 191.262C57.0556 189.848 54.4038 188.181 51.2042 186.264C38.2165 178.463 26.1525 167.73 14.0434 156.944L14.043 156.943L14.016 156.919L14.0133 156.917C6.33121 150.088 2.83352 140.043 3.00605 126.577C3.40827 98.3149 3.30982 70.0194 3.2115 41.7639C3.17303 30.7071 3.13458 19.6564 3.12616 8.61616V3H137.687M90.2469 186.04L91.7327 188.646L90.2455 186.041L90.2469 186.04ZM90.2469 186.04C104.9 177.676 118.637 167.448 130.084 153.122M130.084 153.122L130.083 153.124M130.084 153.122C135.391 146.473 138.091 138.934 138.006 128.938M138.006 128.938C138.006 128.938 138.006 128.94 138.006 128.942L141.006 128.913L138.006 128.938ZM138.006 128.938C137.727 99.4739 137.718 69.9877 137.709 40.5132C137.706 29.9074 137.703 19.3031 137.687 8.70187V8.69739V3M138.006 128.938L140.687 8.69739V3H137.687"
                                            stroke="white" stroke-width="6" />
                                        <path
                                            d="M68.406 44.1048H73.9339C73.9339 44.1048 73.5572 39.9506 73.5572 37.5804C75.9234 37.5804 80.3669 38.2557 80.3669 38.2557V32.1324C80.3669 32.1324 75.9232 32.8097 73.5572 32.8097C73.5572 30.4415 74.2305 26 74.2305 26H68.109C68.109 26 68.7862 30.4415 68.7862 32.8097C66.4161 32.8097 61.9765 32.1344 61.9765 32.1344V38.2577C61.9765 38.2577 66.4163 37.5804 68.7862 37.5804C68.7862 39.9506 68.406 44.1048 68.406 44.1048Z"
                                            fill="white" />
                                        <path
                                            d="M59.5379 75.662H82.8053C82.8053 75.662 86.9103 64.2261 88.2799 58.3332C88.7478 56.3111 86.9103 53.8287 83.8288 53.8287C80.7512 53.8287 71.1719 53.8287 71.1719 53.8287C71.1719 53.8287 61.5889 53.8287 58.5111 53.8287C55.4298 53.8287 53.5921 56.3111 54.0639 58.3332C55.4294 64.2261 59.5379 75.662 59.5379 75.662Z"
                                            fill="white" />
                                        <path
                                            d="M87.6331 108.05C81.7211 98.644 81.2112 89.1903 81.2112 89.1903H61.128C61.128 89.1903 60.6183 98.644 54.7101 108.05C50.959 114.014 45.6595 115.67 46.0172 121.995C46.1808 124.924 48.9959 125.516 48.9959 125.516H93.3433C93.3433 125.516 96.1623 124.925 96.326 121.995C96.6799 115.67 91.3802 114.014 87.6331 108.05Z"
                                            fill="white" />
                                        <path
                                            d="M83.2885 78.7549H59.0549C59.0549 80.5906 57.2859 81.9029 55.5206 82.9511C53.7515 84.0011 54.193 86.0992 55.5206 86.0992H86.8228C88.1467 86.0992 88.5881 84.0009 86.8228 82.9511C85.0536 81.9029 83.2885 80.5906 83.2885 78.7549Z"
                                            fill="white" />
                                        <path d="M78.126 47.1958H64.2135V50.7358H78.126V47.1958Z" fill="white" />
                                        <path
                                            d="M48.9959 128.609L46.5689 132.701V138H95.7743V132.701L93.3433 128.609H48.9959Z"
                                            fill="white" />
                                    </g>
                                </svg>
                            </div>
                        </a>
                        <div class="details">
                            <h3><?php echo get_term( $thinking_in_public_id )->name;?></h3>
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                    <div class="article_info">
                        <div>
                            <h3> ARTICLES</h3>
                            <h4> History</h4>
                        </div>
                        <p>  Make no mistake, America is now on trial: The indictment of a former president
                            sets the nation on a dangerous path</p>
                    </div>
                    <?php endwhile ?>
					<?php endif ?>
					
					<?php if($book_query->have_posts()) : while($book_query->have_posts()) : $book_query->the_post(); ?>	
                    <div class="book_item">
                        <div class="image">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/image-6.png'; ?>" alt="<?php the_title(); ?>">
                        </div>
                        <div class="details">
                            <h3>BOOKS</h3>
                            <p> In Tell Me the Stories of Jesus, pastor and theologian R. Albert Mohler Jr. reveals
                                the unique power of Jesus' parables for today's readers, showing how they announce
                                the kingdom, communicate both judgment and grace, and call every human heart...</p>
                        </div>
                    </div>
                    <?php endwhile ?>
					<?php endif ?>
                </div>
            </div>
        </div>
    </section>
    <div style="clear: both;"></div>
    <div class="googleAds">
        <img src="<?php bloginfo('template_url') ?>/assets/images/800x100.svg" alt="">
    </div>
 	<section class="blogs_list thinking-in-public">
        <div class="container">
            <div class="sec_title">
                <div class="flex">
                    <h1><?php echo get_term($thinking_in_public_id)->name;?></h1>
                    <a href="<?php echo get_term_link($thinking_in_public_id)?>" class="btn">
                        <span>View All</span>
                        <svg width="24" viewBox="0 0 700 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M496.667 33.3334L666.667 200L496.667 366.667" stroke="currentColor"
                                stroke-width="66.6667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M33.3333 200H590" stroke="currentColor" stroke-width="66.6667"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="wrapper">
                <div class="left">
                	<?php if($thinking_in_public_query->have_posts()) : while($thinking_in_public_query->have_posts()) : $thinking_in_public_query->the_post(); ?>						
                    <div class="article_item">
                        <a href="<?php the_permalink();?>" class="image">
                           <img src="<?php echo gorselImage(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                        </a>
                        <div class="details">
                            <a href="<?php the_permalink();?>" class="<?php the_title();?>">
                                <h2><?php the_title();?></h2>
                            </a>
                            <h4><?php echo get_the_date( 'l, F j, Y' ); ?></h4>
                        </div>
                    </div>
                    <div class="audio_box">
                        <div class="audio-player"
                            data-file="<?php echo get_field('enclosure', get_the_ID()); ?>">
                        </div>

                    </div>
                    <?php endwhile ?>
					<?php endif ?>
                </div>
                <div class="right">
                    <ul class="blog_items">

						<?php if($thinking_in_public_query_4->have_posts()) : while($thinking_in_public_query_4->have_posts()) : $thinking_in_public_query_4->the_post(); ?>	
                        <li class="item">
                            <a href="<?php the_permalink();?>" class="inner">
                                <h4><?php echo get_the_date( 'M d, Y' ); ?></h4>
                                <p><?php the_title();?></p>
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
                        <h1>Latest <?php echo get_term($articles_id)->name;?></h1>
                        <a href="<?php echo get_term_link($articles_id)?>" class="btn">
                            <span>View All</span>
                            <svg width="24" viewBox="0 0 700 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M496.667 33.3334L666.667 200L496.667 366.667" stroke="currentColor"
                                    stroke-width="66.6667" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M33.3333 200H590" stroke="currentColor" stroke-width="66.6667"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
				<?php if($articles_query->have_posts()) : while($articles_query->have_posts()) : $articles_query->the_post(); ?>					
                <div class="article_item single">
                    <a href="<?php the_permalink(); ?>" class="image">
                       <img src="<?php echo gorselImage(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                    </a>
                    <div class="details">
                        <h4 class="country"> United States</h4>
                        <a href="" class="title">
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <p><?php echo mb_substr(wp_strip_all_tags(get_post_field('post_content', get_the_ID())), 0, 150, 'UTF-8'); ?>...</p>
                        <h4 class="date"><?php echo get_the_date( 'M d, Y' ); ?></h4>
                    </div>
                </div>
                <?php endwhile ?>
				<?php endif ?>
                <ul class="items_list">
                	<?php if($articles_query_4->have_posts()) : while($articles_query_4->have_posts()) : $articles_query_4->the_post(); ?>	
                    <li class="article_item">
                        <a href="<?php the_permalink(); ?>" class="image">
                           <img src="<?php echo gorselImage(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                        </a>
                        <div class="details">
                            <h4 class="country"> United States</h4>
                            <a href="<?php the_permalink(); ?>" class="title">
                                <h2><?php the_title(); ?></h2>
                            </a>
                            <p><?php echo mb_substr(wp_strip_all_tags(get_post_field('post_content', get_the_ID())), 0, 150, 'UTF-8'); ?>...</p>
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
                    <a href="<?php echo get_term_link($articles_id)?>" class="btn">
                        <span>View All</span>
                        <svg width="24" viewBox="0 0 700 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M496.667 33.3334L666.667 200L496.667 366.667" stroke="currentColor"
                                stroke-width="66.6667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M33.3333 200H590" stroke="currentColor" stroke-width="66.6667"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="wrapper">
                <div class="left">
                	<?php if($sermons_and_speeches_query->have_posts()) : while($sermons_and_speeches_query->have_posts()) : $sermons_and_speeches_query->the_post(); ?>					
                    <div class="article_item">
                        <a href="<?php the_permalink(); ?>" class="image">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/<?php echo get_field('media_youtube', get_the_ID())?>"
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
                            data-file="<?php echo get_field('enclosure', get_the_ID())?>">
                        </div>
                    </div>
                    <?php endwhile ?>
					<?php endif ?>
                </div>
                <div class="right">
                    <ul class="blog_items">
						<?php if($sermons_and_speeches_query_4->have_posts()) : while($sermons_and_speeches_query_4->have_posts()) : $sermons_and_speeches_query_4->the_post(); ?>							
                        <li class="item">
                            <a href="<?php the_permalink(); ?>" class="image">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/<?php echo get_field('media_youtube', get_the_ID())?>"
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
                    <?php if($ask_anything_query->have_posts()) : while($ask_anything_query->have_posts()) : $ask_anything_query->the_post(); ?>
                    <div class="article_item">
                        <a href="" class="image">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/<?php echo get_field('media_youtube', get_the_ID())?>"
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
                            data-file="<?php echo get_field('enclosure', get_the_ID())?>">
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
                            <a href="<?php echo get_term_link($book_id)?>" class="btn">Explore All Books <svg width="24" viewBox="0 0 700 400"
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
					<?php if($book_query->have_posts()) : while($book_query->have_posts()) : $book_query->the_post(); ?>						
                    <div class="book_item">
                        <div class="image">
							<a href="<?php the_permalink(); ?>" class="image">
								<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/image-6.png'; ?>" alt="<?php the_title(); ?>">
							</a>
                        </div>
                        <div class="details">
                            <h3>Tell Me the Stories of Jesus</h3>
                            <p> The explosive power of Jesus’ parables</p>
                            <a href="<?php the_permalink(); ?>" class="btn red">Purchase
                                <svg width="16" viewBox="0 0 468 268" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M434 34L234 234L34 34" stroke="white" stroke-width="66.6667"
                                        stroke-linecap="round" stroke-linejoin="round" />
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
        <img src="<?php bloginfo('template_url') ?>/assets/images/800x100.svg" alt="">
    </div>
    <section class="about">
        <div class="container">
        	<?php if($about_query->have_posts()) : while($about_query->have_posts()) : $about_query->the_post(); ?>								
            <div class="sec_title">
                <div class="flex">
                    <h1><?php the_title(); ?> R. Albert Mohler, Jr</h1>
                    <a href="<?php the_permalink(); ?>" class="btn">Read more <svg width="24" viewBox="0 0 700 400" fill="none"
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
                            <img src="<?php echo gorselImage(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="content">
                        <h4><?php the_title(); ?> R. Albert Mohler, Jr</h4>
                        <p><?php echo mb_substr(wp_strip_all_tags(get_post_field('post_content', get_the_ID())), 0, 350, 'UTF-8'); ?>...</p>
                    </div>
                </div>
            </div>
            <?php endwhile ?>
			<?php endif ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>