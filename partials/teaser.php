<?php 
$ctaBadge = get_field( "cta-text" );
$ctaLink = get_field( "linkanker" );?>

<section id="teaser">
  <?php if($ctaBadge) : ?>
    <div class="call-to-action">
        <a href="#<?php echo $ctaLink; ?>"><?php echo $ctaBadge; ?> </a>
    </div> 
  <?php endif;?> 
  <?php if (have_rows('teaser')): 
        while (have_rows('teaser')) : the_row(); 
            $teaserIcon = get_sub_field( "icon" );
            $teaserContent = get_sub_field( "content" );
            $teaserLink = get_sub_field( "link" );?>
    <div class="teaser">
        <div class="icon"><img src="<?php echo $teaserIcon;?>"></div>
        
            <h3><?php echo $teaserContent;?></h3>
            <a href="#<?php echo $teaserLink; ?>">
                <span class="dashicons dashicons-plus-alt"></span>
            </a>
    </div>
        <?php endwhile; ?>
  <?php endif;?>
</section>