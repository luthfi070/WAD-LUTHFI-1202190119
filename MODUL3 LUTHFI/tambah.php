<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<div class="container shadow p-3 mb-5 bg-white rounded mt-5 w-50">
    <center>
        <p class="h3 mt-3"><strong>Tambah Data Buku</strong></p>
    </center>
    <div class="mt-3">
        <form action="tambahBuku.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul"><p><strong>Judul Buku</strong></p></label>
                <input class="form-control" style="margin-top: -10px;" type="text" id="judul" name="judul" placeholder="Contoh: Pemrograman Web Bersama EAD">
            </div>
            <div class="form-group">
                <label for="penulis"><p class="mt-3"><strong>Penulis</strong></p></label>
                <input class="form-control" style="margin-top: -10px;" type="text" id="penulis" name="penulis" value="Luthfi_1202190119" readonly>
            </div>
            <div class="form-group">
                <label for="tahun"><p class="mt-3"><strong>Tahun Terbit</strong></p></label>
                <input class="form-control" style="margin-top: -10px;" type="number" id="tahun" name="tahun" placeholder="Contoh: 1990">
            </div>
            <div class="form-group">
                <label for="desc"><p class="mt-3"><strong>Deskripsi</strong></p></label>
                <textarea class="form-control" style="margin-top: -10px;" name="desc" id="desc" cols="30" rows="5">Contoh: Buku ini menjelaskan tentang ...</textarea>
            </div>
            <label style="margin-right: 15px;" for="bahasa"><p class="mt-3"><strong>Bahasa</strong></p></label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="Indonesia">
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
            <br>
            <label style="margin-right: 15px;" for="tag1"><p class="mt-3"><strong>Tag</strong></p></label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag1" name="tag[]" value="Pemrograman">
                <label class="form-check-label" for="tag1">Pemrograman</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag2" name="tag[]" value="Website">
                <label class="form-check-label" for="tag2">Website</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag3" name="tag[]" value="Java">
                <label class="form-check-label" for="tag3">Java</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag4" name="tag[]" value="OOP">
                <label class="form-check-label" for="tag4">OOP</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag5" name="tag[]" value="MVC">
                <label class="form-check-label" for="tag5">MVC</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag6" name="tag[]" value="Kalkulus">
                <label class="form-check-label" for="tag6">Kalkulus</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag7" name="tag[]" value="Lainnya">
                <label class="form-check-label" for="tag7">Lainnya</label>
            </div>
            <div class="form-group">
                <label for="gambar"><p class="mt-3"><strong>Gambar</strong></p></label>
                <input type="file" class="form-control" name="gambar" id="gambar">
            </div>
            <center>
                <button class="btn btn-primary w-50 mt-3 mb-2" type="submit">+ TAMBAH</button>
            </center>
        </form>
    </div>
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
</body>
</html>