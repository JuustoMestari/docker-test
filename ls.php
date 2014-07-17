<?php

$dir    = '/etc';
$files= scandir($dir, 1);

print_r($files);
?>