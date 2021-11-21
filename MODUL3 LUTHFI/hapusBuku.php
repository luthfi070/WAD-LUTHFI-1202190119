<?php 
require './koneksi.php';

$id = $_GET['id'];

$queryDelete = "DELETE FROM buku_table WHERE id_buku = $id";

$deleteResult = mysqli_query($koneksi, $queryDelete);

if($deleteResult){
    header("location:home.php");
}else{
    die(mysqli_error($koneksi));
}
?>