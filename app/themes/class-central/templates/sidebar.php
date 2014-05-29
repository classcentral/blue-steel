<?php if (roots_display_sidebar()) : ?>
  <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
    <?php dynamic_sidebar('sidebar-primary'); ?>
  </aside><!-- /.sidebar -->
<?php endif; ?>
