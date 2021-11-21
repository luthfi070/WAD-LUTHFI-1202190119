<?php
    $koneksi = new mysqli("localhost", "root", "", "modul3");

    if(!$koneksi){
        die("koneksi gagal");
    }
?>