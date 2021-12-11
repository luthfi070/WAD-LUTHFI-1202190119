<?php 
echo "halo";
require('koneksi.php');
session_start();

if(!isset($_SESSION['id'])){
    header("location: home.php?gagal=1");
}

$userID = $_SESSION['id'];
$namaTempat = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$harga = $_POST['harga'];
$tanggal = $_POST['tanggal'];

echo $userID;
$queryBook = "INSERT INTO bookings (user_id, nama_tempat, lokasi, harga, tanggal) VALUES ('$userID', '$namaTempat', '$lokasi', '$harga', '$tanggal')";

$executeQuery = mysqli_query($koneksi, $queryBook);

if($executeQuery){
    header("location: home.php?sukses=1");
}else{
    die(mysqli_error($koneksi));
}
?>