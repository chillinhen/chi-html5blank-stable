<?php if (have_rows('social_media_links')) : ?>
    <ul class="social-media">
        <?php while (have_rows('social_media_links')) : the_row(); ?>
        <li class="<?php echo the_sub_field('label'); ?>"><a href="<?php echo the_sub_field('link'); ?>"><span><?php echo the_sub_field('label'); ?></span></a></li>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>