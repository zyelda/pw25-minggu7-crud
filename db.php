<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pw25-minggu7";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
