<?php

$dsn = "mysql:host=localhost;dbname=registracija";
$pdo = new PDO ($dsn, "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$msg='';

if(isset($_POST['registration'])) {
    $username = !empty($_POST['name']) ? trim ($_POST['name']) : null;
    $password = !empty($_POST['password']) ? trim ($_POST['password']) : null;
    $email = !empty($_POST['email']) ? trim ($_POST['email']) : null;

    $sql = "SELECT count(username) AS num FROM users WHERE username LIKE :username;";    
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row['num']>0) {
        $msg = "That username already exists";
        //  die ('$msg');
    }
    else{
    $passwordHash = password_hash($password, PASSWORD_BCRYPT, array("cost"=>12));
    $sql="INSERT INTO users (username,password,email) VALUES (:username,:password,:email);";
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':username',$username);
    $stmt->bindValue(':password',$passwordHash);
    $stmt->bindValue(':email',$email);
    $results = $stmt->execute();

    // if($results) {
       $msg= "Registration successful!";
        
    // }

}
}





?>