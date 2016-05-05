<section class="header-area" style="<?php echo cc_get_banner_styles(get_queried_object_id()); ?>">
    <div class="container header-wrap">
        <div class="header-content">
            <h1><?php echo roots_title(); ?></h1>
            <?php if ($subtitle = get_field('subtitle', get_queried_object_id())): ?>
              <h2>
                <?php echo $subtitle; ?>
              </h2>
            <?php endif; ?>
        </div>
    </div><!-- /container -->
    <?php if (get_field('photo_credit')): ?>
      <?php if (get_field('photo_credit_link')): ?>
        <a href="<?php the_field('photo_credit_link') ?>" class="photo-credit">Photo by <?php the_field('photo_credit') ?></a>
      <?php else: ?>
        <span class="photo-credit">Photo by <?php the_field('photo_credit') ?></span>
      <?php endif ?>
    <?php endif ?>
</section>
