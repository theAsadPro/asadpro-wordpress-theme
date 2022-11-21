<?php
class ARO_Testimonial {
    private $screen = array(
        'testimonials',

    );

    private $meta_fields = array(
        array(
            'label' => 'Client',
            'id'    => 'client',
            'type'  => 'text',
        ),

        array(
            'label' => 'Date Year',
            'id'    => 'date_year',
            'type'  => 'number',
        ),

        array(
            'label' => 'Country',
            'id'    => 'country',
            'type'  => 'text',
        ),

        array(
            'label'   => 'Rating ( Star )',
            'id'      => 'rating',
            'default' => '5',
            'type'    => 'radio',
            'options' => array(
                '5',
                '4',
                '3',
                '2',
                '1',
            ),
        ),

    );

    public function __construct() {
        add_action( 'init', array( $this, 'create_testimonial_cpt' ) );
        add_action( 'add_meta_boxes', array( $this, 'add_testmonial_meta_boxes' ) );
        add_action( 'save_post', array( $this, 'save_fields' ) );
    }

    // Register Custom Post Type Testimonial
    // Post Type Key: Testimonial
    public function create_testimonial_cpt() {

        $labels = array(
            'name'                  => _x( 'Testimonials', 'Post Type General Name', 'asadpro' ),
            'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'asadpro' ),
            'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'asadpro' ),
            'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'asadpro' ),
            'archives'              => __( 'Testimonial', 'asadpro' ),
            'attributes'            => __( 'Testimonial', 'asadpro' ),
            'parent_item_colon'     => __( 'Testimonial', 'asadpro' ),
            'all_items'             => __( 'All Testimonials', 'asadpro' ),
            'add_new_item'          => __( 'Add New Testimonial', 'asadpro' ),
            'add_new'               => __( 'Add New', 'asadpro' ),
            'new_item'              => __( 'New Testimonial', 'asadpro' ),
            'edit_item'             => __( 'Edit Testimonial', 'asadpro' ),
            'update_item'           => __( 'Update Testimonial', 'asadpro' ),
            'view_item'             => __( 'View Testimonial', 'asadpro' ),
            'view_items'            => __( 'View Testimonials', 'asadpro' ),
            'search_items'          => __( 'Search Testimonial', 'asadpro' ),
            'not_found'             => __( 'Not found', 'asadpro' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'asadpro' ),
            'featured_image'        => __( 'Featured Image', 'asadpro' ),
            'set_featured_image'    => __( 'Set featured image', 'asadpro' ),
            'remove_featured_image' => __( 'Remove featured image', 'asadpro' ),
            'use_featured_image'    => __( 'Use as featured image', 'asadpro' ),
            'insert_into_item'      => __( 'Insert into Testimonial', 'asadpro' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'asadpro' ),
            'items_list'            => __( 'Testimonials list', 'asadpro' ),
            'items_list_navigation' => __( 'Testimonials list navigation', 'asadpro' ),
            'filter_items_list'     => __( 'Filter Testimonials list', 'asadpro' ),
        );

        $args = array(
            'label'                 => __( 'Testimonial', 'asadpro' ),
            'description'           => __( 'Add Testimonials', 'asadpro' ),
            'labels'                => $labels,
            'menu_icon'             => 'dashicons-admin-appearance',
            'supports'              => array( 'title', 'editor', 'revisions', 'thumbnail', 'page-attributes', 'post-formats' ),
            'taxonomies'            => array(),
            'hierarchical'          => false,
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
            "rewrite"               => array( "slug" => "testimonials", "with_front" => true ),
            "rest_namespace"        => "wp/v2",
            "delete_with_user"      => true,
            "map_meta_cap"          => true,
            "query_var"             => true,
            "show_in_graphql"       => false,

        );

        register_post_type( 'testimonials', $args );

    }

    public function add_testmonial_meta_boxes() {
        foreach ( $this->screen as $single_screen ) {
            add_meta_box(
                'tesitmonial_info',
                __( 'Tesitmonial Info', 'asadPro' ),
                array( $this, 'testmonial_meta_box_callback' ),
                $single_screen,
                'normal',
                'core'
            );
        }
    }

    public function testmonial_meta_box_callback( $post ) {
        wp_nonce_field( 'tesitmonial_info_data', 'tesitmonial_info_nonce' );
        echo 'Add Testimonial Info, Details, Rating';
        $this->field_generator( $post );
    }
    public function field_generator( $post ) {
        $output = '';
        foreach ( $this->meta_fields as $meta_field ) {
            $label = '<label for="' . $meta_field['id'] . '">' . $meta_field['label'] . '</label>';
            $meta_value = get_post_meta( $post->ID, $meta_field['id'], true );
            if ( empty( $meta_value ) ) {
                if ( isset( $meta_field['default'] ) ) {
                    $meta_value = $meta_field['default'];
                }
            }
            switch ( $meta_field['type'] ) {
            case 'radio':
                $input = '<fieldset>';
                $input .= '<legend class="screen-reader-text">' . $meta_field['label'] . '</legend>';
                $i = 0;
                foreach ( $meta_field['options'] as $key => $value ) {
                    $meta_field_value = !is_numeric( $key ) ? $key : $value;
                    $starElement = str_repeat( '<span class="dashicons dashicons-star-filled"></span>', $value );
                    $input .= sprintf(
                        '<label><input %s id=" %s" name="%s" type="radio" value="%s">%s</label> %s',
                        $meta_value === $meta_field_value ? 'checked' : '',
                        $meta_field['id'],
                        $meta_field['id'],
                        $meta_field_value,
                        // $value,
                        $starElement,
                        $i < count( $meta_field['options'] ) - 1 ? '<br>' : ''
                    );
                    $i++;
                }
                $input .= '</fieldset>';
                break;

            default:
                $input = sprintf(
                    '<input %s id="%s" name="%s" type="%s" value="%s">',
                    $meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
                    $meta_field['id'],
                    $meta_field['id'],
                    $meta_field['type'],
                    $meta_value
                );
            }
            $output .= $this->format_rows( $label, $input );
        }
        echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
    }

    public function format_rows( $label, $input ) {
        return '<tr><th>' . $label . '</th><td>' . $input . '</td></tr>';
    }

    public function save_fields( $post_id ) {
        if ( !isset( $_POST['tesitmonial_info_nonce'] ) ) {
            return $post_id;
        }

        $nonce = $_POST['tesitmonial_info_nonce'];
        if ( !wp_verify_nonce( $nonce, 'tesitmonial_info_data' ) ) {
            return $post_id;
        }

        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return $post_id;
        }

        foreach ( $this->meta_fields as $meta_field ) {
            if ( isset( $_POST[$meta_field['id']] ) ) {
                switch ( $meta_field['type'] ) {
                case 'email':
                    $_POST[$meta_field['id']] = sanitize_email( $_POST[$meta_field['id']] );
                    break;
                case 'text':
                    $_POST[$meta_field['id']] = sanitize_text_field( $_POST[$meta_field['id']] );
                    break;
                }
                update_post_meta( $post_id, $meta_field['id'], $_POST[$meta_field['id']] );
            } else if ( $meta_field['type'] === 'checkbox' ) {
                update_post_meta( $post_id, $meta_field['id'], '0' );
            }
        }
    }

}
new ARO_Testimonial();