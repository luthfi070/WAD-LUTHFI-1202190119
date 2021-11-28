<?php 
require('koneksi.php');
session_start();

$id = $_GET['id'];
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$sandi = $_POST['sandi1'];
$warna = $_POST['color'];

$queryUpdate = "UPDATE users SET nama = '$nama', password = '$sandi', no_hp = '$hp' WHERE id = '$id'";

$executeQuery = mysqli_query($koneksi, $queryUpdate);

if($executeQuery){
    $_SESSION['nama'] = $nama;
    setcookie('color', $warna);

    if(isset($_COOKIE['pass'])){
        setcookie('pass', $sandi);
    }

    header("location: profile.php?id=$id&sukses=1");
}else{
    die(mysqli_error($koneksi));
}
?>