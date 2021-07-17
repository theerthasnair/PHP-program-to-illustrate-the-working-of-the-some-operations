<?php
$file = fopen(“webtechnology.txt”,”r”) or die(“File cannot be opened”);
echo fread($file,filesize(“webtechnology.txt”));
fclose(“$file”);
?>
