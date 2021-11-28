<?php 
require('koneksi.php');
session_start();

$id = $_GET['id'];

$queryDelete = "DELETE FROM bookings WHERE id = $id";

$executeQuery = mysqli_query($koneksi, $queryDelete);

if($executeQuery){
    header("location:booking.php?sukses=1");
}else{
    die(mysqli_error($koneksi));
}
?>