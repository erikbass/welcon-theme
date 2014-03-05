<?php
/*
*   Template Name: Home Template
*/
get_header();

// Slider
get_template_part('template-parts/slider');

?>
    <style type="text/css">
        .fixedNav {
            box-shadow: 0 0 5px #000;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            z-index: 9999;
        }
        .widget #searchform {
            width: 50%;
        }
        .widget #s {
            height: 33px;
            width: 100%;
        }
    </style>
    <script type="text/javascript">
        jQuery(function(){
            //////////
            var nav = jQuery('#acessorapido');
            jQuery(window).scroll(function () {
                if (jQuery(this).scrollTop() > 628) {
                    nav.addClass("fixedNav");
                } else {
                    nav.removeClass("fixedNav");
                }
            });

            jQuery("#acessorapido a").click(function(){
                var a_href = $(this).attr('href');
                jQuery('html, body').animate({
                    scrollTop: jQuery(a_href).offset().top - 75
                }, 1000);
            });
        });
        //////////
    </script>

    <!-- Content -->
    <div class="container contents">
        <div class="row">

            <div class="span12">

                <!-- Main Content -->
                <div class="main">
                    <!-- acesso rápido às categorias -->
                    <div id="acessorapido">
                        <ul>
                            <li class="bgTom01"><a href="#lancamentos">Futuros lançamentos</a></li>
                            <li class="bgTom02"><a href="#incorporadora">Incorporação</a></li>
                            <li class="bgTom03"><a href="#urbanismo">Urbanismo</a></li>
                        </ul>
                    </div>

                    <section class="widget">
                        <form action="<?php echo $theme_search_url; ?>" class="searchform" id="searchform" method="get" role="search">
                            <div>
                                <label for="s" class="screen-reader-text">Pesquisar por:</label>
                                <input type="text" id="s" name="s" value="">
                                <input type="submit" value="Pesquisar" id="searchsubmit">
                            </div>
                        </form>
                    </section>

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

                            /*if(!empty($slogan_text)){
                                ?><p><?php echo $slogan_text; ?></p><?php
                            }*/
                            ?>
                        </div>

                        <div class="property-items-container clearfix" style="display:none;">
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

                        <?php //theme_pagination( $home_properties_query->max_num_pages); ?>

                        <!-- BLOCKS -->
                            <link rel="stylesheet" type="text/css" href="<?php echo content_url(); ?>/themes/welcon/css/block.css">
                            <script type="text/javascript" src="<?php echo content_url(); ?>/themes/welcon/js/block.js"></script>
                            
                            <section class="block lancamentos" id="lancamentos">
                                <h2>Futuros Lançamentos</h2>                                
                                <ul>
                                    <?
                                        $lancamentos_args = array(
                                            'post_type' => 'property',
                                            'tax_query' => array(
                                                array('taxonomy' => 'property-type', 'field' => 'term_id', 'terms' => 13)
                                            )
                                        );

                                        $cor = 1;
                                        $home_properties_query = new WP_Query( $lancamentos_args );

                                        if ( $home_properties_query->have_posts() ) :
                                            while ( $home_properties_query->have_posts() ) :
                                                $home_properties_query->the_post();
                                                ?>
                                                <li>
                                                    <div class="blocks bgTom0<?= $cor ?>">
                                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                            <div class="imgBlock" style="background-image: url('<?= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>');"></div>
                                                            <div class="txtBlock">
                                                                <span><?php the_title(); ?></span>
                                                                Porto Velho, Rond&ocirc;nia
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            <?
                                                if($cor == 1){$cor=2;}else{$cor=1;}
                                            endwhile;
                                            wp_reset_query();
                                        else:
                                            ?>
                                            <div class="alert-wrapper">
                                                <h4><?php _e('Em breve!', 'framework') ?></h4>
                                            </div>
                                            <?php
                                        endif;
                                    ?>
                                </ul>

                                <div class="ctrl">
                                    <a href="#" class="prev">&lsaquo;</a>
                                    <a href="#" class="next">&rsaquo;</a>
                                </div>
                            </section>                           

                            <!-- banner Mapa de Atuaçao -->
                            <br>
                            <a href="?page_id=349">
                                <img src="./wp-content/themes/welcon/banners/bannerMapaAtuacao.jpg">
                            </a>

                            <section class="block urbanismo andamento" id="urbanismo">
                                <h2>Urbanismo</h2>                                
                                <ul>
                                    <?
                                        $lancamentos_args = array(
                                            'post_type' => 'property',
                                            'tax_query' => array(
                                                array('taxonomy' => 'property-type', 'field' => 'term_id', 'terms' => 9)
                                            )
                                        );

                                        $cor = 1;
                                        $home_properties_query = new WP_Query( $lancamentos_args );

                                        if ( $home_properties_query->have_posts() ) :
                                            while ( $home_properties_query->have_posts() ) :
                                                $home_properties_query->the_post();
                                                ?>
                                                <li>
                                                    <div class="blocks bgTom0<?= $cor ?>">
                                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                            <div class="imgBlock" style="background-image: url('<?= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>');"></div>
                                                            <div class="txtBlock">
                                                                <span><?php the_title(); ?></span>
                                                                Porto Velho, Rond&ocirc;nia
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            <?
                                                if($cor == 1){$cor=2;}else{$cor=1;}
                                            endwhile;
                                            wp_reset_query();
                                        else:
                                            ?>
                                            <div class="alert-wrapper">
                                                <h4><?php _e('Em breve!', 'framework') ?></h4>
                                            </div>
                                            <?php
                                        endif;
                                    ?>
                                </ul>

                                <div class="ctrl">
                                    <a href="#" class="prev">&lsaquo;</a>
                                    <a href="#" class="next">&rsaquo;</a>
                                </div>
                            </section>

                            <section class="block andamento" id="incorporadora">
                                <h2>Incorporação</h2>                                
                                <ul>
                                    <?
                                        $lancamentos_args = array(
                                            'post_type' => 'property',
                                            'tax_query' => array(
                                                array('taxonomy' => 'property-type', 'field' => 'term_id', 'terms' => 17)
                                            )
                                        );

                                        $cor = 1;
                                        $home_properties_query = new WP_Query( $lancamentos_args );

                                        if ( $home_properties_query->have_posts() ) :
                                            while ( $home_properties_query->have_posts() ) :
                                                $home_properties_query->the_post();
                                                ?>
                                                <li>
                                                    <div class="blocks bgTom0<?= $cor ?>">
                                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                            <div class="imgBlock" style="background-image: url('<?= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>');"></div>
                                                            <div class="txtBlock">
                                                                <span><?php the_title(); ?></span>
                                                                Porto Velho, Rond&ocirc;nia
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            <?
                                                if($cor == 1){$cor=2;}else{$cor=1;}
                                            endwhile;
                                            wp_reset_query();
                                        else:
                                            ?>
                                            <div class="alert-wrapper">
                                                <h4><?php _e('Em breve!', 'framework') ?></h4>
                                            </div>
                                            <?php
                                        endif;
                                    ?>
                                </ul>

                                <div class="ctrl">
                                    <a href="#" class="prev">&lsaquo;</a>
                                    <a href="#" class="next">&rsaquo;</a>
                                </div>
                            </section>
                        <!-- BLOCKS fim -->

                    </section>

                    

                    <?php
                    /* Featured Properties */
                    $show_featured_properties = get_option('theme_show_featured_properties');
                    if($show_featured_properties == 'true'){
                        //get_template_part("template-parts/carousel") ;
                    }
                    ?>
                </div><!-- End Main Content -->

                <!-- empresas do grupo -->
                <section class="featured-properties-carousel clearfix">
                    <h4><a target="_blank" href="http://www.grupoguareschi.com.br"><img src="./wp-content/themes/welcon/banners/grupo/grupo.png"></a></h4>
                    <div class="carousel es-carousel-wrapper">
                        <div class="es-carousel">
                            <ul class="clearfix">
                                <li>
                                    <figure>
                                        <a href="" target="_blank"><img src="./wp-content/themes/welcon/banners/grupo/gagro.png" /></a>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <a href="" target="_blank"><img src="./wp-content/themes/welcon/banners/grupo/gcon.png" /></a>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <a href="" target="_blank"><img src="./wp-content/themes/welcon/banners/grupo/gm.png" /></a>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <a href="" target="_blank"><img src="./wp-content/themes/welcon/banners/grupo/gmix.png" /></a>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <a href="" target="_blank"><img src="./wp-content/themes/welcon/banners/grupo/gnic.png" /></a>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <a href="" target="_blank"><img src="./wp-content/themes/welcon/banners/grupo/gserv.png" /></a>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <a href="" target="_blank"><img src="./wp-content/themes/welcon/banners/grupo/mineracao.png" /></a>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <a href="" target="_blank"><img src="./wp-content/themes/welcon/banners/grupo/welcon.png" /></a>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- fim empresas do grupo -->

            </div> <!-- End span12 -->

        </div><!-- End  row -->

    </div><!-- End content -->

<?php get_footer(); ?>