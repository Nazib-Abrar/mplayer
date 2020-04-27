<?php

$__mplayer["db_server"] = $_SERVER["HTTP_HOST"]; #$_SERVER["SERVER_NAME"] if it doesn't work. Both returns localhost in my device :3
$__mplayer["db_user"] = "root"; #change if necessary
$__mplayer["db_password"] = ""; #change if necessary
$__mplayer["db_name"] = "mplayer";
$__mplayer["db_connection"] = mysqli_connect($__mplayer["db_server"], $__mplayer["db_user"], $__mplayer["db_password"], $__mplayer["db_name"]);
$__mplayer["db_user_table"] = "user_data";
$__mplayer["db_song_table"] = "gan_list";
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}


 ?>
