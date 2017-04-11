<div class="col-xs-2">
    <div class="media media-thumb featured">
        <div class="wrap">
            <div class="media-top">
                <a href="<?php echo esc_url(get_permalink()); ?>">
                    <?php
                    if ($post->thumbnail):
                        echo $post->thumbnail;
                    endif;
                    ?>
                </a>
            </div>
            <div class="media-body">
                <?php echo $post->title; ?>
                <p>
                <small>
                    by <?php the_author_posts_link(); ?>
                </small>
                </p>
                <p>
                <?php echo wp_trim_words(get_the_excerpt(), '20'); ?>
                </p>
            </div>
        </div>
    </div>
</div>