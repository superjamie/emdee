<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
 <head>
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
<link href="solarized-light.css" rel="stylesheet"></link>
 </head>
<body>

<?php

echo $Parsedown->text($source);

?>

</body>
</html>

