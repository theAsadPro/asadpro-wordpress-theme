<?php
class APRO_Faqs {
    public function __construct() {
        add_action( 'init', array( $this, 'create_faq_cpt' ) );
    }

    // Register Custom Post Type FAQ
    // Post Type Key: FAQ
    public function create_faq_cpt() {

        $labels = array(
            'name'                  => _x( 'FAQs', 'Post Type General Name', 'asadpro' ),
            'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'asadpro' ),
            'menu_name'             => _x( 'FAQs', 'Admin Menu text', 'asadpro' ),
            'name_admin_bar'        => _x( 'FAQ', 'Add New on Toolbar', 'asadpro' ),
            'archives'              => __( 'FAQ', 'asadpro' ),
            'attributes'            => __( 'FAQ', 'asadpro' ),
            'parent_item_colon'     => __( 'FAQ', 'asadpro' ),
            'all_items'             => __( 'All FAQs', 'asadpro' ),
            'add_new_item'          => __( 'Add New FAQ', 'asadpro' ),
            'add_new'               => __( 'Add New', 'asadpro' ),
            'new_item'              => __( 'New FAQ', 'asadpro' ),
            'edit_item'             => __( 'Edit FAQ', 'asadpro' ),
            'update_item'           => __( 'Update FAQ', 'asadpro' ),
            'view_item'             => __( 'View FAQ', 'asadpro' ),
            'view_items'            => __( 'View FAQs', 'asadpro' ),
            'search_items'          => __( 'Search FAQ', 'asadpro' ),
            'not_found'             => __( 'Not found', 'asadpro' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'asadpro' ),
            'featured_image'        => __( 'Featured Image', 'asadpro' ),
            'set_featured_image'    => __( 'Set featured image', 'asadpro' ),
            'remove_featured_image' => __( 'Remove featured image', 'asadpro' ),
            'use_featured_image'    => __( 'Use as featured image', 'asadpro' ),
            'insert_into_item'      => __( 'Insert into FAQ', 'asadpro' ),
            'uploaded_to_this_item' => __( 'Uploaded to this FAQ', 'asadpro' ),
            'items_list'            => __( 'FAQs list', 'asadpro' ),
            'items_list_navigation' => __( 'FAQs list navigation', 'asadpro' ),
            'filter_items_list'     => __( 'Filter FAQs list', 'asadpro' ),
        );

        $args = array(
            'label'                 => __( 'FAQ', 'asadpro' ),
            'description'           => __( 'Add Frequently Asked Questions (FAQs)', 'asadpro' ),
            'labels'                => $labels,
            'menu_icon'             => 'dashicons-admin-appearance',
            'supports'              => array( 'title', 'editor', 'revisions', 'page-attributes', 'post-formats' ),
            'taxonomies'            => array(),
            'hierarchical'          => true,
            'exclude_from_search'   => true,
            'publicly_queryable'    => true,
            'has_archive'           => false,
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
            "rewrite"               => array( "slug" => "faqs", "with_front" => true ),
            "rest_namespace"        => "wp/v2",
            "delete_with_user"      => false,
            "map_meta_cap"          => true,
            "query_var"             => true,
            "show_in_graphql"       => false,

        );

        register_post_type( 'faqs', $args );

    }
}
new APRO_Faqs();