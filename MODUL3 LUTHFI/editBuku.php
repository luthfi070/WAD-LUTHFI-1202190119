<?php 
require './koneksi.php';

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun = $_POST['tahun'];
$deskripsi = $_POST['desc'];
$bahasa = $_POST['bahasa'];
$tag = implode(",", $_POST['tag']);

$queryEdit = '';

$fileName = $_FILES['gambar']['name'];

$fileQuery = './upload/'.$fileName;

$id = $_POST['id'];

if(!$fileName){
    $queryEdit = "UPDATE buku_table SET judul_buku = '$judul', penulis_buku = '$penulis', tahun_terbit = '$tahun', deskripsi = '$deskripsi', tag = '$tag', bahasa = '$bahasa' WHERE id_buku = '$id'";
}else{
    move_uploaded_file($_FILES['gambar']['tmp_name'], 'upload/'.$fileName);
    $queryEdit = "UPDATE buku_table SET judul_buku = '$judul', penulis_buku = '$penulis', tahun_terbit = '$tahun', deskripsi = '$deskripsi', gambar = '$fileQuery', tag = '$tag', bahasa = '$bahasa' WHERE id_buku = '$id'";
}

$resultEdit = mysqli_query($koneksi, $queryEdit);

if($resultEdit){
    header("location:home.php");
}else{
    die(mysqli_error($koneksi));
}
?>