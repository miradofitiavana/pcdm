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
    register_nav_menu('primary', __('Header Menu', 'pcdm'));
}

add_action('init', 'pcdm_register_menu');

// Limiter extrait
function pcdm_excerpt_length()
{
    return 20;
}

add_filter('excerpt_length', 'pcdm_excerpt_length');