<article>
    <?php
    $img_id = get_post_thumbnail_id(get_the_ID());
    $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);

    if ($img_id): ?>
        <img src='<?php echo wp_get_attachment_url($img_id); ?>' class='post-thumbnail' alt='<?php echo $alt_text; ?>' />
    <?php endif; ?>

    <header>
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>
    <p>
        <?php get_template_part('template-parts/posted-by'); ?>
    </p>

    <?php the_content(); ?>

</article>