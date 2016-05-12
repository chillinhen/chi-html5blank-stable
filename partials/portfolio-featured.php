<?php
//latest Portfolio Thumbs
$filter = array(
    'post_type' => 'post',
    'category__and' => array(223,224),
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
);
$latestQuery = new WP_Query($filter);
?>
<?php if ($latestQuery->have_posts()): ?>
    <section id="featured">
        <?php while ($latestQuery->have_posts()) : $latestQuery->the_post(); ?>
            <?php get_template_part('partials/article','featured'); ?>
        <?php endwhile;
        wp_reset_postdata();
        ?>
    </section>
<?php endif; ?>