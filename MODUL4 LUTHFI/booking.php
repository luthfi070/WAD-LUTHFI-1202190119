<?php 
require('koneksi.php');
session_start();
$total = 0;
$no = 0;

if($_COOKIE['color'] == 'rgb(140, 182, 243)'){
    $font = 'black';
}else{
    $font = 'white';
}

$id = $_SESSION['user_id'];

$bookingQuery = "SELECT * FROM bookings where user_id = $id";

$executeQuery = mysqli_query($koneksi, $bookingQuery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
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
            <a href="login.php?gagal=0">Login</a>
          </span>
          ';
        }
        ?>
    </nav>
    <?php 
    if(isset($_GET['sukses'])){
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ';
    };
    ?>
    <div class="container mt-5" style="background-color: white">
        <br/>
        <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Tempat</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Tanggal Perjalanan</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($getBooking = mysqli_fetch_array($executeQuery)){
            $no = $no + 1;
            $total = $total + $getBooking['harga'][0];
            echo '
            <tr>
                <th>'.$no.'</th>
                <td>'.$getBooking['nama_tempat'].'</td>
                <td>'.$getBooking['lokasi'].'</td>
                <td>'.$getBooking['tanggal'].'</td>
                <td>'.'Rp.'.$getBooking['harga'][0].'.000.000'.'</td>
                <td><a href="delete.php?id='.$getBooking['id'].'" class="btn btn-danger" style="color: white;">Hapus</a></td>
            </tr>';
            }
            echo '
            <tr>
               <th colspan="4">Total</th>
               <th colspan="2">'.'Rp.'.$total.'.000.000'.'</th>
            </tr>
            ';
            ?>
        </tbody>
        </table>
        <br />
    </div>
    <div class="footer-reg fixed-bottom" style="margin-top: 101px; background-color: <?= $_COOKIE['color'] ?>; color: <?= $font ?>;">
      <p class="d-flex justify-content-center align-content-center pt-3">
        &copy;2021 Copyright : &nbsp;<a class="mr-5" href="#footer" data-toggle="modal" data-target="#footer">Luthfi_1202190119</a>
      </p>
    </div>
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
</body>
</html>