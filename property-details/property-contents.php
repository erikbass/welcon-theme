<article class="property-item clearfix">
    <div class="wrap clearfix">
        <h4 class="title"><?php the_title(); ?></h4>
        <h5 class="price">
            <span class="status-label">
                <?php
                /* Property Status. For example: For Sale, For Rent */
                $status_terms = get_the_terms( $post->ID,"property-status" );
                if(!empty($status_terms)){
                    foreach($status_terms as $st_trms){
                        echo $st_trms->name;
                        break;
                    }
                }
                ?>
            </span>
            <span>
                <?php
                /* Property Price */
                property_price();

                /* Property Type. For example: Villa, Single Family Home */
                $type_terms = get_the_terms( $post->ID,"property-type" );
                if(!empty($type_terms)){
                    echo '<small> - ';
                    foreach($type_terms as $typ_trms){
                        echo $typ_trms->name;
                        break;
                    }
                    echo '</small>';
                }
                ?>
            </span>
        </h5>
    </div>

    <div class="property-meta clearfix">
        <?php
        /* Property Icons */
        get_template_part('property-details/property-metas');
        ?>
        <!-- Print Icon -->
        <span class="printer-icon"><a href="javascript:window.print()"><?php _e('Imprimir', 'framework'); ?></a></span>
    </div>

    <div class="content clearfix">
        <?php the_content(); ?>
    </div>

    <div class="features">
        <h4 class="title"><?php _e('Detalhes', 'framework'); ?></h4>
        <ul class="arrow-bullet-list clearfix">
            <?php
            /* Property Features */
            $features_terms = get_the_terms( $post->ID,"property-feature" );
            if(!empty($features_terms)){
                foreach($features_terms as $fet_trms){
                    echo '<li><a href="'.get_term_link($fet_trms->slug, 'property-feature').'">'.$fet_trms->name.'</a></li>';
                }
            }
            ?>
        </ul>
    </div>
</article>