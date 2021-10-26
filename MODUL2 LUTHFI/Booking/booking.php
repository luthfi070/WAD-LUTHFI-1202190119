<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <?php
      error_reporting(E_ALL ^ E_WARNING); 
      $name = $_POST['img'];
      $image = $_POST['img'] ? "../media/".str_replace(" ",'',$name).".png" : '../media/hotel1.jpg';
    ?>
    <ul
      class="nav justify-content-center navbar-dark bg-dark"
      style="margin-bottom: 25px"
    >
      <li class="nav-item">
        <a class="nav-link" style="color: gray" href="../Home/home.php"
          >Home</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: gray" href="../Booking/booking.php"
          >Booking</a
        >
      </li>
    </ul>
    <div class="container mt-4" style="background-color: black; height: 50px">
      <h5 class="d-flex justify-content-center text-white p-2">
        Reserve your venue now!
      </h5>
    </div>
    <div class="container border rounded mt-5">
      <div class="row">
        <div class="col" style="margin-top: 100px">
          <img src=<?php echo $image ?> />
        </div>
        <div class="col">
          <form action="../mybooking.php" method="POST">
            <div class="form-group">
              <label for="name">Nama</label>
              <input
                type="name"
                class="form-control"
                name="name"
                id="name"
                value="luthfi_1202190119"
                readonly
              />
            </div>
            <div class="form-group mt-3">
              <label for="date">Event Date</label>
              <input type="date" class="form-control" id="date" name="date" />
            </div>
            <div class="form-group mt-3">
              <label for="time">Start Time</label>
              <input type="time" class="form-control" id="time" name="time"/>
            </div>
            <div class="form-group mt-3">
              <label for="jam">Duration (Hours)</label>
              <input type="number" class="form-control" id="jam"/>
            </div>
            <div class="form-group mt-3">
              <label for="tipe">Building Type</label>
              <select class="form-control" id="tipe" name="tipe">
                <option value='<?php echo $name ?>' selected><?php echo $name ?></option>
                <option value='Nusantara Hall' >Nusantara Hall</option>
                <option value='Garuda Hall' >Garuda Hall</option>
                <option value='Gedung Serba Guna' >Gedung Serba Guna</option>
              </select>
            </div>
            <div class="form-group mt-3">
              <label for="nope">Phone Number</label>
              <input class="form-control" type="number" name="nope" id="nope" />
            </div>
            <div class="form-group mt-3">
              <label for="service">Add Service(s)</label>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="Catering"
                  id="check1"
                  name="check1"
                />
                <label class="form-check-label" for="flexCheckDefault">
                  Catering / $700
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="Decoration"
                  id="check2"
                  name="check2"
                />
                <label class="form-check-label" for="flexCheckDefault">
                  Decoration / $450
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="Sound System"
                  id="check3"
                  name="check3"
                />
                <label class="form-check-label" for="flexCheckDefault">
                  Sound System / $250
                </label>
              </div>
            </div>
            <div class="form-group mt-3 mb-5">
              <button class="btn-primary form-control" type="submit">
                Book
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="footer d-flex justify-content-center" style="margin-top: 62px">
      <p>luthfi_1202190119</p>
    </div>
  </body>
</html>
