<?php
//latest Portfolio Thumbs
$latest_headline = get_field('latest_headline');
$filter = array(
    'post_type' => 'post',
    'category_name' => 'portfolio',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC',
);
$latestQuery = new WP_Query($filter);
?>
<?php if ($latestQuery->have_posts()): ?>
    <section id="latest" class="latest">
        <?php #get_template_part('partials/contact'); ?>
<!--        <div class="latest">-->
                <?php
                if ($latest_headline) :
                    echo '<span class="badge">' . $latest_headline . '</span>';
                endif;
                ?>
            
        <?php while ($latestQuery->have_posts()) : $latestQuery->the_post(); ?>
            <?php get_template_part('partials/article','latest'); ?>
        <?php endwhile;
        wp_reset_postdata();
        ?>
<!--        </div>-->
    </section>
<?php endif; ?>