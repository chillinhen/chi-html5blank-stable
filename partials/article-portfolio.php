<article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <a class="portfolio-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail('portfolio'); ?>
        </a>
    <section class="portfolio_excerpt">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php html5wp_excerpt('html5wp_index'); ?>
        </section>
    <?php endif; ?>
</article>