<?php

/**
 * Extend the existing Recent Posts widget, modify output to also display post thumbnails
 */
class CC_Widget_Recent_Posts extends WP_Widget_Recent_Posts {

  public function widget($args, $instance) {
    $cache = array();
    if ( ! $this->is_preview() ) {
      $cache = wp_cache_get( 'widget_recent_posts', 'widget' );
    }

    if ( ! is_array( $cache ) ) {
      $cache = array();
    }

    if ( ! isset( $args['widget_id'] ) ) {
      $args['widget_id'] = $this->id;
    }

    if ( isset( $cache[ $args['widget_id'] ] ) ) {
      echo $cache[ $args['widget_id'] ];
      return;
    }

    ob_start();

    $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );

    /** This filter is documented in wp-includes/default-widgets.php */
    $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

    $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
    if ( ! $number )
      $number = 5;
    $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

    /**
     * Filter the arguments for the Recent Posts widget.
     *
     * @since 3.4.0
     *
     * @see WP_Query::get_posts()
     *
     * @param array $args An array of arguments used to retrieve the recent posts.
     */
    $r = new WP_Query( apply_filters( 'widget_posts_args', array(
      'posts_per_page'      => $number,
      'no_found_rows'       => true,
      'post_status'         => 'publish',
      'ignore_sticky_posts' => true
    ) ) );

    if ($r->have_posts()) :
?>
    <?php echo $args['before_widget']; ?>
    <?php if ( $title ) {
      echo $args['before_title'] . $title . $args['after_title'];
    } ?>
    <ul>
      <?php while ( $r->have_posts() ) : $r->the_post(); ?>
        <li>
          <div class="crop-wrap">
            <a href="<?php the_permalink(); ?>">
              <?php $image = get_field('thumbnail'); ?>
              <img src="<?php echo $image['sizes']['blog-thumbnail-sidebar']; ?>" alt="<?php get_the_title() ? the_title() : the_ID(); ?>"/>
            </a>
          </div>
          <div class="post-info-wrap">
            <a href="<?php the_permalink(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a>
            <?php if ( $show_date ) : ?>
              <span class="post-date"><?php echo get_the_date(); ?></span>
            <?php endif; ?>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
    <?php echo $args['after_widget']; ?>
<?php
    // Reset the global $the_post as this query will have stomped on it
    wp_reset_postdata();

    endif;

    if ( ! $this->is_preview() ) {
      $cache[ $args['widget_id'] ] = ob_get_flush();
      wp_cache_set( 'widget_recent_posts', $cache, 'widget' );
    } else {
      ob_end_flush();
    }
  }

}

function cc_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('CC_Widget_Recent_Posts');
}
add_action('widgets_init', 'cc_recent_widget_registration');
