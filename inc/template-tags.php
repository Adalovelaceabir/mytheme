<?php
if (!function_exists('yourtheme_posted_on')) :
    function yourtheme_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        
        $time_string = sprintf(
            $time_string,
            esc_attr(get_the_date(DATE_W3C)),
            esc_html(get_the_date())
        );
        
        echo '<span class="posted-on">' . $time_string . '</span>';
    }
endif;

if (!function_exists('yourtheme_posted_by')) :
    function yourtheme_posted_by() {
        echo '<span class="byline"> by ' . esc_html(get_the_author()) . '</span>';
    }
endif;

if (!function_exists('yourtheme_entry_footer')) :
    function yourtheme_entry_footer() {
        // Categories
        if ('post' === get_post_type()) {
            $categories_list = get_the_category_list(esc_html__(', ', 'yourtheme'));
            if ($categories_list) {
                printf('<span class="cat-links">' . esc_html__('Posted in %s', 'yourtheme') . '</span>', $categories_list);
            }
        }
        
        // Tags
        $tags_list = get_the_tag_list('', esc_html__(', ', 'yourtheme'));
        if ($tags_list) {
            printf('<span class="tags-links">' . esc_html__('Tagged %s', 'yourtheme') . '</span>', $tags_list);
        }
    }
endif;
