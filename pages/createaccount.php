<p>create new account</p>
<form action="" method="POST">
<input type="text" name="usernamecreate" value="" id="username">
<input type="password" name="passwordcreate" id="password">
<input type="submit">
</form>

<?php
if(isset($_POST['usernamecreate']) && isset($_POST['passwordcreate'])){
    
$user = $_POST['usernamecreate'];
$password = $_POST['passwordcreate'];
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




// $user = $_POST['username'];
// $password = $_POST['password'];
// $stmt = $conn->prepare('SELECT * FROM users WHERE `username` = :USERNAME');
// $stmt->bindValue('USERNAME', $user);
// $stmt->execute(); 
// if($stmt) echo 'execute select statement gelukt';// if executed
// $rows = $stmt->fetchAll(); 


// try {

//     if(count($rows) !== 1) {
//         throw new Exception('Username niet bekend!');
//     }
 
//     if(!password_verify($password, $rows[0]['password'])){
//         throw new Exception('Wachtwoord is verkeerd.');
//     }
    
//     // echo $_SESSION['typeofuser'] . "test";
//     // echo 'es habe gewurst';
//     header('Location: index.php');
//     $_SESSION['typeofuser'] = $rows[0]['roleId'];
//     $_SESSION['personid'] = $rows[0]['id'];
//     $_SESSION['username'] =$rows[0]['username'];


// } catch ( Exception $e) {
//     echo $e->getMessage();
// }

 

// var_dump($rows);
// var_dump(password_hash('demo', PASSWORD_DEFAULT));
    // if(isset($_POST['username']) == $row['username']){
    //     header('Location: ../pages/main.php');
    // }
// }



//koppel files path per account
//max upload timing en datum
