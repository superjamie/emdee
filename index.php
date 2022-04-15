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
if (isset($_GET["id"])) {
    $source = file_get_contents("./" . $_GET["id"] . ".md", FILE_USE_INCLUDE_PATH);
} else {
    $source = file_get_contents("./index.md", FILE_USE_INCLUDE_PATH);
}
echo $Parsedown->text($source);

?>

</body>
</html>
