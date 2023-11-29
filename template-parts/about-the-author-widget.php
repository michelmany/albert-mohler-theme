<?php
$author_widget_title                = get_field( 'about_the_author_widget_title', 'option' );
$author_widget_subtitle             = get_field( 'about_the_author_widget_subtitle', 'option' );
$author_widget_copy                 = get_field( 'about_the_author_widget_copy', 'option' );
$author_widget_learn_more_page_link = get_field( 'about_the_author_widget_learn_more_page_link', 'option' );
$author_widget_learn_more_btn_label = get_field( 'about_the_author_widget_learn_more_button_label', 'option' );
?>

<div class="author">
    <h2><?php echo $author_widget_title; ?></h2>
    <h1><?php echo $author_widget_subtitle; ?></h1>
    <p><?php echo $author_widget_copy; ?></p>
    <a href="<?php echo $author_widget_learn_more_page_link; ?>" class="btn">
		<?php echo $author_widget_learn_more_btn_label; ?>
    </a>
</div>