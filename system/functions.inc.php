<?php
require 'config.inc.php';

function key_generator($input){
  $input = base64_encode($input);
  $output = md5($input);
  return $output;

}

#echo key_generator(1);

function file_insert($db_connection, $table, $band_name, $song_name)
{
    $key = last_id($db_connection, $table) +1;
    $key = key_generator($key);
    $file_path = "songs/".$key.".mp3";
    $query ="INSERT INTO `".$table."` (
       `s_band`, `s_name`, `s_album`, `s_path`, `s_hit_count`, `s_cover`
      ) VALUES (
        '".$band_name."', '".$song_name."', '', '".$file_path."', '0', './img/cover/".$band_name."'
      )";
      echo $query;
}



function last_id($db_connection, $table){
    $query = "SELECT `id` from `".$table."` ORDER BY `id` DESC LIMIT 1";
    #$result = mysqli_fetch_array();
    $result = mysqli_query($db_connection, $query);
    $result = mysqli_fetch_array($result);
    return $result["id"];
}

file_insert($__mplayer["db_connection"], $__mplayer["db_song_table"], "lol", "lol");

/*
  CREATE DATABASE `mplayer`;
  CREATE TABLE `gan_list` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_band` varchar(50),
  `s_name` varchar(50),
  `s_album` varchar(50),
  `s_path` varchar(500),
  `s_hit_count` int(11) ,
  `s_cover` varchar(100),
  PRIMARY KEY(id)
)

}



 ?>
