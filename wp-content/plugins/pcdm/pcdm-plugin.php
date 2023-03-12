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
//        var_dump($path);
        if (str_ends_with($path, 'cta-act-with-us')) {
            register_block_type($path, array(
                'render_callback' => 'author_box_author_plugin_render_author_content'
            ));
        } else {
            register_block_type($path);
        }
    }
}

function getDirContents($dir, &$results = array())
{
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        if ( ! is_dir($path)) {
            $results[] = $path;
        } elseif ($value != "." && $value != "..") {
            $results[] = $path;
        }
    }

    return $results;
}

add_action('init', 'pcdm_blocks_init');

/**
 * CTA Act With Us
 */

function author_box_author_plugin_render_author_content($attr)
{
    $args     = array(
        'numberposts' => $attr['numberOfItems']
    );
    $my_posts = get_posts($args);

    if ( ! empty($my_posts)) {
        $output   = '<div '.get_block_wrapper_attributes().'>';
        $num_cols = $attr['columns'] > 1 ? strval($attr['columns']) : '1';

        $output .= '<ul class="wp-block-pcdm-cta-act-with-us__post-items columns-'.$num_cols.' grid items-center md:items-start grid-cols-1 sm:grid-cols-3 md:grid-cols-5 gap-4">';
        $output .= ' <li class="md:col-span-5 !text-center font-bold uppercase">Agissez avec nous</li>';
        foreach ($my_posts as $p) {
            $title            = $p->post_title ? $p->post_title : 'Default title';
            $icone_de_la_page = get_post_meta($p->ID, 'icone_de_la_page', true) ? get_post_meta($p->ID,
                'icone_de_la_page', true) : '#';
            $image            = [''];
            if ($icone_de_la_page) {
                $image = wp_get_attachment_image_src($icone_de_la_page, 'thumbnail');
            }
            $url = esc_url(get_permalink($p->ID));

            $output .= '<li>';
            $output .= '<a class="!text-xs wp-block-pcdm-cta-act-with-us__post-title !text-center" href="'.$url.'" alt="'.$title.'">';
            $output .= '<img class="h-20" src="'.(gettype($image) === 'array' ? $image[0] : '').'" alt="'.$title.'"/>';
            $output .= '<span class="btn btn--border">'.$title.'</span>';
            $output .= '</a>';
            $output .= '</li>';
        }
        $output .= '</ul>';
        $output .= '</div>';
    }

    return $output ?? '<strong>Sorry. No posts matching your criteria!</strong>';
}
