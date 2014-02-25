<?php
$property_location = get_post_meta($post->ID,'REAL_HOMES_property_location',true);

if(!empty($property_location))
{
    // $property_location variable is not used here and instead it is used in property-map.js file
    ?>
    <div class="map-wrap clearfix">
        <span class="map-label"><?php _e('Property Map', 'framework'); ?></span>
        <div id="property_map"></div>

        <div class="share-networks clearfix">
            <span class="share-label"><?php _e('Share this', 'framework'); ?></span>
            <span><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="icon-facebook"></i><?php _e('Facebook','framework'); ?></a></span>
            <span><a target="_blank" href="https://twitter.com/share?url=<?php the_permalink(); ?>" ><i class="icon-twitter"></i><?php _e('Twitter','framework'); ?></a></span>
            <span><a target="_blank" href="https://plus.google.com/share?url={<?php the_permalink(); ?>}" onclick="javascript:window.open(this.href,  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes')"><i class="icon-google-plus"></i><?php _e('Google','framework'); ?></a></span>
        </div>
    </div>
    <?php
}
?>