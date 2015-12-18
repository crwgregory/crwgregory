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
    <div class="page-content row expanded">
        <div class="column row">
            <header class="main-head">
                <div id="header-container">
                    <div class="row expanded">
                        <div class="small-6 small-centered columns" id="main-logo-container">                            
                            <div id="main-logo"></div>                 
                        </div>                        
                    </div>
                    <div class="row expanded">
                            <div class="small-6 small-centered columns">
                                <h1 class="text-center header-text">CLEAN</h1>
                            </div>
                        </div>
                        <div class="row expanded">
                            <div class="small-6 small-centered columns">
                                <h2 class="text-center header-text">SIMPLE</h2>
                            </div>
                        </div>
                        <div class="row expanded">
                            <div class="small-6 small-centered columns">
                                <h3 class="text-center header-text">SITES</h3>
                            </div>
                        </div>
                </div>
            </header> <!-- //main-head -->