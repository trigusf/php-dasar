<?php

session_start();
include "../database/db.php";


$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM tb_users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $username;
        header ('Location: ../views/dashboard.php');
        exit();
    }else {
        header ('Location: ../views/dashboard.php');
        
    }
}else {
    echo "username tidak tersedia";
}


?>