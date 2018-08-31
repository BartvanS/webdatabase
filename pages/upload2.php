<?php
session_start();
//var_dump($_SESSION);
$username =  $_SESSION['username'];
//echo $username . "<br />";

//controleert of de folder voor de user wel bestaat
  require_once("C:\wamp64\www\webdatabase\packages\classes\upload.php");
  if (!file_exists('C:\wamp64\www\webdatabase\files/'.$_SESSION['username'])) {
      mkdir('C:\wamp64\www\webdatabase\files/'.$_SESSION['username'], 0777, true);
  }
$adress = 'C:\wamp64\www\webdatabase\files/'.$username;
var_dump($_FILES['image_field']['name']);
$handle = new upload($_FILES['image_field']);
//echo $_POST['name'];
if (empty(isset($_POST['name']))) {
  $fileName = $_POST['name'];
}else {
  $fileName = $_FILES['image_field']['name'];
  echo '<br />' . $fileName;
}

if ($handle->uploaded) {
  $handle->file_new_name_body   = $fileName;
  $handle->image_resize         = false;
  $handle->image_x              = 100;
  $handle->image_ratio_y        = true;
  $handle->process($adress);
  if ($handle->processed) {
    header('Location: http://database.local/');
  //  echo 'image resized';
    $handle->clean();


  } else {
    echo 'error : ' . $handle->error;
    alert('ERROR! ');
  }
}



// <?php
// var_dump($_FILES['image_field']['tmp_name']);
// require_once("C:\wamp64\www\webdatabase\packages\classes\upload.php");
// foreach ($_FILES['image_field'] as $key => $value) {
//   $handle = new upload($key);
//   //echo $_POST['name'];
//   if ($handle->uploaded) {
//     $handle->file_new_name_body   = $_POST['name'];
//     $handle->image_resize         = false;
//     $handle->image_x              = 100;
//     $handle->image_ratio_y        = true;
//     $handle->process('C:\wamp64\www\webdatabase\files\bartvans');
//     if ($handle->processed) {
//       // header('Location: http://database.local/');
//     //  echo 'image resized';
//       $handle->clean();
//
//
//     } else {
//       echo 'error : ' . $handle->error;
//       alert('ERROR! ');
//     }
//   }
// }
//
