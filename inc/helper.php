<?php
/**
 * Get relative time.
 *
 * @param int $time
 *
 * @return string
 */
function time_ago_en($time)
{
    if(!is_numeric($time))
    {
        $time = strtotime($time);
    }

    $periods = array("second", "minute", "hour", "day", "week", "month", "year", "age");
    $lengths = array("60","60","24","7","4.35","12","100");

    $now = time();

    $difference = $now - $time;

    if ($difference <= 10 && $difference >= 0)
    {
        return $tense = 'just now';
    }
    elseif ($difference > 0)
    {
        $tense = 'ago';
    }
    elseif ($difference < 0)
    {
        $tense = 'later';
    }

    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++)
    {
        $difference /= $lengths[$j];
    }

    $difference = round($difference);

    $period =  $periods[$j] . ($difference >1 ? 's' :'');

    return "{$difference} {$period} {$tense}";
}


/**
 * Generate a breadcrumb trail with some microdata tags.
 */
function the_breadcrumb() {

    echo '<ul class="crumbs" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';

    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '" itemprop="url">';
        echo '<span itemprop="title">Home</span>';
        echo "</a></li>";

        if (is_single()) {

            echo '<li>';
            $categories = get_the_category();
            foreach ($categories as $index => $cat)
            {
                echo '<div itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
                echo "<a href='" . get_category_link($cat->term_id) . "' itemprop='url'><span itemprop='title'>" . $cat->name . "</span></a>";
                echo '</div>';
                if ($index != count($categories) - 1)
                {
                    echo " / ";
                }
            }
            echo "</li>";

            if (is_single()) {
                echo "</li><li>";
                the_title();
                echo '</li>';
            }

        } elseif (is_page()) {
            echo '<li>';
            echo the_title();
            echo '</li>';
        }
        elseif (is_tag()) {
            echo "<li>Tag "; single_tag_title(); echo'</li>';
        }
        elseif (is_day()) {
            echo "<li>Archive for "; the_time('F jS, Y'); echo'</li>';
        }
        elseif (is_category()) {
            echo "<li>Category for "; single_cat_title(''); echo'</li>';
        }
        elseif (is_month()) {
            echo "<li>Archive for "; the_time('F, Y'); echo'</li>';}
        elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';
    }
        elseif (is_author()) {
            echo "<li>Author Archive"; echo'</li>';
        }
        elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
            echo "<li>Blog Archives"; echo'</li>';
        }
        elseif (is_search()) {
            echo "<li>Search Results"; echo'</li>';
        }
    }


    echo '</ul>';
}