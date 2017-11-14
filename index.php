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
              include("global/connect_db.php");
              ob_start();
              session_start();
              include("global/userrole_links.php");
    ?>
        <div class="header">
        <a href="?content=login">Login</a>
        </div>
        <div class="container">
            <?php 
           
                if (isset($_GET["content"]))
                {
                    $_SESSION['content']=$_GET['content'];
                    include("pages/".$_GET["content"].".php"); 
                    echo $_SESSION['content'].'test';
                }
                else {
                    include("pages/start.php");
                }

            ?>
            </div>


</body>
</html>