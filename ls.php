<?php

$dir    = '/';
$files= scandir($dir, 1);

print_r($files);

echo '<br><br>';
echo file_get_contents('/gitrepo.txt');
?>