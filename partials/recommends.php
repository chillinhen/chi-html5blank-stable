<?php
//latest Portfolio Thumbs
$filter = array(
    'post_type' => 'recommends',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC',
);
$recommendsQuery = new WP_Query($filter);
?>
<?php if ($recommendsQuery->have_posts()): ?>
    <section id="recommends" class="flexslider">
            <ul class="slides">
                <?php while ($recommendsQuery->have_posts()) : $recommendsQuery->the_post(); ?>
                <li>
                    <div class="thumbnail"><?php the_post_thumbnail('medium');?></div>
                    <div class="content"><?php the_content();?></div>
                </li>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </ul>
    </section>
<?php endif; ?>