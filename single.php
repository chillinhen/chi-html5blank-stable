<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'x-large', true);
        $thumb_url = $thumb_url_array[0];
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url(<?php echo $thumb_url; ?>);">
            <section>
                <?php get_template_part('partials/gallery', 'simple'); ?>
                <div class="content">
                    <h1>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h1>
                    <?php the_content(); // Dynamic Content ?>
                    <footer>


                        <span class="date"><?php the_time('F Y'); ?></span>
                        <?php
                        $portfolio_link = get_field('portfolio_link');
                        $portfolio_link_name = get_field('portfolio_link_name');
                        ?>
                        <?php if ($portfolio_link && $portfolio_link_name) : ?>
                            - <span class="portfolio-link">
                                <a href="<?php echo $portfolio_link; ?>" target="_blank">
                                    <?php echo $portfolio_link_name; ?>
                                </a>
                            </span>
                            <hr>
                        <?php endif; ?>
                        <?php #the_category(); ?>

                    </footer>
                    <?php edit_post_link(); // Always handy to have Edit Post Links available ?>
                </div>
            </section>
        </article>
    <?php endwhile; ?>

<?php else: ?>
    <?php get_template_part('partials/article', '404'); ?>
<?php endif; ?>
<?php get_footer(); ?>