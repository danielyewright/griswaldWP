<?php

/*
* Creating a function to create our CPT
*/

function portfolio_post_type() {
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Portfolio', 'Post Type General Name', 'kaunostheme' ),
        'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'kaunostheme' ),
        'menu_name'           => __( 'Portfolio', 'kaunostheme' ),
        'parent_item_colon'   => __( 'Parent Portfolio Items', 'kaunostheme' ),
        'all_items'           => __( 'All Portfolio Items', 'kaunostheme' ),
        'view_item'           => __( 'View Portfolio Items', 'kaunostheme' ),
        'add_new_item'        => __( 'Add New Portfolio Item', 'kaunostheme' ),
        'add_new'             => __( 'Add New', 'kaunostheme' ),
        'edit_item'           => __( 'Edit Portfolio Item', 'kaunostheme' ),
        'update_item'         => __( 'Update Portfolio Item', 'kaunostheme' ),
        'search_items'        => __( 'Search Portfolio Items', 'kaunostheme' ),
        'not_found'           => __( 'Not Found', 'kaunostheme' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'kaunostheme' ),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'portfolio', 'kaunostheme' ),
        'description'         => __( 'List of projects you have worked on that are displayed on the portfolio page', 'kaunostheme' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields' ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering your Custom Post Type
    register_post_type( 'portfolio', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'portfolio_post_type', 0 );