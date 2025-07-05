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
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                <?php bloginfo('name'); ?>
            </a>
            
            <nav class="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                ));
                ?>
            </nav>
            
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="hamburger"></span>
            </button>
        </div>
    </header>
    
    <main class="site-main">
