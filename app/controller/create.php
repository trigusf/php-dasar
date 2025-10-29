<?php

include '../database/db.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $email = $_POST['email'];

mysqli_query($conn, "INSERT INTO tb_users (username, usia, email) VALUES ('$nama', '$usia', '$email')");
header('Location: ../views/dashboard.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <head><title>Tambah User</title></head>
    <h2>Tambah User</h2>
    <form action="" method="POST">
        Nama: <input type="text" name="nama" placeholder="Masukan Nama" required>
        Usia: <input type="number" name="usia" placeholder="Masukan Usia" required>
        email: <input type="text" name="email" placeholder="contoh@gmail.com" required>
        <input type="submit" value="simpan" name="submit">
    </form>
</body>
</html>


