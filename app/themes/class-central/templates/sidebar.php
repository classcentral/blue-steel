
<?php if (roots_display_sidebar()) : ?>
  <aside class="sidebar col-sm-3">

    <?php if (is_home()) : ?>
      <?php dynamic_sidebar('sidebar-home'); ?>
    <?php else : ?>
      <?php dynamic_sidebar('sidebar-primary'); ?>
    <?php endif; ?>

    <!--
    <div class="ad-wrap">
      <div class="ad-content">

        <a class="ad-title" href="#">
        Lorem ipsum dolor
        </a>

        <a class="ad-link" href="#">
          https://loremipsumdolor.lorem
        </a>
        <p class="ad-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
      </div>
      <span class="ad-note">Advertisement</span>
    </div>
    <div class="ad-wrap">
      <div class="ad-content">
        <a class="ad-title" href="#">
          Lorem ipsum dolor
        </a>

        <a class="ad-link" href="#">
            https://loremipsumdolor.lorem
        </a>
        <p class="ad-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
      </div>
      <span class="ad-note">Advertisement</span>
    </div>
    -->

    <?php if (get_field('sidebar_widget_course_id')) : ?>
      <div class="sidebarWidgetContainer" data-courseid="<?php the_field('sidebar_widget_course_id') ?>">
        <!-- widget code -->
      </div>
    <?php endif; ?>

  </aside><!-- /.sidebar -->
<?php endif; ?>

