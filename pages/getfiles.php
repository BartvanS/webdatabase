<?php
echo __NAMESPACE__;
$dir    = 'C:\wamp64\www\webdatabase\files\bartvans';
$videoImg = '/global/images/video-play.png';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

//laat alle namen zien
  print_r($files1);
echo "<br>";

//print_r($files2);
echo "<button id='begoneimg'>Show all images</button>";
echo "<table><tr>";
foreach ($files1 as $amountfiles){
    $substringed = substr($amountfiles, -3);
    // echo $substringed. "<br>";

    if($substringed == "PNG" || $substringed == "jpg" || $substringed == "JPG" || $substringed == "GIF" || $substringed == "gif" || $substringed == "png" || $substringed == "JPEG" || $substringed == "jpeg"){

        echo "<td><a href='./files/bartvans/".$amountfiles."' download>".$amountfiles."</td><td><a href='./files/bartvans/".$amountfiles."' download><img src='./files/bartvans/".$amountfiles . "' class='dirimg' width='100px'; height='100px'></img></a></td>";

    }
  //Bij video bestanden geeft hij een andere image mee
    if($substringed == "mp4"){

        echo "<td><a href='./files/bartvans/".$amountfiles."' download>".$amountfiles."</td><td><a href='./files/bartvans/".$amountfiles."' download><img src='".$videoImg ."' class='dirimg' width='100px'; height='100px'></img></a></td>";

    }
}
echo "</tr></table>";
// echo nieuwe tabel voor alle namen
  // echo "<table><tr>";
    // foreach ($files1 as $amountfiles2){
    //     $substringed = substr($amountfiles2, -3);
    //
    //     if($substringed == "PNG" || $substringed == "jpg" || $substringed == "JPG" || $substringed == "GIF" || $substringed == "gif" || $substringed == "png" || $substringed == "JPEG" || $substringed == "jpeg"){
    //         // echo "<td><a href='./files/bartvans/".$amountfiles2 . "' download class='dirfileimg' >".$amountfiles2."</a></td>";
    //     }
    //             else{
    //                  echo "<td><a href='./files/bartvans/".$amountfiles2 . "' download class='dirfile' >".$amountfiles2."</a></td>";
    // }
    // }
  // echo "</tr></table>";

//Dit haalt de "CatAPI" binnen(puur voor de grap)
  echo '<br><br><a href="http://thecatapi.com"><img src="http://thecatapi.com/api/images/get?format=src&type=gif"></a>';
?>
