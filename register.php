<?php
include 'php/proses.php';
$proses = new Proses();
$proses->register();

if (isset($_POST['register'])) {
    if ($_POST['username'] == "" || $_POST['password'] == "" || $_POST['nama'] == "") {
        echo "<script>alert('Data Tidak Boleh Kosong!')</script>";
        echo "<script>window.location.href = 'register.php'</script>";
        exit();
    } else {
        $proses->register();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: linear-gradient(to right, #0cebeb, #20e3b2, #29ffc6);
        }
    </style>
</head>

<body>
    <div class="container p-5">
        <div class="login form-group d-flex justify-content-center mt-5 mb-5 align-items-center container p-5 bg-light
        rounded shadow text-center col-4">
            <form action="" method="POST">
                <div class="row mb-3 d-flex justify-content-center align-items-center">
                <input type="text" name="nama" placeholder="Nama" class="form-control">
                </div>
                <div class="row mb-3 d-flex justify-content-center align-items-center">
                    <input type="text" name="username" placeholder="Username" class="form-control">
                </div>
                <div class="row mb-3 d-flex justify-content-center align-items-center">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <div class="align-items-center d-flex justify-content-center">
                    <input type="submit" name="register" value="Register" class="btn btn-primary">
                </div>
            </form>
        </div>
        <div class="text-center">
            <p>Sudah punya akun?</p>
            <a href="login.php">Login</a>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>