<section id="teaser">
    
    <?php 
        $ctaBadge = get_field('cta-text');
        $ctaLink = get_field('linkanker'); 
        if ($ctaBadge ) :
            sprintf('<a href="#%">%</a>', $ctaLink, $ctaBadge);
        endif;
        ?>
 
    <?php if (have_rows('teaser')): ?>
        <?php // loop through the rows of data
        while (have_rows('teaser')) : the_row();
            ?>
            <!--display a sub field value-->
            <?php if (the_sub_field('icon')) : ?>
                <div class="icon">
                    <img src="<?php the_sub_field('icon'); ?>" alt=""/> <!-- Todo add srcset oder svg --></div>
            <?php endif; ?>
            <?php if (the_sub_field('text')) : ?>
                <div class="text"><?php the_sub_field('text'); ?></div>
            <?php endif; ?>
            <?php if (the_sub_field('link')) : ?>
                <div class="link"><?php the_sub_field('link'); ?></div>
            <?php endif; ?>
        <?php endwhile;

    else :// no rows found
        ?>
<?php endif; ?>
</section>