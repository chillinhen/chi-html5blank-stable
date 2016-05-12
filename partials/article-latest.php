<div id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item latest'); ?>>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="portfolio_excerpt">
        <?php html5wp_excerpt('html5wp_index'); ?>
        <button class="portfolio-link">
            <a  href="#"><span><?php _e('show portfolio','html5blank');?></span></a>
        </button>        
    </div>
</div>
<?php if (has_post_thumbnail()) : ?>

    <div class="portfolio-thumbnail">
        <?php the_post_thumbnail('portfolio'); ?>
    </div>

<?php endif; ?>