<?php
//Kontakt Data
$avatar = get_field('avatar');
$message = get_field('message');
?>
<div class="contact">
    <div class="avatar">
        <img src="<?php echo $avatar; ?>" alt="ToDo: hier muß noch ein Titel rein" />
    </div>
    <div><?php echo $message; ?></div>
    <?php get_template_part('partials/social','media');?>
</div>