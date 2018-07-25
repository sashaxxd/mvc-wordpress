<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

register_nav_menus(array(
    'one' => 'Верхнее',
    'to' => 'Дополнительное',
));


function mvc_primary_menu(){
    wp_nav_menu( array(
        'theme_location' => 'one',
        'menu_id'        => 'ResponsiveMenu1',
        'menu_class' => 'ResponsiveMenu1',
        'container'       => false,


    ) );
}