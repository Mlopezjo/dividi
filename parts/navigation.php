<?php

  $menuLocations = get_nav_menu_locations();
  $menuID = $menuLocations['mainMenu'];
  $primaryNav = wp_get_nav_menu_items($menuID);
  foreach ( $primaryNav as $navItem ) {
    echo '<li class="nav-item"><a href="'.$navItem->url.'" class="nav-link" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
  };

?>
