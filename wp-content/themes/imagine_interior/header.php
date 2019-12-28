<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Imagine_Interior
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/95f069c0f7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'imagine_interior' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-wrapper">
	                    <?php $img_path = get_template_directory_uri('/'); ?>
                        <a class="ii-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" >
		                    <?php echo file_get_contents($img_path."/images/logo.svg"); ?>
                        </a>
                        <div class="header-wrapper-right">
                            <nav id="site-navigation" class="main-navigation">
		                        <?php
		                        wp_nav_menu( array(
			                        'theme_location' => 'menu-1',
			                        'menu_id'        => 'primary-menu',
		                        ) );
		                        ?>
                            </nav><!-- #site-navigation -->
                            <a href="tel:+61379916991" class="phone">+61 (0)3 7991 6991</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
