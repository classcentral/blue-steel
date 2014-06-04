<?php foreach ( $pinned_posts as $post ) : setup_postdata( $post ); ?>
    <section class="header-area" style="<?php echo cc_get_banner_styles(get_the_ID()); ?>">
        <div class="container">
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
                    Read article
                >
            </div>
        </div>
    </section>
<?php endforeach; ?>
