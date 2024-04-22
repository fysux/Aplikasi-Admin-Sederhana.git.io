<?php
include 'php/proses.php';
$proses = new Proses();
$proses->create_member();

if (isset($_POST['create'])) {
    if ($_POST['nama'] == "" || $_POST['email'] == "" || $_POST['no_telp'] == "" || $_POST['nik'] == "" || $_POST['pekerjaan'] == "") {
        echo "<script>alert('Data Tidak Boleh Kosong!')</script>";
        echo "<script>window.location.href = 'create.php'</script>";
        exit();
    } else {
        $proses->create_member();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
<div class="container my-5">
        <div class="shadow p-3 mb-5 bg-body rounded form-group col-md-6 mx-auto">
            <form action="" method="POST">
                <label for="" class="form-label opacity-50 ">Nama</label>
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <input type="text" name="nama" placeholder="Nama" class="form-control">
                </div>
                <label for="" class="form-label opacity-50">Email</label>
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <input type="text" name="email" placeholder="Email" class="form-control">
                </div>
                <label for="" class="form-label opacity-50">No. Telp</label>
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <input type="number" name="no_telp" placeholder="No. Telp" class="form-control">
                </div>
                <label for="" class="form-label opacity-50">NIK</label>
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <input type="text" name="nik" placeholder="NIK" class="form-control">
                </div>
                <label for="" class="form-label opacity-50">Pekerjaan</label>
                <div class="mb-3 ">
                    <ul class="list-group">
                        <li class="form-check">
                            <input type="checkbox" name="pekerjaan" placeholder="Pekerjaan" value="Pegawai" class="form-check-input">
                            <label for="" class="form-check-label">Pegawai</label>
                        </li>
                        <li class="form-check">
                            <input type="checkbox" name="pekerjaan" placeholder="Pekerjaan" value="Pensiunan" class="form-check-input">
                            <label for="" class="form-check-label">Pensiunan</label>
                        </li>
                        <li class="form-check">
                            <input type="checkbox" name="pekerjaan" placeholder="Pekerjaan" value="Wiraswasta" class="form-check-input">
                            <label for="" class="form-check-label">Wiraswasta</label>
                        </li>
                    </ul>

                </div>
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <input type="submit" name="create" value="Tambah Data" class="btn btn-primary">
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