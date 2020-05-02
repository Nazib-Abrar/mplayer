
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>File Uploading Page</title>
    <script src = "../js/jquery.js"></script>
  </head>
  <body>
    <form id = "form" class="" action="upload_process.php" method="post" enctype="multipart/form-data">
      <br><b>Song Name:</b><br>
      <input id="s_name" type="text" name="song_name" value="" placeholder="Song Name" onkeyup="a(this.value)"><br>
      <br><b>Band Name:</b><br>
      <input id="s_band" type="text" name="band_name" value="" placeholder="Band Name"><br>
      <br><b>Album:</b><br>
      <input id="s_album" type="text" name="album" value="" placeholder="Album" onkeyup="b(this.value)"><br>
      <br><b>Upload Cover Image</b><br>
      <input type="file" name="image" value=""><br>
      <br><b>Upload Audio File:</b><br>
      <input type="file" name="file" value=""><br>
      <input name = "submit" type = "submit" value="UPLOAD"><br>
    </form>
    <br><br><br>
      <div  id="search_result">
      Existing Songs: <br>
      <div id="song_name"></div>
      
    <script>
    
    function a(val1){
      $(function(){
      var query = "./upload_process.php?song=" + val1;
      $.get(query, function(data, status){
        $("#song_name").html(data);

      });

    });
    
    }
    
    
  /*  $("#s_name").keyup(function(event){
      //$("#song_name").text($(this).val());
      var query = "./upload_process.php?song=" + $(this).val();
      $.get(query, function(data, status){
        $("#song_name").html(data);

      });
    });
    */
   /* $(function(){
    $("#s_album").keyup(function(event){
      //$("#song_name").text($(this).val());
      var query = "./upload_cover.php?album=" + $(this).val();
      $.get(query, function(data, status){
        $("#cover").html(data);

      });
    });
    $("#search_result").draggable();
  });
  */

    </script>
  </body>
</html>
