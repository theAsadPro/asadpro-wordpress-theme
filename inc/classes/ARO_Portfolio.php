<?php
class APRO_Portfolio {
    public function __construct() {
        add_action( 'init', array( $this, 'create_portfolio_cpt' ) );
        add_action( 'init', array( $this, 'create_portfolio_type_tax' ) );
    }

    // Register Custom Post Type Portfolio
    // Post Type Key: Portfolio
    public function create_portfolio_cpt() {

        $labels = array(
            'name'                  => _x( 'Portfolios', 'Post Type General Name', 'asadpro' ),
            'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'asadpro' ),
            'menu_name'             => _x( 'Portfolios', 'Admin Menu text', 'asadpro' ),
            'name_admin_bar'        => _x( 'Portfolio', 'Add New on Toolbar', 'asadpro' ),
            'archives'              => __( 'Portfolio', 'asadpro' ),
            'attributes'            => __( 'Portfolio', 'asadpro' ),
            'parent_item_colon'     => __( 'Portfolio', 'asadpro' ),
            'all_items'             => __( 'All Portfolios', 'asadpro' ),
            'add_new_item'          => __( 'Add New Portfolio', 'asadpro' ),
            'add_new'               => __( 'Add New', 'asadpro' ),
            'new_item'              => __( 'New Portfolio', 'asadpro' ),
            'edit_item'             => __( 'Edit Portfolio', 'asadpro' ),
            'update_item'           => __( 'Update Portfolio', 'asadpro' ),
            'view_item'             => __( 'View Portfolio', 'asadpro' ),
            'view_items'            => __( 'View Portfolios', 'asadpro' ),
            'search_items'          => __( 'Search Portfolio', 'asadpro' ),
            'not_found'             => __( 'Not found', 'asadpro' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'asadpro' ),
            'featured_image'        => __( 'Featured Image', 'asadpro' ),
            'set_featured_image'    => __( 'Set featured image', 'asadpro' ),
            'remove_featured_image' => __( 'Remove featured image', 'asadpro' ),
            'use_featured_image'    => __( 'Use as featured image', 'asadpro' ),
            'insert_into_item'      => __( 'Insert into Portfolio', 'asadpro' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'asadpro' ),
            'items_list'            => __( 'Portfolios list', 'asadpro' ),
            'items_list_navigation' => __( 'Portfolios list navigation', 'asadpro' ),
            'filter_items_list'     => __( 'Filter Portfolios list', 'asadpro' ),
        );

        $args = array(
            'label'                 => __( 'Portfolio', 'asadpro' ),
            'description'           => __( 'Add Portfolios', 'asadpro' ),
            'labels'                => $labels,
            'menu_icon'             => 'dashicons-admin-appearance',
            'supports'              => array( 'title', 'editor', 'revisions', 'thumbnail', 'page-attributes', 'post-formats' ),
            'taxonomies'            => array( 'portfolio-type' ),
            'hierarchical'          => true,
            'exclude_from_search'   => true,
            'publicly_queryable'    => true,
            'has_archive'           => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true, // show in nav
            'show_in_admin_bar'     => true,
            'can_export'            => true,
            'show_in_nav_menus'     => true,
            'menu_position'         => 5,
            'capability_type'       => 'post',
            'show_in_rest'          => true,
            'rest_base'             => '',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            "rewrite"               => array( "slug" => "portfolios", "with_front" => true ),
            "rest_namespace"        => "wp/v2",
            "delete_with_user"      => false,
            "map_meta_cap"          => true,
            "query_var"             => true,
            "show_in_graphql"       => false,

        );

        register_post_type( 'portfolios', $args );

    }

    // Register Taxonomy Portfolio Type
    // Taxonomy Key: portfolio-project
    function create_portfolio_type_tax() {
        $labels = array(
            'name'              => _x( 'Portfolio Types', 'taxonomy general name', 'asadPro' ),
            'singular_name'     => _x( 'Portfolio Type', 'taxonomy singular name', 'asadPro' ),
            'search_items'      => __( 'Search Portfolio Type', 'asadPro' ),
            'all_items'         => __( 'All Portfolio Type', 'asadPro' ),
            'parent_item'       => __( 'Parent Portfolio Type', 'asadPro' ),
            'parent_item_colon' => __( 'Parent Portfolio Type:', 'asadPro' ),
            'edit_item'         => __( 'Edit Portfolio Type', 'asadPro' ),
            'update_item'       => __( 'Update Portfolio Type', 'asadPro' ),
            'add_new_item'      => __( 'Add New Portfolio Type', 'asadPro' ),
            'new_item_name'     => __( 'New Portfolio Type Name', 'asadPro' ),
            'menu_name'         => __( 'Portfolio Type', 'asadPro' ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'show_in_rest'      => true,
            'rewrite'           => array( 'slug' => 'portfolio-type' ),
        );

        register_taxonomy( 'portfolio-type', array( 'portfolios' ), $args );
    }

}
new APRO_Portfolio();