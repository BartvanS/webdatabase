  <?php
  if (!file_exists('C:\wamp64\www\webdatabase\files/' .$_SESSION['username'])) {
      mkdir('C:\wamp64\www\webdatabase\files/' .$_SESSION['username'], 0777, true);
  }
  $dir    = 'C:\wamp64\www\webdatabase\files/' .$_SESSION['username'];
  $videoImg = '/global/images/video-play.png';
  $txtImg = '/global/images/text.png';
  $files1 = scandir($dir);
  $files2 = scandir($dir, 1);

  //laat alle namen zien
  //  print_r($files1);
  echo "<br>";

  //print_r($files2);
  echo "<button id='begoneimg'>Show all images</button>";
  echo "<button onclick='deleteSelected()'>Delete selected</button>";
  echo "<table>";
  foreach ($files1 as $amountfiles){
      $substringed3 = substr($amountfiles, -3);
      $substringed4 = substr($amountfiles, -4);
      // echo $substringed3. "<br>";

      if($substringed3 == "PNG" || $substringed3 == "jpg" || $substringed3 == "JPG" || $substringed3 == "GIF" || $substringed3 == "gif" || $substringed3 == "png" || $substringed3 == "JPEG" || $substringed3 == "jpeg"){

          echo "<tr id='tr".$amountfiles."'><td><input type='checkbox' name='fileCheckbox' id='".$amountfiles."' /></td><td><a href='./files/bartvans/".$amountfiles."' download>".$amountfiles."</td><td><a href='./files/bartvans/".$amountfiles."' download>
          <img src='./files/bartvans/".$amountfiles . "' class='dirimg' width='100px'; height='100px'></img></a></td></tr>";

      }
    //Bij video bestanden geeft hij een andere image mee
      if($substringed3 == "mp4"){

          echo "<td><a href='./files/bartvans/".$amountfiles."' download>".$amountfiles."</td><td><a href='./files/bartvans/".$amountfiles."' download><img src='".$videoImg ."' class='dirimg' width='100px'; height='100px'></img></a></td>";

      }
      //Bij textbestanden geeft hij een andere image mee
      if($substringed3 == "doc" || $substringed4 == "docx" || $substringed3 == "txt"){

          echo "<tr id='tr".$amountfiles."'><td><input type='checkbox' name='fileCheckbox' id='".$amountfiles."' /></td><td><a href='./files/bartvans/".$amountfiles."' download>".$amountfiles."</td><td><a href='./files/bartvans/".$amountfiles."' download>
          <img src='" .$txtImg."' class='dirimg' width='100px'; height='100px'></img></a></td></tr>";

      }
  }
  echo "</table>";

  //Dit haalt de "CatAPI" binnen(puur voor de grap)
    echo '<br><br><a href="http://thecatapi.com"><img src="http://thecatapi.com/api/images/get?format=src&type=gif"></a>';
  ?>

  <script type="text/javascript">
    function deleteSelected() {
      var c = confirm("Weet je zeker dat je de bestanden wilt verwijderen?");
      if (c == true) {

        const checked = document.querySelectorAll('input[name="fileCheckbox"]')
        checked.forEach(input => {
          console.log(input.checked, input.id)
          if (input.checked) {
            var formData = new FormData();
            formData.append('file', input.id);

            fetch('/pages/deletefile.php', {
              method: 'POST',
              body: formData
            }).then((res) => {
              document.getElementById('tr'+input.id).remove()
            });
          }
        })
      }
    }
  </script>
