<?php
// $servername = "213.10.130.7";
// $username = "root";
// $password = "Wachtwoord123";

$servername = "localhost";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql: host=$servername; dbname=cloud; port=3306", $username, $password);
    // set the PDO error mod to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>
