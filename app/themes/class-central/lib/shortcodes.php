<?php

function add_review_widget( $atts ){
  ob_start();
    locate_template('templates/layout/review_widget.php', true, false);
  return ob_get_clean();
}

add_shortcode( 'review_widget', 'add_review_widget' );


function btn_go_to_class ($attr) {

    if( !isset($attr['url']))
    {
        return '';
    }
    $url = $attr['url'];
    return "<div class='course-register-button' style='float:right;'><a class='register-button'  style='margin: 0 auto' target='_blank' href='{$url}'>Go to Class</a></div>";
}


add_shortcode('btn_go_to_class', 'btn_go_to_class');