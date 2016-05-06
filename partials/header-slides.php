<?php

// check if the repeater field has rows of data
if( have_rows('header-slide') ): ?>
<div class="flexslider">
<ul class="slides">
 <?php	// loop through the rows of data
    while ( have_rows('header-slide') ) : the_row();?>

        <!--display a sub field value-->
        <li><?php the_sub_field('header-text');?></li>

    <?php endwhile;

else :

    // no rows found?>
</ul>
    </div>
<?php endif;

?>