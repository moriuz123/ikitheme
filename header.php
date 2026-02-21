<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="site-header">
        <div class="container">

            <!-- Logo / Site Title -->
            <div class="site-branding">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                    </a>
                    <p class="site-description"><?php bloginfo('description'); ?></p>
                <?php endif; ?>
            </div>

            <!-- Menu Utama -->
            <nav class="site-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-utama',
                    'menu_class'     => 'nav-menu',
                    'fallback_cb'    => false,
                ));
                ?>
            </nav>

        </div>
    </header>