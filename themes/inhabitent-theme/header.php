<?php
/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html('Skip to content'); ?></a>

<?php if (is_page_template('about.php') || is_front_page()): ?>

    <div class="header-container-white">

        <header id="masthead" class="site-header-white header-search" role="banner">

            <div class="site-branding">

                <h1 class="site-title screen-reader-text">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                </h1>

                <div class="site-icon-white">
                    <a href="<?php echo home_url() ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-tent-white.svg"
                             alt="Inhabitent Header White Logo Icon">
                    </a>
                </div>

                <p class="site-description"><?php bloginfo('description'); ?></p>

            </div><!-- .site-branding -->


            <nav id="site-navigation" class="main-navigation-white" role="navigation">

                <button class="menu-toggle" aria-controls="primary-menu"
                        aria-expanded="false"><?php esc_html('Primary Menu'); ?></button>

                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>

                <?php get_search_form(); ?>

            </nav><!-- #site-navigation -->

    </div>

    </header><!-- #masthead -->

<?php else: ?>

    <div class="header-container">

<header id="masthead" class="site-header header-search" role="banner">

    <div class="site-branding">

        <h1 class="site-title screen-reader-text">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
        </h1>

        <div class="site-icon">
            <a href="<?php echo home_url() ?>">
                <img src="<?php echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-tent.svg"
                     alt="Inhabitent Header Logo Icon">
            </a>
        </div>

        <p class="site-description"><?php bloginfo('description'); ?></p>

    </div><!-- .site-branding -->


    <nav id="site-navigation" class="main-navigation" role="navigation">

        <button class="menu-toggle" aria-controls="primary-menu"
                aria-expanded="false"><?php esc_html('Primary Menu'); ?></button>

        <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>

        <?php get_search_form(); ?>

    </nav><!-- #site-navigation -->

</div>

</header><!-- #masthead -->

<?php endif; ?>

    <div id="content" class="site-content">