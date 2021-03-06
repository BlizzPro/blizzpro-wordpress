<article>
    <div class="adbar visible-lg">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Leader -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-7970233095919620"
             data-ad-slot="2558897591"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>

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

    <br/>

    <div>
        <small class='pull-left'>posted in <?php the_category(', '); ?></small>
        <small class='pull-right'><?php the_tags('Tags: ', ', '); ?></small>
        <div class='clearfix'></div>
    </div>

</article>