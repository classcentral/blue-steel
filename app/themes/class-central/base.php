<?php get_template_part('templates/layout/head'); ?>
<body <?php body_class(); ?>>
    <?php get_template_part('templates/layout/sprites'); ?>
  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php do_action('get_header'); ?>
  <?php get_template_part('templates/layout/header'); ?>

  <?php include roots_template_path(); ?>

  <?php get_template_part('templates/layout/footer'); ?>

</body>
</html>
