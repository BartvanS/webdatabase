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
            ob_start();
            session_start();
            include("global/classes.php");
            include("global/connect_db.php");

            include("global/userrole_links.php");
    ?>
        <div class="header">
        <a href="?content=login">Login</a>
        <a href="?content=logout">Logout</a>
        <a href="?content=admin">adminpage</a>
        <a href="?content=createaccount">createaccount</a>
        </div>
        <div class="container">
            <?php 
            if(isset($_SESSION['typeofuser'])){
                if($_SESSION['typeofuser'] != "1"){
                    echo 'U are granted level of supreme normie';
                    $_SESSION['typeofuser'] = "";
                }else   
                var_dump($_SESSION);
                if($_SESSION['typeofuser'] == "1"){
                    // echo ' ey man je bent super cool';
                }elseif($_SESSION['typeofuser'] == ''){
            }
            }
                if (isset($_GET["content"]))
                {
                   
                    $_SESSION['content']=$_GET['content'];
                    include("pages/".$_GET["content"].".php"); 
                    // echo $_SESSION['content'].'test';
                    
                }
                else {
                    include("pages/start.php");
                    echo 'Welkom op de homepagina';
                }
            

            ?>
            </div>


</body>
</html>