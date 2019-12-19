<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Pizzeria</title>
    <?php wp_head(); ?>
</head>
<body>

<header class="site-header">
    <div class="logo">
        <a href="<?php echo esc_url( home_url('/') ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logo-image" />
        </a>
    </div><!-- Logo -->
    <div class="header-information">
        <div class="socials">

        </div><!-- Socials -->
        <div class="address">
            <p>8179 Bay Avenue Mountain View, CA 94043</p>
            <p>Phone Number: +1-92-456-7890</p>
        </div>
    </div><!-- Header Information -->
</header>
<div class="main-menu">
    <div class="navigation">
        <?php 
            $args = array(
                'theme_location' => 'header-menu',
                'container'      => 'nav',
                'container_class' => 'site-nav'
            );
            wp_nav_menu($args);
        ?>
        <nav class="site-nav">

        </nav>
    </div>
</div>