<?php
/**
 * Plugin Name:       Blocs PCDM
 * Description:       Un groupe de blocs pour le site PCDM
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Mirado
 * Text Domain:       pcdm
 *
 * @package           pcdm
 */

/*
 * Fonction pour créer des catégories de blocs personnalisées
 */
function plugin_block_categories($categories)
{
    return array_merge(
        $categories, [
            [
                'slug'  => 'pcdm',
                'title' => __('PCDM', 'pcdm'),
            ]
        ]
    );
}

add_action('block_categories_all', 'plugin_block_categories', 10, 2);

function pcdm_blocks_init()
{
    $paths = getDirContents(__DIR__.'/build');
    foreach ($paths as $path) {
        register_block_type($path);
    }
}

function getDirContents($dir, &$results = array())
{
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $results[] = $path;
        } else if ($value != "." && $value != "..") {
            $results[] = $path;
        }
    }

    return $results;
}

add_action('init', 'pcdm_blocks_init');