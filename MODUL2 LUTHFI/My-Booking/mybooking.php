<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
        date_default_timezone_set("Asia/Jakarta");

        $services = array();
        $name = $_POST['name'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $building = $_POST['tipe'];
        $nomer = $_POST['nope'];
        $hours = $_POST['jam'];
        $buildingTotal = 0;
        $serviceTotal = 0;

        $new_time = strtotime($date.$time . "+".$hours."hours");

        if($_POST['check1']){
            array_push($services, $_POST['check1']);
            $serviceTotal = $serviceTotal + 700;
        }

        if($_POST['check2']){
            array_push($services, $_POST['check2']);
            $serviceTotal = $serviceTotal + 450;
        }

        if($_POST['check3']){
            array_push($services, $_POST['check3']);
            $serviceTotal = $serviceTotal + 250;
        }

        if($building == 'Nusantara Hall'){
            $buildingTotal = 2000 * $hours;
        }else if($building == 'Garuda Hall'){
            $buildingTotal = 1000 * $hours;
        }else if($building == 'Gedung Serba Guna'){
            $buildingTotal = 500 * $hours;
        }

        $total = $buildingTotal + $serviceTotal;
    ?>
    <ul
      class="nav justify-content-center navbar-dark bg-dark"
      style="margin-bottom: 25px"
    >
      <li class="nav-item">
        <a class="nav-link" style="color: gray" href="../Home/home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: gray" href="../Booking/booking.php"
          >Booking</a
        >
      </li>
    </ul>
    <div class="container">
      <div>
        <h1 class="d-flex justify-content-center">
          Thank you <?php echo $name ?> for Reserving
        </h1>
        <h2 class="d-flex justify-content-center">
          Please Double Check your reservation details
        </h2>
      </div>
      <div>
        <table class="table mt-5">
          <thead>
            <tr>
              <th scope="col">Booking Number</th>
              <th scope="col">Name</th>
              <th scope="col">Check-in</th>
              <th scope="col">Check-out</th>
              <th scope="col">Building Type</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Service</th>
              <th scope="col">Total Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?php echo rand() ?></th>
              <td><?php echo $name ?></td>
              <td><?php echo date("d - m - Y", strtotime($date))." ".date("G:i:s", strtotime($time)) ?></td>
              <td><?php echo date('d-m-y H:i:s', $new_time)  ?></td>
              <td><?php echo $building ?></td>
              <td><?php echo $nomer ?></td>
              <td>
                  <?php 
                    for($i = 0; $i < count($services); $i++){
                        echo '<li>'.$services[$i].'</li>';
                    }
                  ?>
              </td>
              <td>
                  <?php 
                    echo '$'.$total;
                  ?>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="footer d-flex justify-content-center" style="margin-top: 590px;">
      luthfi_1202190119
    </div>
  </body>
</html>
