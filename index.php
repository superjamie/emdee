<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
 <head>
  <link id="sheet_light" rel="stylesheet" type="text/css" href="solarized-light.css" />
  <link id="sheet_dark"  rel="stylesheet" type="text/css" href="solarized-dark.css" disabled/>
<script type="text/javascript">
 function swap() {
  if (document.getElementById("sheet_dark").disabled == true) {
   document.getElementById("sheet_dark").removeAttribute('disabled');
   document.getElementById("sheet_light").disabled = true;
   document.getElementById("sheet_button").innerHTML= "light";
  } else {
   document.getElementById("sheet_light").removeAttribute('disabled');
   document.getElementById("sheet_dark").disabled = true;
   document.getElementById("sheet_button").innerHTML= "dark";
  }
 }
 window.onload = function() {
  if (document.getElementById("sheet_dark").disabled == true) {
   document.getElementById("sheet_button").innerHTML= "dark";
  } else {
   document.getElementById("sheet_button").innerHTML= "light";
  }
 }
</script>
<?php
require_once 'Parsedown.php';
$Parsedown = new Parsedown();

if (isset($_GET["q"])) {
    $source = file_get_contents("../" . $_GET["q"] . ".md", FILE_USE_INCLUDE_PATH);
} else {
    $source = file_get_contents("../index.md", FILE_USE_INCLUDE_PATH);
}

$lines = explode("\n", $source, 2);
$title = trim($lines[0], "# \n\r\t\v\x00");
unset($lines);

?>
  <title><?php echo $title; ?></title>
 </head>
<body>
<?php echo $Parsedown->text($source); ?>
<div style="position: fixed; bottom: 20px; right: 0px; height: 20px; width:20px;">
 <div style="position: relative; top: 0px; left: -33px;">
  <button id="sheet_button" onclick="swap();">#</button>
 </div>
</div>
</body>
</html>

