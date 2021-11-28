<?php 
require('koneksi.php');

$email = $_POST['email'];
$sandi = $_POST['sandi1'];
$check = $_POST['rem'];

$cariQuery = "SELECT * FROM users WHERE email = '$email' and password = '$sandi'";

$executeCari = mysqli_query($koneksi, $cariQuery);

if($executeCari){
    $ketemu = mysqli_num_rows($executeCari);
    $data = mysqli_fetch_array($executeCari);

    $nama = $data['nama'];
    $id = $data['id'];

    if($ketemu > 0){
        if($check == 'checked'){
            setcookie('email', $email);
            setcookie('pass', $sandi);
        }

        if(!$_COOKIE['color']){
            setcookie('color', 'rgb(140, 182, 243)');
        }
        
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['nama'] = $nama;
        $_SESSION['email'] = $email;
        header("location: home.php?login=1");
    }else{
        header("location: login.php?gagal=1");
    }
}else{
    die(mysqli_error($koneksi));
}
?>