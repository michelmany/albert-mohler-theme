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

<style>
    .pagi {
        padding: 35px 0;
        margin: auto;
        display: table;
    }

    .page-numbers:hover {
        opacity: 1
    }

    .page-numbers.current {
        pointer-events: none;
        opacity: 0.2;
    }

    .page-numbers {
        display: block !important;
        float: left;
        margin: 0 5px 10px !important;
        background: #eee;
        padding: 0;
        color: #880202;
        font-weight: 600;
        font-size: 14px;
        opacity: .5;
        width: 50px !important;
        height: 50px !important;
        text-align: center;
        line-height: 50px;
    }

    .pagination {
        display: table !important;
        margin: 0 auto 55px;
    }

    @media (max-width: 767px) {
        .page-numbers {
            width: 42px !important;
            height: 42px !important;
            text-align: center;
            line-height: 42px;
        }
    }
</style>