<?php
/**
 * Created by PhpStorm.
 * User: fayazk
 * Date: 4/9/16
 * Time: 3:36 PM
 */

function smartshop_enqueue_scripts(){
    /* ------------------------------
     * Header Styles and Scripts
     * ------------------------------
     */

    wp_enqueue_style('bootstrap',SMARTSHOP_URI.'assets/css/bootstrap.css');
    wp_enqueue_style('smartshop-style',SMARTSHOP_URI.'assets/css/style.css');
    wp_enqueue_style('Montserrat-font','//fonts.googleapis.com/css?family=Montserrat:400,700');
    wp_enqueue_style('Lato-font','//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic');

    /* ------------------------------
     * Footer Styles and Scripts
     * ------------------------------
     */
    wp_enqueue_script('bootstrap',SMARTSHOP_URI.'assets/js/bootstrap-3.1.1.min.js',array('jquery'),'3.1.1',true);
    wp_enqueue_script('simpleCart',SMARTSHOP_URI.'assets/js/simpleCart.min.js',array('jquery'),'',true);
    wp_enqueue_script('jquery-easing',SMARTSHOP_URI.'assets/js/jquery.easing.min.js',array('jquery'),'',true);
}
add_action( 'wp_enqueue_scripts', 'smartshop_enqueue_scripts' );
