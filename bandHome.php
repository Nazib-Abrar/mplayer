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
    <div class="bandcover">
        <h1><span class="postfix">Bands ></span> Artcell</h1>
        <br>
        <p class="desc">Artcell is a Bangladeshi progressive metal band formed in October 1999 by vocalist and riff guitarist George Lincoln D'Costa, lead guitarist Ershad Zaman, bassist Saef Al Nazi Cezanne and drummer Kazi Sazzadul Asheqeen Shaju. Since 1999, they have released only two studio albums and also have appeared in some mixed albums. The four original members of the band remained together until, in 2017. Ershad Zaman left the band. They pronounced Kazi Faisal Ahmed as their permanent lead guitarist on 11 November 2018. According to The Daily Star, Artcell is one of the leading bands of the country.</p>
    </div>
    <div class="bandart">
        <img src="./img/cover/artcell.jpg" alt="">
        <button class="addToFav"><i class="far fa-plus-square"></i>&nbsp;Add to favourites</button>
</div>
    <div class="songList">
        <h2>Songs</h2>
        <ul>
            <li><div class="songName">"অলস সময়ের পাড়ে (Lazy Time Shifts)"</div> <div class="controlList"><i class="far fa-play-circle"></i><i class="far fa-bookmark"></i></div> </li>
<li><div class="songName">"বাংলাদেশ...স্মৃতি ও আমরা (Bangladesh...Memories and Us)"</div> <div class="controlList"><i class="far fa-play-circle"></i><i class="far fa-bookmark"></i></div></li>
<li><div class="songName">"লীন (Leen)"</div> <div class="controlList"><i class="far fa-play-circle"></i><i class="far fa-bookmark"></i></div></li>
<li><div class="songName">"পাথর বাগান (Stone Garden)"</div> <div class="controlList"><i class="far fa-play-circle"></i><i class="far fa-bookmark"></i></div></li>
<li><div class="songName">"অন্য সময় (Other Time)"</div> <div class="controlList"><i class="far fa-play-circle"></i><i class="far fa-bookmark"></i></div></li>
<li><div class="songName">"ধুসর সময় (Gray Time)"</div> <div class="controlList"><i class="far fa-play-circle"></i><i class="far fa-bookmark"></i></div></li>
<li><div class="songName">"অবিমৃষ্যতা (Ingenuity)"</div> <div class="controlList"><i class="far fa-play-circle"></i><i class="far fa-bookmark"></i></div></li>
<li><div class="songName">"অদেখা স্বর্গ (Unseen Heaven)"</div> <div class="controlList"><i class="far fa-play-circle"></i><i class="far fa-bookmark"></i></div></li>


        </ul>
    </div>
    </div>
    <?php
					echo file_get_contents('./controls/script.txt');
			?>
  </body>
  </html>
