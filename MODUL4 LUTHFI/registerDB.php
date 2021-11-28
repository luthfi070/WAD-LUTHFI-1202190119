<?php 
require('koneksi.php');

$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$sandi = $_POST['sandi1'];

$registerQuery = "INSERT INTO users (nama, email, password, no_hp) VALUES ('$nama', '$email', '$sandi', '$nohp')";

$executeQuery = mysqli_query($koneksi, $registerQuery);

if($executeQuery){
    header("location:login.php?regist=1");
}else{
    die(mysqli_error($koneksi));
}
?>
