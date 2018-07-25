<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Cкрипты
 */
add_action( 'wp_enqueue_scripts', 'mvc_scripts' );
function mvc_scripts() {

    /**
     * Cкрипты в шапке
     */
    wp_enqueue_script('jquery-main' , get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js', array(), null, false);
    wp_enqueue_script('jquery-ui.min.js' , get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), null, false);
    wp_enqueue_script('sl' , get_template_directory_uri() . '/assets/js/wb.slideshow.min.js', array(), null, false);
    wp_enqueue_script('tr' , get_template_directory_uri() . '/assets/js/transition.min.js',  array(),null, false);
    wp_enqueue_script('modal' , get_template_directory_uri() . '/assets/js/modal.min.js', array(), null, false);
    wp_enqueue_script('ww' , get_template_directory_uri() . '/assets/js/wwb12.min.js', array(), null, false);
   /**
    * Cкрипты в подвале Значения true если нужно отобразить подключения в футере и false если в хедере.
    */
    wp_enqueue_script('main' , get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
    wp_enqueue_script('index' , get_template_directory_uri() . '/assets/js/index.js', array(), null, true);



}


/**
 *  Стили
 */
add_action( 'wp_enqueue_scripts', 'mvc_style' );
function mvc_style() {


    wp_enqueue_style('index', get_template_directory_uri() . '/assets/css/index.css', array() , null, 'all');




    /**
     * style.css
     */
    wp_enqueue_style( 'mvc-style', get_stylesheet_uri() );
}
