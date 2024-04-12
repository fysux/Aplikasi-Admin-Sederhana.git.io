<?php
include 'php/header.php';

if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit();
}

include 'php/proses.php';
$proses = new Proses();
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
    <nav class="nav flex-column ">
        <div class="navbar navbar-dark bg-dark d-flex justify-content-center align-items-center text-white p-2 mb-3 mt-1 rounded shadow text-center">
            <a class="text-white nav-link" href="index.php">Home</a>
            <a class="nav-link text-white" href="create.php">Tambah</a>
            <a class="nav-link text-white" href="logout.php">Logout</a>
        </div>
    </nav>
    <div class="container">
        <div class="container">
            <h1 class="text-center">Selamat Datang</h1>
            <div class="table-responsive mt-5 mb-5 align-items-center d-flex justify-content-center">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. Telp</th>
                            <th>NIK</th>
                            <th>Pekerjaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $no = 1;
                        foreach ($proses->tampil_data() as $data) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['email'] ?></td>
                                <td><?= $data['no_tlp'] ?></td>
                                <td><?= $data['nik'] ?></td>
                                <td><?= $data['pekerjaan'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-warning">Edit</a>
                                    <a href="detail.php?id=<?= $data['id'] ?>" class="btn btn-info">Detail</a>
                                    <a href="delete.php?id=<?= $data['id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>