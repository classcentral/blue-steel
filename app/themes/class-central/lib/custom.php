<?php
/**
 * Custom functions
 */

// Banner image sizes
add_image_size( 'blog-banner-full', 1600, 600, true );

// Thumbnail image sizes
add_image_size( 'blog-thumbnail', 400, 265, true );


function cc_get_reading_time() {

    $wps       = 200;
    $content   = apply_filters('the_content', get_post_field('post_content', get_queried_object_id()));
    $num_words = str_word_count(strip_tags($content));

    $time      = round($num_words / $wps);

    if ($time < 1) {
        $estimated_time = "Less than a minute";
    } else {
        $estimated_time = $time . " minute";
    }

    return $estimated_time;

}

function cc_get_author_name() {
    $author_id = get_post_field('post_author', get_queried_object_id());
    return get_the_author_meta('display_name', $author_id);
}