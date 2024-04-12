<?php

require_once 'php/db_config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM member WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        echo "<script>alert('Data Berhasil Dihapus!')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
        exit();
    } else {
        echo "<script>alert('Data Belum Lurator!')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
        exit();
    }
}

?>