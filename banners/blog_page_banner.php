<?php
    $banner_title = get_option('theme_news_banner_title');
    $banner_title = empty($banner_title)?__('News','framework'):$banner_title;

    $banner_sub_title = get_option('theme_news_banner_sub_title');
    $banner_sub_title = empty($banner_sub_title)?__('Check out market updates','framework'):$banner_sub_title;

    $banner_image_path = get_default_banner();
?>

    <div class="page-head" style="background-repeat: no-repeat;background-position: center top;background-image: url('<?php echo $banner_image_path; ?>'); ">
        <div class="container">
            <div class="wrap clearfix">
                <h1 class="page-title"><span><?php echo $banner_title; ?></span></h1>
                <p><?php echo $banner_sub_title; ?></p>
            </div>
        </div>
    </div><!-- End Page Head -->