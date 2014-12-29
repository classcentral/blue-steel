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

        <?php if (is_single(59066)) : ?>
          <?php get_template_part('templates/layout/reviews/learning_from_data'); ?>
        <?php elseif (is_single(59102)) : ?>
          <?php get_template_part('templates/layout/reviews/surveillance_law'); ?>
        <?php elseif (is_single(59214)) : ?>
          <?php get_template_part('templates/layout/reviews/learning_how_to_learn'); ?>
        <?php endif ?>


      </div>
      <footer>
        <?php get_template_part('templates/single/single-footer'); ?>
      </footer>
    </article>

</main><!-- /.main -->


