<ul class="crumbs">';
<?php if (!is_home()):?>
    <li><a href="<?php echo get_option('home'); ?>">Home</a></li>
    <?php if (is_single()): ?><li><?php the_title(); ?></li>
    <?php elseif (is_page()): ?><li><?php the_title(); ?></li>
    <?php elseif (is_tag()): ?><li>Tag <?php single_tag_title(); ?></li>
    <?php elseif (is_day()): ?><li>Archive for <?php the_time('F jS, Y'); ?></li>
    <?php elseif (is_category()): ?><li>Category for <?php single_cat_title(''); ?></li>
    <?php elseif (is_month()): ?><li>Archive for <?php the_time('F, Y'); ?></li>
    <?php elseif (is_year()): ?><li>Archive for <?php the_time('Y'); ?></li>
    <?php elseif (is_author()): ?><li>Author archive</li>
    <?php elseif (isset($_GET['paged']) and !empty($_GET['paged'])): ?><li>Blog archives</li>
    <?php elseif (is_search()): ?><li>Search results</li>
    <?php endif; ?>
<?php endif; ?>
</ul>