<?php
session_start();
include_once "../config.php";

$username = $_POST["username"];
$password = $_POST["password"];

// Menggunakan prepared statements untuk mencegah SQL injection
$stmt = $koneksi->prepare("SELECT * FROM admins WHERE username=? AND password=?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();
$data_fetch = $result->fetch_assoc();

if ($data_fetch) {
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["user_type"] = 'admin'; // asumsi bahwa semua pengguna yang berhasil login adalah admin
    header("location: ../../admin/admin-dashboard/index.php");
} else {
    header("location: ../../index.php");
}