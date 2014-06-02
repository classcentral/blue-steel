<section class="header-area" style="background-image: url('<?php echo $banner['sizes']['blog-banner-full']; ?>');">
    <div class="container">
        <div class="header-content">
            <h1><?php echo roots_title(); ?></h1>
            <?php if ($subtitle = get_field('subtitle')): ?>
              <h2>
                <?php echo $subtitle; ?>
              </h2>
            <?php endif; ?>
            <div class="post-header-info">
              <span class="read-icon">
                <svg class="icon icon-read-icon" viewBox="0 0 26 32"><use xlink:href="#icon-read-icon"></use></svg>
              </span>
              <span class="read-length"><?php echo cc_get_reading_time(); ?> read&nbsp;</span>
              <span class="written-by">written by&nbsp;</span>
              <a href="#" class="cc-post-author"><?php echo cc_get_author_name(); ?></a>
            </div>
        </div>
    </div><!-- /container -->
</section>
