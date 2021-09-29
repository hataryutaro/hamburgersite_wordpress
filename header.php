<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Webサイトの制作練習">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/image/favicon.png">
    <!-- font -->
    <!-- CSS -->
    <!-- JS -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- header -->
    <header class="l-header p-header">
        <h1 class="p-header__title"><a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name');?></a></h1>
        <?php get_search_form(); ?>
        <!-- sidebar open　-->
        <button class="p-hamburger js-hamburger">
            <span>Menu</span>
        </button>
    </header>