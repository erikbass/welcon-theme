<?php
    // Banner Image
    $banner_image_path = "";
    $banner_image_id = get_post_meta( $post->ID, 'REAL_HOMES_page_banner_image', true );
    if($banner_image_id){
        $banner_image_path = wp_get_attachment_url($banner_image_id);
    }else{
        $banner_image_path = get_default_banner();
    }

    // Banner Title
    $banner_title = get_post_meta( $post->ID, 'REAL_HOMES_banner_title', true );
    if(empty($banner_title)){
        $banner_title = get_the_title($post->ID);
    }

    // Banner Sub Title
    $banner_sub_title = get_post_meta( $post->ID, 'REAL_HOMES_banner_sub_title', true );

    ?>

    <div class="page-head" style="background-repeat: no-repeat;background-position: center top;background-image: url('<?php echo $banner_image_path; ?>'); ">
        <div class="container">
            <div class="wrap clearfix">
                <h1 class="page-title"><span><?php echo $banner_title; ?></span></h1>
                <?php
                if($banner_sub_title){
                  ?><p><?php echo $banner_sub_title; ?></p><?php
                }
                ?>
            </div>
        </div>
    </div><!-- End Page Head -->