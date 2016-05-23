<?php if (have_rows('social_media_links','option')) : ?>
    <ul class="social-media">
        <?php while (have_rows('social_media_links','option')) : the_row(); ?>
        <li class="<?php echo the_sub_field('label'); ?>"><a href="<?php echo the_sub_field('link'); ?>"><span><?php echo the_sub_field('label'); ?></span></a></li>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>