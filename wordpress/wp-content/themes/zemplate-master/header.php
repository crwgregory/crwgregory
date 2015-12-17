    <?php
/**
 * The header for our theme.
 *
 *
 * @package WordPress
 * @subpackage Zemplate
 * @since Zemplate 2.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title>crwgregory</title>

    <?php //<meta name="viewport" content="width=device-width, initial-scale=1.0" /> ?>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />    

    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_head(); //mandatory ?>
    <?php //get_template_part('templates/parts/header', 'analytics'); ?>
</head>

<body <?php body_class('page-'.$post->post_name); ?>>
<div class="page-content">
    <div class="column row">
        <header class="main-head" id="">
            <div id="header-container">
                <img id="header-image" src="wp-content/uploads/2015/12/twinlakesshade.jpg"/>   
                <div class="overlay-container">
                    <div class="logo-container">
                        <img id="header-logo" src="http://crwgregory.com/wp-content/uploads/2015/12/hexegon2.png"/>
                    </div>
                    <div class="header-overlay" id="header-text-overlay">
                        <h1>CLEAN</h1>
                        <h2>SIMPLE</h2>
                        <h3>SITES</h3>
                    </div>    
                </div>
            </div>
        </header> <!-- //main-head -->