<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
 <head>
  <title></title>
  <link href="solarized-light.css" rel="stylesheet"></link>
 </head>
<body>

<?php

require_once 'Parsedown.php';
$Parsedown = new Parsedown();
$source = file_get_contents("./" . $_GET["id"] . ".md", FILE_USE_INCLUDE_PATH);
echo $Parsedown->text($source);

?>

</body>
</html>
