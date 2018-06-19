<?php
session_start();

include_once("functions/montage.php");

$montages = get_all_montage();
?>
<HTML>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="height=device-height, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>cAmAgru | Home</title>
  <link href="css/main.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/gallery.css">
</head>

  <body>
    <div class="top-nav">
    <a href="/"><p>cAmAgru</p></a>
     </div class ="body">
    <div id="logout"><a href="./forms/disconnect.php">Log Out</a></div>
        <?php if(isset($_SESSION['id'])) { ?>
         
        <div class="main">
    		  <div class="select">
      			<img class="thumbnail" src="img/cadre.png"></img>
      			<input id="cadre.png" type="radio" name="img" value="./img/cadre.png" onclick="onCheckBoxChecked(this)">
      			<img class="thumbnail" src="img/cigarette.png"></img>
      			<input id="cigarette.png" type="radio" name="img" value="./img/cigarette.png" onclick="onCheckBoxChecked(this)">
      			<img class="thumbnail" src="img/hat.png"></img>
      			<input id="hat.png" type="radio" name="img" value="./img/hat.png" onclick="onCheckBoxChecked(this)">
    		  </div>
          <video width="100%" autoplay="true" id="webcam"></video>
          <div id="camera-not-available">CAMERA NOT AVAILABLE</div>
          <img id="hat" style="display:none;" src="img/hat.png"></img>
          <img id="cigarette" style="display:none;" src="img/cigarette.png"></img>
          <img id="cadre" style="display:none;" src="img/cadre.png"></img>
    		  <div class="capture" id="pickImage">
            <img class="camera" src="img/camera.png"></img>
          </div>
          <canvas id="canvas" style="display:none;" width="640" height="480"></canvas>
          <div class="captureFile" id="pickFile">
            <img class="camera" src="img/camera.png"></img>
          </div>
          <input type="file" id="take-picture" style="display:none;" accept="image/*">
        </div>
        <div class="side">
			<div class="title">Montages</div>
      <div id="miniatures">
        <?php
          $gallery = "";
          if ($montages != null) {
            foreach($montages as $montage) {
              $class = "icon";
              if ($montage['userid'] === $_SESSION['id']) {
                $class .= " removable";
              }
              $gallery .= "<img class=\"" . $class . "\" src=\"./montage/" . $montage['img'] . "\" data-userid=\"" . $montage['userid'] . "\"></img>";
            }
            echo $gallery;
          }
        ?>
      </div>
		</div>
        <?php } else { ?>
          You need to connect to use the gallery
        <?php } ?>
        <?php include('fragments/footer.php') ?>
      </div>
  </body>
  <?php if(isset($_SESSION['id'])) { ?>
  <script type="text/javascript" src="js/webcam.js"></script>
  <script type="text/javascript" src="js/drop.js"></script>
  <script type="text/javascript" src="js/import.js"></script>
  <?php } ?>
</HTML>
