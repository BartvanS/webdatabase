<?php
$dir    = 'C:\wamp64\www\cloudstorage\files\bartvans';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
//print_r($files2);

foreach ($files1 as $amountfiles){
    
}
?>
