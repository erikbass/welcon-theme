<?php
$size = 'property-detail-slider-image';
$properties_images = rwmb_meta( 'REAL_HOMES_property_images', 'type=plupload_image&size='.$size, $post->ID );
if( !empty($properties_images) ){
    ?>
    <div id="property-detail-flexslider" class="clearfix">
        <div class="flexslider">
            <ul class="slides">
                <?php
                foreach( $properties_images as $prop_image_id=>$prop_image_meta ){

                    $slider_thumb = wp_get_attachment_image_src($prop_image_id,'property-detail-slider-thumb');

                    echo '<li data-thumb="'.$slider_thumb[0].'">';
                    echo '<a href="'.$prop_image_meta['full_url'].'" class="'.get_lightbox_plugin_class() .'" '.generate_gallery_attribute().'>';
                    echo '<img src="'.$prop_image_meta['url'].'" alt="'.$prop_image_meta['title'].'" />';
                    echo '</a>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
    </div>
<?php
}
?>