<?php $address = get_field('adresse', 'option'); ?>

<?php if (have_rows('adresse', 'option')) : ?>
    <h3><?php _e('Kontakt', 'html5blank'); ?></h3>
    <address>
        <div class="adresse">
            <?php while (have_rows('adresse', 'option')) : the_row(); ?>
                <span class="<?php echo the_sub_field('icon'); ?>"></span>
                <?php echo strip_tags(the_sub_field('content'), '<p>'); ?>
            <?php endwhile; ?>
        </div>
        <div class="contact-data">
            <?php while (have_rows('kontaktdaten', 'option')) : the_row(); ?>
                <span class="<?php echo the_sub_field('icon'); ?>"></span>
                <?php echo strip_tags(the_sub_field('content','<p>')); ?>
            <?php endwhile; ?>
        </div>

    </address>
<?php endif; ?>

