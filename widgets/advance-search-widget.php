<?php
class Advance_Search_Widget extends WP_Widget {

    function Advance_Search_Widget(){
        $widget_ops = array( 'classname' => 'Advance_Search_Widget', 'description' => __('This widget displays advance search form.', 'framework'));
        $this->WP_Widget( 'advance_search_widget', __('RealHomes - Advance Search Widget', 'framework'), $widget_ops );
    }

    function widget($args,  $instance) {
        extract($args);

        $title = apply_filters('widget_title', $instance['title']);

        if ( empty($title) ){
            $title = false;
        }

        echo '<section class="widget advance-search">';

        if($title):
            echo '<h4 class="title search-heading">'. $title .'<i class="icon-search"></i></h4>';
        endif;

        $theme_search_url = get_option('theme_search_url');
        if(!empty($theme_search_url)):
            ?>
            <div class="as-form-wrap">
                <form class="advance-search-form clearfix" action="<?php echo $theme_search_url; ?>" method="get">

                    <div class="option-bar">
                        <label><?php _e('Location', 'framework'); ?></label>
                        <span class="selectwrap">
                            <select name="location" id="select-location" class="search-select">
                                <?php advance_search_options('property-city'); ?>
                            </select>
                        </span>
                    </div>

                    <div class="option-bar">
                        <label><?php _e('Status', 'framework'); ?></label>
                        <span class="selectwrap">
                            <select name="status" id="select-status" class="search-select">
                                <?php advance_search_options('property-status'); ?>
                            </select>
                        </span>
                    </div>

                    <div class="option-bar">
                        <label><?php _e('Property Type', 'framework'); ?></label>
                        <span class="selectwrap">
                            <select name="type" id="select-property-type" class="search-select">
                                <?php advance_search_options('property-type'); ?>
                            </select>
                        </span>
                    </div>

                    <div class="option-bar mini first">
                        <label><?php _e('Bedrooms', 'framework'); ?></label>
                        <span class="selectwrap">
                            <select name="bedrooms" id="select-bedrooms" class="search-select">
                                <?php numbers_list('bedrooms'); ?>
                            </select>
                        </span>
                    </div>

                    <div class="option-bar mini">
                        <label><?php _e('Bathrooms', 'framework'); ?></label>
                        <span class="selectwrap">
                            <select name="bathrooms" id="select-bathrooms" class="search-select">
                                <?php numbers_list('bathrooms'); ?>
                            </select>
                        </span>
                    </div>

                    <div class="option-bar mini first">
                        <label><?php _e('Min Price', 'framework'); ?></label>
                        <span class="selectwrap">
                            <select name="min-price" id="select-min-price" class="search-select">
                                <?php min_prices_list(); ?>
                            </select>
                        </span>
                    </div>

                    <div class="option-bar mini">
                        <label><?php _e('Max Price', 'framework'); ?></label>
                        <span class="selectwrap">
                            <select name="max-price" id="select-max-price" class="search-select">
                                <?php max_prices_list(); ?>
                            </select>
                        </span>
                    </div>

                    <input type="submit" value="<?php _e('Search', 'framework'); ?>" class=" real-btn btn">
                </form>
            </div>
        <?php
        endif;

        echo $after_widget;

    }


    function form($instance) {
        $instance = wp_parse_args( (array) $instance, array( 'title'=> __('Find Your Home', 'framework') ) );
        $title = esc_attr($instance['title']);
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget Title', 'framework'); ?></label>
            <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" class="widefat" />
        </p>
        <?php
    }


    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;

        $instance['title'] = strip_tags($new_instance['title']);

        return $instance;
    }



}

?>