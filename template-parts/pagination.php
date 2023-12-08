<section>
    <div class="container">
        <div class="pagi">
			<?php echo paginate_links(
				array(
					'prev_text' => "<<",
					'next_text' => '>>',
				)
			); ?>
        </div>
    </div>
</section>

<script>
    jQuery('a.page-numbers').map(function(_, link) {
        jQuery(link).attr('href', jQuery(link).attr('href') + '#archives-cards-section');
    });
</script>