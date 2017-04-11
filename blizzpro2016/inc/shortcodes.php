<?php
// --- USAGE: [youtube id=""] --- //
add_shortcode('youtube', function ($atts, $content = null) {
    extract(shortcode_atts(array( "id" => '' ), $atts));
    return '<div class="vw"><iframe width="560" height="315" src="//www.youtube.com/embed/' . $id . '" frameborder="0" allowfullscreen></iframe></div>';
});

// --- USAGE: [bluepost]content[/bluepost] --- //
add_shortcode('bluepost', function ($atts, $content = null) {
    return '<blockquote class="bluepost">' . $content . '</blockquote>';
});


// --- USAGE: [twitchvod channel= id=] --- //
add_shortcode('twitchvod', function($atts, $content = null)
{
    extract(shortcode_atts(array( "channel" => '', "id" => ''), $atts));

    return '<div class="vw">'
        . '<object bgcolor="#000000" data="http://www.twitch.tv/widgets/archive_embed_player.swf" height="350" id="clip_embed_player_flash" type="application/x-shockwave-flash" width="100%" />'
        . '<param name="movie" value="http://www.twitch.tv/widgets/archive_embed_player.swf" />'
        . '<param name="allowScriptAccess" value="always" />'
        . '<param name="allowNetworking" value="all" />'
        . '<param name="allowFullScreen" value="true" />'
        . '<param name="flashvars" value="channel=' . $channel . '&amp;auto_play=false&amp;start_volume=25&amp;chapter_id= ' . $id . '" />'
        . '</object>'
        . '</div>';
});

// --- USAGE: [twitcharchive channel= id=] --- //
add_shortcode('twitcharchive', function($atts, $content = null)
{
    extract(shortcode_atts(array( "channel" => '', "id" => ''), $atts));

    return '<div class="vw">'
        . '<object bgcolor="#000000" data="http://www.twitch.tv/widgets/archive_embed_player.swf" height="350" id="clip_embed_player_flash" type="application/x-shockwave-flash" width="100%" />'
        . '<param name="movie" value="http://www.twitch.tv/widgets/archive_embed_player.swf" />'
        . '<param name="allowScriptAccess" value="always" />'
        . '<param name="allowNetworking" value="all" />'
        . '<param name="allowFullScreen" value="true" />'
        . '<param name="flashvars" value="channel=' . $channel . '&amp;auto_play=false&amp;start_volume=25&amp;archive_id= ' . $id . '" />'
        . '</object>'
        . '</div>';
});

// --- USAGE: [twitchlive channel= ] --- //
add_shortcode('twitchlive', function($atts, $content = null)
{
    extract(shortcode_atts(array( "channel" => ''), $atts));

    return '<div class="vw">'
        . '<object type="application/x-shockwave-flash" height="378" width="620" id="live_embed_player_flash" data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=' . $channel . '" bgcolor="#000000">'
        . '<param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" />'
        . '<param name="allowScriptAccess" value="always" />'
        . '<param name="allowNetworking" value="all" />'
        . '<param name="allowFullScreen" value="true" />'
        . '<param name="flashvars" value="hostname=www.twitch.tv&channel=' . $channel . '&auto_play=true&start_volume=25" />'
        . '</object>'
        . '</div>';
});

// --- USAGE: [amazon url= ] --- //
add_shortcode('amazon', function($atts, $content = null)
{
    extract(shortcode_atts(array( "url" => ''), $atts));
    return '<a href="' . $url . '&linkCode=as2&tag=bliz01-20" target="_blank">' . $content . '</a>';
});

// --- USAGE: [jinx url= ] --- //
add_shortcode('jinx', function($atts, $content = null)
{
    extract(shortcode_atts(array( "url" => ''), $atts));
    return '<a href="http://jinx.com/track.aspx?rsid=1598&url=p%2f' . $url . '" target="_blank">' . $content . '</a>';
});

// --- USAGE: [twizzcast] --- //
add_shortcode('twizzcast', function($atts, $content = null)
{
    return '<em>BlizzPro.TV’s flagship show!  Covering all news in Blizzard Entertainment ranging from World of Warcraft and Hearthstone to Diablo 3, Heroes of the Storm, StarCraft 2 and much much more.  What’s been often referred to as “the late night show for Blizzard related gaming”, Twizz, Reb, Hota and Archon will entertain you with many laughs, news, comical top 10 lists and much more.  With Angry Orc working the chat room, it’s a LIVE show you won’t want to miss.  So feel free to be informed and entertained.  We promise it won’t hurt.</em>
    <p><a href="https://itunes.apple.com/us/podcast/twizzcast-official-podcast/id520615416"><img src="http://blizzpro.com/wp-content/spotlight/downloadOnItunes.png" /></a> <a href="http://www.stitcher.com/podcast/twizzcast-a-world-of-warcraft-podcast"><img src="http://blizzpro.com/wp-content/spotlight/googlePlayButton.png" /></a></p>
    <p><ul>
    <ul>
        <li><strong>Live on Air:</strong> Thursday 9:00 PM CST</li>
        <li><strong>Channel:</strong> <a href="http://twitch.tv/twizzcast">TwizzCast</a></li>
        <li><strong>Email:</strong> <a href="mailto:podcast@blizzpro.com">podcast@blizzpro.com</a></li>
        <li><strong>Twitter:</strong> <a href="https://twitter.com/TwizzCast">@TwizzCast</a></li>
    </ul>';
});

// --- USAGE: [bpweekly] --- //
add_shortcode('bpweekly', function($atts, $content = null)
{
    return '<p><em>Hosted by various local Kansas City talent, BlizzPro Weekly covers all of the news from the week of Blizzard Entertainment news in a quick 15 minute format.  Please be aware, the show does use expletives so viewer discretion is advised.</em>
    <ul>
        <li><strong>Video Production:</strong> <a href="http://www.mprodllc.com/">M Productions</a></li>
        <li><strong>Host:</strong> Spades Lunn – <a href="http://twitch.tv/CodeNameSpades" target="_blank">@CodeNameSpades</a></li>
        <li><strong>Host:</strong> Clover</li>
        <li><strong>Host:</strong> Kevin Ellis – <a href="http://twitter.com/MultiZord" target="_blank">@MultiZord</a></li>
        <li><strong>Host:</strong> Greg Parker – <a href="http://twitter.com/gizmozord" target="_blank">@Gizmozord</a></li>
    </ul></p>';
});

// --- USAGE: [spotlight] --- //
add_shortcode('spotlight', function($atts, $content = null)
{
    return '<p><em>The words “Gaming Community” are used very loosely at times. What makes up a community? In The Spotlight we put our fingers on the pulse of what the community is doing, thinking, liking and hating. From bloggers, YouTubers, Forums and beyond, we’ll take a look at the good, the bad and the ugly. Beyond that though, we address you as a gamer. What are your struggles? What do you have the hardest time with when it comes to adapting your gaming life to your every day life? Need advice on being part of the “gaming community”? Look no further and step into The Spotlight.</em></p>
    <p><a href="https://itunes.apple.com/us/podcast/the-spotlight/id820066947"><img src="http://blizzpro.com/wp-content/spotlight/downloadOnItunes.png" /></a> <a href="http://www.stitcher.com/podcast/blizzpro/the-spotlight"><img src="http://blizzpro.com/wp-content/spotlight/googlePlayButton.png" /></a></p>
    <p><ul>
        <li><strong>Live on Air:</strong> Sunday 8:00 PM CST</li>
        <li><strong>Channel:</strong> <a href="http://twitch.tv/blizzpro">BlizzPro</a></li>
        <li><strong>Email:</strong> <a href="mailto:spotlight@blizzpro.com">spotlight@blizzpro.com</a></li>
        <li><strong>Twitter:</strong> <a href="https://twitter.com/SpotlightP">@SpotlightP</a></li>
    </ul></p>';
});

// --- USAGE: [edge] --- //
add_shortcode('edge', function($atts, $content = null)
{
    return '<p><em>The Edge is a unique show about  World of Warcraft. The show discusses the latest news and opinion while providing you with insight into your class, your skills, and your raid. It will give you The Edge you need in World of Warcraft!</em></p>
    <p><a href="https://itunes.apple.com/us/podcast/the-edge/id820715188"><img src="http://blizzpro.com/wp-content/spotlight/downloadOnItunes.png" /></a></p>
    <p><ul>
        <li><strong>Live on Air:</strong> Tuesday 7:00 PM CST</li>
        <li><strong>Channel:</strong> <a href="http://twitch.tv/blizzpro">BlizzPro</a></li>
        <li><strong>Email:</strong> <a href="mailto:edge@blizzpro.com">edge@blizzpro.com</a></li>
        <li><strong>Twitter:</strong> <a href="https://twitter.com/edge_blizzprotv">@edge_blizzprotv</a></li>
    </ul></p>';
});

// --- USAGE: [hhh] --- //
add_shortcode('hhh', function($atts, $content = null)
{
    return '<em>Hearthstone is marketed as being a fun casual game that is played inside the inns across Azeroth. It’s a pub game where you get together with your friends after a rough day out and you relax with some beverages, unwind with your friends, and play some fun games.</em>
    <em>This is exactly what Hearthstone Happy Hour is about. Come join us as Twizz, Robert, and J. R. team up to play some Hearthstone, show you some competitive decks, and maybe even some arena. All of this while having fun with the chat room. It’s an interactive show and one you might want to bring your favorite beverage to join along with.</em>
    <ul>
        <li><strong>Live on Air:</strong> Monday 9:00 PM CST</li>
        <li><strong>Channel:</strong> <a href="http://twitch.tv/twizzcast">TwizzCast</a></li>
        <li><strong>Email:</strong> <a href="mailto:podcast@blizzpro.com">podcast@blizzpro.com</a></li>
    </ul>';
});

// --- USAGE: [raidmechanics] --- //
add_shortcode('raidmechanics', function($atts, $content = null)
{
    return '<em>What does it take to kill a boss? It goes way beyond a simple raid makeup. It takes coordination and knowing the fight inside and out. Every week we take a World of Warcraft boss encounter and break it down from top to bottom. What’s the ideal raid makeup? How is the best way to work through a certain phase? When do we Bloodlust or Heroism? You’ll soon find out! We also tackle life as a raid leader and open the discussion for making sure that your team is fit to fight and maximized to the full extent. Got a broken raid team? The Raid Mechanics can fix that.</em>
    <ul>
        <li><strong>Live on Air:</strong> Friday 7:00 PM CST</li>
        <li><strong>Channel:</strong> <a href="http://twitch.tv/blizzpro">BlizzPro</a></li>
        <li><strong>Email:</strong> <a href="mailto:raidmechanics@blizzpro.com">raidmechanics@blizzpro.com</a></li>
        <li><strong>Twitter:</strong> <a href="https://twitter.com/raidmechanics">@RaidMechanics</a></li>
    </ul>';
});

// --- USAGE: [ability]content[/ability] --- //
add_shortcode('ability', function($atts, $content = null)
{
    return "<div class='ability'>" . $content . "</div>";
});

// --- USAGE: [dkmrobot] --- //
add_shortcode('dkmrobot', function($atts, $content = null)
{
    return '<em>Every Friday legendary player [DKMR]Alchemixt breaks down what he considers this week’s "Deck of the Week" either based on what is winning him games and tournaments or what is being played by the <a href="http://www.dontkickmyrobot.com/">Don’t Kick My Robot</a> professional Hearthstone team. Most of these decks have either never been seen before or are decks specifically tuned for this team. They explain they deck lists and how to play them. Make sure you check out <a href="http://www.dontkickmyrobot.com/">Don’t Kick My Robot</a> if you want to become a better player or check out their premium services if you would like them to do a <a href="http://www.dontkickmyrobot.com/prem/">1 on 1 coaching session</a> with you to help you better your game. View past <a href="http://hearthstone.blizzpro.com/tag/dkmr-deck-list-of-the-week/">Deck Lists of the Week</a>.</em><p style="text-align: center;"><strong>Team DKMR: <a href="https://twitter.com/dontkickmyrobot">Twitter</a> | <a href="http://www.dontkickmyrobot.com/">Website</a> | <a href="http://www.dontkickmyrobot.com/forums/">Forums</a></strong></p>';
});

// --- USAGE: [stormwatch] --- //
add_shortcode('stormwatch', function($atts, $content = null)
{
    return '<p><em>Storm Watch is a show that focuses entirely on Blizzards new game Heroes of the Storm. Join us as we discuss a multitudes of topics ranging from favorite Heroes, Map tactics, patch notes, and just over all opinions on everything surrounding the Hero Brawler.</em></p>
    <p><a href="https://itunes.apple.com/us/podcast/blizzpro-storm-watch/id846057488"><img src="http://blizzpro.com/wp-content/spotlight/downloadOnItunes.png" /></a></p>
    <p><ul>
        <li><strong>Live on Air:</strong> Thursday 7:00 PM CST</li>
        <li><strong>Channel:</strong> <a href="http://twitch.tv/blizzpro">BlizzPro</a></li>
        <li><strong>Twitter:</strong> <a href="https://twitter.com/StormWatchBP">StormWatchBP</a>, <a href="https://twitter.com/taffingabout">@TaffingAbout</a>, <a href="https://twitter.com/RobertAWing">@RobertAWing</a>, <a href="https://twitter.com/TankThatReb">@TankThatReb</a></li>
    </ul></p>';
});

// --- USAGE: [westmarch] --- //
add_shortcode('westmarch', function($atts, $content = null)
{
    return '<p><em>The Reaper of Souls has descended upon the mortal realm and it is up to you to stop him and his minions. With a new class, new skills, new runes and build changing items where do you start? The Westmarch Workshop is here to help you build the perfect spec. Your hosts, Neinball and Leviathan open up the horadric texts to pull together the right selection of skills and gear to help you fight back the forces of Death and more. Leave the cookie cutters in your stash, every week the Westmarch Workshop will pick a different build to cover from the vast collection of unique builds that exist in addition to the popular builds from within the community. So whether you are looking for maximum efficiency or something unique the Westmarch Workshop will help you craft the perfect build for your playstyle.</em></p>
    <p><a href="https://itunes.apple.com/us/podcast/blizzpros-westmarch-workshop/id854873991"><img src="http://blizzpro.com/wp-content/spotlight/downloadOnItunes.png" /></a></p>
    <p><ul>
        <li><strong>Live on Air:</strong> Wednesday 8:00 PM CST</li>
        <li><strong>Channel:</strong> <a href="http://www.twitch.tv/blizzpro">BlizzPro</a></li>
        <li><strong>Email:</strong> <a href="mailto:westmarchworkshop@blizzpro.com">westmarchworkshop@blizzpro.com</a></li>
        <li><strong>Twitter:</strong> <a href="https://twitter.com/NeinballGamer">@NeinballGamer</a>, <a href="https://twitter.com/sastewart111">@sastewart111</a></li></li>
    </ul></p>';
});

// --- USAGE: [kcdkmr] --- //
add_shortcode('kcdkmr', function($atts, $content = null)
{
    return '<em><p>Are you a new Hearthstone player?  Are you a pro?  Do you fall in the middle somewhere?  This is the show that appeals to you as a player regardless of skill level.  A partnership between Twizz and Studder has been established to bring you a show of expert game play and coaching from one of the top players in the Hearthstone ladder.  Decks and cards are broken down and each play is thoroughly explained.  So join Twizz and Studder every Monday night at 9:00CST to have some laughs, learn a lot and become a better player.</p></em>

    <p><a href="https://itunes.apple.com/us/podcast/blizzpro-hearthstone-keep/id844825425"><img alt="" src="http://blizzpro.com/wp-content/spotlight/downloadOnItunes.png" /></a></p>
    <p><ul>
        <li><strong>Live on Air:</strong> Monday 9:00 PM CST</li>
        <li><strong>Channel:</strong> <a href="http://twitch.tv/blizzpro">BlizzPro</a></li>
        <li><strong>Email:</strong> <a href="mailto:podcast@blizzpro.com">podcast@blizzpro.com</a></li>
        <li><strong>Twitter:</strong> <a href="https://twitter.com/TwizzBP">@TwizzBP</a></li>
    </ul></p>';
});

// --- USAGE: [heropowerhour] --- //
add_shortcode('heropowerhour', function($atts, $content = null)
{
    return '<em><p>Are you ready to step into the Nexus and do battle with your favorite hero?  Of course!  We all are!  But how equipped are you for battle?  How are you going to build your Hero to be the most effective combatant and team member possible?  That’s where the Heroes Power Hour comes in. So sit back, enjoy the fun, and become a better player with us!</p></em>

    <p><ul>
        <li><strong>Live on Air:</strong> Tuesday 9:00 PM CST</li>
        <li><strong>Channel:</strong> <a href="http://twitch.tv/blizzpro">BlizzPro</a></li>
        <li><strong>Email:</strong> <a href="mailto:podcast@blizzpro.com">podcast@blizzpro.com</a></li>
        <li><strong>Twitter:</strong> <a href="https://twitter.com/Zexerous">@Zexerous</a>, <a href="https://twitter.com/BalrogfanBP">@BalrogfanBP</a>, <a href="https://twitter.com/DJTyrant">@DJTyrant</a>
    </ul></p>';
});