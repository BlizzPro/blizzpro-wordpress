<?php
class blizzpro_article_partners extends WP_Widget
{
    function blizzpro_article_partners() {
        parent::WP_Widget(false, 'Partners', array('description' => "Partners"));
    }

    function widget($args, $instance) {
        extract($args);

        echo $before_widget;
        echo '<div class="related-articles">';
        echo '<div class="media text-center">';
        echo '<a href="http://shop.lenovo.com/us/en/gaming/"><img src="http://blizzpro.com/wp-content/uploads/2016/12/WEBSITE.png"></a>';
        echo '</div>';
        echo '</div>';
        echo $after_widget;

        wp_reset_query();
    }
}

class blizzpro_article_widget extends WP_Widget
{
    function blizzpro_article_widget() {
        parent::WP_Widget(false, 'Related Articles', array('description' => "5 related articles"));
    }

    function widget($args, $instance) {
        extract($args);

        echo $before_widget;
        echo '<div class="related-articles">';

        echo $before_title . 'Related Articles' . $after_title;

        $categories = wp_get_post_categories(get_the_ID());

        $args = [
            'category__in' => $categories,
            'post__not_in' => array(get_the_ID()),
            'posts_per_page' => BLIZZPRO_RELATED_LIMIT,
            'caller_get_posts' => 1
        ];

        $related = new WP_Query($args);

        while ($related->have_posts()):
            $related->the_post();
            get_template_part('template-parts/related');
        endwhile;

        wp_reset_postdata();

        echo '</div>';
        echo $after_widget;

        wp_reset_query();
    }
}

class blizzpro_article_support extends WP_Widget
{
    function blizzpro_article_support() {
        parent::WP_Widget(false, 'Support Us', array('description' => "Sponsorships etc"));
    }

    function widget($args, $instance) {
        extract($args);

        echo $before_widget;
        echo '<div class="related-articles">';
        echo $before_title . 'Support Us' . $after_title;
        echo '<div class="media">';
        echo '<a href="http://patreon.com/blizzpro" target="_blank"><img src="http://www.blizzpro.com/wp-content/uploads/2015/02/patreon_banner.jpg" class="fullwidth" />';
        echo 'Sick of seeing ads? Consider paying $1/month or more to help us remove them.</a>';
        echo '</div>';
        echo '</div>';
        echo $after_widget;
    }
}

class blizzpro_article_contact extends WP_Widget
{
    function blizzpro_article_contact() {
        parent::WP_Widget(false, 'Contact Us', array('description' => "Contact Information"));
    }

    function widget($args, $instance) {
        extract($args);

        echo $before_widget;
        echo '<div class="related-articles">';
        echo $before_title . 'Contact Us' . $after_title;
        echo '<div class="media">';
        echo '<div style="text-align:left;">';
        echo '<ul>';
        echo '<li><a href="http://www.blizzpro.com/contact-us-or-submit-news/">Contact Us</a></li>';
        echo '<li><a href="http://www.blizzpro.com/help-us/">Help Us</a></li>';
        echo '<li><a href="http://www.blizzpro.com/privacy-policy/">Privacy Policy</a></li>';
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo $after_widget;
    }
}

class blizzpro_article_ad extends WP_Widget
{
    function blizzpro_article_ad() {
        parent::WP_Widget(false, 'Sponsored Links', array('description' => "Ads"));
    }

    function widget($args, $instance) {
        extract($args);

        echo $before_widget;
        echo '<div class="related-articles">';
        echo '<div class="media" style="text-align:center;">';
        echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>';
        echo '<!-- First -->';
        echo '<ins class="adsbygoogle"';
        echo 'style="display:inline-block;width:300px;height:250px"';
        echo 'data-ad-client="ca-pub-7970233095919620"';
        echo 'data-ad-slot="7614989599"></ins>';
        echo '<script>';
        echo '(adsbygoogle = window.adsbygoogle || []).push({});';
        echo '</script>';
        echo '</div>';
        echo '</div>';
        echo $after_widget;
    }
}


class blizzpro_article_twitter extends WP_Widget
{
    function blizzpro_article_twitter() {
        parent::WP_Widget(false, 'Twitter', array('description' => "Twitter"));
    }

    function widget($args, $instance) {
        extract($args);

        echo $before_widget;
        echo '<div class="related-articles">';
        echo '<div class="media">';
        echo '<a class="twitter-timeline" href="https://twitter.com/BlizzPro" data-tweet-limit="1" data-widget-id="411838551303544832">Tweets by @BlizzPro</a>';
        echo '<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
        echo '</div>';
        echo '</div>';
        echo $after_widget;
    }
}

class blizzpro_article_amazon extends WP_Widget
{
    function blizzpro_article_amazon() {
        parent::WP_Widget(false, 'Amazon', array('description' => "Amazon"));
    }

    function widget($args, $instance) {
        extract($args);

        echo $before_widget;
        echo '<div class="related-articles">';
        echo '<div class="media">';
        echo '<a href="https://www.amazon.com/l/15433360011/ref=as_li_ss_tl?ie=UTF8&linkCode=ll2&tag=bliz01-20&linkId=79e17cd45120e5e132beec924ebb6161"><img src="http://hearthstone.blizzpro.com/wp-content/uploads/sites/4/2016/11/coinstoppable.jpg" alt="Amazon Coins" class="img-responsive" title /></a>';
        echo '</div>';
        echo '</div>';
        echo $after_widget;
    }
}

// Register widgets
register_widget('blizzpro_article_widget');
register_widget('blizzpro_article_support');
register_widget('blizzpro_article_contact');
register_widget('blizzpro_article_twitter');
register_widget('blizzpro_article_amazon');
register_widget('blizzpro_article_ad');
register_widget('blizzpro_article_partners');