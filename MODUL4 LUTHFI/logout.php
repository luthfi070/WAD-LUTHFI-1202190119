<?php 
require('koneksi.php');
session_start();

session_unset();

session_destroy();

header("location: login.php?sukses=1");
?>