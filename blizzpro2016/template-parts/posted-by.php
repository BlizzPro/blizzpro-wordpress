<small>
    by <?php the_author_posts_link(); ?>
    <?php echo ' - ' . time_ago_en(get_post_time()); ?>
    <span class='hidden-lg'>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php comments_link(); ?>" class="comment">show comments</a></span>
</small>