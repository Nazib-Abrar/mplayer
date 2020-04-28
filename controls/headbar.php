      <div class="headbar">
      <i class="fas fa-bars smscr"></i>


      <div class="containersbar">
        <i class="fas fa-search"></i><span></span>
        <input class="searchbar" type="text" placeholder="Search Music" id = "searchbar"/>
      </div>
      <div id="search_result">
      </div>
        <script>
        $("#searchbar").keyup(function(event){
          //$("#search_result").text($(this).val());
          var query = "./system/search.php?query=" + $(this).val();
          $.get(query, function(data, status){
            $("#search_result").html(data);

          });
        });
        $("#search_result").draggable();


        </script>

      <div class="space"></div>
      <a href="#" onclick="document.getElementById('id01').style.display='block'">Login</a>
      <i class="fas fa-ellipsis-v"></i>
    </div>
