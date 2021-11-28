<?php
    $koneksi = new mysqli("localhost", "root", "", "wad_modul4");

    if(!$koneksi){
        die("koneksi gagal");
    }
?>