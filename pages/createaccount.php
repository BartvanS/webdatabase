<p>create new account</p>
<form action="" method="POST">
<input type="text" name="usernamecreate" value="" id="username">
<input type="password" name="passwordcreate" id="password">
<input type="submit">
</form>

<?php
if(isset($_POST['usernamecreate']) && isset($_POST['passwordcreate'])){
    $user = $_POST['usernamecreate'];
    $passwordHashed = password_hash($_POST['passwordcreate'], PASSWORD_DEFAULT);
try {
//probeert de username en gehashed pw in de db te zetten
      $stmt = $conn->prepare("INSERT INTO `users` (`id`, `userName`, `password`, `roleId`) VALUES (NULL, '".$user."', '".$passwordHashed."', '0')");
      // $stmt->bindValue('USERNAME', $user);
      // $stmt->bindValue('USERNAME', $password);
      $stmt->execute();
      if($stmt) echo 'execute select statement gelukt';// if executed



} catch ( Exception $e) {
    echo $e->getMessage();
}

}





// $user = $_POST['username'];
// $password = $_POST['password'];
// $stmt = $conn->prepare('SELECT * FROM users WHERE `username` = :USERNAME');
// $stmt->bindValue('USERNAME', $user);
// $stmt->execute();
// if($stmt) echo 'execute select statement gelukt';// if executed
// $rows = $stmt->fetchAll();






// var_dump($rows);
// var_dump(password_hash('demo', PASSWORD_DEFAULT));
    // if(isset($_POST['username']) == $row['username']){
    //     header('Location: ../pages/main.php');
    // }
// }



//koppel files path per account
//max upload timing en datum
