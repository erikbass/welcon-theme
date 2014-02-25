<?php
$show_social = get_option('theme_show_social_menu');

if($show_social == 'true')
{
    $sl_facebook = get_option('theme_facebook_link');
    $sl_twitter = get_option('theme_twitter_link');
    $sl_linkedin = get_option('theme_linkedin_link');
    $sl_google = get_option('theme_google_link');
    $sl_rss = get_option('theme_rss_link');
    ?>
    <ul class="social_networks clearfix">
            <?php
            if(!empty( $sl_facebook )){
                ?>
                <li class="facebook">
                    <a target="_blank" href="<?php echo $sl_facebook; ?>"><i class="icon-facebook"></i></a>
                </li>
            <?php
            }

            if(!empty( $sl_twitter )){
                ?>
                <li class="twitter">
                    <a target="_blank" href="<?php echo $sl_twitter; ?>"><i class="icon-twitter"></i></a>
                </li>
            <?php
            }

            if(!empty( $sl_linkedin )){
                ?>
                <li class="linkedin">
                    <a target="_blank" href="<?php echo $sl_linkedin; ?>"><i class="icon-linkedin"></i></a>
                </li>
            <?php
            }

            if(!empty( $sl_google )){
                ?>
                <li class="gplus">
                    <a target="_blank" href="<?php echo $sl_google; ?>"><i class="icon-google-plus"></i></a>
                </li>
            <?php
            }

            if(!empty( $sl_rss )){
                ?>
                <li class="rss">
                    <a target="_blank" href="<?php echo $sl_rss; ?>"> <i class="icon-rss"></i></a>
                </li>
                <?php
            }
            ?>
    </ul>
    <?php
}
?>