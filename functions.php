<?php
/*-----------------------------------------------------------------------------------*/
/*	Load Text Domain
/*-----------------------------------------------------------------------------------*/
    load_theme_textdomain( 'framework' );


/*-----------------------------------------------------------------------------------*/
/*	Add Custom Background
/*-----------------------------------------------------------------------------------*/
    add_theme_support( 'custom-background' );



/*-----------------------------------------------------------------------------------*/
/*	Add Automatic Feed Links Support
/*-----------------------------------------------------------------------------------*/
    add_theme_support( 'automatic-feed-links' );



/*-----------------------------------------------------------------------------------*/
/*	Include Theme Options Framework
/*-----------------------------------------------------------------------------------*/
    require_once(get_template_directory() . '/framework/admin/admin-functions.php');
    require_once(get_template_directory() . '/framework/admin/admin-interface.php');
    require_once(get_template_directory() . '/framework/admin/theme-settings.php');



/*-----------------------------------------------------------------------------------*/
/*	Include Theme Functions for Various Important Features
/*-----------------------------------------------------------------------------------*/
    require_once(get_template_directory() . '/framework/functions/contact_form_handler.php');
    require_once(get_template_directory() . '/framework/functions/theme_comment.php');



/*-----------------------------------------------------------------------------------*/
/*	Include Meta Box
/*-----------------------------------------------------------------------------------*/
    define( 'RWMB_URL', trailingslashit( get_template_directory_uri() . '/framework/meta-box' ) );
    define( 'RWMB_DIR', trailingslashit( get_template_directory() . '/framework/meta-box' ) );
    require_once RWMB_DIR . 'meta-box.php';
    require_once RWMB_DIR . 'config-meta-boxes.php';



/*-----------------------------------------------------------------------------------*/
//	Shortcodes
/*-----------------------------------------------------------------------------------*/
    require_once( get_template_directory() . '/framework/include/shortcodes/columns.php' );
    require_once( get_template_directory() . '/framework/include/shortcodes/elements.php' );



/*-----------------------------------------------------------------------------------*/
/*	Include Custom Post Type For Services
/*-----------------------------------------------------------------------------------*/
    require_once ( get_template_directory() . '/framework/include/agent-post-type.php' );
    require_once ( get_template_directory() . '/framework/include/property-post-type.php' );
    require_once ( get_template_directory() . '/framework/include/partners-post-type.php' );



/*-----------------------------------------------------------------------------------*/
//	Dynamic CSS
/*-----------------------------------------------------------------------------------*/
    require_once( get_template_directory() . '/css/dynamic-css.php' );



/*-----------------------------------------------------------------------------------*/
/*	Add Post Format Support for Image and Video
/*-----------------------------------------------------------------------------------*/
    add_theme_support( 'post-formats', array( 'image', 'video', 'gallery' ) );



/*-----------------------------------------------------------------------------------*/
/*	Adding Default Thumbnail Sizes
/*-----------------------------------------------------------------------------------*/
    if( function_exists( 'add_theme_support' ) ){
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150 );                            // default Post Thumbnail dimensions

        add_image_size( 'partners-logo', 200, 58, true);                // For partner carousel logos
        add_image_size( 'post-featured-image', 830, 323, true);         // For Standard Post Thumbnails

        add_image_size( 'gallery-two-column-image', 536, 269, true);    // For Gallery Two Column property Thumbnails

        add_image_size( 'property-thumb-image', 244, 163, true);        // For Home page posts thumbnails/Featured Properties carousels thumb
        add_image_size( 'property-detail-slider-image', 770, 386, true);// For Property detail page slider image
        add_image_size( 'property-detail-slider-thumb', 82, 60, true);  // For Property detail page slider thumb
        add_image_size( 'property-detail-video-image', 818, 417, true); // For Property detail page video image

        add_image_size( 'agent-image', 210, 210, true);                 // For Agent Picture
        add_image_size( 'grid-view-image', 246, 162, true);             // For Property Listing Grid view,  image
    }



/*-----------------------------------------------------------------------------------*/
/*	Enables Widget Sidebars
/*-----------------------------------------------------------------------------------*/
    if ( function_exists('register_sidebar') ){

        // Location: Default Sidebar
        register_sidebar(array('name'=>__('Default Sidebar','framework'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="title">',
            'after_title' => '</h3>'
        ));

        // Location: Sidebar Pages
        register_sidebar(array('name'=>__('Pages Sidebar','framework'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="title">',
            'after_title' => '</h3>'
        ));

        // Location: Sidebar for contact page
        register_sidebar(array('name'=>__('Contact Sidebar','framework'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="title">',
            'after_title' => '</h3>'
        ));

        // Location: Sidebar Property
        register_sidebar(array('name'=>__('Property Sidebar','framework'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="title">',
            'after_title' => '</h3>'
        ));

        // Location: Sidebar Properties Listing
        register_sidebar(array('name'=>__('Property Listing Sidebar','framework'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="title">',
            'after_title' => '</h3>'
        ));

        // Location: Sidebar dsIDX
        register_sidebar(array('name'=>__('dsIDX Sidebar','framework'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="title">',
            'after_title' => '</h3>'
        ));

        // Location: Footer First Column
        register_sidebar(array('name'=>__('Footer First Column','framework'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="title">',
            'after_title' => '</h3>'
        ));

        // Location: Footer Second Column
        register_sidebar(array('name'=>__('Footer Second Column','framework'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="title">',
            'after_title' => '</h3>'
        ));

        // Location: Footer Third Column
        register_sidebar(array('name'=>__('Footer Third Column','framework'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="title">',
            'after_title' => '</h3>'
        ));

        // Location: Footer Fourth Column
        register_sidebar(array('name'=>__('Footer Fourth Column','framework'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="title">',
            'after_title' => '</h3>'
        ));

    }



/*-----------------------------------------------------------------------------------*/
//	Widgets
/*-----------------------------------------------------------------------------------*/
    require_once( get_template_directory() . '/widgets/' . 'featured-properties-widget.php');
    require_once( get_template_directory() . '/widgets/' . 'property-types-widget.php');
    require_once( get_template_directory() . '/widgets/' . 'advance-search-widget.php');


/*-----------------------------------------------------------------------------------*/
//	Register Widgets
/*-----------------------------------------------------------------------------------*/
    add_action( 'widgets_init', 'register_theme_widgets' );

    function register_theme_widgets() {
        register_widget( 'Featured_Properties_Widget' );
        register_widget( 'Property_Types_Widget' );
        register_widget( 'Advance_Search_Widget' );
    }


/*-----------------------------------------------------------------------------------*/
/*	Content Width
/*-----------------------------------------------------------------------------------*/
    if ( ! isset( $content_width ) ) $content_width = 828;



/*-----------------------------------------------------------------------------------*/
//	Theme Pagination Method
/*-----------------------------------------------------------------------------------*/
    function theme_pagination($pages = ''){
        global $paged;

        if(is_page_template('template-home.php')){
            $paged = intval(get_query_var( 'page' ));
        }

        if(empty($paged))$paged = 1;

        $prev = $paged - 1;
        $next = $paged + 1;
        $range = 2; // only change it to show more links
        $showitems = ($range * 2)+1;

        if($pages == ''){
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if(!$pages){
                $pages = 1;
            }
        }


        if(1 != $pages){
            echo "<div class='pagination'>";
            echo ($paged > 2 && $paged > $range+1 && $showitems < $pages)? "<a href='".get_pagenum_link(1)."' class='real-btn'>&laquo; ".__('First', 'framework')."</a> ":"";
            echo ($paged > 1 && $showitems < $pages)? "<a href='".get_pagenum_link($prev)."' class='real-btn' >&laquo; ". __('Previous', 'framework')."</a> ":"";

            for ($i=1; $i <= $pages; $i++){
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                    echo ($paged == $i)? "<a href='".get_pagenum_link($i)."' class='real-btn current' >".$i."</a> ":"<a href='".get_pagenum_link($i)."' class='real-btn'>".$i."</a> ";
                }
            }

            echo ($paged < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($next)."' class='real-btn' >". __('Next', 'framework') ." &raquo;</a> " :"";
            echo ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($pages)."' class='real-btn' >". __('Last', 'framework') ." &raquo;</a> ":"";
            echo "</div>";
        }
    }



/*-----------------------------------------------------------------------------------*/
/*	Get list of Gallery Images
/*-----------------------------------------------------------------------------------*/
    function list_gallery_images($size = 'post-featured-image')
    {
        global $post;

        $gallery_images = rwmb_meta( 'REAL_HOMES_gallery', 'type=plupload_image&size='.$size, $post->ID );

        if( !empty($gallery_images) )
        {
            foreach( $gallery_images as $gallery_image )
            {
                $caption = ( !empty($gallery_image['caption']) ) ? $gallery_image['caption'] : $gallery_image['alt'];
                echo '<li><a href="'.$gallery_image['full_url'].'" title="'.$caption.'" class="'.get_lightbox_plugin_class() .'">';
                echo '<img src="'.$gallery_image['url'].'" alt="'.$gallery_image['title'].'" />';
                echo '</a></li>';
            }
        }
        else if( has_post_thumbnail($post->ID)){
            echo '<li><a href="'.get_permalink().'" title="'.get_the_title().'" >';
            the_post_thumbnail($size);
            echo '</a></li>';
        }
    }



/*-----------------------------------------------------------------------------------*/
/*	Custom Excerpt Method
/*-----------------------------------------------------------------------------------*/
    function framework_excerpt($len=15, $trim="&hellip;"){
        $limit = $len+1;
        $excerpt = explode(' ', get_the_excerpt(), $limit);
        $num_words = count($excerpt);
        if($num_words >= $len){
            $last_item = array_pop($excerpt);
        }
        else {
            $trim = "";
        }
        $excerpt = implode(" ",$excerpt)."$trim";
        echo $excerpt;
    }

    function get_framework_excerpt($len=15, $trim="&hellip;"){
        $limit = $len+1;
        $excerpt = explode(' ', get_the_excerpt(), $limit);
        $num_words = count($excerpt);
        if($num_words >= $len){
            $last_item=array_pop($excerpt);
        }
        else{
            $trim="";
        }
        $excerpt = implode(" ",$excerpt)."$trim";
        return $excerpt;
    }

    function comment_custom_excerpt($len=15, $comment_content = "" , $trim="&hellip;"){
        $limit = $len+1;
        $excerpt = explode(' ', $comment_content , $limit);
        $num_words = count($excerpt);
        if($num_words >= $len){
            $last_item = array_pop($excerpt);
        }
        else {
            $trim = "";
        }
        $excerpt = implode(" ",$excerpt)."$trim";
        echo $excerpt;
    }



/*-----------------------------------------------------------------------------------*/
/*	Creating Menu Places
/*-----------------------------------------------------------------------------------*/
    add_theme_support( 'menus' );
    if ( function_exists( 'register_nav_menus' ) ) {
        register_nav_menus(
            array(
                'main-menu' => __('Main Menu','framework')
            )
        );
    }



/*-----------------------------------------------------------------------------------*/
/*	Register and load admin javascript
/*-----------------------------------------------------------------------------------*/
    if( !function_exists( 'admin_js' ) ){
        function admin_js($hook){
            if ($hook == 'post.php' || $hook == 'post-new.php'){
                wp_register_script('admin-script', get_template_directory_uri() . '/js/admin.js', 'jquery');
                wp_enqueue_script('admin-script');
            }
        }
        add_action('admin_enqueue_scripts','admin_js',10,1);
    }



/*-----------------------------------------------------------------------------------*/
/*	Disable Post Format UI in WordPress 3.6 and Keep the Old One Working
/*-----------------------------------------------------------------------------------*/
    add_filter( 'enable_post_format_ui', '__return_false' );



/*-----------------------------------------------------------------------------------*/
/*	Load Required CSS Styles
/*-----------------------------------------------------------------------------------*/
    if(!function_exists('load_theme_styles')){
        function load_theme_styles(){
            if (!is_admin()){

                // enqueue required fonts
                $protocol = is_ssl() ? 'https' : 'http';
                wp_enqueue_style( 'theme-roboto', "$protocol://fonts.googleapis.com/css?family=Roboto" );
                wp_enqueue_style( 'theme-lato', "$protocol://fonts.googleapis.com/css?family=Lato" );

                // register styles
                wp_register_style('bootstrap-css',  get_template_directory_uri() . '/css/bootstrap.css', array(), '2.2.2', 'all');
                wp_register_style('responsive-css',  get_template_directory_uri() . '/css/responsive.css', array(), '2.2.2', 'all');
                wp_register_style('awesome-font-css',  get_template_directory_uri() . '/css/font-awesome.min.css', array(), '3.0.2', 'all');
                wp_register_style('pretty-photo-css',  get_template_directory_uri() . '/js/prettyphoto/prettyPhoto.css', array(), '3.1.4', 'all');
                wp_register_style('swipebox-css',  get_template_directory_uri() . '/js/swipebox/swipebox.css', array(), '3.1.4', 'all');
                wp_register_style('flexslider-css',  get_template_directory_uri() . '/js/flexslider/flexslider.css', array(), '2.1', 'all');
                wp_register_style('main-css',  get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');
                wp_register_style('custom-css',  get_template_directory_uri() . '/css/custom.css', array(), '1.0', 'all');

                // enqueue bootstrap styles
                wp_enqueue_style('bootstrap-css');

                // enqueue bootstrap responsive styles
                wp_enqueue_style('responsive-css');

                // Awesome font css
                wp_enqueue_style('awesome-font-css');

                // Flex Slider
                wp_enqueue_style('flexslider-css');

                // enqueue Pretty Photo styles
                wp_enqueue_style('pretty-photo-css');

                // enqueue Swipe Box styles
                wp_enqueue_style('swipebox-css');

                // enqueue Main styles
                wp_enqueue_style('main-css');

                // enqueue Custom styles
                wp_enqueue_style('custom-css');
            }
        }
        add_action('wp_enqueue_scripts', 'load_theme_styles');
    }


/*-----------------------------------------------------------------------------------*/
/*	Load Required JS Scripts
/*-----------------------------------------------------------------------------------*/
    if(!function_exists('load_theme_scripts')){

        function load_theme_scripts(){

            if (!is_admin()) {

                // Defining scripts directory url
                $java_script_url = get_template_directory_uri().'/js/';

                // Registering Scripts
                wp_register_script('flexslider', $java_script_url.'flexslider/jquery.flexslider-min.js', array('jquery'), '2.1', false);
                wp_register_script('easing', $java_script_url.'elastislide/jquery.easing.1.3.js', array('jquery'), '1.3', false);
                wp_register_script('elastislide', $java_script_url.'elastislide/jquery.elastislide.js', array('jquery'), false);
                wp_register_script('pretty-photo', $java_script_url.'prettyphoto/jquery.prettyPhoto.js', array('jquery'), '3.1.4', false);
                wp_register_script('isotope', $java_script_url.'jquery.isotope.min.js', array('jquery'), '1.5.25', false);
                wp_register_script('jcarousel', $java_script_url.'jquery.jcarousel.min.js', array('jquery'), '0.2.9', false);
                wp_register_script('jqvalidate', $java_script_url.'jquery.validate.min.js', array('jquery'), '1.11.1', false);
                wp_register_script('jqform', $java_script_url.'jquery.form.js', array('jquery'), '3.40', false);
                wp_register_script('selectbox', $java_script_url.'jquery.selectbox.js', array('jquery'), '1.2', false);
                wp_register_script('jqtransit', $java_script_url.'jquery.transit.min.js', array('jquery'), '0.9.9', false);
                wp_register_script('bootsrap', $java_script_url.'bootstrap.min.js', array('jquery'), false);
                wp_register_script('swipebox', $java_script_url.'swipebox/jquery.swipebox.min.js', array('jquery'),'1.2.1', false);

                // Custom Script
                wp_register_script('custom',$java_script_url.'custom.js', array('jquery'), '1.0', true);


                // Enqueue Scripts that are needed on all the pages
                wp_enqueue_script('jquery');
                wp_enqueue_script('flexslider');
                wp_enqueue_script('easing');
                wp_enqueue_script('elastislide');
                wp_enqueue_script('pretty-photo');
                wp_enqueue_script('swipebox');
                wp_enqueue_script('isotope');
                wp_enqueue_script('jcarousel');
                wp_enqueue_script('jqvalidate');
                wp_enqueue_script('jqform');
                wp_enqueue_script('selectbox');
                wp_enqueue_script('jqtransit');
                wp_enqueue_script('bootsrap');

                if(is_singular('post') || is_page()){
                    wp_enqueue_script( 'comment-reply' );
                }

                if(is_singular('property')){
                    wp_enqueue_script( 'googlemap', 'http://maps.google.com/maps/api/js?sensor=false', array(), '', true );
                    wp_enqueue_script( 'property-map', $java_script_url . 'property-map.js', array( 'jquery', 'googlemap' ), '1.0', true );

                    /* Pass Lat and Lang values to JavaScript code */
                    global $post;
                    $property_location = get_post_meta($post->ID,'REAL_HOMES_property_location',true);
                    if(!empty($property_location)){
                        $lat_lng = explode(',',$property_location);
                        $geo_location = array('lat' => $lat_lng[0], 'lng' => $lat_lng[1] );
                        wp_localize_script( 'property-map', 'property_location', $geo_location );
                    }
                }

                wp_enqueue_script('custom');

                // Responsive Navigation Title Translation Support - Ref : http://codex.wordpress.org/Function_Reference/wp_localize_script
                $localized_array = array('nav_title' => __('Go to...','framework'));
                wp_localize_script( 'custom', 'localized', $localized_array );
            }
        }
        add_action('wp_enqueue_scripts', 'load_theme_scripts');
    }



/*-----------------------------------------------------------------------------------*/
/*	Get Currency
/*-----------------------------------------------------------------------------------*/
    function get_theme_currency(){
        $currency = get_option( 'theme_currency_sign' );
        if(!empty($currency)){
            return $currency;
        }
        return __('$','framework');
    }



/*-----------------------------------------------------------------------------------*/
/*	Property Price Format
/*-----------------------------------------------------------------------------------*/
    function property_price(){
        global $post;
        $price = get_theme_currency();
        $int_price = intval(get_post_meta($post->ID, 'REAL_HOMES_property_price', true));
        $price_post_fix = get_post_meta($post->ID, 'REAL_HOMES_property_price_postfix', true);
        if($int_price){
            $decimals = intval(get_option( 'theme_decimals'));
            $dec_point = get_option( 'theme_dec_point' );
            $thousands_sep = get_option( 'theme_thousands_sep' );
            $price .= number_format($int_price,$decimals, $dec_point, $thousands_sep);
            $price .= ' '.$price_post_fix;
            echo $price;
        }
    }

    function get_custom_price($amount){
        $theme_currency = get_theme_currency();
        $amount = floatval($amount);
        if($amount){
            $decimals = intval(get_option( 'theme_decimals'));
            $dec_point = get_option( 'theme_dec_point' );
            $thousands_sep = get_option( 'theme_thousands_sep' );

            return $theme_currency.number_format($amount,$decimals, $dec_point, $thousands_sep);
        }
    }


/*-----------------------------------------------------------------------------------*/
// Advance search options (List boxes listing in advance-search.php)
/*-----------------------------------------------------------------------------------*/
    function advance_search_options($taxonomy_name){
        $taxonomy_terms = get_terms($taxonomy_name);
        $searched_term = '';

        if($taxonomy_name == 'property-city'){
            if(!empty($_GET['location'])){
                $searched_term = $_GET['location'];
            }

        }

        if($taxonomy_name == 'property-type'){
            if(!empty($_GET['type'])){
                $searched_term = $_GET['type'];
            }

        }

        if($taxonomy_name == 'property-status'){
            if(!empty($_GET['status'])){
                $searched_term = $_GET['status'];
            }

        }

        if(!empty($taxonomy_terms)){
            foreach($taxonomy_terms as $term){
                if($searched_term == $term->slug){
                    echo '<option value="'.$term->slug.'" selected="selected">'.$term->name.'</option>';
                }else {
                    echo '<option value="'.$term->slug.'">'.$term->name.'</option>';
                }
            }
        }

        if($searched_term == 'any' || empty($searched_term)){
            echo '<option value="any" selected="selected">'.__( 'Any', 'framework').'</option>';
        } else {
            echo '<option value="any">'.__( 'Any', 'framework').'</option>';
        }
    }



/*-----------------------------------------------------------------------------------*/
// Numbers loop
/*-----------------------------------------------------------------------------------*/
    function numbers_list($numbers_list_for){
        $numbers_array = array(1,2,3,4,5,6,7,8,9,10);
        $searched_value = '';

        if($numbers_list_for == 'bedrooms'){
            if(isset($_GET['bedrooms'])){
                $searched_value = $_GET['bedrooms'];
            }
        }

        if($numbers_list_for == 'bathrooms'){
            if(isset($_GET['bathrooms'])) {
                $searched_value = $_GET['bathrooms'];
            }
        }

        if(!empty($numbers_array)){
            foreach($numbers_array as $number){
                if($searched_value == $number){
                    echo '<option value="'.$number.'" selected="selected">'.$number.'</option>';
                }else {
                    echo '<option value="'.$number.'">'.$number.'</option>';
                }
            }
        }

        if($searched_value == 'any' || empty($searched_value)) {
            echo '<option value="any" selected="selected">'.__( 'Any', 'framework').'</option>';
        } else {
            echo '<option value="any">'.__( 'Any', 'framework').'</option>';
        }
    }



/*-----------------------------------------------------------------------------------*/
// Minimum Price
/*-----------------------------------------------------------------------------------*/
    function min_prices_list()
    {
        $min_price_array = array(
                            '1,000' => 1000,
                            '5,000' => 5000,
                            '10,000' => 10000,
                            '50,000' => 50000,
                            '100,000' => 100000,
                            '200,000' => 200000,
                            '300,000' => 300000,
                            '400,000' => 400000,
                            '500,000' => 500000,
                            '600,000' => 600000,
                            '700,000' => 700000,
                            '800,000' => 800000,
                            '900,000' => 900000,
                            '1,000,000' => 1000000,
                            '1,500,000' => 1500000,
                            '2,000,000' => 2000000,
                            '2,500,000' => 2500000,
                            '5,000,000' => 5000000
                        );
        $theme_currency = get_theme_currency();
        $minimum_price = '';

        if(isset($_GET['min-price'])){
            $minimum_price = $_GET['min-price'];
        }

        if(!empty($min_price_array)){
            foreach($min_price_array as $price_key => $price_value){
                if($minimum_price == $price_value)
                {
                    echo '<option value="'.$price_value.'" selected="selected">'.get_custom_price($price_value).'</option>';
                }else {
                    echo '<option value="'.$price_value.'">'.get_custom_price($price_value).'</option>';
                }
            }
        }

        if($minimum_price == 'any' || empty($minimum_price)) {
            echo '<option value="any" selected="selected">'.__( 'Any', 'framework').'</option>';
        } else {
            echo '<option value="any">'.__( 'Any', 'framework').'</option>';
        }

    }




/*-----------------------------------------------------------------------------------*/
// Maximum Price
/*-----------------------------------------------------------------------------------*/
    function max_prices_list()
    {
        $max_price_array = array(
                            '5,000' => 5000,
                            '10,000' => 10000,
                            '50,000' => 50000,
                            '100,000' => 100000,
                            '200,000' => 200000,
                            '300,000' => 300000,
                            '400,000' => 400000,
                            '500,000' => 500000,
                            '600,000' => 600000,
                            '700,000' => 700000,
                            '800,000' => 800000,
                            '900,000' => 900000,
                            '1,000,000' => 1000000,
                            '1,500,000' => 1500000,
                            '2,000,000' => 2000000,
                            '2,500,000' => 2500000,
                            '5,000,000' => 5000000,
                            '10,000,000' => 10000000
                        );
        $theme_currency = get_theme_currency();
        $maximum_price = '';
        if(isset($_GET['max-price'])){
            $maximum_price = $_GET['max-price'];
        }

        if(!empty($max_price_array)){
            foreach($max_price_array as $price_key => $price_value){
                if($maximum_price == $price_value){
                    echo '<option value="'.$price_value.'" selected="selected">'.get_custom_price($price_value).'</option>';
                }else {
                    echo '<option value="'.$price_value.'">'.get_custom_price($price_value).'</option>';
                }
            }
        }

        if($maximum_price == 'any' || empty($maximum_price)) {
            echo '<option value="any" selected="selected">'.__( 'Any', 'framework').'</option>';
        } else {
            echo '<option value="any">'.__( 'Any', 'framework').'</option>';
        }

    }



/*-----------------------------------------------------------------------------------*/
/*	Get Default Banner
/*-----------------------------------------------------------------------------------*/
    function get_default_banner(){
        $banner_image_path = get_option('theme_general_banner_image');
        return empty($banner_image_path)? get_template_directory_uri().'/images/banner.jpg' :$banner_image_path;
    }



/*-----------------------------------------------------------------------------------*/
/*	Properties Search Filter
/*-----------------------------------------------------------------------------------*/
    function real_homes_search($search_args){

        // taxonomy query and meta query arrays
        $tax_query = array();
        $meta_query = array();

        // property type taxonomy query
        if( (!empty($_GET['type'])) && ( $_GET['type'] != 'any') ){
            $tax_query[] = array(
                'taxonomy' => 'property-type',
                'field' => 'slug',
                'terms' => $_GET['type']
            );
        }

        // property city(location) taxonomy query
        if( (!empty($_GET['location'])) && ( $_GET['location'] != 'any') ){
            $tax_query[] = array(
                'taxonomy' => 'property-city',
                'field' => 'slug',
                'terms' => $_GET['location']
            );
        }

        // property status taxonomy query
        if((!empty($_GET['status'])) && ( $_GET['status'] != 'any' ) ){
            $tax_query[] = array(
                'taxonomy' => 'property-status',
                'field' => 'slug',
                'terms' => $_GET['status']
            );
        }

        // property bedrooms meta_query
        if((!empty($_GET['bedrooms'])) && ( $_GET['bedrooms'] != 'any' ) ){
            $meta_query[] = array(
                'key' => 'REAL_HOMES_property_bedrooms',
                'value' => $_GET['bedrooms'],
                'compare' => '=',
                'type'=> 'NUMERIC'
            );
        }

        // property bathrooms meta_query
        if((!empty($_GET['bathrooms'])) && ( $_GET['bathrooms'] != 'any' ) ){
            $meta_query[] = array(
                'key' => 'REAL_HOMES_property_bathrooms',
                'value' => $_GET['bathrooms'],
                'compare' => '=',
                'type'=> 'NUMERIC'
            );
        }

        // if both of the min and max prices are specified then add them to meta query
        if(isset($_GET['min-price']) && isset($_GET['max-price'])){

            if($_GET['min-price'] != 'any' && $_GET['max-price'] != 'any'){

                $min_price = intval($_GET['min-price']);
                $max_price = intval($_GET['max-price']);
                if( $min_price >= 0 && $max_price > $min_price ){
                    $meta_query[] = array(
                        'key' => 'REAL_HOMES_property_price',
                        'value' => array( $min_price, $max_price ),
                        'type' => 'NUMERIC',
                        'compare' => 'BETWEEN'
                    );
                }
            }elseif($_GET['min-price'] != 'any'){
                $min_price = intval($_GET['min-price']);
                if( $min_price > 0 ){
                    $meta_query[] = array(
                        'key' => 'REAL_HOMES_property_price',
                        'value' => $min_price,
                        'type' => 'NUMERIC',
                        'compare' => '>='
                    );
                }
            }elseif($_GET['max-price'] != 'any'){
                $max_price = intval($_GET['max-price']);
                if( $max_price > 0 ){
                    $meta_query[] = array(
                        'key' => 'REAL_HOMES_property_price',
                        'value' => $max_price,
                        'type' => 'NUMERIC',
                        'compare' => '<='
                    );
                }
            }

        }

        // if two taxonomies exist then specify the relation
        $tax_count = count( $tax_query );
        if( $tax_count > 1 ){
            $tax_query['relation'] = 'AND';
        }

        // if two meta query elements exist then specify the relation
        $meta_count = count( $meta_query );
        if( $meta_count > 1 ){
            $meta_query['relation'] = 'AND';
        }

        if( $tax_count > 0 ){
            $search_args['tax_query'] = $tax_query;
        }

        // if meta query has some values then add it to base home page query
        if( $meta_count > 0 ){
            $search_args['meta_query'] = $meta_query;
        }

        if($_GET['min-price'] != 'any' || $_GET['max-price'] != 'any' )
        {
            $search_args['orderby'] = 'meta_value_num';
            $search_args['meta_key'] = 'REAL_HOMES_property_price';
            $search_args['order'] = 'ASC';
        }

        return $search_args;
    }

    add_filter('real_homes_search_parameters','real_homes_search');



/*-----------------------------------------------------------------------------------*/
//	Redirect User to Theme Options Page after Theme Activation
/*-----------------------------------------------------------------------------------*/
global $pagenow;
if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' )
{
    wp_redirect( admin_url( 'admin.php?page=siteoptions' ) );
    exit;
}



/*-----------------------------------------------------------------------------------*/
/*	Remove rel attribute from the category list
/*-----------------------------------------------------------------------------------*/
function remove_category_list_rel($output)
{
    $output = str_replace(' rel="tag"', '', $output);
    $output = str_replace(' rel="category"', '', $output);
    $output = str_replace(' rel="category tag"', '', $output);
    return $output;
}
add_filter('wp_list_categories', 'remove_category_list_rel');
add_filter('the_category', 'remove_category_list_rel');



/*-----------------------------------------------------------------------------------*/
/*	Get Lightbox Plugin Class
/*-----------------------------------------------------------------------------------*/
function get_lightbox_plugin_class(){
    $lightbox_plugin_class = get_option('theme_lightbox_plugin');
    if($lightbox_plugin_class){
        return $lightbox_plugin_class;
    }else{
        return 'swipebox';
    }
}




function generate_gallery_attribute(){
    $lightbox_plugin_class = get_lightbox_plugin_class();
    if($lightbox_plugin_class == 'pretty-photo'){
        return 'data-rel="prettyPhoto[real_homes]"';
    }
    return '';
}

/*-----------------------------------------------------------------------------------*/
/*  Retorna Detalhes específicos do Empreendimento
/*-----------------------------------------------------------------------------------*/
function retornaDetalhes($id, $detalhe){
    $detalhe_terms = get_the_terms($id, $detalhe);
    if(!empty( $detalhe_terms )){
        foreach( $detalhe_terms as $term ){
            $infoDetalhe = $term->name;
            break;
        }
    }
    return $infoDetalhe;
}
?>