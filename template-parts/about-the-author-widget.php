<div class="author">
    <h2><?php echo get_field( 'about_the_author_widget_title', 'option' ); ?></h2>
    <h1><?php echo get_field( 'about_the_author_widget_subtitle', 'option' ); ?></h1>
    <p><?php echo get_field( 'about_the_author_widget_copy', 'option' ); ?></p>
    <a href="<?php echo get_field( 'about_the_author_widget_learn_more_page_link', 'option' ); ?>" class="btn">
		<?php echo get_field( 'about_the_author_widget_learn_more_button_label', 'option' ); ?>
    </a>
</div>