<?php

include "../database/db.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $usia = $_POST['usia'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);


    mysqli_query($conn, "INSERT INTO tb_users (username, usia, email, password) VALUES ('$username', '$usia', '$email', '$hash')");
    header('Location: ../../index.php');

}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form action="" method="post">
        <span>masukan username</span>
        <input type="text" name="username" id=""><br>
        <span>masukan Usia</span>
        <input type="number" name="usia" id=""><br>
        <span>masukan email</span>
        <input type="text" name="email" id="" placeholder="example@gmail.com"><br>
        <span>masukan Password</span>
        <input type="password" name="password" id=""><br>
        <button type="submit" name="submit">submit</button>
    </form>
    
</body>
</html>