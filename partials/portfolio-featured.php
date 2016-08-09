<?php
// get only first 3 results
$ids = get_field('featured_article', false, false);
$featured_headline = get_field('featured_headline');

$featuredQuery = new WP_Query(array(
    //'post_type' => 'post',
    'posts_per_page' => 3,
    'post__in' => $ids,
    'post_status' => 'any',
    'orderby' => 'post__in',
        ));
?>

<?php
if ($featuredQuery->have_posts()) :
    if ($featured_headline) :
        echo '<h2 class="section_headline text-center">' . $featured_headline . '</h2>';
    endif;
    ?>

    <section id="featured">
        <?php
        while ($featuredQuery->have_posts()) : $featuredQuery->the_post();
            get_template_part('partials/article', 'featured');

        endwhile;
        wp_reset_postdata();
        ?>
    </section>
<?php endif; ?>