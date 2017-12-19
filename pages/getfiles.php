<?php
$dir    = 'C:\wamp64\www\cloudstorage\files\bartvans';
$files1 = scandir($dir); 
$files2 = scandir($dir, 1);

print_r($files1);
echo "<br>";

//print_r($files2);
echo "<button id='begoneimg'>BE GONE THOTHELOMEUS</button>";
echo "<table><tr>";
foreach ($files1 as $amountfiles){
    $substringed = substr($amountfiles, -3);
    // echo $substringed. "<br>";
    
    if($substringed == "PNG" || $substringed == "jpg" || $substringed == "JPG" || $substringed == "GIF" || $substringed == "gif" || $substringed == "png" || $substringed == "JPEG" || $substringed == "jpeg"){
        
        echo "<td><a href='./files/bartvans/".$amountfiles."' download><img src='./files/bartvans/".$amountfiles . "' class='dirimg'></img></a></td>";
        
    }    
}
echo "</tr></table><table><tr>";
foreach ($files1 as $amountfiles2){
    $substringed = substr($amountfiles2, -3);
    
    if($substringed == "PNG" || $substringed == "jpg" || $substringed == "JPG" || $substringed == "GIF" || $substringed == "gif" || $substringed == "png" || $substringed == "JPEG" || $substringed == "jpeg"){
        // echo "<td><a href='./files/bartvans/".$amountfiles2 . "' download class='dirfileimg' >".$amountfiles2."</a></td>";
    }
            else{
                 echo "<td><a href='./files/bartvans/".$amountfiles2 . "' download class='dirfile' >".$amountfiles2."</a></td>";
}
}
echo "</tr></table>";

echo '<br><br><a href="http://thecatapi.com"><img src="http://thecatapi.com/api/images/get?format=src&type=gif"></a>';
?>