<?php 
$auszug = get_field('auszug');
$portfolioLink = get_field('portfolio-link','option');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item portfolio-excerpt'); ?>>
<!--    	<h2><a href="<?php #the_permalink(); ?>"><?php #the_title(); ?></a></h2>-->
    <h2><?php the_title(); ?></h2>
        <?php if($auszug):
           echo $auszug; 
        else : html5wp_excerpt('html5wp_index');
        endif;
?>

        <?php if($portfolioLink) : ?>
        <button class="portfolio-link">
            <a href="<?php echo $portfolioLink; ?>"><span><?php _e('show portfolio','html5blank');?></span></a>
        </button>
        <?php endif;?>     
</article>
<?php if (has_post_thumbnail()) : ?>

    <div class="portfolio-thumbnail">
        <?php the_post_thumbnail('custom-size'); ?>
    </div>

<?php endif; ?>