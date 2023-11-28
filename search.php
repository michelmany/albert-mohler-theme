<?php get_header();
$ana_term  = get_queried_object();
error_reporting(0);
?>
<main>
    <section class="result">
        <div class="container">
            <div class="wrapper">
                <div class="aside">  
                		<form action="<?php echo esc_url( home_url( '/' ) ); ?>search/" class="filter_form" action="" method="POST"> 

                	
                		<div class="block filter-head">
	                        <div class="head" style="display: flex; align-items: center; justify-content: space-between;">
	                            <h4>Filter</h4>
	                             <div class="block butons">
			                    	<button class="btn red" style="border:1px solid var(--brick-red);" type="submit" >Filter</button>
			                    	<a class="btn dark_border" href="<?php echo esc_url( home_url( '/' ) ); ?>search/">Clear</a>
			                    </div>
	                        </div>
	                    </div>
                		
	                    <div class="block">
	                        <div class="head" style="display: flex; align-items: center; justify-content: space-between;">
	                            <h4>TOPICS</h4>	                             
	                        </div>
	                        <div class="body">
	                                <div class="form_wrap">
										<?php $terms = get_terms( array(
										'taxonomy'   => 'category',
					                    'include' => array($the_briefing_id, $thinking_in_public_id, $articles_id, $sermons_and_speeches_id),
					                    'hide_empty' => false,
										) );?>
										<?php foreach ($terms as $term): ?>
	                                    <label for="<?php echo $term->term_id; ?>" class="checkbox">
	                                        <input type="checkbox" class="value-<?php echo $term->term_id; ?>" name="pop_category[]" id="<?php echo $term->term_id; ?>" value="<?php echo $term->term_id; ?>">
	                                        <div class="inner">
	                                            <div class="icon"></div>
	                                            <span><?php echo $term->name;?></span>
	                                        </div>
	                                    </label>
										<?php endforeach ?>

	                                </div>                             
	                        </div>
	                    </div>
	                    <div class="block">
	                        <div class="head">
	                            <h4>TOPICS</h4>
	                        </div>
	                        <div class="body">
	                              <div class="form_wrap">
										<?php $terms = get_terms( array(
										'taxonomy'   => 'post_tag',		
										'include' => array($video_id, $audio_id),		                    
					                    'hide_empty' => false,
										) );?>
										<?php foreach ($terms as $term): ?>
	                                    <label for="<?php echo $term->term_id; ?>" class="checkbox">
	                                        <input type="checkbox" class="value-<?php echo $term->term_id; ?>" name="pop_tag[]" id="<?php echo $term->term_id; ?>" value="<?php echo $term->term_id; ?>">
	                                        <div class="inner">
	                                            <div class="icon"></div>
	                                            <span><?php echo $term->name;?></span>
	                                        </div>
	                                    </label>
										<?php endforeach ?>

	                                </div>
	                        </div>
	                    </div>

	                    <div class="block">
	                        <div class="head">
	                            <h4>TOPICS</h4>
	                        </div>
	                        <div class="body">
                              <div class="form_wrap">
									<?php $terms = get_terms( array(
									'taxonomy'   => 'category',		
									'exclude' => array($the_briefing_id, $thinking_in_public_id, $articles_id, $sermons_and_speeches_id),		                    
				                    'hide_empty' => false,
									) );?>
									<?php foreach ($terms as $term): ?>
                                    <label for="<?php echo $term->term_id; ?>" class="checkbox">
                                        <input type="checkbox" class="value-<?php echo $term->term_id; ?>"  name="other_category[]" id="<?php echo $term->term_id; ?>" value="<?php echo $term->term_id; ?>">
                                        <div class="inner">
                                            <div class="icon"></div>
                                            <span><?php echo $term->name;?></span>
                                        </div>
                                    </label>
									<?php endforeach ?>
                                </div>
	                        </div>
	                    </div>
	                   
                    </form>
                    <?php 
					$pop_category = $_POST['pop_category'] !== null ? $_POST['pop_category'] : array ( ) ;
					$other_category = $_POST['other_category'] !== null ? $_POST['other_category'] : array ( ) ;		
					$pop_tag = $_POST['pop_tag'] !== null ? $_POST['pop_tag'] : array ( ) ;

                    ?>
                   
                </div>

                <div class="main_content">
                    <div class="head">
                        <div class="search_text">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.7656 22.7344C24.0469 23.0156 24.0469 23.5312 23.7656 23.8125C23.625 23.9531 23.4375 24 23.25 24C23.0156 24 22.8281 23.9531 22.6406 23.8125L16.0312 17.1562C14.2969 18.6562 12.0938 19.5 9.70312 19.5C4.35938 19.5 0 15.1406 0 9.75C0 4.40625 4.3125 0 9.70312 0C15.0469 0 19.4531 4.40625 19.4531 9.75C19.4531 12.1875 18.6094 14.3906 17.1094 16.125L23.7656 22.7344ZM9.75 18C14.2969 18 18 14.3438 18 9.75C18 5.20312 14.2969 1.5 9.75 1.5C5.15625 1.5 1.5 5.20312 1.5 9.75C1.5 14.2969 5.15625 18 9.75 18Z"
                                    fill="#022A42" />
                            </svg>
                            <?php echo get_search_query(); ?>
                        </div>
                        <div class="tags">
							
							<?php if (isset($pop_category) ): ?>
								<?php foreach ($pop_category as $key): 
									$ss = get_term_by('id', $key, 'category');
									?>									
									<div class="tag">
									    <?php echo $ss->name; ?>									    
									</div>
								<?php endforeach; ?>
							<?php endif ?>

							<?php if (isset($pop_tag)): ?>
								<?php foreach ($pop_tag as $key): 
									$ss = get_term_by('id', $key, 'post_tag');
									?>									
									<div class="tag">
									    <?php echo $ss->name; ?>									    
									</div>
								<?php endforeach; ?>
							<?php endif ?>

							<?php if (isset($other_category)): ?>
								<?php foreach ($other_category as $key): 
									$ss = get_term_by('id', $key, 'category');
									?>									
									<div class="tag">
									    <?php echo $ss->name; ?>									    
									</div>
								<?php endforeach; ?>
							<?php endif ?>
                        	

                        </div>               
                    </div>
   					
					<?php if (isset($pop_category) || isset($pop_tag) || isset($other_category) || get_search_query() ): ?>

	                   	<div class="articles_grid">
							<?php 
											
							$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;							
							$offset = 1;
							$ppp = 12;
							$page_offset = $offset + ( ($paged-1) * $ppp );
							if (get_search_query()) {
								$search = array(
								's' => get_search_query(),
								'paged' => $paged,								
								);
							} else {
								$search = array(
									'posts_per_page' => 12,
									'paged' => $paged,
									'tax_query' => array(
										'relation' => $pop_tag == null ? "OR" : "AND",
										array(
											'taxonomy' => 'category',
											'field' => 'term_id',
											'terms' => array_merge($pop_category, $other_category),
											),

										array(
											'taxonomy' => 'post_tag',
											'field' => 'term_id',
											'terms' => $pop_tag,
											),
										),
								);
							}
							$search_query = new WP_Query($search); ?>


							<?php if ($search_query->have_posts()) : ?>

								<?php while ($search_query->have_posts()) : $search_query->the_post(); 
								$categories = get_the_category();
								$separator = ' , ';
								$output = '';
								?>		
													
				                    <div class="article_item single">
				                        <a href="<?php the_permalink();?>" class="image">
				                            <img src="<?php echo gorselImage(get_the_ID()); ?>" alt="<?php the_title(); ?>">
				                        </a>
				                        <div class="details">
				                            <h4 class="country"><?php if ( ! empty( $categories ) ) {
										foreach( $categories as $category ) {
											$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
										}
										echo trim( $output, $separator );
									}?></h4>
				                            <a href="<?php the_permalink();?>" class="title">
				                                <h2><?php the_title(); ?></h2>
				                            </a>
				                            <p><?php echo mb_substr(wp_strip_all_tags(get_post_field('post_content', get_the_ID())), 0, 150, 'UTF-8'); ?>...</p>
				                            <h4 class="date"><?php echo get_the_date( 'F j, Y' ); ?></h4>
				                        </div>
				                    </div>
								<?php endwhile; ?>
								<?php else: ?>
								<p>there were no results</p>
							<?php endif ?>
	                	</div>
					
						<?php else: ?>
						<p>there were no results</p>
					<?php endif ?>
					
                </div>
            </div>
        </div>
    </section>
    <?php include 'categories/pagination.php'; ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
	jQuery( function() {
		<?php if (isset($pop_category)): ?>
			<?php foreach ($pop_category as $key): ?>									
			jQuery('.filter_form input.value-<?php echo $key; ?>').attr('checked', '');
			<?php endforeach; ?>
		<?php endif ?>	

		<?php if (isset($pop_tag)): ?>	
			<?php foreach ($pop_tag as $key): ?>									
			jQuery('.filter_form input.value-<?php echo $key; ?>').attr('checked', '');
			<?php endforeach; ?>
		<?php endif ?>	

		<?php if (isset($other_category)): ?>	
			<?php foreach ($other_category as $key): ?>									
			jQuery('.filter_form input.value-<?php echo $key; ?>').attr('checked', '');
			<?php endforeach; ?>
		<?php endif ?>	

												
	});
</script>
<?php get_footer() ?>