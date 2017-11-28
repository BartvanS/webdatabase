<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_SESSION['typeofuser'])){
  
        if($_SESSION['personid'] != "1"){
            echo "U bent niet gemachtigd voor deze pagina";
        }
        if($_SESSION['personid'] == "1"){
            echo "jij bent: " . $_SESSION['username'];
            echo "<br> id van uw link naar uw mappie: ".$_SESSION['personid'] ;
            $pathId = $_SESSION['personid'];
            $pathconnection = $conn ->prepare('select * from path where `pathId` = :PATHID');
            $pathconnection->bindValue('PATHID', $pathId);
            $pathconnection->execute();
            if($pathconnection) echo "<script>console.log('Connection gemaakt met de path');</script>";
            $paths = $pathconnection->fetchAll();
            echo "<br> uw path id= ". $paths[0]['pathto'];
            $dir = $paths[0]['pathto'];
 
            echo " <br />";
            echo $dir;
            echo " <br />";


            $extArray = array('jpg', 'png', 'jpeg', 'gif');
    
            foreach($dir as $file)
            {   
                $ext = end(explode('.', $file));
                if(in_array($ext, $extArray)) {
                    echo "<div class='post'>
                             <img width='200px' src='post/'". $file ." />
                          </div>";
                }else {  
                    echo "<div class='post'>"
                             . file_get_contents('post/'.$file)
                          ."</div>";
                }
    
            }
            

 

        }
    }
    ?>
</body>
</html>