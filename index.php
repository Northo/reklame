<!DOCTYPE html>
<html>
  <head>
    <title>Utforsk Oslo</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>
    <script>
    function events() {
	var points = document.getElementsByClassName("point");
	for(var i = 0; i < points.length; i++) {
	    var lis = points[i].getElementsByTagName("li");
	    for( var j = 0; j < lis.length; j++) {
		lis[j].addEventListener("click", function() { this.nextElementSibling.classList.toggle("active"); });
		lis[j].addEventListener("mouseout", function() { this.nextElementSibling.classList.remove("active"); });
	    }
	}
    }
    </script>
  </head>
  <body onload="events()">
    <h1>Utforsk Oslo</h1>
    <?php
$file = file("steder.txt", FILE_IGNORE_NEW_LINES);

$i = 0;
for($count = 0; $count < count($file); ){
  if($i == 0) {
    echo '<div class="point major ' . $file[$count+3] . '" style="left: ' . $file[$count+1] . '; top: ' . $file[$count+2] . ';">' . "\n";
    echo '<span class="marker major circle"></span>' . "\n<div>\n<ul>\n";
    $count += 4;
    $i++;
  }
  echo "<li>" . $file[$count] . "</li>\n";
  echo '<div class="drop">' . $file[$count+1] . "</div>\n";
				
  $count+=2;
  if(isset($file[$count])) {
    if($file[$count] == "--") {
      $i = 0;
      $count++;
      echo "</ul>\n</div>\n</div>\n";
    }
  }
}
	 ?>
       </body>	
</html>
