<?php 
require './koneksi.php';

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun = $_POST['tahun'];
$deskripsi = $_POST['desc'];
$bahasa = $_POST['bahasa'];
$tag = implode(",", $_POST['tag']);

$fileName = $_FILES['gambar']['name'];
$fileSize = $_FILES['gambar']['size'];

$fileQuery = './upload/'.$fileName;

echo $fileQuery;
if($fileName){
    move_uploaded_file($_FILES['gambar']['tmp_name'], 'upload/'.$fileName);
    $insertQuery = "INSERT INTO buku_table (judul_buku, penulis_buku, tahun_terbit, deskripsi, gambar, tag, bahasa) VALUES ('$judul','$penulis', '$tahun', '$deskripsi', '$fileQuery', '$tag', '$bahasa')";
    $resultInsert = mysqli_query($koneksi, $insertQuery);

    if($resultInsert){
        header("location:home.php");
    }else{
        die(mysqli_error($koneksi));
    }
}
?>