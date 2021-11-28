<?php 
require('koneksi.php');
session_start();

if($_COOKIE['color'] == 'rgb(140, 182, 243)'){
  $font = 'black';
}else{
  $font = 'white';
}

if(!isset($_COOKIE['color'])){
  setcookie('color', 'rgb(140, 182, 243)');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous"
  />
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"
  ></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
      body {
        background-color: rgb(254, 247, 229);
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
      <?php 
      if(isset($_SESSION['email'])){
        echo '
        <div class="dropdown" style="margin-right: 200px;">
          <a href="booking.php" class="btn btn-default">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
        </a>
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
          '.$_SESSION["nama"].'
        </button>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
          <li><a class="dropdown-item" href="profile.php?id='.$_SESSION['id'].'">Profile</a></li>
          <hr />
          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        </ul>
      </div>
      ';
      }else{
        echo '
        <span class="navbar-text">
          <a href="register.php">Register</a>
          <a href="login.php">Login</a>
        </span>
        ';
      }
      ?>
    </nav>
    <?php 
    if(isset($_GET['sukses'])){
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil memesan tiket
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ';
    }else if(isset($_GET['login'])){
      echo '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      Berhasil Login
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      ';
    }else if(isset($_GET['gagal'])){
      echo '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      Anda harus login terlebih dahulu
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      ';
    }
    ?>
    <div class="container mt-3">
      <div class="row mb-4">
        <div
          class="col"
          style="background-color: rgb(150, 197, 165); height: 150px"
        >
          <center>
            <br />
            <br />
            <h1>EAD Travel</h1>
          </center>
        </div>
      </div>
      <div class="row">
        <!-- Card 1 -->
        <div class="col">
          <div class="card-group">
            <div class="card">
              <img
                class="card-img-top"
                src="./media/ampat.jpg"
                alt="Card image cap"
                height="246"
              />
              <div class="card-body">
                <h5 class="card-title">Raja Ampat, Papua</h5>
                <p class="card-text">
                  Kepulauan Raja Ampat adalah kepulauan Indonesia di ujung barat
                  laut Semenanjung Kepala Burung di Papua Barat. Terdiri dari
                  ratusan pulau yang tertutup hutan, Raja Ampat dikenal dengan
                  pantai dan terumbu karangnya yang kaya dengan kehidupan laut.
                  Lukisan batu dan gua kuno berada di Pulai Misool, sedangkan
                  cendrawasih merah hdiup di Pulau Waigeo. Batanta dan Salawati
                  adalah pulau-pulau utama lainnya di nusantara.
                </p>
                <hr />
                <strong>Rp. 7.000.000</strong>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary w-100" data-toggle="modal" data-target="#pesan1">Pesan Tiket</button>
              </div>
            </div>
            <div class="card">
              <img
                class="card-img-top"
                src="./media/bromo.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">Gunung Bromo, Malang</h5>
                <p class="card-text" style="margin-bottom: 40px">
                  Gunung Bromo adalah gunung berapi somma aktif dan bagian dari
                  pegunungan Tengger, di Jawa Timur, Indonesia. Pada 2.329 meter
                  itu bukan puncak tertinggi dari massif, tetapi yang paling
                  terkenal. Kawasan ini merupakan salah satu destinasi wisata
                  yang paling banyak dikunjungi di Jawa Timur, dan gunung berapi
                  ini termasuk dalam Taman Nasional Bromo Tengger Semeru.
                </p>
                <hr />
                <strong>Rp. 2.000.000</strong>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary w-100" data-toggle="modal" data-target="#pesan2">Pesan Tiket</button>
              </div>
            </div>
            <div class="card">
              <img
                class="card-img-top"
                src="./media/lot.jpg"
                alt="Card image cap"
                height="246"
              />
              <div class="card-body">
                <h5 class="card-title">Tanah Lot, Bali</h5>
                <p class="card-text">
                  Tanah Lot adalah formasi batuan di lepas pantai pulau Bali,
                  Indonesia. Ini adalah rumah bagi kuil ziarah Hindu kuno Pura
                  Tanah Lot, ikon wisata dan budaya yang populer untuk
                  fotografi. Di sini ada dua pura yang terletak di atas batu
                  besar. Satu terletak di atas bongkahan batu dan satunya
                  terletak di atas tebing mirip dengan Pura Uluwatu. Pura Tanah
                  Lot ini merupakan bagian dari pura Dang Kahyangan.
                </p>
                <hr />
                <strong>Rp. 5.000.000</strong>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary w-100" data-toggle="modal" data-target="#pesan3">Pesan Tiket</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
    <div class="footer-reg" style="margin-top: 101px; background-color: <?= $_COOKIE['color'] ?>; color: <?= $font ?>;">
      <p class="d-flex justify-content-center align-content-center pt-3">
        &copy;2021 Copyright : &nbsp;<a class="mr-5" href="#footer" data-toggle="modal" data-target="#footer">Luthfi_1202190119</a>
      </p>
    </div>
    <!-- modal footer -->
    <div class="modal fade" id="footer" tabindex="-1" role="dialog" aria-labelledby="footer" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="footer">Created By</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Nama : Luthfi Fitra Musyaffa
            <br />
            Nim : 1202190119
          </div>
        </div>
      </div>
    </div>
    <!-- modal pesan 1-->
    <div class="modal fade" id="pesan1" tabindex="-1" role="dialog" aria-labelledby="pesan1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <form action="bookDB.php" method="POST">
              Tanggal Perjalanan
              <br />
              <input type="date" class="form-control" name="tanggal">
              <input type="hidden" value="Raja Ampat" name="nama" readonly>
              <input type="hidden" value="Papua" name="lokasi" readonly>
              <input type="hidden" value="7.000.000" name="harga" readonly>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambahkan</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- modal pesan 2 -->
    <div class="modal fade" id="pesan2" tabindex="-1" role="dialog" aria-labelledby="pesan2" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
          <div class="modal-body">
          <form action="bookDB.php" method="POST">
              Tanggal Perjalanan
              <br />
              <input type="date" class="form-control" name="tanggal">
              <input type="hidden" value="Gunung Bromo" name="nama" readonly>
              <input type="hidden" value="Malang" name="lokasi" readonly>
              <input type="hidden" value="2.000.000" name="harga" readonly>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambahkan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- modal pesan 3 -->
    <div class="modal fade" id="pesan3" tabindex="-1" role="dialog" aria-labelledby="pesan3" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
          <div class="modal-body">
          <form action="bookDB.php" method="POST">
              Tanggal Perjalanan
              <br />
              <input type="date" class="form-control" name="tanggal">
              <input type="hidden" value="Tanah Lot" name="nama" readonly>
              <input type="hidden" value="Bali" name="lokasi" readonly>
              <input type="hidden" value="5.000.000" name="harga" readonly>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambahkan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
