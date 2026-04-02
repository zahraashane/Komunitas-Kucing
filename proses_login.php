<?php
session_start();
include 'koneksi.php';

$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$umur = $_POST['umur'];
$jk = $_POST['jk'];
$hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : "";
$asal = $_POST['asal'];
$alasan = $_POST['alasan'];
$query = "SELECT * FROM akun WHERE nama='$nama'";

$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0){
    $user = mysqli_fetch_assoc($result);

    mysqli_query($koneksi, "INSERT INTO pendaftaran 
    VALUES ('','$nama','$ttl','$umur','$jk','$hobi','$asal','$alasan')");

    $_SESSION['user_nama'] = $user['nama'];
    $_SESSION['loged_in'] = true;
    header('Location: design.php');
    exit();
} else {
    $_SESSION['login_error'] = "Nama salah. Silahkan coba lagi!";
    header('Location: login.php');
    exit();
}

