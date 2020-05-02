<?php
require "../system/functions.inc.php";
$album = "";
$album = $_GET["album"];



  $res2 = search_cover($__mplayer["db_connection"], $__mplayer["db_song_table"], $album);
  echo "<img src =\"../img/cover/".$res2.".png\" height = \"100\" width = \"100\">";
?>
