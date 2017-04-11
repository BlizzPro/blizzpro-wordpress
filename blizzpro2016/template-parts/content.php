<div class="media">
    <div class="media-left hidden-sm hidden-xs">
        <a href="<?php echo (@$post->link_override ? $post->link_override : esc_url(get_permalink())); ?>">
            <?php
            if (@$post->image_override) {
                echo $post->image_override;
            } else {
                if (has_post_thumbnail()):
                    the_post_thumbnail([380, 162], ['class' => 'media-object']);
                endif;
            }
            ?>
        </a>
    </div>
    <div class="media-body" data-date="<?php echo the_time('Y/m/d H:i:s'); ?>">

        <?php
        if (@$post->link_override) {
            if (isset($post->icon)) {
                the_title(
                    sprintf('<h4 class="media-heading"><a href="%s" rel="bookmark">', $post->link_override),
                    '</a><span class="blizz-icon" style="margin-left: 15px;"><img src="' . $post->icon . '"/></span></h4>'
                );
            } else {
                the_title(sprintf('<h4 class="media-heading"><a href="%s" rel="bookmark">', $post->link_override), '</a></h4>');
            }
        } else {
            the_title(sprintf('<h4 class="media-heading"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a><span class="blizz-icon"></h4>');
        }
        ?>
        <p>
            <?php get_template_part('template-parts/posted-by'); ?>
        </p>
        <?php the_excerpt(); ?>
        <div class='media-bottom'>
            <small class='pull-left visible-lg'><a href="<?php if (@$post->comment_override) { echo $post->comment_override; } else { comments_link(); } ?>" class="comment">show comments</a></small>
            <small class='pull-right'>posted in <?php if (@$post->cat_override) { echo $post->cat_override; } else { the_category(', '); } ?></small>
            <div class='clearfix'></div>
        </div>
    </div>
</div>