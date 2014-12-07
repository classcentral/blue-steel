<main class="main col-md-8" role="main">

    <article <?php post_class(); ?>>
      <header>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="entry-content">
        <div class="post-header-info">
          <span class="read-icon">
            <svg class="icon icon-read-icon" viewBox="0 0 26 32"><use xlink:href="#icon-read-icon"></use></svg>
          </span>
          <span class="read-length"><?php echo cc_get_reading_time(); ?> read&nbsp;</span>
          <span class="written-by">written by&nbsp;</span>
          <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="cc-post-author"><?php echo cc_get_author_name(); ?></a>
        </div>
        <?php the_content(); ?>


        <div class="wideBlock">
          <div class="reviewWidget">

            <div class="reviewWidget_topBar">
              <svg role="logo" aria-label="class central logo" viewBox="0 0 332 32" class="class-central-logo">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cc-logo"></use>
              </svg>
              <span class="reviewWidget_topBar_title">Review</span>
              <a href="https://www.class-central.com" class="reviewWidget_topBar_link">class-central.com</a>
            </div>

            <div class="reviewWidget_header">
              <h2 class="reviewWidget_title"></h2>
            </div>

            <div class="reviewWidget_body">

            </div>

            <div class="reviewWidget_footer">
              <div class="starRating rating45">
                <div class="starRating_star">
                  <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                  </svg>
                </div>
                <div class="starRating_star">
                  <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                  </svg>
                </div>
                <div class="starRating_star">
                  <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                  </svg>
                </div>
                <div class="starRating_star">
                  <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                  </svg>
                </div>
                <div class="starRating_star">
                  <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                  </svg>
                </div>
              </div>

              <div class="starRating rating30 starRating-small starRating-gray">
                <div class="starRating_star">
                  <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                  </svg>
                </div>
                <div class="starRating_star">
                  <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                  </svg>
                </div>
                <div class="starRating_star">
                  <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                  </svg>
                </div>
                <div class="starRating_star">
                  <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                  </svg>
                </div>
                <div class="starRating_star">
                  <svg class="starRating_starShape starRating_starShape-blank">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-full">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-full"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-left starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-left"></use>
                  </svg>
                  <svg class="starRating_starShape starRating_starShape-right starRating_starShape-half">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-star-half-right"></use>
                  </svg>
                </div>
              </div>

            </div>

          </div>
        </div>


      </div>
      <footer>
        <?php get_template_part('templates/single/single-footer'); ?>
      </footer>
    </article>

</main><!-- /.main -->


