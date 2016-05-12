<div id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item featured'); ?>>
    <?php if (has_post_thumbnail()) : ?>

    <div class="portfolio-thumbnail">
        <?php the_post_thumbnail('portfolio'); ?>
    </div>

<?php endif; ?>
    <div style="display: none;">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php html5wp_excerpt('html5wp_index'); ?>
    </div>
</div>