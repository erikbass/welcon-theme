<?php
get_header();
?>

    <!-- Page Head -->
<?php get_template_part("banners/taxonomy_page_banner"); ?>


    <div class="container contents lisitng-grid-layout">
        <div class="row">
            <div class="span9 main-wrap">

                <!-- Main Content -->
                <div class="main">

                    <section class="listing-layout">

                        <div class="list-container clearfix">
                            <?php

                            if ( have_posts() ) :
                                while ( have_posts() ) :
                                    the_post();

                                    /* Display Property for Listing */
                                    get_template_part('template-parts/property-for-listing');

                                endwhile;
                            else:
                                ?>
                                <div class="alert-wrapper">
                                    <h4><?php _e('No Results Found', 'framework') ?></h4>
                                </div>
                            <?php
                            endif;
                            ?>
                        </div>

                        <?php theme_pagination( $wp_query->max_num_pages); ?>

                    </section>

                </div><!-- End Main Content -->

            </div> <!-- End span9 -->

            <?php get_sidebar('property-listing'); ?>

        </div><!-- End contents row -->
    </div>

<?php get_footer(); ?>