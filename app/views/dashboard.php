<?php

include '../database/db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/style.css">
    <title>CRUD BASIC</title>
</head>
<body>

<div class="parent">
    
    <div class="header">
        <h2>Data User</h2>
        <a href="../controller/create.php" class="tambah">tambah + </a>
    </div>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>usia</th>
            <th>Email</th>
            <th colspan="2">aksi</th>
        </tr>
        <tr>
            <?php
            $no = 1;
            $resutl = mysqli_query($conn, "SELECT * FROM tb_users");
            
            while($row = mysqli_fetch_assoc($resutl)){
                echo "<tr>
                        <td>$no</td>
                        <td>{$row['username']}</td>
                        <td>{$row['usia']}</td>
                        <td>{$row['email']}</td>
                        <td><a href=.'../controller/delete.php?id={$row['id_users']}'>hapus</a></td>
                        <td><a href='../controller/edit.php?id={$row['id_users']}'>edit</a></td>
                    </tr>";
            $no++;
            };

            
            
            ?>
        </tr>
    </table>

</div>
</body>
</html>