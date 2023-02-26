<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header-area">
    <div class="navbar-guard"></div>
    <div class="navbar-area">
        <div class="container">
            <nav class="site-navbar">
                <a class="header-logo" href="/">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo           = wp_get_attachment_image_src($custom_logo_id);
                    if (has_custom_logo()) {
                        ?>
                        <img src="<?= esc_url($logo[0]) ?>"
                             alt="<?= get_bloginfo('name') ?>">
                    <?php }
                    ?>
                    <span>
                        <?= get_bloginfo('name') ?>
                        <small>Non-profit Organization</small>
                </span>
                </a>

                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_class'     => 'header-menu',
                            'container'      => '',
                        )
                    );
                }
                ?>

                <button class="nav-toggler">
                    <span></span>
                </button>

                <div class="header-cta lg:ml-4">
                    <a href="/faire-un-don-petits-coeurs-du-monde"
                       title="Faire un don pour l'Association Petits Coeurs du Monde" class="btn btn--uppercase">
                        Faire un Don
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>

<main>