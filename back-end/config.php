<?php
$hostname = "localhost";
$username = "root";
$password = "";
$name_database = "fep";
$koneksi = new mysqli($hostname, $username, $password, $name_database);

// Mengganti kondisi pengecekan koneksi
if ($koneksi->connect_error) {
    echo "Gagal Koneksi: " . $koneksi->connect_error;
} else {
    echo "Berhasil konek";
}
