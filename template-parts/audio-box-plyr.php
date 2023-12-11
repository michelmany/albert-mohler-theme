<div class="audio_box">
    <div class="audio-player audio_<?php echo get_the_ID(); ?>"
         data-file="<?php echo get_field( 'media_file', get_the_ID() ); ?>">
    </div>
    <audio id="player" class="js-player" data-plyr-id="<?php echo get_the_ID(); ?>">
        <source src="<?php echo get_field( 'media_file', get_the_ID() ); ?>"
                type="audio/mp3"/>
    </audio>
</div>