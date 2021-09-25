<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ハンバーガー</title>
    <meta name="description" content="Webサイトの制作練習">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4740e0d0b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/yro2hwz.css">
    <script src="js/font.js"></script>

    <!-- favicon -->
    <link rel="icon" href="image/favicon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="css/hamburger.css" media="screen">
    <!-- JS -->
    <script src="js/jquery-3.6.0.min.js"></script>
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