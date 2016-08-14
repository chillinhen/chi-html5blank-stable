<?php
$recommendation_headline = get_field('recommendation_headline');
$filter = array(
    'post_type' => 'recommends',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC',
);
$recommendsQuery = new WP_Query($filter);
?>
<?php if ($recommendsQuery->have_posts()): 
        if ($recommendation_headline) :
        echo '<h2 class="section_headline text-center">' . $recommendation_headline . '</h2>';
    endif;
    ?>

    <section id="recommends" class="flexslider">
            <ul class="slides">
                <?php while ($recommendsQuery->have_posts()) : $recommendsQuery->the_post(); ?>
                <li>
                    <div class='content clearfix'>
                        <div class='thumbnail'><?php the_post_thumbnail('medium');?></div>
                        <div class="text">
                            <h3><?php the_title();?></h3>
                            <?php the_content();?>
                        </div>
                    </div>
                </li>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </ul>
    </section>
<?php endif; ?>