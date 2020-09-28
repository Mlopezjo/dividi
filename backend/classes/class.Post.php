<?php

  require_once 'class.User.php';

  class Post
  {

      private $ID = 0;
      private $post_author = 0;
      private $post_date = null;
      private $post_date_gmt = null;
      private $post_content = null;
      private $post_title = null;
      private $post_excerpt = null;
      private $post_status = null;
      private $comment_status = null;
      private $ping_status = null;
      private $post_password = null;
      private $post_name = null;
      private $to_ping = null;
      private $pinged = null;
      private $post_modified = null;
      private $post_modified_gmt = null;
      private $post_content_filtered = null;
      private $post_parent = 0;
      private $guid = null;
      private $menu_order = 0;
      private $post_type = null;
      private $post_mime_type = null;
      private $comment_count = null;

      private $leUser = null;
  }

?>
