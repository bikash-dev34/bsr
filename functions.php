<?php
// Including stylesheet and script files
function load_scripts(){
    wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',array('jquery'),'5.1.3','true');
    wp_enqueue_style('bootstrap-css','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');
    wp_enqueue_style('lcss',get_template_directory_uri().'/assets/css/main.css',array(),'1.0','all');
    wp_enqueue_script('ljs',get_template_directory_uri().'/assets/js/typewriter.js',array(),'1.0','all');
    wp_enqueue_script('bsr-pp',get_theme_file_uri('/assets/js/popper.min.js'),array('jquery'),wp_get_theme()->get('Version'),true);
    wp_enqueue_script('bsr-ap',get_theme_file_uri('/assets/js/appear.min.js'),array('jquery'),wp_get_theme()->get('Version'),true);
    wp_enqueue_script('bsr-bo',get_theme_file_uri('/assets/js/bootstrap.min.js'),array(),wp_get_theme('jquery')->get('Version'),true);
    wp_enqueue_script('bsr-jmp',get_theme_file_uri('/assets/js/jquery.magnific-popup.min.js'),array(),wp_get_theme('jquery')->get('Version'),true);
    
}
add_action('wp_enqueue_scripts','load_scripts');
//Registering the menu 
register_nav_menus(
    array(
        'my_main_menu_here'=>'First Menu',
        'my_main_menu_2'=>'Second Menu'
    )
    );
    // Custom Acf Gutenberg category blocks 
    require get_template_directory().'/inc/acf-blocks/bsr-theme-acf-block-category.php';
     // Custom Acf Gutenberg blocks 
    require get_template_directory().'/inc/acf-blocks/bsr-theme-acf-blocks.php';
    // Custom Acf render callback
    require get_template_directory().'/inc/acf-blocks/bsr-theme-render-callback.php';