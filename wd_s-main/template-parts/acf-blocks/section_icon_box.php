<?php

$className = 'section_icon_box';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>

<div class="<?php echo esc_attr($className); ?>" style="background: <?php the_field('icon_box_bg_color'); ?>;">

    <div class="section-container">
    
        <div class="main-title">
            <h2><?php the_field('icon_box_main_title'); ?></h2>
        </div>

        <div class="box-row">

            <?php if( have_rows('icon_box') ): ?>
                <?php while( have_rows('icon_box') ): the_row(); ?>

                    <div class="single-box">
                        <div class="single-box__icon">
                            <img src="<?php the_sub_field('icon_box_image') ?>" alt="">
                        </div>
                        <div class="single-box__title">
                            <h4><?php the_sub_field('icon_box_title') ?></h4>
                        </div>
                        <div class="single-box__desc">
                            <?php the_sub_field('icon_box_description') ?>
                        </div>

                        <div class="single-box__btn">
                            <?php 
                                $link = get_sub_field('icon_box_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                ?>
                                <button type="button" onclick="location.href='<?php echo esc_url( $link_url ); ?>';"><?php echo esc_html( $link_title ); ?></button>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>

</div>