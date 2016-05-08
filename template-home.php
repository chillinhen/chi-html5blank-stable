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
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    <?php edit_post_link(); ?>
                </article>
            </div>
        <?php endwhile;
        ?>
    <?php else: ?>
        <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

    <?php endif; ?>
</section>
<!-- Teaser -->
<?php get_template_part('partials/teaser'); ?>
<!-- /Teaser -->
<!-- Portfolio -->
<?php #get_template_part('partials/portfolio', 'home'); ?>
<!-- /Teaser -->

<?php get_footer(); ?>






