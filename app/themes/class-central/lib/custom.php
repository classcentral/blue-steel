<?php
/**
 * Custom functions
 */

// Banner image sizes
add_image_size( 'blog-banner-full', 1600, 600, true );

// Thumbnail image sizes
add_image_size( 'blog-thumbnail', 400, 265, true );

// Sidebar thumbnail image sizes
add_image_size( 'blog-thumbnail-sidebar', 85, 58, true );


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

function cc_get_banner_styles($id) {
    $banner = get_field('banner', $id);
    if (isset($banner) && !empty($banner)) {
        $styles = "background-image: url('{$banner['sizes']['blog-banner-full']}');";
    } else {
        $color = get_field('background_color', $id);
        $styles = "background-color: {$color};";
    }
    return $styles;
}

function cc_excerpt_length( $length ) {
    return 25;
}

add_filter( 'excerpt_length', 'cc_excerpt_length', 999 );

function cc_oembed_wrapper( $html, $url, $args ) {
  if (strpos($url,'youtube.com/watch') !== false || strpos($url,'youtu.be/') !== false ) {
    // break the URL into its components
    $parts = parse_url($url);
    // parse variables into key=>value array
    $query = array();
    parse_str($parts['query'], $query);

    return '<div class="cc-youtube-wrapper"><div class="youtube-thumbnail" style="background-size: 100% auto; background-position: center; background-image: url(http://img.youtube.com/vi/' . $query['v'] . '/sddefault.jpg);"><div class="cc-play-button"></div></div>' . $html .  '</div>';
  } else {
    return $html;
  }
}

add_filter('embed_oembed_html', 'cc_oembed_wrapper', 10, 3);


/**
 * Wrap widget title inside a span
 */
function cc_wrap_widget_title($title) {
  return '<span>' . $title . '</span>';
}
add_filter('widget_title', 'cc_wrap_widget_title');

/**
 * Function to display date using a short code
 * @param $attr
 * @return string
 */
function get_course_date( $attr ) {

    $defaultDate = 'TBA';
    if(empty($attr) || empty($attr['id']) )
    {
        return $defaultDate;
    }

    $cacheId = 'cc_course_'. $attr['id'];
    $date = get_transient($cacheId);
    if($date) return $date;

    // Query the api
    $date = 'TBA';
    $apiResponse = wp_remote_get('https://www.class-central.com/maestro/course/'. $attr['id']);
    if( !$apiResponse|| $apiResponse['response']['code'] != 200 ) {
        $date = 'TBA';
    }
    else
    {
        // Check if the response is valid
        $response = json_decode($apiResponse['body'],true);
        if( empty($response['success'])) {
            $date = $defaultDate;
        } else
        {
            $date = $response['message']['displayDate'];
        }
    }
    set_transient( $cacheId, $date, DAY_IN_SECONDS);
    return $date;
}

add_shortcode('course_date', 'get_course_date');