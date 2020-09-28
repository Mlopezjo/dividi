<?php


  function custom_post_type() {

    /**
     * Post Type: Équipes.
     */

    $labels = [
      "name" => __( "Équipes", "custom-post-type-ui" ),
      "singular_name" => __( "Équipe", "custom-post-type-ui" ),
    ];

    $args = [
      "label" => __( "Équipes", "custom-post-type-ui" ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "has_archive" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "rewrite" => [ "slug" => "equipe", "with_front" => true ],
      "query_var" => true,
      "supports" => [ "title", "editor", "thumbnail" ],
      "taxonomies" => [ "post_tag" ],
    ];

    register_post_type( "equipe", $args );

    /**
     * Fin Post Type: Équipes.
     */


  }

?>
