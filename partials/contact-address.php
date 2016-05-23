<?php $address = get_field('footer-widget','option');?>
<?php #echo strip_tags($address,'<p>'); ?>

<?php if (have_rows('footer-widget','option')) : ?>
	<h3><?php _e('Kontakt','html5blank');?></h3>
    <address>
        <?php while (have_rows('footer-widget','option')) : the_row(); ?>
        <div class="<?php echo the_sub_field('icon'); ?>">
        	<?php echo the_sub_field('content'); ?>
        </div>
        <?php endwhile; ?>
    </address>
<?php endif; ?>

