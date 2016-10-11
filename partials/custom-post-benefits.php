<?php
$filter = array(
    'post_type' => 'benefits',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC',
);
$benefitsQuery = new WP_Query($filter);
?>
<?php if ($benefitsQuery->have_posts()): ?>
    <section id="benefits">
        <?php while ($benefitsQuery->have_posts()) : $benefitsQuery->the_post();
            ?>
        <div id="benefit-<?php the_ID(); ?>" class="modal-box" <?php post_class(); ?>>
            <article>
                <?php if (has_post_thumbnail()) : ?>
                <div class='thumbnail'><?php the_post_thumbnail('medium'); ?></div>
                <?php endif; ?>
                <div class="text">
                    <h3 class="benefit-title">
                        <?php the_title(); ?>
                    <a href="#close" title="close" class="close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    <span><?php _e('schliessen','html5blank');?></span>
                </a>
                    </h3>
                    <?php the_content(); ?>
                </div>
            </article>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    <?php endif; ?>
</section>

