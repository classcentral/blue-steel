<section class="header-area" style="background-image: url('<?php echo $banner['sizes']['blog-banner-full']; ?>');">
    <div class="container">
        <div class="header-content">
            <h1 class="free-online-ed"><?php echo roots_title(); ?></h1>
            <?php if ($subtitle = get_field('subtitle')): ?>
              <h4>
                <?php echo $subtitle; ?>
              </h4>
            <?php endif; ?>
        </div>
    </div><!-- /container -->
</section>
