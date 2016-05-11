<div class="media">
    <div class="media-left">
        <a href="#">
            <?php
            if (has_post_thumbnail()):
                // TODO: custom thumbnail size
                the_post_thumbnail([120, 60], ['class' => 'media-object']);
            endif;
            ?>
        </a>
    </div>
    <div class="media-body">
        <?php the_title(sprintf('<h5><a href="%s" rel="bookmark">', esc_url( get_permalink())), '</a></h5>'); ?>

        <div class='media-bottom-fixed'>
            <?php get_template_part('template-parts/posted-by'); ?>
        </div>
    </div>
</div>