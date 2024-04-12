<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbname = 'new';
$dbpass = '';

$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>