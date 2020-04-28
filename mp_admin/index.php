
<?php
require "../system/functions.inc.php";
if(isset($_POST["song_name"]) && isset($_POST["band_name"]) && isset($_POST["album"]) && !empty($_FILES["file"]))
{
  $album = $_POST["album"];
  $band_name = $_POST["band_name"];
  $song_name = $_POST["song_name"];
  $file = $_FILES["file"];
  $file_name = $_FILES['file']['name'];
  $file_tmp_name = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_error = $_FILES['file']['error'];
  $file_type = $_FILES['file']['type'];
  $file_explode = explode(".", $file_name);
  $file_ext = strtolower(end($file_explode));
  $allowed = array("mp3", "wav");
  if (in_array($file_ext, $allowed)) { #if the extention is allowed
    if ($file_error === 0) {
      if ($file_size < 100000000) {

        $file_key = file_name($__mplayer["db_connection"], $__mplayer["db_song_table"]).".".$file_ext;
        $file_path = "../songs/".$file_key;
        file_insert($__mplayer["db_connection"], $__mplayer["db_song_table"], $song_name, $band_name, $album, $file_key);
        move_uploaded_file($file_tmp_name, $file_path);
        header("Location: ./../songs");
      }
      else{
        echo "file is too big";
      }
    }
    else{
      echo "an error occured";
    }
  }
  else {
    echo "prohibited file type";
  }


}
else{
  echo "something went wrong";
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>File Uploading Page</title>
  </head>
  <body>
    <form class="" action="index.php" method="post" enctype="multipart/form-data">
      <input type="text" name="song_name" value="" placeholder="Song Name"><br>
      <input type="text" name="band_name" value="" placeholder="Band Name"><br>
      <input type="text" name="album" value="" placeholder="Album"><br>
      <input type="file" name="file" value=""><br>
      <button type="button" onclick="submit()" name="">Upload</button>
    </form>
  </body>
</html>
