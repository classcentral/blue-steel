<main class="main col-md-8" role="main">

    <article <?php post_class(); ?>>
      <header>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php get_template_part('templates/single/single-footer'); ?>
      </footer>
    </article>

</main><!-- /.main -->


