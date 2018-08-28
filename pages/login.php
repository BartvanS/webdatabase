<?php
if(isset($_POST['username']) && isset($_POST['password'])){
$user = $_POST['username'];
$password = $_POST['password'];
$stmt = $conn->prepare('SELECT * FROM users WHERE `username` = :USERNAME');
$stmt->bindValue('USERNAME', $user);
$stmt->execute();
if($stmt) echo 'execute select statement gelukt';// if executed
$rows = $stmt->fetchAll();
echo count($rows);
try {

    if(count($rows) !== 1) {
        throw new Exception('Username niet bekend!');
    }

// controleert of het gehashed password klopt
    // if(!password_verify($password, $rows[0]['password'])){
    //     throw new Exception('Wachtwoord is verkeerd.');
    // }
//zet de header naar de homepagina
    header('Location: index.php');

//set de variables van de user op de website
    var_dump($rows[0][1]);
    // $_SESSION['typeofuser'] = $rows[0]['roleId'];
    // $_SESSION['personid'] = $rows[0]['id'];
    $_SESSION['username'] = $rows[0][1];


} catch ( Exception $e) {
    echo $e->getMessage();
}
}
?>
<form action="" method="POST">
<input type="text" name="username" value="" id="username">
<input type="password" name="password" id="password">
<input type="submit">
</form>
