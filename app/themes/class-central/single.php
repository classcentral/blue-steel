<?php include(locate_template('templates/single/single-banner.php')); ?>

<div class="container">
  <?php while (have_posts()) : the_post(); ?>
    <?php include(locate_template('templates/single/single-content.php')); ?>
    <?php include roots_sidebar_path(); ?>
  <?php endwhile; ?>
</div>
