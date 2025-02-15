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
        /* wp_enqueue_script('main-script', get_theme_file_uri('dist/main.js'), array(), filemtime(get_theme_file_path('dist/main.js')), true); */
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

?>

