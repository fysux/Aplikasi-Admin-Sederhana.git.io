<?php
session_start();

// Set waktu kedaluwarsa sesi dalam detik (misalnya 30 menit)
$session_timeout = 1800; // 1 menit

// Periksa apakah sesi sudah dimulai sebelumnya
if (isset($_SESSION['timeout'])) {
    // Periksa apakah sesi sudah kadaluwarsa
    $session_expiration = $_SESSION['timeout'] + $session_timeout;
    if (time() > $session_expiration) {
        // Sesi telah kadaluwarsa, hancurkan sesi dan arahkan pengguna ke halaman login
        session_unset();
        session_destroy();
        header("Location: login.php");
        exit();
    }
} else {
    // Sesi belum dimulai, atur waktu saat ini sebagai awal sesi
    $_SESSION['timeout'] = time();
}

// Set ulang waktu timeout untuk memperpanjang sesi
$_SESSION['timeout'] = time();
