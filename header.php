<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Webサイトの制作練習">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- favicon -->
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/image/favicon.png">
    <!-- font -->
    <!-- CSS -->
    <!-- JS -->
    <?php if( is_user_logged_in() ) : ?>
    <style type="text/css">
    .l-sidebar {
    margin-top: 32px;
    }
    </style>
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- header -->
    <header class="l-header p-header">
    <?php require_once('exists.php'); ?>
        <h1 class="p-header__title"><a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name');?></a></h1>
        <?php get_search_form(); ?>
        <!-- sidebar open　-->
        <button class="p-hamburger js-hamburger">
            <span>Menu</span>
        </button>
    </header>