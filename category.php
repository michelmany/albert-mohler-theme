<?php get_header();
$category = get_the_category();
$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->cat_ID;
$sticky = get_option( 'sticky_posts' );

$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
if ($category->cat_ID == $the_briefing_id) {
   $offset = 1;
} else {
    $offset = 4;
}

$ppp = 12;
$page_offset = $offset + ( ($paged-1) * $ppp );

$postar_1 = array(                       
    'posts_per_page' => 1,
    'cat'=> $cat_id,                        
);
$post_1 = new WP_Query($postar_1);

$postar_3 = array(                       
    'posts_per_page' => 3,
    'cat'=> $cat_id, 
    'offset'=> 1,                   
);
$post_3 = new WP_Query($postar_3);

$postar_brif = array( 
    'cat' => $cat_id,
    'offset' => $page_offset,
    'posts_per_page' => $ppp,
    'paged' => $paged,                 
);
$post_brif = new WP_Query($postar_brif);

$postar_all = array(                       
    'cat'=> $cat_id, 
    'offset'=> $page_offset,
    'posts_per_page' => $ppp,                 
    'paged' => $paged,
);
$post_all = new WP_Query($postar_all);

?> 

<?php if (is_category($articles_id)): // articles ID ?>
    <?php include 'categories/articles_category.php'; ?>    
<?php elseif (is_category($the_briefing_id)): // the-briefing ID   ?>
    <?php include 'categories/briefing_category.php'; ?>
<?php elseif (is_category(array($sermons_and_speeches_id, $thinking_in_public_id))): // the-briefing ID   ?>
    <?php include 'categories/sermons_and_speeches_category.php'; ?>
<?php else: ?>
    <?php include 'categories/articles_category.php'; ?>     
<?php endif ?>

<?php get_footer() ?>