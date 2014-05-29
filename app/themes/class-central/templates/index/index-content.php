<main class="main <?php echo roots_main_class(); ?>" role="main">

  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'roots'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>

  <?php while (have_posts()) : the_post(); ?>

    <article <?php post_class(); ?>>
      <header class="post-header" style="background-image: url('<?php echo $banner['sizes']['blog-thumbnail']; ?>');">
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </header>
      <div class="entry-summary">
        <?php the_excerpt(); ?>
      </div>
      <footer>
        <div class="entry-meta">
          <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date('jS F Y'); ?></time>
        </div>
        <div class="entry-link">
          <a class="link-read-article" href="<?php the_permalink(); ?>">Read article</a>
        </div>
      </footer>
    </article>

  <?php endwhile; ?>

  <?php if ($wp_query->max_num_pages > 1) : ?>
    <nav class="post-nav">
      <ul class="pager">
        <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
        <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
      </ul>
    </nav>
  <?php endif; ?>

</main><!-- /.main -->
