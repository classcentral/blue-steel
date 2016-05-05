<?php
/**
 * This is basically just a modified version of Recent Posts widget
 * which will display only the latest pinned post
 */

class CC_Widget_Featured_Post extends WP_Widget {

  public function __construct() {
    $widget_ops = array('classname' => 'widget_featured_post', 'description' => __( "Display the latest featured post.") );
    parent::__construct('featured-post', __('Featured Post'), $widget_ops);

    add_action( 'save_post', array($this, 'flush_widget_cache') );
    add_action( 'deleted_post', array($this, 'flush_widget_cache') );
    add_action( 'switch_theme', array($this, 'flush_widget_cache') );
  }

  public function widget($args, $instance) {

    $cache = array();
    if ( ! $this->is_preview() ) {
      $cache = wp_cache_get( 'widget_featured_post', 'widget' );
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

    $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Featured Posts' );

    /** This filter is documented in wp-includes/default-widgets.php */
    $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

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
      'posts_per_page' => 1,
      'paged' => 0,
      'meta_query' => array(
        array(
          'key' => 'pinned',
          'value' => '"pinned"',  // http://wordpress.stackexchange.com/questions/140833/comparing-arrays-with-meta-query-in-pre-get-posts
          'compare' => 'LIKE'
        )
      )
    )));

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
              <span class="post-date"><?php echo get_the_date(); ?></span>
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
      wp_cache_set( 'widget_featured_post', $cache, 'widget' );
    } else {
      ob_end_flush();
    }
  }

  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $this->flush_widget_cache();
    return $instance;
  }

  public function flush_widget_cache() {
    wp_cache_delete('widget_featured_post', 'widget');
  }

  public function form( $instance ) {

  }

}

function cc_featured_widget_registration() {
  register_widget('CC_Widget_Featured_Post');
}
add_action('widgets_init', 'cc_featured_widget_registration');
