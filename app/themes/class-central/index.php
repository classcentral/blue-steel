<?php

global $wp_query;

$query_args = $wp_query->query_vars;

$args = array(
  'posts_per_page' => 1,
  'paged' => 0,
  'meta_query' => array(
    array(
      'key' => 'pinned',
      'value' => '"pinned"',  // http://wordpress.stackexchange.com/questions/140833/comparing-arrays-with-meta-query-in-pre-get-posts
      'compare' => 'LIKE'
    )
  )
);

$pinned_posts = get_posts(array_merge($query_args, $args));

if (empty($pinned_posts)) {
  $pinned_posts = $wp_query->get_posts();
}

if (count($pinned_posts) > 1) {
  $pinned_posts = array($pinned_posts[0]);
}

$banner = get_field('banner', $pinned_posts[0]->ID);

?>

<?php include(locate_template('templates/index/index-banner.php')); ?>

<div class="container">
    <div class="row">
        <?php include(locate_template('templates/index/index-content.php')); ?>
        <?php include roots_sidebar_path(); ?>
    </div>
</div>
