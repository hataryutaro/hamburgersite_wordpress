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
    <link rel="stylesheet" href="css/style.css" media="screen">
    <!-- JS -->
    <script src="js/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- header -->
    <header class="l-header p-header">
        <h1 class="p-header__title"><a href="front-page.html">Hamburger</a></h1>
        <form action="#" method="post" class="p-search-form">
            <label for="search"></label>
            <input type="search" name="search" class="p-search-form__box">
            <input type="submit" name="submit" value="検索" class="p-search-form__btn">
        </form>
        <!-- sidebar open　-->
        <button class="p-hamburger js-hamburger">
            <span>Menu</span>
        </button>
    </header>
    <!-- sidebar -->
    <div class="p-gmenu__bg"></div>
    <aside class="l-sidebar p-gmenu">
        <ul class="p-gmenu__contener">
            <li class="p-gmenu__box">
                <p class="p-gmenu__box__title">バーガー</p>
                <ul class="p-gmenu__box__items">
                    <li><a href="#">ハンバーガー</a></li>
                    <li><a href="archive.html">チーズバーガー</a></li>
                    <li><a href="#">テリヤキバーガー</a></li>
                    <li><a href="#">アボガドバーガー</a></li>
                    <li><a href="#">フィッシュバーガー</a></li>
                    <li><a href="#">ベーコンバーガー</a></li>
                    <li><a href="#">チキンバーガー</a></li>
                </ul>
            </li>
            <li class="p-gmenu__box">
                <p class="p-gmenu__box__title">サイド</p>
                <ul class="p-gmenu__box__items">
                    <li><a href="#">ポテト</a></li>
                    <li><a href="#">サラダ</a></li>
                    <li><a href="#">ナゲット</a></li>
                    <li><a href="#">コーン</a></li>
                </ul>
            </li>
            <li class="p-gmenu__box">
                <p class="p-gmenu__box__title">ドリンク</p>
                <ul class="p-gmenu__box__items">
                    <li><a href="#">コーラ</a></li>
                    <li><a href="#">ファンタ</a></li>
                    <li><a href="#">オレンジ</a></li>
                    <li><a href="#">アップル</a></li>
                    <li><a href="#">紅茶(Ice/Hot)</a></li>
                    <li><a href="#">コーヒー(Ice/Hot)</a></li>
                </ul>
            </li>
        </ul>
    </aside>

    <!-- main -->
    <main class="l-main">
        <!-- main header -->
        <div class="p-main-header">
            <img src="image/cheese_burger.png" alt="mainimage" class="p-main-header__image">
            <h1 class="p-main-header__title">h1 チーズバーガー</h1>
        </div>
        <!--見出し部分-->
        <article class="p-page">
            <h2>見出し h2</h2>
            <p>Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
            <h3>見出し h3</h3>
            <h4>見出し h4</h4>
            <h5>見出し h5</h5>
            <h6>見出し h6</h6>
            <div class="p-page__qote-box">
                <blockquote>Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</blockquote>
                <br>
                <cite>出典元： ○○○○○○○○○○○○</cite>
            </div>
            <img src="image/single2.jpg" alt="singel_imege">
            <div class="p-page__flex-box">
                <img src="image/single2.jpg" alt="singel_imege">
                <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                    テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
            </div>
            <div class="p-page__flex-box">
                <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                    テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                <img src="image/single2.jpg" alt="singel_imege">
            </div>
            <div class="p-page__iamge-box">
                <img src="image/single2.jpg" alt="singel_imege">
            </div>
            <div class="p-page__images">
                <img src="image/single2.jpg" alt="singel_imege">
                <img src="image/single2.jpg" alt="singel_imege">
                <img src="image/single2.jpg" alt="singel_imege">
                <img src="image/single2.jpg" alt="singel_imege">
                <img src="image/single2.jpg" alt="singel_imege">
                <img src="image/single2.jpg" alt="singel_imege">
                <img src="image/single2.jpg" alt="singel_imege">
                <img src="image/single2.jpg" alt="singel_imege">
                <img src="image/single2.jpg" alt="singel_imege">
            </div>
            <ol>
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ol>
            <div>
                <ol>
                    <li>リスト2リスト2リスト2</li>
                    <li>リスト2リスト2リスト2</li>
                </ol>
            </div>
            <ol>
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ol>
            <ul>
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ul>
            <div>
                <ul>
                    <li>リスト2リスト2リスト2</li>
                    <li>リスト2リスト2リスト2</li>
                </ul>
            </div>
            <ul>
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ul>
            <div class="p-page__code">
                <pre>
                    <code>
                    &lt;html&gt;
                        &lt;head&gt;
                        &lt;/head&gt;
                        &lt;body&gt;
                        &lt;/body&gt;
                    &lt;/html&gt;</code>
                </pre>
            </div>
            <table>
                <tr>
                    <th>テーブル</th>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <th>テーブル</th>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <th>テーブル</th>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <th>テーブル</th>
                    <td>テーブル</td>
                </tr>
            </table>
            <button>ボタン</button>
            <div class="p-page__strong">
                <strong>boldboldboldboldboldboldbold</strong>
            </div>
        </article>
    </main>
    <!-- footer -->
    <footer class="l-footer">
        <div class="p-footer__contener">
            <img class="p-footer__contener__image" src="image/pc_footer.png" alt="">
            <p class="p-footer__contener__text">ショップ情報 | ヒストリー</p>
            <p class="p-footer__contener__copylight">copyright: RaiseTech</p>
        </div>
    </footer>
    <script src="/js/hamburger.js"></script>

</body>

</html>