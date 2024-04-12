<?php
require_once 'php/db_config.php';

$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM member WHERE id = $id"));

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $nik = $_POST['nik'];
    $pekerjaan = $_POST['pekerjaan'];
    $sql = "UPDATE member SET nama = '$nama', email = '$email', no_tlp = '$no_telp', nik = '$nik', pekerjaan = '$pekerjaan' WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        echo "<script>alert('Data Berhasil Diupdate!')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
        exit();
    } else {
        echo "<script>alert('Data Belum Lurator!')</script>";
        echo "<script>window.location.href = 'edit.php?id=$id'</script>";
        exit();
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container my-5">
        <div class="shadow p-3 mb-5 bg-body rounded form-group col-md-6 mx-auto">
            <form action="" method="POST">
                <label for="" class="form-label opacity-50 ">Nama</label>
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control">
                </div>
                <label for="" class="form-label opacity-50">Email</label>
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <input type="text" name="email" value="<?= $data['email'] ?>" class="form-control">
                </div>
                <label for="" class="form-label opacity-50">No. Telp</label>
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <input type="number" name="no_telp" value="<?= $data['no_tlp'] ?>" class="form-control">
                </div>
                <label for="" class="form-label opacity-50">NIK</label>
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <input type="text" name="nik" value="<?= $data['nik'] ?>" class="form-control">
                </div>
                <label for="" class="form-label opacity-50">Pekerjaan</label>
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <input type="text" name="pekerjaan" value="<?= $data['pekerjaan'] ?>" class="form-control">
                </div>
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <input type="submit" name="update" value="Update" class="btn btn-primary" >
                </div>
            </form>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <a href="index.php" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>