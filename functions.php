<?php 

include 'includes/template-functions.php';

/**
 * Enqueues scripts and styles.
 */
add_action(
    'wp_enqueue_scripts',
    function () {
        wp_enqueue_style('main-style', get_theme_file_uri('style.css'), array(), filemtime(get_theme_file_path('style.css')), 'screen');
        wp_enqueue_style('reset-style', get_theme_file_uri('reset.css'), array(), filemtime(get_theme_file_path('reset.css')), 'screen');
        wp_enqueue_script('slider-script', get_theme_file_uri('slider.js'), array(), filemtime(get_theme_file_path('slider.js')), true);
        wp_enqueue_script('main', get_theme_file_uri('main.js'), array(), filemtime(get_theme_file_path('main.js')), true);
        wp_enqueue_script('fslightbox', get_theme_file_uri('/fslightbox/fslightbox.js'), array(), filemtime(get_theme_file_path('/fslightbox/fslightbox.js')), true);
    }
);

/**
 * ACF - Add options page
 */
if (function_exists('acf_add_options_page')) {
    $parent = acf_add_options_page(
        array(
            'page_title'  => __('General Options', 'eka-sample'),
            'menu_title'  => __('General Options', 'eka-sample'),
        )
    );
}


// Disable Gutenberg (Block) Editor
/* add_filter('use_block_editor_for_post', '__return_false', 10); */

// Disable Classic Editor
function disable_content_editor() {
    remove_post_type_support('post', 'editor');
    remove_post_type_support('page', 'editor');
}
/* add_action('admin_init', 'disable_content_editor'); */

function highlight_shortcode( $atts, $content = null ) {
	return '<span class="highlight">' . $content . '</span>';
}
add_shortcode( 'highlight', 'highlight_shortcode' );

add_theme_support( 'title-tag' );


/**
 * Disable the email address suggestion.
 *
 * @link  https://wpforms.com/developers/how-to-disable-the-email-suggestion-on-the-email-form-field/
 */

 add_filter( 'wpforms_mailcheck_enabled', '__return_false' );

 // Disable Gutenberg Block Editor
add_filter('use_block_editor_for_post', '__return_false', 10);

// Disable Classic Editor
function disable_classic_editor() {
    remove_post_type_support('post', 'editor');
    remove_post_type_support('page', 'editor');
}
add_action('init', 'disable_classic_editor');


// Register Custom Post Type: People
function create_people_post_type() {
    $labels = array(
        'name'                  => _x( 'People', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Person', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'People', 'text_domain' ),
        'name_admin_bar'        => __( 'Person', 'text_domain' ),
        'archives'              => __( 'Person Archives', 'text_domain' ),
        'attributes'            => __( 'Person Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Person:', 'text_domain' ),
        'all_items'             => __( 'All People', 'text_domain' ),
        'add_new_item'          => __( 'Add New Person', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Person', 'text_domain' ),
        'edit_item'             => __( 'Edit Person', 'text_domain' ),
        'update_item'           => __( 'Update Person', 'text_domain' ),
        'view_item'             => __( 'View Person', 'text_domain' ),
        'view_items'            => __( 'View People', 'text_domain' ),
        'search_items'          => __( 'Search Person', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Profile Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set profile image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove profile image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as profile image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into person', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this person', 'text_domain' ),
        'items_list'            => __( 'People list', 'text_domain' ),
        'items_list_navigation' => __( 'People list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter people list', 'text_domain' ),
    );
    
    $args = array(
        'label'                 => __( 'Person', 'text_domain' ),
        'description'           => __( 'Person Description', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'excerpt' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-users',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    
    register_post_type( 'people', $args );
}

// Hook into the 'init' action
add_action( 'init', 'create_people_post_type', 0 );


/* Add ACF options pages for all languages */
if (function_exists('acf_add_options_page')) {
    $parent = acf_add_options_page(
        array(
            'page_title' => 'Navigatsioon',
            'menu_title' => 'Navigatsioon',
            'redirect'   => 'Navigatsioon',
        )
    );
    $languages = pll_languages_list();
    foreach ($languages as $lang) {
        acf_add_options_sub_page(
            array(
                'page_title' => 'Navigatsioon (' . strtoupper($lang) . ')',
                'menu_title' => __('Navigatsioon (' . strtoupper($lang) . ')', ''),
                'menu_slug'  => "navigation-${lang}",
                'post_id'    => $lang,
                'parent'     => $parent['menu_slug'],
            )
        );
    }
}

?>

