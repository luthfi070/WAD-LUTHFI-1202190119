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
    <ul
      class="nav justify-content-center navbar-dark bg-dark"
      style="margin-bottom: 25px"
    >
      <li class="nav-item">
        <a class="nav-link" style="color: gray" href="./home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: gray" href="../Booking/booking.php"
          >Booking</a
        >
      </li>
    </ul>
    <center>
      <h3>WELCOME TO ESD VENUE REGISTRATION</h3>
    </center>
    <div class="container mt-4" style="background-color: black; height: 50px">
      <h5 class="d-flex justify-content-center text-white p-2">
        Find your best deal for your event, here!
      </h5>
    </div>
    <div class="container mt-5">
      <form action="../Booking/booking.php" method="POST">
      <div class="row">
        <div class="col">
          <div class="card" style="width: 25rem">
            <img
              class="card-img-top"
              src="../media/NusantaraHall.png"
              alt="Card image cap"
              height="250px"
              width="50px"
            />
            <div class="card-body">
              <h5 class="card-title">Nusantara Hall</h5>
              <p class="card-text">$2000 / Hour</p>
              <p class="card-text" style="margin-top: -15px">5000 Capacity</p>
            </div>
            <ul class="list-group list-group-flush" style="font-weight: bold">
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-center
                  text-success
                "
              >
                Free Parking
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-center
                  text-success
                "
              >
                Full AC
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-center
                  text-success
                "
              >
                Cleaning Service
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-center
                  text-success
                "
              >
                Covid-19 Health Protocol
              </li>
            </ul>
            <div class="d-flex justify-content-center card-footer text-muted">
              <button type="submit" value="Nusantara Hall" name="img" id="img" class="btn btn-primary">Books Now</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 25rem">
            <img
              class="card-img-top"
              src="../media/GarudaHall.png"
              alt="Card image cap"
              height="250px"
              width="50px"
            />
            <div class="card-body">
              <h5 class="card-title">Garuda Hall</h5>
              <p class="card-text">$1000 / Hour</p>
              <p class="card-text" style="margin-top: -15px">2000 Capacity</p>
            </div>
            <ul class="list-group list-group-flush" style="font-weight: bold">
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-center
                  text-success
                "
              >
                Free Parking
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-center
                  text-success
                "
              >
                Full AC
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-center
                  text-danger
                "
              >
                No Cleaning Service
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-center
                  text-success
                "
              >
                Covid-19 Health Protocol
              </li>
            </ul>
            <div class="d-flex justify-content-center card-footer text-muted">
              <button type="submit" value="Garuda Hall" name="img" id="img" class="btn btn-primary">Books Now</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 25rem">
            <img
              class="card-img-top"
              src="../media/GedungSerbaGuna.png"
              alt="Card image cap"
              height="250px"
              width="50px"
            />
            <div class="card-body">
              <h5 class="card-title">Gedung Serba Guna</h5>
              <p class="card-text">$500 / Hour</p>
              <p class="card-text" style="margin-top: -15px">500 Capacity</p>
            </div>
            <ul class="list-group list-group-flush" style="font-weight: bold">
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-center
                  text-danger
                "
              >
                No Free Parking
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-center
                  text-danger
                "
              >
                No Full AC
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-center
                  text-danger
                "
              >
                No Cleaning Service
              </li>
              <li
                class="
                  list-group-item
                  d-flex
                  justify-content-center
                  text-success
                "
              >
                Covid-19 Health Protocol
              </li>
            </ul>
            <div class="d-flex justify-content-center card-footer text-muted">
              <button type="submit" value="Gedung Serba Guna" name="img" id="img" class="btn btn-primary">Books Now</button>
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>
    <div class="footer d-flex justify-content-center" style="margin-top: 109px">
      luthfi_1202190119
    </div>
  </body>
</html>
