<?php

// check if the repeater field has rows of data
if( have_rows('header-slide') ): ?>
<div class="flexslider">
<ul class="slides">
 <?php	// loop through the rows of data
    while ( have_rows('header-slide') ) : the_row();
		$image = get_sub_field('bild');
		$size = 'custom-size';
		$thumb = $image['sizes'][ $size ];
		?>
        <!--display a sub field value-->
        <li>
        	<img src="<?php echo $thumb; ?>" />
        	<?php the_sub_field('header-text');?>
        	
        </li>

    <?php endwhile;

else :

    // no rows found?>
</ul>
    </div>
<?php endif;

?>