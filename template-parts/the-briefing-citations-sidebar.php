<?php
$citations = get_field( 'citations' );
?>

<div class="the-briefing-citations-sidebar sidebar-widget">
    <h2>Documentation and Additional Reading</h2>

	<?php
	if ( ! empty( $citations ) ) :
		foreach ( $citations as $index => $citation ) : ?>
            <div class="mb-5">
                <p class="text-decoration-underline mb-1">
                    PART <?php echo convert_to_roman( $citation['brefing_segment_to_correspond_to'] ); ?></p>
                <p class="publication"><?php echo $citation['publication']; ?></p>
                <p class="mb-0">
                    <a href="<?php echo $citation['uri']; ?>" class="citation-link">
						<?php echo $citation['title']; ?>
                    </a>
                </p>
            </div>
		<?php endforeach;
	endif;
	?>
</div>