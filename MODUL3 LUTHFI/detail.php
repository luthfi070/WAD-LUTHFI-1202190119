<?php 
require './koneksi.php';

$id = $_GET['id'];

$detailQuery = "SELECT * FROM buku_table WHERE id_buku = $id";

$resultDetail = mysqli_query($koneksi, $detailQuery);
$resultEdit = mysqli_query($koneksi, $detailQuery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
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
<div class="container shadow p-3 mb-5 bg-white rounded mt-5 w-50">
    <center>
        <p class="h4 mt-3"><strong>Perpustakaan EAD</strong></p>
        <?php 
            while($getDetail = mysqli_fetch_array($resultDetail)){
                echo "
                <img class='mt-4' src=".$getDetail['gambar'].">
                </center>
                <div class='mt-5'>
                    <hr style='color: blue; height: 3px;'>
                    <p><strong>Judul :</strong></p>
                    <p>".$getDetail['judul_buku']."</p>
                    <p><strong>Penulis :</strong></p>
                    <p>".$getDetail['penulis_buku']."</p>
                    <p><strong>Tahun Terbit :</strong></p>
                    <p>".$getDetail['tahun_terbit']."</p>
                    <p><strong>Deskripsi :</strong></p>
                    <p>".$getDetail['deskripsi']."</p>
                    <p><strong>Bahasa :</strong></p>
                    <p>".$getDetail['bahasa']."</p>
                    <p><strong>Tag :</strong></p>
                    <p>".$getDetail['tag']."</p>
                </div>
                <div class='d-flex flex-row mt-2 mb-3'>
                    <button type='button' class='btn btn-primary w-50' data-toggle='modal' data-target='#edit' style='margin-right: 5px;'>Sunting</button>
                    <a href='hapusBuku.php?id=".$getDetail['id_buku']."' class='btn btn-danger w-50'>Hapus</a>
                </div>
                ";
            }
        ?>
</div>
<div class="w-100" style="background-color: rgb(248, 249, 250); height: 400px;">
      <center>
        <div style="padding-top: 100px;">
          <img class="mb-3" height="100" width="200" src="./media/logo-ead.png" alt='Card image cap' >
          <p class="h4"><strong>Perpustakaan EAD</strong></p>
          <p>&copy; Luthfi_1202190119</p>
        </div>
      </center>
</div>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="mt-3">
        <form action="editBuku.php" method="POST" enctype="multipart/form-data">
            <?php 
            while($getEdit = mysqli_fetch_array($resultEdit)){
            ?>
            <div class="form-group">
                <label for="judul"><p><strong>Judul Buku</strong></p></label>
                <input class="form-control" style="margin-top: -10px;" type="text" id="judul" name="judul" value="<?php echo $getEdit['judul_buku']; ?>">
            </div>
            <div class="form-group">
                <label for="penulis"><p class="mt-3"><strong>Penulis</strong></p></label>
                <input class="form-control" style="margin-top: -10px;" type="text" id="penulis" name="penulis" value="Luthfi_1202190119" readonly>
            </div>
            <div class="form-group">
                <label for="tahun"><p class="mt-3"><strong>Tahun Terbit</strong></p></label>
                <input class="form-control" style="margin-top: -10px;" type="number" id="tahun" name="tahun" value="<?php echo $getEdit['tahun_terbit']; ?>">
            </div>
            <div class="form-group">
                <label for="desc"><p class="mt-3"><strong>Deskripsi</strong></p></label>
                <textarea class="form-control" style="margin-top: -10px;" name="desc" id="desc" cols="30" rows="5"><?php echo $getEdit['deskripsi']; ?></textarea>
            </div>
            <?php 
            if($getEdit['bahasa'] == 'Indonesia'){
            ?>
            <label style="margin-right: 15px;" for="bahasa"><p class="mt-3"><strong>Bahasa</strong></p></label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="Indonesia" checked>
                <label class="form-check-label" for="bahasa">
                    Indonesia
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="Lainnya">
                <label class="form-check-label" for="other">
                    Lainnya
                </label>
            </div>
            <?php }else{ ?>
                <label style="margin-right: 15px;" for="bahasa"><p class="mt-3"><strong>Bahasa</strong></p></label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="Indonesia">
                <label class="form-check-label" for="bahasa">
                    Indonesia
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="Lainnya" checked>
                <label class="form-check-label" for="other">
                    Lainnya
                </label>
            </div>
            <?php } ?>
            <br>
            <?php 
                $tag = explode(',', $getEdit['tag']);
            ?>
            <label style="margin-right: 15px;" for="tag1"><p class="mt-3"><strong>Tag</strong></p></label>
            <input type="text" name="id" value="<?php echo $getEdit['id_buku'];?>" hidden readonly>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag1" name="tag[]" value="Pemrograman" <?php if(in_array("Pemrograman", $tag)) echo "checked";?>>
                <label class="form-check-label" for="tag1">Pemrograman</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag2" name="tag[]" value="Website" <?php if(in_array("Website", $tag)) echo "checked";?>>
                <label class="form-check-label" for="tag2">Website</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag3" name="tag[]" value="Java" <?php if(in_array("Java", $tag)) echo "checked";?>>
                <label class="form-check-label" for="tag3">Java</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag4" name="tag[]" value="OOP" <?php if(in_array("OOP", $tag)) echo "checked";?>>
                <label class="form-check-label" for="tag4">OOP</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag5" name="tag[]" value="MVC" <?php if(in_array("MVC", $tag)) echo "checked";?>>
                <label class="form-check-label" for="tag5">MVC</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag6" name="tag[]" value="Kalkulus" <?php if(in_array("Kalkulus", $tag)) echo "checked";?>>
                <label class="form-check-label" for="tag6">Kalkulus</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag7" name="tag[]" value="Lainnya" <?php if(in_array("Lainnya", $tag)) echo "checked";?>>
                <label class="form-check-label" for="tag7">Lainnya</label>
            </div>
            <div class="form-group">
                <label for="gambar"><p class="mt-3"><strong>Gambar</strong></p></label>
                <p class="h6">Tekan tombol choose file jika ingin mengubah gambar ( dibawah adalah gambar saat ini )</p>
                <input type="file" class="form-control mb-3" name="gambar" id="gambar" files="./media/kalkulus.jpg">
                <img src="<?php echo $getEdit['gambar']; ?>" alt="gambar" height="100" width="100">
            </div>
            <?php } ?>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>