    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <br/>
                    <img src="<?php echo get_template_directory_uri() . '/images/footer.png'; ?>" width="280" />
                </div>
                <div class="col-lg-6 col-md-6">
                    <br/>
                    <p>
                        <?php
                        echo strip_tags(wp_nav_menu(array(
                            'echo' => false,
                            'theme_location' => 'footer',
                            'items_wrap' => '%3$s',
                            'container' => '',
                            'after' => '&nbsp;&nbsp;|&nbsp;&nbsp;',
                        )), '<a>');
                        ?>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="http://www.facebook.com/BlizzPro" target="_blank" title="Facebook"><img src="<?php echo get_template_directory_uri() . '/images/icons/fb-icon.png'; ?>" width="25" /></a>
                        <a href="http://www.twitter.com/BlizzPro" target="_blank" title="Twitter"><img src="<?php echo get_template_directory_uri() . '/images/icons/twitter-icon.png'; ?>" width="25" /></a>
                        <a href="http://www.youtube.com/user/BlizzPlanetGaming" target="_blank" title="Youtube"><img src="<?php echo get_template_directory_uri() . '/images/icons/yt-icon.png'; ?>" width="25" /></a>
                        <a href="http://www.twitch.tv/blizzpro" target="_blank" title="Twitch"><img src="<?php echo get_template_directory_uri() . '/images/icons/twitch-icon.png'; ?>" width="25" /></a>
                        <a href="#" target="_blank" title="RSS"><img src="<?php echo get_template_directory_uri() . '/images/icons/rss-icon.png'; ?>" width="25" /></a>
                    </p>
                    <p>
                        <small>
                        © 2013-2016 BlizzPro All rights Reserved. World of WarCraft, StarCraft, Diablo, Hearthstone and Heroes of the Storm content and materials are trademarks and copyrights of Blizzard Entertainment or its licensors. All rights reserved. This site is a part of the BlizzPro.com network of websites and is not directly affiliated with Blizzard Entertainment.
                        </small>
                    </p>
                </div>
                <div class="col-lg-3 visible-lg">
                    <br/><br/>
                    <a href="http://patreon.com/blizzpro" target="_blank">
                        <img src="<?php echo get_template_directory_uri() . '/images/patreon.png'; ?>" width="280" />
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>