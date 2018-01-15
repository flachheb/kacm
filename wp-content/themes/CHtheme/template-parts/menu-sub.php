<?php

if (isset($_GET['cat'])) $cat = $_GET['cat'];
elseif (isset(get_category(get_query_var( 'cat' ))->name)) $cat = get_category(get_query_var( 'cat' ))->name;
else $cat = urldecode(get_query_var( 'name' ));



if (get_the_title()=="النادي" || $cat=="النادي")
  $menu = "club";
else
  $menu = $cat;

  echo "<ul class='sub_menu'>";
  foreach (wp_get_nav_menu_items( $menu,array() ) as $item) {
    echo "<li>";
    echo "<a href='".$item->url."?cat=".$cat."'>".$item->title."</a>";
    echo "</li>";
  }
  echo "</ul>";
?>
