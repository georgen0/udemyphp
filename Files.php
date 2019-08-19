<?php
$file = "example.txt";
$handle = fopen($file, 'w');
fwrite($handle, "Some example string.");
fclose($handle);

$handle = fopen($file, 'r');
$result = fread($handle, filesize($file) - 2);
echo $result;
fclose($handle);

unlink($file);
?>