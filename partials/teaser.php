<?php 
$ctaBadge = get_field( "cta-text" );
$ctaLink = get_field( "linkanker" );?>

<section id="teaser">
  <?php if($ctaBadge) : ?>
    <div class="call-to-action">
        <div class="badge">
            <a href="#<?php echo $ctaLink; ?>"><?php echo $ctaBadge; ?> </a>
        </div>
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
            <?php if($teaserLink) :?>
            <a href="<?php echo $teaserLink; ?>">
                <span><?php _e('mehr Infos','html5blank');?></span>
            </a>
            <?php endif; ?>
    </div>
    
        <?php endwhile; ?>
  <?php endif;?>
</section>