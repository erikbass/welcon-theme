<?php 
	global $post;
    $format = get_post_format();
    if( false === $format ) {
        $format = 'standard';
    }
?>

<article <?php post_class(); ?>>
    <header>
        <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="post-meta <?php echo $format; ?>-meta thumb-<?php echo has_post_thumbnail()?'exist':'not-exist'; ?>">
            <span><?php _e('Publicado em', 'framework'); ?>
                <span class="date"> <?php the_time('d \d\e F \d\e Y'); ?></span>
            </span>
        </div>
    </header>
    <?php get_template_part( "post-formats/$format" ); ?>
    <p><?php framework_excerpt(40);  ?></p>
    <a class="real-btn" href="<?php the_permalink(); ?>"><?php _e('Mais detalhes', 'framework'); ?></a>
</article>
