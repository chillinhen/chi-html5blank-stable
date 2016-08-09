<?php
//Kontakt Data
$thumbnail = get_field('cta_thumbnail');
$message = get_field('cta_text');
$form = get_field('cta_formular');
?>
<section id="contact" class="cta-section">
	<?php if($thumbnail) : ?>
    <div class="thumbnail">
        <img src="<?php echo $thumbnail['url'];?>" />
    </div>
    <?php endif; ?>
    <div class="message">
        <?php echo $message;?>
        <?php get_template_part('partials/contact'); ?>
        <?php get_template_part('partials/social','media');?>
    </div>
    <div class="form">
        <?php echo do_shortcode($form);?>
    </div>
</section>
