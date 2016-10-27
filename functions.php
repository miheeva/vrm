<?php 
//Стили
if (!is_admin()) {
    function site_styles()
    {
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', ['bootstrap']);
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style('custom', get_template_directory_uri() . '/style.css', ['style']);
        
    }
    add_action('wp_enqueue_scripts', 'site_styles');
}

//Меню
register_nav_menus ([
    'top_menu' => 'Главное меню',
    'top_menu_second' => 'Главное меню на второстепенных страницах'    
]);

//миниатюры
add_theme_support( 'post-thumbnails' );
include('functions/settings.php');
//есл что - удалить. тест виджетов