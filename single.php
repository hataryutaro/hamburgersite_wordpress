<?php get_header();?>
<?php get_sidebar();?>
<!-- main -->
    <main class="l-main">
        <!-- main header -->
        <div class="p-main-header">
            <img src="<?php echo get_template_directory_uri(); ?>/image/cheese_burger.png" alt="mainimage" class="p-main-header__image">
            <h1 class="p-main-header__title"><?php the_title(); ?></h1>
        </div>
        <!--見出し部分-->
        <article class="p-single">
        <?php the_content(); ?>
        </article>
    </main>
    <!-- footer -->
<?php get_footer(); ?>