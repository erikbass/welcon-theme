<?php
    $property_title = get_the_title($post->ID);
    $property_permalink = get_permalink($post->ID);

    $property_agent = get_post_meta($post->ID, 'REAL_HOMES_agents',true);

    if(!empty($property_agent)){
        $post = get_post(intval($property_agent));
        setup_postdata($post);
        ?>
        <div class="agent-detail clearfix">

            <div class="left-box">
                <?php
                $agent_mobile = get_post_meta($post->ID, 'REAL_HOMES_mobile_number',true);
                $agent_office_phone = get_post_meta($post->ID, 'REAL_HOMES_office_number',true);
                $agent_office_fax = get_post_meta($post->ID, 'REAL_HOMES_fax_number',true);
                ?>
                <h3><?php _e('Agent','framework'); ?> <?php the_title(); ?></h3>
                <?php
                if(has_post_thumbnail($post->ID)){
                    ?>
                    <figure><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('agent-image'); ?></a></figure>
                    <?php
                }
                ?>
                <p><?php framework_excerpt(35); ?></p>
                <ul class="contacts-list">
                    <?php
                    if(!empty($agent_office_phone)){
                        ?><li class="office"><?php _e('Office', 'framework'); ?> : <?php echo $agent_office_phone; ?></li><?php
                    }
                    if(!empty($agent_mobile)){
                        ?><li class="mobile"><?php _e('Mobile', 'framework'); ?> : <?php echo $agent_mobile; ?></li><?php
                    }
                    if(!empty($agent_office_fax)){
                        ?><li class="fax"><?php _e('Fax', 'framework'); ?>  : <?php echo $agent_office_fax; ?></li><?php
                    }
                    ?>
                </ul>
            </div>

            <?php
            $agent_email = get_post_meta($post->ID, 'REAL_HOMES_agent_email',true);
            if(!empty($agent_email)){
                ?>
                <div class="contact-form">

                    <h3><?php _e('Contact', 'framework'); ?></h3>

                    <form id="agent-contact-form" class="contact-form-small" method="post" action="<?php echo site_url(); ?>/wp-admin/admin-ajax.php">

                        <input type="text" name="name" id="name" value="<?php _e('Name', 'framework'); ?>" class="required" title="<?php _e('* Please provide your name', 'framework'); ?>">

                        <input type="text" name="email" id="email" value="<?php _e('Email', 'framework'); ?>" class="email required" title="<?php _e('* Please provide valid email address', 'framework'); ?>">

                        <textarea  name="message" id="comment" class="required" title="<?php _e('* Please provide your message', 'framework'); ?>"><?php _e('Message', 'framework'); ?></textarea>

                        <input type="hidden" name="target" value="<?php echo $agent_email; ?>">
                        <input type="hidden" name="action" value="send_message_to_agent" />
                        <input type="hidden" name="property_title" value="<?php echo $property_title; ?>" />
                        <input type="hidden" name="property_permalink" value="<?php echo $property_permalink; ?>" />

                        <input type="submit" value="Submit"  name="submit" class="real-btn">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ajax-loader.gif" id="contact-loader" alt="Loading...">

                    </form>

                    <div class="error-container"></div>
                    <div id="message-sent">&nbsp;</div>
                </div>
                <?php
            }
            ?>
        </div>
        <?php
        wp_reset_postdata();
    }
?>