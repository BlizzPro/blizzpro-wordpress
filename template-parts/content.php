<div class="media">
    <div class="media-left">
        <a href="#">
            <?php
            if (has_post_thumbnail()):
                the_post_thumbnail([380, 162], ['class' => 'media-object']);
            endif;
            ?>
        </a>
    </div>
    <div class="media-body">

        <?php the_title(sprintf('<h4 class="media-heading"><a href="%s" rel="bookmark">', esc_url( get_permalink())), '</a></h4>'); ?>
        <p>
            <?php get_template_part('template-parts/posted-by'); ?>
        </p>
        <?php the_excerpt(); ?>
        <div class='media-bottom-fixed'>
            <small class='pull-left'>show comments</small>
            <small class='pull-right'>posted in <?php the_category(', '); ?></small>
            <div class='clearfix'></div>
        </div>
    </div>
</div>