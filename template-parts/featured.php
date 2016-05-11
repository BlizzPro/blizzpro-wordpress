<div class="col-xs-2">
    <div class="media media-thumb">
        <div class="media-top">
            <a href="#">
                <?php
                if (has_post_thumbnail()):
                    the_post_thumbnail('featured-thumb', ['class' => 'media-object']);
                endif;
                ?>
            </a>
        </div>
        <div class="media-body">
            <?php the_title(sprintf('<h4 class="media-heading"><a href="%s">', esc_url( get_permalink())), '</a></h4>'); ?>
            <br/>
            <p>
            <?php echo wp_trim_words(get_the_excerpt(), '25'); ?>
            </p>
            <?php get_template_part('template-parts/posted-by'); ?>
        </div>
    </div>
</div>