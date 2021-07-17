<?php
$file = fopen(“webtechnology.txt”,”r”) or die(“File cannot be opened”);
fread($file,filesize(“webtechnology.txt”));
fclose(“$file”);
?>
