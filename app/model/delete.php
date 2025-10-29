<?php

include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM tb_users WHERE id_users = '$id'";
    if (mysqli_query($conn, $query)) {
        echo "data berhasil di hapus";
    }else {
        echo "data gagal dihapus";
    };

    header('Location: index.php');
    exit();
}else {
    echo "data tidak ada";
}



?>