<?php
add_action('wp_enqueue_scripts', 'init_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');    /* Указываем что нашей теме нужен функционал */
                                                              /* произвольных меню*/
add_action('after_setup_theme', 'theme_add_feature'); 
add_action( 'widgets_init', 'true_register_wp_sidebars' );
  
add_filter( 'document_title_separator', 'filter_title_change_separator' );
function filter_title_change_separator( $sep ){
	// filter...
    $sep = ' || ';
	return $sep;
}

function true_register_wp_sidebars() {

/* В боковой колонке - первый сайдбар */
register_sidebar(
    array(
        'id' => 'true_side', // уникальный id
        'name' => 'Боковая колонка', // название сайдбара
        'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
        'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
        'after_title' => '</h3>'
    )
);

/* В подвале - второй сайдбар */
register_sidebar(
    array(
        'id' => 'true_foot',
        'name' => 'Футер',
        'description' => 'Перетащите сюда виджеты, чтобы добавить их в футер.',
        'before_widget' => '<div id="%1$s" class="foot widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    )
);
}

function theme_add_feature() {
    add_theme_support( 'title-tag' );
    add_image_size( 'my-thumbnail', 260, 260, true );
    add_theme_support('post-thumbnails');
}

function theme_register_nav_menu() {
    register_nav_menu('header__menu', 'menu in header');
    register_nav_menu('portfolio', 'menu in portfolio');
    /*нужно ли делать wp menu в footer(e)?*/
}

function init_theme(){
    
    // * Styles init *
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('Cuda', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('CudaSidebar', get_template_directory_uri() . '/assets/css/sidebar.css');

    // * Scripts init *
    
    // jquery reinit
    wp_deregister_script('jquery');     /*Удаляет файл из очереди на вывод*/
    wp_register_script('jquery',
     '//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, null);  /*Регистрирует файл*/
     wp_enqueue_script('jquery');   /*Регистрирует и подключает файл*/

    wp_enqueue_script('slick',
     '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null);
    
    wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'slick'), null, true); // Последний аргумент помещает этот скрипт в footer
}

?>