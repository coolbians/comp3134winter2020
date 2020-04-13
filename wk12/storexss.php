<?php
$myfile = fopen("storedxss.txt", "r");
echo fread($myfile,filesize("stored xss.txt"));
fclose($myfile);
?>