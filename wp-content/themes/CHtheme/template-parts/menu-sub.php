<?php

if (isset($_GET['cat'])) $cat = $_GET['cat'];
elseif (isset(get_category(get_query_var( 'cat' ))->name)) $cat = get_category(get_query_var( 'cat' ))->name;
else $cat = urldecode(get_query_var( 'name' ));

$_SESSION['cat'] = $cat;



if (get_the_title()=="النادي" || $cat=="النادي")
  $menu = "club";
else
  $menu = $cat;

$menu_items = wp_get_nav_menu_items( $menu );
$current_item = current( wp_filter_object_list( $menu_items, array( 'object_id' => get_queried_object_id() ) ) );

  echo "<ul class='sub_menu'>";
  foreach (wp_get_nav_menu_items( $menu ) as $item) {
    echo "<li";
    if ($item->title == $current_item->title) echo " class='sub_menu-current'";
    echo ">";
    echo "<a href='".$item->url."?cat=".$cat."'>".$item->title."</a>";
    echo "</li>";
  }
  echo "</ul>";

?>
