<?php

function add_review_widget( $atts ){
  ob_start();
    locate_template('templates/layout/review_widget.php', true, false);
  return ob_get_clean();
}

add_shortcode( 'review_widget', 'add_review_widget' );
