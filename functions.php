<?php

  //Appel des fonctions
  require_once('function-parts/style.php');
  //require_once('function-parts/repeteur.php');
  require_once('function-parts/navigation.php');
  require_once('function-parts/global-custom.php');
  require_once('function-parts/product-list.php');

  //Appel des custom post type
  require_once('function-parts/custom_post_type.php');

//TEST
add_filter( 'woocommerce_form_field', 'my_woocommerce_form_field' );
function my_woocommerce_form_field( $field ) {
    return preg_replace(
        '#<p class="form-row (.*?)"(.*?)>(.*?)</p>#',
        '<div class="form-group w-50 d-flex flex-column justify-content-center col-12 col-md-6 $1 test"$2>$3</div>',
        $field
    );
}
//FIN TEST

  //execution des functions
    //Style
add_action('wp_enqueue_scripts', 'ajout_scripts');

add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('post-thumbnails');

add_post_type_support( 'page', 'excerpt' );

add_action('init', 'custom_post_type');

add_action('admin_menu', 'add_gcf_interface');
//add_action('acf/init', 'my_acf_op_init');
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);
/**/
