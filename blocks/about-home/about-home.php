<?php
/**
 * About Home Block template.
 *
 * @param  array  $block  The block settings and attributes.
 */

$section_title   = get_field( 'section_title' );
$read_more_label = get_field( 'read_more_button_label' );
$read_more_link  = get_field( 'read_more_link' );
$image           = get_field( 'image' );
$heading         = get_field( 'heading' );
$copy            = get_field( 'copy' );

?>


<section class="about">
    <div class="container">
        <div class="sec_title">
            <div class="flex">
                <h1><?php echo $section_title; ?></h1>
                <a href="<?php echo $read_more_link; ?>" class="btn view-all-btn">
                    <span><?php echo $read_more_label; ?></span>
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
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo $image; ?>" alt="<?php echo $section_title; ?>">
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="content">
                    <h4><?php echo $heading; ?></h4>
                    <p><?php echo $copy; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>