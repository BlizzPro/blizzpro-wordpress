<div class='author-meta'>
    <?php
    $name = get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name');
    $description = get_the_author_meta('description');
    $image = get_avatar(get_the_author_meta('ID'), 96, null, false, ['class' => 'img-circle']);
    ?>
    <div class="media">
        <div class="media-left"><?php echo $image; ?></div>
        <div class="media-body">
            <h5><?php echo $name; ?></h5>
            <p><?php echo $description; ?></p>

            <?php if ($twitter = get_the_author_meta('twitter')): ?>
            <br/>
            <a href="https://twitter.com/<?php echo $twitter; ?>" class="twitter-follow-button" data-show-count="false">Follow @<?php echo $twitter; ?></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            <?php endif; ?>
        </div>
    </div>
</div>