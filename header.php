<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Domine|Montserrat:400,700" rel="stylesheet">


    <?php wp_head(); //HOOK. required for the admin bar and plugins to work ?>
</head>
<body <?php body_class(); ?>>
<header role="banner" id="header" style="background-image:url(<?php header_image(); ?>); background-size: cover;">
    <div class="header-bar"></div>
</header>
<div class="container clearfix">
<?php
//display a registered nav menu
wp_nav_menu( array(
    'theme_location' => 'main_menu',
    'container' => 'nav',
    'fallback_cb' => false,
)); ?>