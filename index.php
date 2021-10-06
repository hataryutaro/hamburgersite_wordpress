<?php get_header();?>
<?php get_sidebar();?>
<!-- main -->
<main class="l-main">
    <!-- main header -->
    <div class="p-main-header">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/main.svg" alt="mainimage" class="p-main-header__image">
        <h2 class="p-main-header__title"><?php bloginfo( 'description' ); ?></h2>
    </div>
    <!-- branch menu -->
    <article class="p-branch">
        <ul class="p-branch__menu">
            <li class="p-branch__menu__item c-image__takeout">
                <a href="/index.php/category/takeout/">
                    <h2 class="p-branch__title c-minus">Take Out</h2>
                    <div>
                        <dl class="p-branch__box">
                            <dt class="p-branch__box__title">Take Out</dt>
                            <dd class="p-branch__box__text">当店のテイクアウトで利用できる商品を掲載しています</dd>
                        </dl>
                        <dl class="p-branch__box">
                            <dt class="p-branch__box__title">Take Out</dt>
                            <dd class="p-branch__box__text">当店のテイクアウトで利用できる商品を掲載しています</dd>
                        </dl>
                    </div>
                </a>
            </li>
            <li class="p-branch__menu__item c-image__eatin">
                <a href="index.php/category/eatin/">
                    <h2 class="p-branch__title c-minus">Eat In</h2>
                    <dl class="p-branch__box">
                        <dt class="p-branch__box__title">Take Out</dt>
                        <dd class="p-branch__box__text">当店のテイクアウトで利用できる商品を掲載しています</dd>
                    </dl>
                    <dl class="p-branch__box">
                        <dt class="p-branch__box__title">Take Out</dt>
                        <dd class="p-branch__box__text">当店のテイクアウトで利用できる商品を掲載しています</dd>
                    </dl>
                </a>
            </li>
        </ul>
    </article>
    <!-- map -->
    <section>
        <div class="p-map">
            <img class="p-map__image" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/map_pc.jpg" alt="map">
            <div class="p-map__contener">
                <div class="p-map__contener__bg">
                    <h2 class="p-map__contener__title c-minus-long">見出しが入ります
                    </h2>
                    <p class="p-map__contener__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>