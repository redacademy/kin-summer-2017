<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function kin_cpt_about() {
    
        $labels = array(
            'name'                  => 'Trainers',
            'singular_name'         => 'Trainer',
            'menu_name'             => 'Trainers',
            'name_admin_bar'        => 'Trainers',
            'archives'              => 'Trainer Archives',
            'attributes'            => 'Trainer Attributes',
            'parent_item_colon'     => 'Parent Trainer:',
            'all_items'             => 'All Trainers',
            'add_new_item'          => 'Add New Trainer',
            'add_new'               => 'Add New',
            'new_item'              => 'New Trainer',
            'edit_item'             => 'Edit Trainer',
            'update_item'           => 'Update Trainer',
            'view_item'             => 'View Trainer',
            'view_items'            => 'View Trainers',
            'search_items'          => 'Search Trainer',
            'not_found'             => 'Not found',
            'not_found_in_trash'    => 'Not found in Trash',
            'featured_image'        => 'Featured Image',
            'set_featured_image'    => 'Set featured image',
            'remove_featured_image' => 'Remove featured image',
            'use_featured_image'    => 'Use as featured image',
            'insert_into_item'      => 'Insert into item',
            'uploaded_to_this_item' => 'Uploaded to this trainer',
            'items_list'            => 'Trainers list',
            'items_list_navigation' => 'Trainers list navigation',
            'filter_items_list'     => 'Filter trainers list',
        );
        $args = array(
            'label'                 => 'Trainer',
            'description'           => 'Add a trainer to the about page.',
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-groups',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,		
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
            'show_in_rest'          => true,
        );
        register_post_type( 'trainer', $args );
    
    }
    add_action( 'init', 'kin_cpt_about', 0 );