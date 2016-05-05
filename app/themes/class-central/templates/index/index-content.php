<main class="main col-md-8" role="main">
    
  <h3 class="section-heading">
    <span><?php echo roots_title(); ?></span>
  </h3>

    <?php if (!have_posts()) : ?>
        <div class="alert alert-warning">
            <?php _e('Sorry, no results were found.', 'roots'); ?>
        </div>
        <?php get_search_form(); ?>
    <?php endif; ?>
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-sm-6 col-single-post">
                <article <?php post_class(); ?>>
                    <?php $image = get_field('thumbnail'); ?>
                    <a href="<?php the_permalink(); ?>">
                      <header class="post-header" style="background-image: url('<?php echo $image['sizes']['blog-thumbnail']; ?>');">
                          <div class="post-heading-wrap">
                            <h2 class="entry-title"><?php the_title(); ?></h2>
                          </div>
                      </header>
                    </a>
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>
                    <footer>
                        <div class="entry-link">
                            <a class="link-read-article" href="<?php the_permalink(); ?>">Read article</a>
                        </div>
                        <div class="entry-meta">
                            <span class="time-icon">
                                <svg class="icon icon-calendar-icon" viewBox="0 0 32 32"><use xlink:href="#icon-calendar-icon"></use></svg>
                            </span>
                            <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date('jS F Y'); ?></time>
                        </div>
                    </footer>
                </article>
            </div>
        <?php endwhile; ?>
    </div>

    <?php if ($wp_query->max_num_pages > 1) : ?>
        <nav class="post-nav">
            <table class="pager">
              <tr>
                <td class="next">
                  <?php if ( $prev = get_previous_posts_link( 'Newer posts' ) ): ?>
                      <?php echo $prev; ?>
                  <?php else: ?>
                      <span class="disabled">Newer posts</span>
                  <?php endif; ?>
                </td>
                <td class="previous">
                  <?php if ( $next = get_next_posts_link( 'Older posts' ) ): ?>
                      <?php echo $next; ?>
                  <?php else: ?>
                      <span class="disabled">Older posts</span>
                  <?php endif; ?>
                </td>
              </tr>
            </table>
        </nav>
    <?php endif; ?>

</main><!-- /.main -->
