<?php
get_header();

        // Banner Image
        $banner_image_path = get_default_banner();
        ?>

        <div class="page-head" style="background-repeat: no-repeat;background-position: center top;background-image: url('<?php echo $banner_image_path; ?>'); ">
            <div class="container">
                <div class="wrap clearfix">
                    <h1 class="page-title">
                        <span><?php the_title(); ?></span>
                    </h1>
                    <p><?= retornaDetalhes($post->ID,'property-status') ?></p>
                </div>
            </div>
        </div><!-- End Page Head -->

        <!-- Content -->
        <div class="container contents detail">
            <div class="row">
                <div class="span9 main-wrap">

                    <!-- Main Content -->
                    <div class="main">

                            <section id="overview">

                             <?php
                             if ( have_posts() ) :
                                 while ( have_posts() ) :
                                    the_post();

                                    /*
                                    * 1. Property Images Slider
                                    */
                                    get_template_part('property-details/property-slider');

                                    /*
                                    * 2. Property Information Bar, Icons Bar, Text Contents and Features
                                    */
                                    get_template_part('property-details/property-contents');

                                    /*
                                    * 3. Property Video
                                    */
                                    get_template_part('property-details/property-video');

                                     /*
                                     * 4. Property Map
                                     */
                                     get_template_part('property-details/property-map');

                                     /*
                                     * 5. Property Agent
                                     */
                                     get_template_part('property-details/property-agent');

                                 endwhile;
                             endif;
                             ?>

                            </section>

                    </div><!-- End Main Content -->

                </div> <!-- End span9 -->

                <?php get_sidebar('property'); ?>

            </div><!-- End contents row -->
        </div><!-- End Content -->

<?php get_footer(); ?>