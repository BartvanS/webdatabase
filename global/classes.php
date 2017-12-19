<?php
 //   global $conn;
//     class Connect{
//       function Connection($servernaampje, $usernaampje, $passwordtje){
//             $servername = $servernaampje;
//              $username = $usernaampje;
//             $password = $passwordtje;
//            try {
//     $conn = new PDO("mysql: host=$servername; dbname=mydatabase; port=3306", $username, $password);
//     // set the PDO error mod to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully"; 
//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
//     } 
//         }
//     }
    class User{
        public $username;
        public $roleId;
        public function __construct(){
            
            
        }
        
        public function CreateAccount($user, $password){

            $servername = "localhost";
            $username = "root";
            $password = "";
            try {
                $conn = new PDO("mysql: host=$servername; dbname=mydatabase; port=3306", $username, $password);
                // set the PDO error mod to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully"; 
                }
            catch(PDOException $e)
                {
                echo "Connection failed: " . $e->getMessage();
                }

            $passwordhashed = password_hash($user, PASSWORD_DEFAULT);
            $path = "C:/wamp64/www/cloudstorage/files/" . $user;
            $sql = $conn->prepare('INSERT INTO `users` values(null,
            "'.$user.'",
            "'.$passwordhashed.'"   ,
            "1")');
$sql->execute();

$sqlpath = $conn->prepare('INSERT INTO `path` values(NULL, "'.$path.'")');
$sqlpath->execute();
if($sql) echo 'execute select statement gelukt';// if executed
        }
    }


