<?php
add_action('wp_enqueue_scripts', 'init_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');    /* Указываем что нашей теме нужен функционал */
                                                              /* произвольных меню*/
  function theme_register_nav_menu() {
    register_nav_menu('header__menu', 'menu in header');
}

function init_theme(){
    
    // * Styles init *
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('Cuda', get_template_directory_uri() . '/assets/css/style.css');

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
add_action('after_setup_theme', function(){    /* Указываем что нашей теме нужен функционал */
    add_theme_support('menus')                /* произвольных меню*/
});

?>