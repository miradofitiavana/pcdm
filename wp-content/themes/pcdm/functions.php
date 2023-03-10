<?php
$roots_includes = array(
    '/functions/setup.php',
    '/functions/breadcrumbs.php',
);

foreach ($roots_includes as $file) {
    if ( ! $filepath = locate_template($file)) {
        trigger_error("Error locating `$file` for inclusion!", E_USER_ERROR);
    }
    require_once $filepath;
}
unset($file, $filepath);

// Ajout de la prise en charge des menus
function pcdm_register_menu()
{
    register_nav_menu('primary', 'Header Menu');
    register_nav_menu('footer', 'Footer Menu');
    register_nav_menu('sub-footer', 'SubFooter Menu');
}

add_action('init', 'pcdm_register_menu');

// Limiter extrait
function pcdm_excerpt_length()
{
    return 20;
}

add_filter('excerpt_length', 'pcdm_excerpt_length');

function reusable_blocks_menu()
{
    add_menu_page(
        'Blocs rĂ©utilisables',
        'Blocs rĂ©utilisables',
        'edit_posts',
        'edit.php?post_type=wp_block',
        '',
        'dashicons-editor-table', 10);
}

add_action('admin_menu', 'reusable_blocks_menu');
