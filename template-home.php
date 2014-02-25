<?php
/*
*   Template Name: Home Template
*/
get_header();

// Slider
get_template_part('template-parts/slider');

?>

    <!-- Content -->
    <div class="container contents">
        <div class="row">

            <div class="span12">

                <!-- Main Content -->
                <div class="main">
                    <?php
                    /* Advance Search Form for Homepage */
                    get_template_part('template-parts/advance-search');

                    if ( have_posts() ) :
                        while ( have_posts() ) :
                            the_post();
                            $content = get_the_content('');
                            if(!empty($content)){
                                ?>
                                <div class="inner-wrapper">
                                    <article id="post-<?php the_ID(); ?>" <?php post_class("clearfix"); ?>>
                                        <?php the_content(); ?>
                                    </article>
                                </div>
                                <?php
                            }
                        endwhile;
                    endif;

                    ?>

                    <section class="property-items">

                        <?php
                        /* Slogan Title and Text */
                        $slogan_title = get_option('theme_slogan_title');
                        $slogan_text = get_option('theme_slogan_text');

                        ?>
                        <div class="narrative">
                            <?php
                            if(!empty($slogan_title)){
                                ?><h2><?php echo $slogan_title; ?></h2><?php
                            }

                            if(!empty($slogan_text)){
                                ?><p><?php echo $slogan_text; ?></p><?php
                            }
                            ?>
                        </div>

                        <div class="property-items-container clearfix">
                            <?php
                            /* List of Properties on Homepage */
                            $number_of_properties = intval(get_option('theme_properties_on_home'));
                            if(!$number_of_properties){
                                $number_of_properties = 4;
                            }

                            if ( is_front_page()  ) {
                                $paged = (get_query_var('page')) ? get_query_var('page') : 1;
                            }

                            $home_args = array(
                                'post_type' => 'property',
                                'posts_per_page' => $number_of_properties,
                                'paged' => $paged
                            );

                            $home_properties_query = new WP_Query( $home_args );
                            if ( $home_properties_query->have_posts() ) :
                                while ( $home_properties_query->have_posts() ) :
                                    $home_properties_query->the_post();

                                    /* Display Property for Home Page */
                                    get_template_part('template-parts/property-for-home');

                                endwhile;
                                wp_reset_query();
                            else:
                                ?>
                                <div class="alert-wrapper">
                                    <h4><?php _e('No Properties Found!', 'framework') ?></h4>
                                </div>
                                <?php
                            endif;
                            ?>
                        </div>

                        <?php theme_pagination( $home_properties_query->max_num_pages); ?>

                    </section>

                    <?php
                    /* Featured Properties */
                    $show_featured_properties = get_option('theme_show_featured_properties');
                    if($show_featured_properties == 'true'){
                        get_template_part("template-parts/carousel") ;
                    }
                    ?>
                </div><!-- End Main Content -->

            </div> <!-- End span12 -->

        </div><!-- End  row -->

    </div><!-- End content -->

<?php get_footer(); ?>