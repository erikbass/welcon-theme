<section class="advance-search ">

        <?php
        $theme_search_url = get_option('theme_search_url');
        if(!empty($theme_search_url)):

            $home_advance_search_title= get_option('theme_home_advance_search_title');
            if(!empty($home_advance_search_title)){
                ?><h3 class="search-heading"><i class="icon-search"></i><?php echo $home_advance_search_title; ?></h3><?php
            }
        ?>
        <div class="as-form-wrap">
            <form class="advance-search-form clearfix" action="<?php echo $theme_search_url; ?>" method="get">

                <div class="option-bar large">
                    <label><?php _e('Location', 'framework'); ?></label>
                    <span class="selectwrap">
                        <select name="location" id="select-location" class="search-select">
                            <?php advance_search_options('property-city'); ?>
                        </select>
                    </span>
                </div>

                <div class="option-bar large">
                    <label><?php _e('Status', 'framework'); ?></label>
                    <span class="selectwrap">
                        <select name="status" id="select-status" class="search-select">
                            <?php advance_search_options('property-status'); ?>
                        </select>
                    </span>
                </div>

                <div class="option-bar large last">
                    <label><?php _e('Property Type', 'framework'); ?></label>
                    <span class="selectwrap">
                        <select name="type" id="select-property-type" class="search-select">
                            <?php advance_search_options('property-type'); ?>
                        </select>
                    </span>
                </div>

                <div class="option-bar small">
                    <label><?php _e('Bedrooms', 'framework'); ?></label>
                    <span class="selectwrap">
                        <select name="bedrooms" id="select-bedrooms" class="search-select">
                            <?php numbers_list('bedrooms'); ?>
                        </select>
                    </span>
                </div>

                <div class="option-bar small">
                    <label><?php _e('Bathrooms', 'framework'); ?></label>
                    <span class="selectwrap">
                        <select name="bathrooms" id="select-bathrooms" class="search-select">
                            <?php numbers_list('bathrooms'); ?>
                        </select>
                    </span>
                </div>

                <div class="option-bar small second-last">
                    <label><?php _e('Minimum Price', 'framework'); ?></label>
                    <span class="selectwrap">
                        <select name="min-price" id="select-min-price" class="search-select">
                            <?php min_prices_list(); ?>
                        </select>
                    </span>
                </div>

                <div class="option-bar small last">
                    <label><?php _e('Maximum Price', 'framework'); ?></label>
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
        ?>
</section>