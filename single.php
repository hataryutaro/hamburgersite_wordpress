<?php get_header();?>
<?php get_sidebar();?>
<!-- main -->
    <main class="l-main">
        <!-- main header -->
        <div class="p-main-header">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/cheese_burger.png" alt="mainimage" class="p-main-header__image">
            <h1 class="p-main-header__title"><?php the_title(); ?></h1>
        </div>
        <!--見出し部分-->
        <article class="p-single">
            <?php
                    if( have_posts() ) :
                        while( have_posts() ) :
                            the_post(); ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class('p-single__wrapper'); ?>>
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile;
                    else :
                        ?><p>表示する記事がありません</p><?php
                    endif;
                ?>
        </article>
    </main>
    <!-- footer -->
<?php get_footer(); ?>