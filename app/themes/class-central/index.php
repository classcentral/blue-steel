<?php

$args = array(
  'posts_per_page' => 1,
  'paged' => 0,
  'meta_query' => array(
      'key' => 'pinned',
      'value' => 'true'
  ),
  'post_type' => 'post'
);

$pinned = get_posts($args);

$banner = get_field('banner', $pinned[0]->ID);
//var_dump($banner);

?>

<?php include(locate_template('templates/index/index-banner.php')); ?>

<div class="container">
    <div class="row">
        <?php include(locate_template('templates/index/index-content.php')); ?>
        <?php include roots_sidebar_path(); ?>
    </div>  
</div>
