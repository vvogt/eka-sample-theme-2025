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
add_filter('use_block_editor_for_post', '__return_false', 10);

// Disable Classic Editor
function disable_content_editor() {
    remove_post_type_support('post', 'editor');
    remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'disable_content_editor');

function highlight_shortcode( $atts, $content = null ) {
	return '<span class="highlight">' . $content . '</span>';
}
add_shortcode( 'highlight', 'highlight_shortcode' );

?>

