<?php
// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_recommends()
{
    register_taxonomy_for_object_type('category', 'recommends'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'recommends');
    register_post_type('recommends', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Recommends Custom Post', 'html5blank'), // Rename these to suit
            'singular_name' => __('Recommends Custom Post', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New Recommends Custom Post', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Recommends Custom Post', 'html5blank'),
            'new_item' => __('New Recommends Custom Post', 'html5blank'),
            'view' => __('View Recommends Custom Post', 'html5blank'),
            'view_item' => __('View Recommends Custom Post', 'html5blank'),
            'search_items' => __('Search Recommends Custom Post', 'html5blank'),
            'not_found' => __('No Recommends Custom Posts found', 'html5blank'),
            'not_found_in_trash' => __('No Recommends Custom Posts found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom Recommends post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}
add_action('init', 'create_post_type_recommends'); // Add our Recommends Custom Post Type
?>