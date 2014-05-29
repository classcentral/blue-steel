<?php foreach ( $pinned as $post ) : setup_postdata( $post ); ?>
    <section class="header-area" style="background-image: url('<?php echo $banner['sizes']['blog-banner-full']; ?>');">
        <div class="container">
            <div class="header-content">
                <h1>
                    <?php the_title(); ?>
                </h1>
                <?php if ($subtitle = get_field('subtitle')): ?>
                <h2>
                    <?php echo $subtitle; ?>
                </h2>
                <?php endif; ?>
                <a class="read-article" href="<?php the_permalink(); ?>" class="link-read-article">
                    Read article
                </a>
            </div>
        </div>
    </section>
<?php endforeach; ?>
