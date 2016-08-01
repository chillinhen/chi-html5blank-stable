<?php
//Kontakt Data
$image = get_field('avatar');
$message = get_field('message');
?>
<div class="contact">
    <?php if( !empty($image) ): ?>
    <div class="avatar">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    </div>
    <?php endif; ?>
    <div><?php echo $message; ?></div>
    <?php get_template_part('partials/social','media');?>
</div>