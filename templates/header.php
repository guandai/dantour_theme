<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?> <!-- Hook for enqueueing styles and scripts -->
</head>

<body <?php body_class(); ?>>
    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <?php
            if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
            <?php else : ?>
                <p class="site-title"><?php bloginfo( 'name' ); ?></p>
            <?php endif;

            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <p class="site-description"><?php echo $description; ?></p>
            <?php endif; ?>
        </div>

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1', // Adjust this to match your registered menu
                'menu_id'        => 'primary-menu',
            ) );
            ?>
        </nav>
    </header>

    <div id="content" class="site-content">
