<?php 
require './koneksi.php';

$queryBuku = 'SELECT * FROM buku_table';

$resultBuku = mysqli_query($koneksi, $queryBuku);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
            src="./media/logo-ead.png"
            alt=""
            width="100"
            height="24"
            class="d-inline-block align-text-top"
          />
        </a>
        <a href="tambah.php" class="btn btn-primary">Tambah Buku</a>
      </div>
    </nav>

    <div class="container">
      <?php 
      if(mysqli_num_rows($resultBuku) == 0){
        echo "
        <div style='margin-top: 200px; margin-bottom: 75px;'>
        <center>
        <h1>Belum Ada Buku</h1>
        <hr style='color: blue; height: 5px;'>
        <h5>Silahkan Menambahkan Buku</h5>
        </center>
        </div>
        ";
      }else{
        echo "<div class='d-flex flex-row mt-5'>";
        while($getBuku = mysqli_fetch_array($resultBuku)){
          echo "
          <div class='card' style='width: 18rem; margin: 5px; margin-bottom: 15px;'>
            <img class='card-img-top' src=".$getBuku['gambar']." alt='Card image cap'>
            <div class='card-body'>
              <h5 class='card-title'>".$getBuku['judul_buku']."</h5>
              <p class='card-text'>".$getBuku['deskripsi']."</p>
              <a href='detail.php?id=".$getBuku['id_buku']."' class='btn btn-primary'>Tampilkan Lebih Lanjut</a>
            </div>
          </div>
          ";
        }
        echo "</div>";
      }
      ?>
    </div>
    <div class="container" style="background-color: rgb(248, 249, 250); height: 400px;">
      <center>
        <div style="padding-top: 100px;">
          <img class="mb-3" height="100" width="200" src="./media/logo-ead.png" alt='Card image cap' >
          <p class="h4"><strong>Perpustakaan EAD</strong></p>
          <p>&copy; Luthfi_1202190119</p>
        </div>
      </center>
    </div>
  </body>
</html>
