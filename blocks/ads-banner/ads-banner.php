<?php
/**
 * Ads Banner Block template.
 *
 * @param  array  $block  The block settings and attributes.
 */
?>

<div class="ads-banner">
    <div class="container">
        <div class="ads-banner-image-wrapper d-flex justify-content-center">
			<?php echo do_shortcode( '[adrotate group="1"]' ) ?>
        </div>
    </div>
</div>