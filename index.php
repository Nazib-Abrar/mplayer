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
		<?php
		echo file_get_contents('./controls/headbar.php');
    ?>

	<?php
		echo file_get_contents('./controls/modalLogin.txt');
    ?>

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

		<?php
					echo file_get_contents('./controls/script.txt');
			?>
  </body>
</html>
