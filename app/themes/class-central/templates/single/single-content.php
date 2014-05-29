<main class="main <?php echo roots_main_class(); ?>" role="main">

    <article <?php post_class(); ?>>
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <nav class="post-navigation">
          <div class="post-link post-link-prev">
            <?php previous_post_link('%link', __('Previous Article', 'roots')); ?>
          </div>
          <div class="post-link post-link-next">
            <?php next_post_link('%link', __('Next Article', 'roots')); ?>
          </div>
        </nav>
        <section class="post-meta">
          <div class="meta">
            <div class="post-categories">
              <?php _e('Category', 'roots'); ?>: <?php echo get_the_category_list(); ?>
            </div>
            <div class="post-tags">
              <?php _e('Tags', 'roots'); ?>: <?php echo get_the_tag_list(); ?>
            </div>
          </div>
          <div class="social">
            <div class="facebook">
              <div id="fb-root"></div>
              <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=511266875576923&version=v2.0";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>
              <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
            </div>
            <div class="twitter">
              <a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
          </div>
        </section>
      </footer>
    </article>

</main><!-- /.main -->


