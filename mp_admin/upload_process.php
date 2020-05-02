<?php
require "../system/functions.inc.php";
if (isset($_POST["submit"])) {
    if (isset($_POST["song_name"]) && isset($_POST["band_name"]) && isset($_POST["album"]) && !empty($_FILES["file"]) && !empty($_FILES["image"])) {
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

        $image = $_FILES["image"];
        $image_name = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_size = $_FILES['image']['size'];
        $image_error = $_FILES['image']['error'];
        $image_type = $_FILES['image']['type'];
        $image_explode = explode(".", $image_name);
        $image_ext = strtolower(end($image_explode));

        $image_allowed = array("jpg", "jpeg", "png");
        $allowed = array("mp3", "wav");
        if (in_array($file_ext, $allowed) && in_array($image_ext, $image_allowed)) { #if the extention is allowed
            if ($file_error === 0 && $image_error == 0) {
                if ($file_size < 100000000 && $image_size < 100000000) {
                    $file_key = file_name($__mplayer["db_connection"], $__mplayer["db_song_table"]).".".$file_ext;
                    $image_key = file_name($__mplayer["db_connection"], $__mplayer["db_song_table"]).".".$image_ext;

                    $file_path = "../songs/".$file_key;
                    $image_path = "../img/cover/".$image_key;
                    file_insert($__mplayer["db_connection"], $__mplayer["db_song_table"], $song_name, $band_name, $album, $file_key, $image_key);
                    move_uploaded_file($image_tmp_name, $image_path);
                    move_uploaded_file($file_tmp_name, $file_path);
                    header("Location: ./index.php");
                } else {
                    echo "file is too big";
                }
            } else {
                echo "an error occured (error code not 0). FILE_ERROR:".$file_error."--IMAGE_ERROR:".$image_error;

               /* switch ($image_error) {
        case UPLOAD_ERR_INI_SIZE:
            $message = "The uploaded file exceeds the upload_max_filesize directive in php.ini";
            break;
        case UPLOAD_ERR_FORM_SIZE:
            $message = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
            break;
        case UPLOAD_ERR_PARTIAL:
            $message = "The uploaded file was only partially uploaded";
            break;
        case UPLOAD_ERR_NO_FILE:
            $message = "No file was uploaded";
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            $message = "Missing a temporary folder";
            break;
        case UPLOAD_ERR_CANT_WRITE:
            $message = "Failed to write file to disk";
            break;
        case UPLOAD_ERR_EXTENSION:
            $message = "File upload stopped by extension";
            break;

        default:
            $message = $file_error;
            break;
    }*/
              
            }
        } else {
            echo "prohibited file type (extention not allowed)";
        }
    } else {
        echo "file not uploaded yet or any field is empty";
    }
}


?>
<?php

$song = "";
$song = $_GET["song"];
//echo ;

if(!empty($song)){
$res = search_song($__mplayer["db_connection"], $__mplayer["db_song_table"], $song);
//print_r($res);
$i=-1;


echo "<ul>";
while($row = mysqli_fetch_array($res))
{
    $i++;

    $var[$i]['s_name']=$row['s_name'];
    $var[$i]['s_band']=$row['s_band'];
    //$SubjectCode[$i]['SubLongName']=$row['SubLongName'];
    echo "<li class=\"slists\">".$var[$i]['s_name']."------".$var[$i]['s_band']."</li>";
}
echo "</ul>";
}

?>
