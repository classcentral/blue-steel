
<?php if (roots_display_sidebar()) : ?>
  <aside class="sidebar col-sm-3">

    <?php if (is_home()) : ?>
      <?php dynamic_sidebar('sidebar-home'); ?>
    <?php else : ?>
        <?php if (get_field('sidebar_widget_course_id')) : ?>

                <div class="classcentral-review" lang="en" data-courseid="<?php the_field('sidebar_widget_course_id') ?>"> </div>
                <script async src="https://d3f1iyfxxz8i1e.cloudfront.net/reviews/widget.min.js" charset="utf-8"></script>
                <br/><br/>
        <?php endif; ?>
      <?php dynamic_sidebar('sidebar-primary'); ?>
    <?php endif; ?>
      <!--
      <div class="ad-wrap">
        <div class="ad-box">

            <a class="ad-box__link" rel="nofollow" href="https://con.openedx.org/" target="_blank" rel="nofollow">
                <img class="ad-box__img" src="https://d3r3mog6nu8pt4.cloudfront.net/ads/intmoocmaker-130.jpg">
            </a>
            <p class="ad-box__text">The reference MOOC conference for Latin America. Apply by 1st September.</p>

            <span class="ad-box__note">Ads via Class Central</span>
        </div>
      </div>
    -->

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



  </aside><!-- /.sidebar -->
<?php endif; ?>

