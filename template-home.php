<?php /* Template Name: Home */ get_header(); ?>
<!--get_template_part('partials/article', 'home');-->
<section id="intro" role="banner">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <?php if (has_post_thumbnail()) : ?>
                <div class="banner-img">
                    <?php the_post_thumbnail('x-large'); ?>
                </div>
            <?php endif; ?>
            <div class="banner-text">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2>
                        <?php the_title(); ?> <?php edit_post_link(); ?>
                    </h2>
                    <?php the_content(); ?>

                    </div>
                    
                </article>
            </div>
        <?php endwhile;wp_reset_query();
        ?>
    <?php else: ?>
        <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

    <?php endif; ?>
</section>
<!-- Teaser -->
<?php get_template_part('partials/teaser'); ?>
<!-- /Teaser -->
<!-- Portfolio -->
<?php get_template_part('partials/portfolio', 'latest'); ?>
<?php get_template_part('partials/portfolio', 'featured'); ?>
<!-- /Portfolio -->
<!-- Call to Action Section -->
<?php get_template_part('partials/call-to-action');?>
<!-- /Call to Action Section -->
<!-- Recommends -->
<?php get_template_part('partials/recommends');?>
<!-- /Recommends -->
<?php get_footer(); ?>






