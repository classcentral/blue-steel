<?php foreach ( $pinned_posts as $post ) : setup_postdata( $post ); ?>
    <section class="header-area" style="<?php echo cc_get_banner_styles(get_the_ID()); ?>">
        <div class="container header-wrap">
            <div class="header-content">
                <h1>
                    <a class="read-article" href="<?php the_permalink(); ?>" class="link-read-article"><?php the_title(); ?></a>
                </h1>
                <?php if ($subtitle = get_field('subtitle')): ?>
                <h2>
                    <?php echo $subtitle; ?>
                </h2>
                <?php endif; ?>
                <a class="read-article" href="<?php the_permalink(); ?>" class="link-read-article">
                    Read article >
                </a>
            </div>
        </div>
        <?php if (get_field('photo_credit')): ?>
          <?php if (get_field('photo_credit_link')): ?>
            <a href="<?php the_field('photo_credit_link') ?>" class="photo-credit">Photo by <?php the_field('photo_credit') ?></a>
          <?php else: ?>
            <span class="photo-credit">Photo by <?php the_field('photo_credit') ?></span>
          <?php endif ?>
        <?php endif ?>
    </section>
<?php endforeach; ?>
