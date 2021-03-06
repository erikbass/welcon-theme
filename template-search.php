<?php
/*
*   Template Name: Property Search Template
*/
get_header();

    // page banner
    get_template_part('banners/default_page_banner');

?>

    <!-- Content -->
    <div class="container contents">
        <div class="row">

            <div class="span12">

                <!-- Main Content -->
                <div class="main">
                    <?php
                    /* Advance Search Form */
                    get_template_part('template-parts/advance-search');
                    ?>

                    <section class="property-items">

                        <div class="narrative"></div>

                        <div class="property-items-container clearfix">
                            <?php
                            /* List of Properties on Homepage */
                            $number_of_properties = intval(get_option('theme_properties_on_home'));
                            if(!$number_of_properties){
                                $number_of_properties = 4;
                            }

                            $search_args = array(
                                'post_type' => 'property',
                                'posts_per_page' => $number_of_properties,
                                'paged' => $paged
                            );

                            // Apply Search Filter
                            $search_args = apply_filters('real_homes_search_parameters',$search_args);

                            $search_query = new WP_Query( $search_args );
                            if ( $search_query->have_posts() ) :
                                while ( $search_query->have_posts() ) :
                                    $search_query->the_post();

                                    /* Display Property for Search Page */
                                    get_template_part('template-parts/property-for-home');

                                endwhile;
                                wp_reset_query();
                            else:
                                ?><div class="alert-wrapper"><h4><?php _e('No Properties Found!', 'framework') ?></h4></div><?php
                            endif;
                            ?>
                        </div>

                        <?php theme_pagination( $search_query->max_num_pages); ?>

                    </section>

                </div><!-- End Main Content -->

            </div> <!-- End span12 -->

        </div><!-- End  row -->

    </div><!-- End content -->

<?php get_footer(); ?>