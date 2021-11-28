<?php 
require('koneksi.php');

if($_COOKIE['color'] == 'rgb(140, 182, 243)'){
  $font = 'black';
}else{
  $font = 'white';
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <style>
      .form-ct {
        width: 100%;
        height: 830px;
        background-color: rgb(254, 247, 229);
        border: 1 solid black;
      }

      .form-body {
        background-color: white;
        width: 25%;
      }

      .footer-reg {
        height: 51px;
        background-color: rgb(140, 182, 243);
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-color" style="background-color: <?= $_COOKIE['color'] ?>; color: <?= $font ?>;">
      <span class="navbar-brand mb-0 h1">EAD Travel</span>
      <span class="navbar-text">
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
      </span>
    </nav>
    <div class="form-ct">
      <br />
      <br />
      <div class="container form-body">
        <center>
          <br />
          <h5>Register</h5>
          <hr />
        </center>
        <form action="registerDB.php" method="POST">
          <div class="mb-2">
            <label for="nama" class="form-label">Nama</label>
            <input
              type="text"
              class="form-control"
              id="nama"
              name="nama"
              placeholder="Masukkan Nama Lengkap"
            />
          </div>
          <div class="mb-2">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              placeholder="Masukkan Alamat E-Mail"
            />
          </div>
          <div class="mb-2">
            <label for="nohp" class="form-label">Nomer Handphone</label>
            <input
              type="number"
              class="form-control"
              id="nohp"
              name="nohp"
              placeholder="Masukkan Nomor Handphone"
            />
          </div>
          <div class="mb-2">
            <label for="sandi1" class="form-label">Kata Sandi</label>
            <input
              type="password"
              class="form-control"
              id="sandi1"
              name="sandi1"
              placeholder="Masukkan Sandi"
            />
          </div>
          <div class="mb-2">
            <label for="sandi2" class="form-label">Konfirmasi Kata Sandi</label>
            <input
              type="password"
              class="form-control"
              id="sandi2"
              name="sandi2"
              placeholder="Konfirmasi Kata Sandi Anda"
            />
          </div>
          <div class="mt-3 mb-3 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary w-25">Daftar</button>
          </div>
          <center>
            <p>
              Anda sudah punya akun?
              <span><a class="mb-3" href="login.php">Login</a></span>
            </p>
            <br />
          </center>
        </form>
      </div>
    </div>
    <div class="footer-reg fixed-bottom" style="margin-top: 101px; background-color: <?= $_COOKIE['color'] ?>; color: <?= $font ?>;">
      <p class="d-flex justify-content-center align-content-center pt-3">
        &copy;2021 Copyright: Luthfi_1202190119
      </p>
    </div>
  </body>
</html>
