<?php
require 'config.inc.php';

function key_generator($input){
  $input = base64_encode($input);
  $output = md5($input);
  return $output;

}

#echo key_generator(1);
function file_name($db_connection, $table){
  $key = last_id($db_connection, $table) +1;
  $key = key_generator($key);
  return $key;

}

function file_insert($db_connection, $table, $song_name, $band_name, $album, $file_key)
{

    $query ="INSERT INTO `".$table."` (
       `s_band`, `s_name`, `s_album`, `s_path`, `s_hit_count`, `s_cover`
      ) VALUES (
        '".$band_name."', '".$song_name."', '".$album."', '".$file_key."', '0', './img/cover/".$band_name."'
      )";
    mysqli_query($db_connection, $query);
}



function last_id($db_connection, $table){
    $query = "SELECT `id` from `".$table."` ORDER BY `id` DESC LIMIT 1";
    #$result = mysqli_fetch_array();
    $result = mysqli_query($db_connection, $query);
    $result = mysqli_fetch_array($result);
    return $result["id"];
}

function search($db_connection, $table, $param){
  $query = "SELECT * from `".$table."` WHERE `s_name` LIKE '%".$param."%'";
  $result = mysqli_query($db_connection, $query);
  return $result;

}



 ?>
