<?php

function ajout_scripts() {

  //wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome.min.css');
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/styles.min.css');
  wp_enqueue_style('font-1', 'https://fonts.googleapis.com/css?family=Open+Sans');
  wp_enqueue_style('font-2', 'https://fonts.googleapis.com/css?family=Roboto');

  wp_enqueue_script('messcripts', get_template_directory_uri() . '/assets/js/jquery.min.js');
  wp_enqueue_script('messcripts2', get_template_directory_uri() . '/assets/js/script.js');
  wp_enqueue_style('crdStyles', get_stylesheet_uri());


}

?>
