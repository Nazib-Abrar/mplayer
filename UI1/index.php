<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Music Player UI</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <?php
    	echo file_get_contents('./links/css_js_link.txt')
    ?>
  </head>
  <body>
  	<?php
		echo file_get_contents('./controls/sidebar.txt');
    ?>
		<div class="mainBody">
		    <div class="headbar">
		      <i class="fas fa-bars smscr"></i>
		      <i class="smdn fas fa-chevron-left"></i>
		      <i class="smdn fas fa-chevron-right"></i>
		      <i class="fas fa-search"></i>
		      <input class="searchbar" type="text" placeholder="Search Music" />
		      <a href="#" onclick="document.getElementById('id01').style.display='block'">Login</a>
		      <i class="fas fa-ellipsis-v"></i>
		    </div>

	   	<!-- The Modal -->
		<div id="id01" class="modal">
			<span onclick="document.getElementById('id01').style.display='none'"
			class="close" title="Close Modal">&times;</span>

			<!-- Modal Content -->
			<form class="modal-content animate" action="/action_page.php">

			    <div class="container">
			      	<h2>Login</h2>
			      
			     	<input class="uName inP" type="text" placeholder="Username" name="uname" required>

			      
			      	<input class="pass inP" type="password" placeholder="Password" name="psw" required>
			      	<button class="playButton" type="submit"><i class="fas fa-play"></i></button>
					<br>
					<div class="styler1"></div>
			    </div>

			    <!--<div class="container" style="background-color:#f1f1f1">
			      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			      <span class="psw">Forgot <a href="#">password?</a></span>
			    </div>-->
			</form>
		</div>

	    <div class="exploreNew">
	      	<h1>Explore new</h1>
	      	<br />
	      	<div class="elements">
	      	<?php
					echo file_get_contents('./controls/exploreNew.txt');
			?>
	      	</div>
	    </div>

	    <div class="popularFeed">
	     	<h1>Popular</h1>
	    </div>

	  	</div>

	    <div class="player">
	      
	    </div>
	    
  </body>
</html>
