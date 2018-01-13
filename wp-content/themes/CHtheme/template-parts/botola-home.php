<?php

$html_botola = file_get_contents("http://frmf.gestfoot.com/classev2.php?tim=12336633&groupe=36&lang=ar");
$html_botola = str_replace("ajaxphp/","http://frmf.gestfoot.com/ajaxphp/",$html_botola);
echo $html_botola;

//require_once("C:\wamp64\www/kacm/wp-content/themes/CHtheme/botola/botola.class.php");
//require_once("C:\wamp64\www/kacm/wp-content/themes/CHtheme/botola/exemplebotola.php");

 ?>
