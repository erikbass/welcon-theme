<?php
/*
*   Template Name: Property Listing Template
*/
get_header();
?>

<!-- Page Head -->
<?php get_template_part("banners/default_page_banner"); ?>

    <!-- Content -->
    <?php
    if(isset($_GET['view'])){
        $view_type = $_GET['view'];
    }else{
        $view_type = '';
    }

    if( $view_type == 'grid' ){
        get_template_part("template-parts/grid-listing-container");
    }else{
        get_template_part("template-parts/listing-container");
    }
    ?>
<!-- End Content -->

<?php get_footer(); ?>