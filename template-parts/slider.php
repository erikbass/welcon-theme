<?php

$display_slider = get_option('theme_display_slider');

global $slider_properties;
$slider_properties = array();

$slider_args = array(
    'post_type' => 'property',
    'posts_per_page' => -1,
    'meta_query' => array(
        array(
            'key' => 'REAL_HOMES_add_in_slider',
            'value' => 'yes',
            'compare' => 'LIKE'
        )
    )
);

$slider_query = new WP_Query( $slider_args );

if($slider_query->have_posts() && $display_slider == 'true'){
    ?>
    <!-- Slider -->
    <div id="home-flexslider" class="clearfix">
        <div class="flexslider">
            <ul class="slides">
                <?php
                while ( $slider_query->have_posts() ) :
                    $slider_query->the_post();
                    $slider_properties[] = intval($post->ID);
                    $slider_image_id = get_post_meta( $post->ID, 'REAL_HOMES_slider_image', true );
                    if($slider_image_id){
                        $slider_image_url = wp_get_attachment_url($slider_image_id);
                        ?>
                        <li>
                            <div class="desc-wrap">
                                <div class="slide-description">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p><?php framework_excerpt(15); ?></p>
                                    <span><?php property_price(); ?></span>
                                    <a href="<?php the_permalink(); ?>" class="know-more"><?php _e('Know More','framework'); ?></a>
                                </div>
                            </div>
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $slider_image_url; ?>" alt="<?php the_title(); ?>"></a>
                        </li>
                        <?php
                    }
                endwhile;
                wp_reset_query();
                ?>
            </ul>
        </div>
    </div><!-- End Slider -->
    <?php
}else{
    get_template_part('banners/default_page_banner');
}
?>