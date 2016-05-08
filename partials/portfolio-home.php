<?php
$filter = array(
    'post_type' => 'post',
    'category_name' => 'portfolio',
    'post_status' => 'publish',
    'posts_per_page' => 2,
    'orderby' => 'date',
    'order' => 'DESC',
);
$portfolioQuery = new WP_Query($filter);
?>
<?php if (have_posts()): ?>
<section class="teaser">
    <?php while (have_posts()) : the_post(); ?>
    <?php endwhile;?>
    <?php else : ?>   
</section>
<?php endif;?>

