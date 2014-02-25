<!doctype html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>


    <?php
    $favicon = get_option('theme_favicon');
    if( !empty($favicon) )
    {
        ?>
        <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
        <?php
    }
    ?>

    <!-- Define a viewport to mobile devices to use - telling the browser to assume that the page is as wide as the device (width=device-width) and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style Sheet-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>

    <!-- Pingback URL -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- RSS -->
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />

    <?php
    // Quick CSS from Theme Options
    $quick_css = stripslashes(get_option('theme_quick_css'));

    if(!empty($quick_css)){
        echo "<style type='text/css' id='quick-css'>\n\n";
        echo $quick_css . "\n\n";
        echo "</style>";
    }
    ?>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php
    // Google Analytics From Theme Options
    echo stripslashes(get_option('theme_google_analytics'));

    wp_head();
    ?>
</head>
<body <?php body_class(); ?>>

        <!-- Start Header -->
        <div class="header-wrapper">

            <div class="container"><!-- Start Header Container -->

                <header id="header" class="clearfix">

                    <div id="header-top" class="clearfix">

                        <h2 id="contact-email">
                            <?php
                            $header_email = get_option('theme_header_email');
                            if(!empty($header_email)){
                                ?>
                                <i class="email"></i> <?php _e('Email us at', 'framework'); ?> : <a href="mailto:<?php echo $header_email; ?>"><?php echo $header_email; ?></a>
                                <?php
                            }
                            ?>
                        </h2>

                        <!-- Social Navigation -->
                        <?php  get_template_part('template-parts/social-nav') ;    ?>

                    </div>


                    <!-- Logo -->
                    <div id="logo">

                        <?php
                        $logo_path = get_option('theme_sitelogo');
                        if(!empty($logo_path))
                        {
                            ?>
                            <a title="<?php  bloginfo( 'name' ); ?>" href="<?php echo home_url(); ?>">
                                <img src="<?php echo $logo_path; ?>" alt="<?php  bloginfo( 'name' ); ?>">
                            </a>
                            <?php
                        }else{
                            ?>
                            <h2 class="logo-heading">
                                <a href="<?php echo home_url(); ?>"  title="<?php bloginfo( 'name' ); ?>">
                                    <?php  bloginfo( 'name' ); ?>
                                </a>
                            </h2>
                            <?php
                        }
                        ?>

                        <div class="tag-line">
                            <span><?php bloginfo( 'description' ); ?></span>
                        </div>
                    </div>


                    <div class="menu-and-contact-wrap">

                        <?php
                        $header_phone = get_option('theme_header_phone');
                        if( !empty($header_phone) ){
                            echo '<h2  class="contact-number"><i class="icon-phone"></i>'.$header_phone.' <span class="outer-strip"></span></h2>';
                        }
                        ?>

                        <!-- Start Main Menu-->
                        <nav class="main-menu">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'main-menu',
                                'menu_class' => 'clearfix'
                            ));
                            ?>
                        </nav><!-- End Main Menu -->

                    </div>

                </header>

            </div> <!-- End Header Container -->

        </div><!-- End Header -->
