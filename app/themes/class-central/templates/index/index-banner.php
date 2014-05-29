<?php foreach ( $pinned_posts as $post ) : setup_postdata( $post ); ?>
  <div class="banner" style="background-image: url('<?php echo $banner['sizes']['blog-banner-full']; ?>');">
    <h1>
      <?php the_title(); ?>
    </h1>
    <?php if ($subtitle = get_field('subtitle')): ?>
      <h4>
        <?php echo $subtitle; ?>
      </h4>
    <?php endif; ?>
    <a href="<?php the_permalink(); ?>" class="link-read-article">
      Read article
    </a>
  </div>
<?php endforeach; ?>
