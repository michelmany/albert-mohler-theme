<?php if ($post->post_parent !== 0  || get_children(get_the_ID())): ?>
<div class="col-25-l col-100-m col-100-s sidebar">
    <aside class="box-shadow">
       <div class="aside-icon">Menu <i class="fas fa-plus"></i></i></div>
        <ul>
            <?php if ($post->post_parent !== 1644): ?>
            <li class="<?php echo $post->post_parent == $get_id ?  "active": "" ?>"><a href="<?php the_permalink($post->post_parent)?>"><?php echo get_the_title($post->post_parent);?></a></li>
            <?php endif;?>
             <?php if ($post->post_parent == 637): ?>
            <?php
                        $terms = get_terms( array(
                        'taxonomy' => 'yeterlilik_kategori',                        
                        'hide_empty' => false,
                        ) );
                        ?>
                        <?php foreach ($terms as $term ): ?>
                            <li class="<?php echo $ana_term->term_id == $term->term_id ?  "active": ""?>"><a  href="<?php echo get_term_link($term->term_id); ?>"> <?php echo $term->name; ?></a></li>
                        <?php endforeach ?> 
            <?php endif;?>
            <?php
            if ($post->post_parent !== 0) {
            $ic2 = new WP_Query(array(
            'post_type' => 'page',
            'post_parent' =>  $post->post_parent,
            ));
            } elseif(get_children(get_the_ID())) {
            $ic2 = new WP_Query(array(
            'post_type' => 'page',
            'post_parent' =>  get_the_ID(),
            ));
            }
            ?>
            <?php if (have_posts()) : while($ic2->have_posts()) : $ic2->the_post(); ?>
            <li class="<?php echo get_the_ID() == $get_id ?  "active": "" ?>">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                    <?php if ($post->post_parent == 246): ?>
                    <span><?php echo get_the_date('d.m.Y');?></span>
                    <?php endif ?>
                </a>
            </li>
            <?php endwhile ?>
            <?php endif ?>
        </ul>
    </aside>
     <?php if ($post->post_parent == 1644): ?>
                <!-- <div class="banka-bilgi">
                    <div class="banka-bilgi-ust box-shadow">
                        <h2>Banka Hesap Numaraları</h2>
                        <div class="banka-logo">
                            <img src="<?php echo get_theme_mod( 'banka_logo' ); ?>">
                        </div>
                        <hr>
                        <p><strong>IBAN</strong></p>
                        <p><?php echo get_theme_mod( 'banka_ibna' ); ?></p>
                        <hr>
                        <p><strong>Hesap Sahibi</strong></p>
                        <p><?php echo get_theme_mod( 'banka_sahip' ); ?></p>
                        <hr>
                        <p><strong>Banka / Şube</strong></p>
                        <p><?php echo get_theme_mod( 'banka_ismi' ); ?></p>
                    </div>
                    <div class="banka-bilgi-alt">
                        <div class="banka-bilgi-uyari">
                            <i class="fal fa-info-circle"></i>
                        </div>
                        <p><strong>Uyarı</strong><?php echo get_theme_mod( 'banka_uyari' ); ?></p>
                    </div>
                </div> -->
                <?php endif ?>
</div>
<?php endif ?>