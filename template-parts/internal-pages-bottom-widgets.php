<section class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
				<?php if ( is_active_sidebar( 'topics-bottom-widget' ) ) {
					dynamic_sidebar( 'topics-bottom-widget' );
				} ?>
            </div>
        </div>
        <div class="row mt-5 gap-5">
            <div class="col-12 col-md">
				<?php if ( is_active_sidebar( 'sermon-series-widget' ) ) {
					dynamic_sidebar( 'sermon-series-widget' );
				} ?>
            </div>
            <div class="col-12 col-md">
				<?php if ( is_active_sidebar( 'sermon-and-speeches-widget' ) ) {
					dynamic_sidebar( 'sermon-and-speeches-widget' );
				} ?>
            </div>
        </div>
    </div>
</section>