<?php

/**
 * Template helper to include inline icons
 */
function include_inline_icon($icon)
{
    $icon_path = get_template_directory() . '/assets/' . esc_html($icon) . '.svg';
    include($icon_path);
}

function get_inline_svg($icon)
{
    ob_start();
    include_inline_icon($icon);
    return ob_get_clean();
}

?>