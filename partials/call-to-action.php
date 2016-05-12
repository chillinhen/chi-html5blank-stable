<?php
//Kontakt Data
$thumbnail = get_field('cta_thumbnail');
$message = get_field('cta_text');
$form = get_field('cta_formular');
?>
<section id="contact" class="cta-section">
    <div class="thumbnail">
        <img src="<?php echo $thumbnail['url'];?>" />
    </div>
    <div class="message">
        <?php echo $message;?>
    </div>
    <div class="form">
        <?php echo do_shortcode($form);?>
    </div>
</section>
