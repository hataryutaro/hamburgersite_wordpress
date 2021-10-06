<?php 
    //theme support
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) ); //必ず記述する
    register_nav_menus();
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');

    //title output
    function hamburger_title(){
        if (is_front_page() && is_home()){
            $title = get_bloginfo('name','display');
        }else if(is_singular()){
            $title = single_post_title('',false);
        }
        return $title;
    }
    add_filter('pre_get_document_title','hamburger_title');

    //headに記載されていたもの
    function hamburger_script(){
        //font
        wp_enqueue_style('roboto','//use.typekit.net/yro2hwz.css',array() );
        wp_enqueue_script('font-awesome','//kit.fontawesome.com/4740e0d0b1.js',array() );
        wp_enqueue_script('mplus',get_template_directory_uri(),'/js/font.js',array() );
        //style sheet
        wp_enqueue_style( 'style',get_stylesheet_uri().'/style.css', array(), '1.0.0' );
        wp_enqueue_style('hamburger',get_template_directory_uri().'/css/hamburger.css',array(),'1.0.0');
        //js
        wp_enqueue_script('hamburger_button',get_theme_file_uri( '/js/hamburger.js' ),array('jquery'),'1.0.0' ,false);
    }
    add_action('wp_enqueue_scripts', 'hamburger_script' );
    
    //ウィジェットを作成
    function hamburger_widgets_init() {
        register_sidebar (
            array(
                'name'          => 'バーガーウィジェット',
                'id'            => 'burger_widget',
                'description'   => 'サイドバー用ウィジェットです',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '',
                'after_title'   => "</h2>\n",
            )
        );
    }
    add_action( 'widgets_init', 'hamburger_widgets_init' );
    
    function footer_widgets_init() {
        register_sidebar (
            array(
                'name'          => 'フッターウィジェット',
                'id'            => 'footer_widget',
                'description'   => 'フッター用ウィジェットです',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '',
                'after_title'   => "</h2>\n",
            )
        );
    }
    add_action( 'widgets_init', 'footer_widgets_init' );
    
    //editor styleを適応させる
    function add_block_editor_styles() {
        wp_enqueue_style( 'block-style', get_stylesheet_directory_uri() . '/css/editor-style.css' );
    }
    add_action( 'enqueue_block_editor_assets', 'add_block_editor_styles' );
    