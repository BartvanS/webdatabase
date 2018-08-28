<?php
require_once("C:\wamp64\www\webdatabase\packages\classes\upload.php");
$handle = new upload($_FILES['image_field']);
echo $_POST['name'];
if ($handle->uploaded) {
  $handle->file_new_name_body   = $_POST['name'];
  $handle->image_resize         = false;
  $handle->image_x              = 100;
  $handle->image_ratio_y        = true;
  $handle->process('C:\wamp64\www\webdatabase\files\bartvans');
  if ($handle->processed) {
    header('Location: http://cloud.local/');
    echo 'image resized';
    $handle->clean();


  } else {
    echo 'error : ' . $handle->error;
    alert('ERROR! ');
  }
}
