<form action="" method="post">
    <input type="text" name="username" value="Username" id="username">
    <input type="password" name="password" id="password">
    <input type="submit">
</form>

<?php
if(isset($_POST['username']) && isset($_POST['password'])){
    $user = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $conn->prepare('SELECT * FROM users WHERE `username` = :USERNAME and `password` = :PASSWORD');
    $stmt->bindValue('USERNAME', $user);
    $stmt->bindValue('PASSWORD', $password);
    $stmt->execute();
    $rows = $stmt->fetchAll();
     $_SESSION['typeofuser'] = $rows[0]['roleId'];
     $count ;
     if(password_verify($password, $row[0]['password'])){

     }

     }
    echo $_SESSION['typeofuser'];
    var_dump($rows);
        // if(isset($_POST['username']) == $row['username']){
        //     header('Location: ../pages/main.php');
        // }
    // }
}
?>