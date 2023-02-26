<?php

// Ajout des styles et des scripts
function pcdm_scripts()
{
    wp_enqueue_style('pcdm-style', get_stylesheet_uri());
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/d979694951.js');

    wp_enqueue_script('pcdm-script', get_template_directory_uri().'/assets/js/pcdm.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'pcdm_scripts');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

// Ajout de la prise en charge des images à la une
add_theme_support('post-thumbnails');

// Ajouter la personnalisation du logo
function pcdm_custom_logo_setup()
{
    $defaults = array(
        'height'               => 70,
        'width'                => 70,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => false,
    );

    add_theme_support('custom-logo', $defaults);

//    add_editor_style(get_stylesheet_directory() .'/editor-style.css');
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_theme_support('dark-editor-style');
    add_theme_support('responsive-embeds');
    add_editor_style('style.css');
}

add_action('after_setup_theme', 'pcdm_custom_logo_setup');

/**
 * Désactiver les commentaires
 */

function disable_comments($open, $post_id)
{
    $open = false;

    return $open;
}

add_filter('comments_open', 'disable_comments', 10, 2);
