<?php
if(isset($_POST['username']) && isset($_POST['password'])){
$user = $_POST['username'];
$password = $_POST['password'];
$stmt = $conn->prepare('SELECT * FROM users WHERE `username` = :USERNAME');
$stmt->bindValue('USERNAME', $user);
// $stmt->bindValue('PASSWORD', $password);
$stmt->execute();
  //controleert of de query werkt
    //  if($stmt) echo 'execute select statement gelukt';// if executed
$rows = $stmt->fetchAll();
echo count($rows);
try {

    if(count($rows) < 1) {
        throw new Exception('Username niet bekend!');
    }
    if(count($rows) > 1) {
        throw new Exception('Meerdere mensen met deze gebruikersnaam!');
    }

    //controleert of de password klopt
      $hash = $rows[0][2];
        if (password_verify($password, $hash)) {
            echo 'Password is valid!';
            //zet de header naar de homepagina
                header('Location: index.php');

            //set de variables van de user op de website
                var_dump($rows);
                // $_SESSION['typeofuser'] = $rows[0]['roleId'];
                // $_SESSION['personid'] = $rows[0]['id'];
                $_SESSION['username'] = $rows[0][1];
                $_SESSION['roleId'] = $rows[0][3];
        } else {
            echo 'Invalid password.';
        }






} catch ( Exception $e) {
    echo $e->getMessage();
    echo "<br /> Helaas is er iets misgegaan";
}
}
?>
<form action="" method="POST">
<input type="text" name="username" value="" id="username">
<input type="password" name="password" id="password">
<input type="submit">
</form>
