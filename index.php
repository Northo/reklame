<?php
$file = file("steder.txt", FILE_IGNORE_NEW_LINES);

$i = 0;
for($count = 0; $count < count($file); ){
  if($i == 0) {
    echo '<div class="point major ' . $file[$count+3] . '" style="left"' . $file[$count+1] . '; top: ' . $file[$count+2] . ';">' . "\n";
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