<?php


class Proses
{

    public function login()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }        
        require_once 'db_config.php';
        
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM user WHERE username = '$username'";
            $result = mysqli_query($koneksi, $sql);
        
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                if (password_verify($password, $row['password'])) {
                    $_SESSION['username'] = $username;
                    header("location: index.php");
                    exit(); // Penting: setelah header, pastikan untuk keluar dari skrip dengan exit()
                } else {
                    echo "<script>alert('Username atau Password Anda salah. Silahkan coba lagi!')</script>";
                    echo "<script>window.location.href = 'login.php'</script>";
                    exit(); // Pastikan untuk keluar dari skrip setelah redirect
                }
            } else {
                echo "<script>alert('Username atau Password Anda salah. Silahkan coba lagi!')</script>";
                echo "<script>window.location.href = 'login.php'</script>";
                exit(); // Pastikan untuk keluar dari skrip setelah redirect
            }
        }
    }
    
    public function register()
    {
        require_once 'db_config.php';
        if (isset($_POST['register'])) {
            
            $username = $_POST['username'];
            $check = "SELECT * FROM user WHERE username = '$username'";
            if (mysqli_num_rows(mysqli_query($koneksi, $check))) {
                echo "<script>alert('Username sudah ada. Silahkan coba lagi!')</script>";
                echo "<script>window.location.href = 'register.php'</script>";
                exit();
            }
            $password = $_POST['password'];
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $nama = $_POST['nama'];
            $sql = "INSERT INTO user (nama, username, password) VALUES ('$nama','$username', '$password_hash')";
            $result = mysqli_query($koneksi, $sql);
            if ($result) {
                echo "<script>alert('Anda Berhasil Registrasi!')</script>";
                echo "<script>window.location.href = 'login.php'</script>";
                exit();
            } else {
                echo "<script>alert('Username atau Password Anda salah. Silahkan coba lagi!')</script>";
                echo "<script>window.location.href = 'register.php'</script>";
                exit();
            }
        }
    }

    public function create_member(){

        require_once 'db_config.php';
        if (isset($_POST['create'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $no_telp = $_POST['no_telp'];
            $nik = $_POST['nik'];
            $pekerjaan = $_POST['pekerjaan'];
            $sql = "INSERT INTO member (nama, email, no_tlp, nik, pekerjaan) VALUES ('$nama','$email', '$no_telp', '$nik', '$pekerjaan')";
            $result = mysqli_query($koneksi, $sql);
            if ($result) {
                echo "<script>alert('Data Berhasil Ditambah!')</script>";
                echo "<script>window.location.href = 'index.php'</script>";
                exit();
            } else {
                echo "<script>alert('Data Belum Lengkap!')</script>";
                echo "<script>window.location.href = 'create.php'</script>";
                exit();
            }
        }
    }

    public function tampil_data(){
        require_once 'db_config.php';

        $show = "SELECT * FROM member";

        $result = mysqli_query($koneksi, $show);

        return $result;
    }

    public function delete_member(){
        require_once 'db_config.php';
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
    }
}
