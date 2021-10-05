<?php get_header();?>
<?php get_sidebar();?>
<!-- main -->
    <main class="l-main">
        <!-- main header -->
        <div class="p-main-header">
            <img src="<?php echo get_template_directory_uri(); ?>/image/takeout.jpg" alt="mainimage" class="p-main-header__image">
            <div class="p-main-header__bg"></div>
            <h2 class="p-main-header__title u-fo_roboto">Seach:</h2>
            <p class="p-main-header__text"><?php echo $_GET['s']; ?></p>
        </div>
        <div class="p-main-caption">
            <h3 class="p-main-caption__title"><?php echo $_GET['s']; ?><br>の検索結果です。</h3>
        </div>
        <!--記事-->
        <article class="p-menus">
        <?php
            if( have_posts() ) : 
                while( have_posts() ) :
                    the_post();?>
                    <div class="p-menu">
                        <img class="p-menu__image" src="<?php the_post_thumbnail(); ?>
                        <dl class="p-menu__contener">
                            <dt class="p-menu__contener__title"><?php the_title(); ?></dt>
                            <h3 class="p-menu__contener__caption"><?php the_category(); ?></h3>
                            <dd class="p-menu__contener__text"><?php the_excerpt(); ?></dd>
                            <button class="p-menu__contener__button"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
                        </dl>
                    </div>
                <?php endwhile; 
            else : 
                ?><p class="p-notfound">表示する記事がありません</p><?php 
            endif; ?>
        </article>
        <!--pagenaition-->
        <?php wp_pagenavi(); ?>
    </main>
    <!-- footer -->

        <?php get_footer(); ?>